<?php

namespace nitropackio\compatibility\model;

use \Action;
use NitroPack\SDK\PurgeType;
use nitropackio\compatibility\Model as NitropackModel;
use nitropackio\core\exception\Domain as DomainException;
use nitropackio\core\Nitropack;
use nitropackio\core\CacheExpires;
use nitropackio\core\Tag;
use nitropackio\hook\Init;

class Catalog extends NitropackModel {
    // No need to place them a language file, as they will be displayed in an english-only context.
    const REASON_MANUAL_PURGE_URL = "Manual purge of the link %s from the NitroPack.io Dashboard.";
    const REASON_MANUAL_PAGE_CACHE_ONLY_ALL = "Manual page cache clearing of all store pages from the NitroPack.io Dashboard.";

    public function setExpiresHeaderByProductId($product_id) {
        if (!$this->registry->has('nitropack_cache_expires')) {
            $this->registry->set('nitropack_cache_expires', new CacheExpires($this->registry));
        }

        // Identify the earliest special or discount date
        $subquery = "SELECT DISTINCT date_start, date_end FROM `" . DB_PREFIX . "product_special` WHERE product_id=" . (int)$product_id . " UNION SELECT date_start, date_end FROM `" . DB_PREFIX . "product_discount` WHERE product_id=" . (int)$product_id;

        $sql = "SELECT MIN(e.expires) as expires FROM (
            SELECT
                t.date_end as expires
            FROM
                (" . $subquery . ") AS t
            WHERE t.date_start < NOW() AND t.date_end > NOW()
            UNION SELECT
                t.date_start as expires
            FROM
                (" . $subquery . ") AS t
            WHERE t.date_start > NOW() AND (t.date_end = '0000-00-00' OR t.date_end > t.date_start)
        ) AS e;";

        $expires = $this->db->query($sql)->row['expires'];

        // Amend the global earliest expires date, if needed. Note that if the earliest expires date is in the past, we disregard it.
        if ($expires !== null) {
            $this->nitropack_cache_expires->amendExpiresIfNeeded(strtotime($expires), $product_id);
        }
    }

    public function tag($group, $entity) {
        Init::executeNitroPackIfActive(function($nitropack) use (&$group, &$entity) {
            if ($nitropack->sdk->isAllowedRequest(true)) {
                $nitropackTag = new Tag($group, $entity);

                $nitropack->pushTag($nitropackTag);
            }
        });
    }

    public function getProductStores($product_id) {
        $product_store_data = array();

        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_store WHERE product_id = '" . (int)$product_id . "'");

        foreach ($query->rows as $result) {
            $product_store_data[] = $result['store_id'];
        }

        return $product_store_data;
    }

    // Deprecated
    public function initRegistry() {
        Init::executeNitroPackIfActive(function($nitropack) {
            $nitropack->setRegistry($this->registry);
        });
    }

    public function enableBeacon() {
        Init::executeNitroPackIfActive(function($nitropack) {
            $nitropack->setUseBeacon(true);
        });
    }

    public function setCurrentUrl($url) {
        Init::executeNitroPackIfActive(function($nitropack) use ($url) {
            $nitropack->setCurrentUrl($url);
            $nitropack->reload();
        });
    }

    public function fetchConfig() {
        if ($this->verifyWebhookToken()) {
            Init::executeNitroPackIfActive(function($nitropack) {
                $nitropack->sdk->fetchConfig();
            });
        }
    }

    public function clearPageCache() {
        if ($this->verifyWebhookToken()) {
            Init::executeNitroPackIfActive(function($nitropack) {
                if (isset($this->request->post['url'])) {
                    $urls = is_array($this->request->post['url']) ? $this->request->post['url'] : array($this->request->post['url']);

                    foreach ($urls as $url) {
                        $nitropack->sdk->purgeLocalUrlCache(htmlspecialchars_decode($url, ENT_COMPAT));
                    }
                } else {
                    $nitropack->sdk->purgeLocalCache(true);
                }
            }, function($error_message) {
                Nitropack::header($this->request->server['SERVER_PROTOCOL'] . ' 500 Internal Server Error');
            });
        }
    }

    public function cacheReady() {
        if (isset($this->request->post['url']) && $this->verifyWebhookToken()) {
            Init::executeNitroPackIfActive(function($nitropack) {
                $nitropack->setCurrentUrl(htmlspecialchars_decode($this->request->post['url'], ENT_COMPAT));
                $nitropack->reload();

                // Fetch remote file
                $nitropack->sdk->hasRemoteCache('default', false);
            });
        }
    }

    public function getCacheWarmupLanguages() {
        $languages = array();

        Init::executeNitroPackIfActive(function($nitropack) use (&$languages) {
            foreach ($this->getLanguages() as $language_id => $language) {
                if (!in_array($language['code'], $nitropack->setting->get('excluded_warmup_languages', array()))) {
                    $languages[$language_id] = $language;
                }
            }
        });

        return $languages;
    }

    public function isRouteEnabled($route) {
        $status = false;

        Init::executeNitroPackIfActive(function($nitropack) use (&$route, &$status) {
            $status = (bool)$nitropack->isRouteIncluded($route);
        });

        return $status;
    }

    public function isCacheWarmupEnabled($route) {
        $status = false;

        Init::executeNitroPackIfActive(function($nitropack) use (&$route, &$status) {
            $status = in_array($route, $nitropack->setting->get("included_warmup_routes", array()));
        });

        return $status;
    }

    public function iterateCategories($store_id, $page, $callback) {
        $cache_key = 'category.nitropackio.' . (int)$store_id . '.' . (int)$page;

        $data = $this->cache->get($cache_key);

        if (!empty($data)) {
            return $callback($data);
        } else {
            $limit = 100;
            $result = $this->db->query("SELECT c.category_id FROM " . DB_PREFIX . "category_to_store c2s LEFT JOIN " . DB_PREFIX . "category c ON (c.category_id = c2s.category_id) WHERE c2s.store_id=" . (int)$store_id . " AND c.status=1 LIMIT " . ($page - 1) * $limit . "," . $limit);

            if ($result->num_rows > 0) {
                $url_results = array();

                foreach ($result->rows as $row) {
                    $paths = $this->categoryPaths(array(array((int)$row['category_id'])));

                    $url_results = array_merge($url_results, array_map(function($path) {
                        return array('path' => implode('_', $path));
                    }, $paths));
                }

                $this->cache->set($cache_key, $url_results);

                return $callback($url_results);
            }
        }

        return false;
    }

    private function getCategoryParents($category_id) {
        // Compatibility with category multi parent
        $category_parent_table_exists = $this->db->query("SHOW TABLES LIKE '" . DB_PREFIX . "category_parent'")->num_rows > 0;

        if ($category_parent_table_exists) {
            $sql = "SELECT DISTINCT parent_id FROM `" . DB_PREFIX . "category_parent` WHERE category_id=" . (int)$category_id . " AND parent_id > 0 UNION SELECT parent_id FROM `" . DB_PREFIX . "category` WHERE category_id=" . (int)$category_id . " AND parent_id > 0";
        } else {
            $sql = "SELECT parent_id FROM `" . DB_PREFIX . "category` WHERE category_id=" . (int)$category_id . " AND parent_id > 0";
        }

        return array_map(function($row) {
            return (int)$row['parent_id'];
        }, $this->db->query($sql)->rows);
    }

    private function categoryPaths($paths, $return_possibilities = false) {
        do {
            $new_paths = array();
            $added = false;

            foreach ($paths as $path) {
                $path_parents = $this->getCategoryParents(current($path));

                if (!empty($path_parents)) {
                    foreach ($path_parents as $parent_id) {
                        if (!in_array($parent_id, $path)) {
                            $new_paths[] = array_merge(array($parent_id), $path);
                            $added = true;
                        }
                    }
                } else {
                    $new_paths[] = $path;
                }
            }

            $paths = $new_paths;
        } while ($added);

        if ($return_possibilities) {
            $possibilities = array();

            foreach ($paths as $path) {
                while (!empty($path)) {
                    $possibilities[] = $path;
                    array_pop($path);
                }
            }

            return $this->uniqueSubArrays($possibilities);
        } else {
            return $this->uniqueSubArrays($paths);
        }
    }

    private function uniqueSubArrays($oldMasterArray) {
        $newMasterArray = array();

        foreach ($oldMasterArray as $subArray) {
            $newMasterArray[json_encode($subArray)] = $subArray;
        }

        return array_values($newMasterArray);
    }

    public function iterateInformations($store_id, $page, $callback) {
        $cache_key = 'information.nitropackio.' . (int)$store_id . '.' . (int)$page;

        $data = $this->cache->get($cache_key);

        if (!empty($data)) {
            return $callback($data);
        } else {
            $limit = 100;
            $result = $this->db->query("SELECT i.information_id FROM " . DB_PREFIX . "information_to_store i2s LEFT JOIN " . DB_PREFIX . "information i ON (i.information_id = i2s.information_id) WHERE i2s.store_id=" . (int)$store_id . " AND i.status=1 LIMIT " . ($page - 1) * $limit . "," . $limit);

            if ($result->num_rows > 0) {
                $this->cache->set($cache_key, $result->rows);

                return $callback($result->rows);
            }
        }

        return false;
    }

    public function iterateProducts($store_id, $page, $callback) {
        $product_categories_warmup = $this->isSettingEnabled('product_categories_warmup', (int)$this->config->get('config_store_id'));
        $cache_key = 'product.nitropackio.' . (int)$store_id . '.' . (int)$product_categories_warmup . '.' . (int)$page;

        $data = $this->cache->get($cache_key);

        if (!empty($data)) {
            return $callback($data);
        } else {
            $limit = 100;
            $result = $this->db->query("SELECT p.product_id FROM " . DB_PREFIX . "product_to_store p2s LEFT JOIN " . DB_PREFIX . "product p ON (p.product_id = p2s.product_id) WHERE p2s.store_id=" . (int)$store_id . " AND p.status=1 AND p.date_available <= NOW() LIMIT " . ($page - 1) * $limit . "," . $limit);

            if ($result->num_rows > 0) {
                $product_rows = $result->rows;

                if ($product_categories_warmup) {
                    foreach ($result->rows as $row) {
                        $sql = "SELECT DISTINCT p2c.category_id FROM `" . DB_PREFIX . "product_to_category` p2c LEFT JOIN `" . DB_PREFIX . "category_to_store` c2s ON (c2s.category_id=p2c.category_id) LEFT JOIN `" . DB_PREFIX . "category` c ON (c.category_id = c2s.category_id) WHERE c.status=1 AND p2c.product_id=" . (int)$row['product_id'] . " AND c2s.store_id=" . (int)$store_id . "";

                        $categories_result = $this->db->query($sql);

                        if ($categories_result->num_rows > 0) {
                            $category_paths = array_map(function($category_row) {
                                return array((int)$category_row['category_id']);
                            }, $categories_result->rows);

                            foreach ($this->categoryPaths($category_paths, true) as $path) {
                                $product_rows[] = array(
                                    'path' => implode('_', $path),
                                    'product_id' => (int)$row['product_id']
                                );
                            }
                        }
                    }
                }

                $this->cache->set($cache_key, $product_rows);

                return $callback($product_rows);
            }
        }

        return false;
    }

    public function iterateManufacturers($store_id, $page, $callback) {
        $cache_key = 'manufacturer.nitropackio.' . (int)$store_id . '.' . (int)$page;

        $data = $this->cache->get($cache_key);

        if (!empty($data)) {
            return $callback($data);
        } else {
            $limit = 100;
            $result = $this->db->query("SELECT m.manufacturer_id FROM " . DB_PREFIX . "manufacturer_to_store m2s LEFT JOIN " . DB_PREFIX . "manufacturer m ON (m.manufacturer_id = m2s.manufacturer_id) WHERE m2s.store_id=" . (int)$store_id . " LIMIT " . ($page - 1) * $limit . "," . $limit);

            if ($result->num_rows > 0) {
                $this->cache->set($cache_key, $result->rows);

                return $callback($result->rows);
            }
        }

        return false;
    }

    public function cartPlaceholder($cart_url) {
        $html = null;

        Init::executeNitroPack(function($nitropack) use (&$html, &$cart_url) {
            $html = $nitropack->getHtml('cart_placeholder', array(
                'isPageCacheable' => $nitropack->isPageCacheable() ? 'true' : 'false'
            ));
        });

        return $html;
    }

    // Deprecated
    public function getRouteLayout($route) {
        $all_layouts = $this->db->query("SELECT TRIM(lr.route) as route, TRIM(l.name) as name FROM `" . DB_PREFIX . "layout_route` lr LEFT JOIN `" . DB_PREFIX . "layout` l ON (l.layout_id = lr.layout_id) WHERE lr.store_id=" . (int)$this->config->get('config_store_id'))->rows;

        // Stage 1 - find exact matches in layout_route
        foreach ($all_layouts as $layout) {
            if (stripos($layout['route'], '%') === false && $layout['route'] === $route) {
                return $layout['name'];
            }
        }

        // Stage 2 - in case no exact matches are found, compare with all partial routes (e.g. checkout/%) in layout_route
        foreach ($all_layouts as $layout) {
            if (stripos($layout['route'], '%') !== false && preg_match('~' . str_replace('%', '.*', $layout['route']) . '~', $route)) {
                return $layout['name'];
            }
        }

        // Stage 3 - if nothing is yet found, use the name of the route with the blank name
        foreach ($all_layouts as $layout) {
            if ($layout['route'] === '') {
                return $layout['name'];
            }
        }

        // Stage 4 - If no route is found, just return the default value
        return 'Default';
    }

    private function verifyWebhookToken() {
        $status = false;

        Init::executeNitroPackIfActive(function($nitropack) use (&$status) {
            $getTokenExists = isset($this->request->get['token']);
            $configTokenExists = $nitropack->setting->has('webhook_token');

            $status = $getTokenExists && $configTokenExists && $this->hashEquals($this->request->get['token'], $nitropack->setting->get('webhook_token'));
        });

        return $status;
    }

    private function hashEquals($known_string, $user_string) {
        $known_string = (string)$known_string;
        $user_string = (string)$user_string;

        if(strlen($known_string) != strlen($user_string)) {
            return false;
        } else {
            $res = $known_string ^ $user_string;
            $ret = 0;

            for($i = strlen($res) - 1; $i >= 0; $i--) $ret |= ord($res[$i]);

            return !$ret;
        }
    }
}
