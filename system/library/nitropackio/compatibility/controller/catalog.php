<?php

namespace nitropackio\compatibility\controller;

use nitropackio\compatibility\Controller as NitropackController;
use nitropackio\core\Nitropack;
use nitropackio\core\ProductHistory;
use nitropackio\core\Tag;
use nitropackio\hook\Init;

class Catalog extends NitropackController {
    private $enabledLanguages = array();

    public function __construct($registry) {
        parent::__construct($registry);

        $this->load->model($this->ext->route->module->nitropack);

        $this->loaded->model->module_nitropack = $this->{$this->ext->model->module->nitropack};

        $this->enabledLanguages = $this->loaded->model->module_nitropack->getCacheWarmupLanguages();
    }

    public function postSeoUrl() {
        if (null !== $route = $this->getRequestRouteBase()) {
            Init::executeNitroPackIfConnected(function($nitropack) use ($route) {
                // Set the OpenCart registry
                $nitropack->setRegistry($this->registry);

                // Set the route
                $nitropack->setRoute($route);

                // Only if NitroPack is enabled, activate tags and do cache requsts.
                if ($nitropack->setting->get('status', false)) {
                    // Set the route tag
                    if ($nitropack->sdk->isAllowedRequest(true)) {
                        $nitropackTag = new Tag('route', $route);

                        $nitropack->pushTag($nitropackTag);
                    }

                    // Check if the page is cacheable
                    if ($nitropack->isPageCacheable()) {
                        // Enable the beacon which will be placed in the output buffer
                        $nitropack->setUseBeacon(true);
                        $nitropack->outputBeaconCookie(0);

                        // Disable standard OpenCart compression. This is required for the beacon/tracking search and replace to commence
                        $this->config->set('config_compression', 0);
                        $this->response->setCompression(0);
                        
                        if ($nitropack->isServiceRequest()) {
                            // Fetch remote file
                            $nitropack->sdk->hasRemoteCache('default', false);

                            if ($nitropack->isWarmupRequest()) {
                                // We are not interested in the warmup requests
                                exit;
                            }

                            // Output stale (invalidated) cache, if it exists
                            $nitropack->serveLocalCache(true, "CONTROLLER");
                        }
                    } else {
                        Nitropack::header("X-Nitro-Disabled: 1");
                    }
                } else {
                    Nitropack::header("X-Nitro-Disabled: 1");
                }
            });
        }
    }

    public function tracking() {
        if (isset($this->request->post['tracking'])) {
            $tracking = htmlspecialchars_decode($this->request->post['tracking'], ENT_QUOTES);

            if (!headers_sent()) {
                setcookie('tracking', $tracking, time() + 3600 * 24 * 1000, '/');

                if (version_compare(NITROPACK_OPENCART_VERSION, '2', '>=')) {
                    $this->db->query("UPDATE `" . DB_PREFIX . "marketing` SET clicks = (clicks + 1) WHERE code = '" . $this->db->escape($tracking) . "'");
                }
            }
        }
    }

    public function webhook_config() {
        $this->loaded->model->module_nitropack->fetchConfig();
    }

    public function webhook_cache_clear() {
        $this->loaded->model->module_nitropack->clearPageCache();
    }

    public function webhook_cache_ready() {
        $this->loaded->model->module_nitropack->cacheReady();
    }

    public function sitemap() {
        ini_set("max_execution_time", 300);
        ini_set("memory_limit", "512M");

        $ssl = !!$this->config->get('config_secure');

        Nitropack::header("Content-Type: application/xml");
        Nitropack::header("Cache-Control: no-cache");

        echo '<?xml version="1.0" encoding="UTF-8"?>';
        echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Provide a sitemap only in case NitroPack is enabled
        if ($this->loaded->model->module_nitropack->isSettingEnabled('status', (int)$this->config->get('config_store_id'))) {

            // Home
            if ($this->loaded->model->module_nitropack->isCacheWarmupEnabled('common/home') && $this->loaded->model->module_nitropack->isRouteEnabled('common/home')) {
                $home = $this->getHomeRoute();
                $usedHomeRoutes = array();

                if ($ssl) {
                    $base = $this->config->get('config_ssl');
                } else {
                    $base = $this->config->get('config_url');
                }

                echo $this->outputSitemapUrl($base);
                $usedHomeRoutes[] = $base;

                $manualHomeRoute = $base . 'index.php?route=' . $home;

                echo $this->outputSitemapUrl($manualHomeRoute);
                $usedHomeRoutes[] = $manualHomeRoute;

                $seoHomeRoute = $this->url->link($home, '', $ssl);

                if (!in_array($seoHomeRoute, $usedHomeRoutes)) {
                    echo $this->outputSitemapUrl($seoHomeRoute);
                    $usedHomeRoutes[] = $seoHomeRoute;
                }
            }

            // Categories
            if ($this->loaded->model->module_nitropack->isCacheWarmupEnabled('product/category') && $this->loaded->model->module_nitropack->isRouteEnabled('product/category')) {
                $this->iterateEntities('product/category', $ssl, array($this->loaded->model->module_nitropack, 'iterateCategories'));
            }

            // Informations
            if ($this->loaded->model->module_nitropack->isCacheWarmupEnabled('information/information') && $this->loaded->model->module_nitropack->isRouteEnabled('information/information')) {
                $this->iterateEntities('information/information', $ssl, array($this->loaded->model->module_nitropack, 'iterateInformations'));
            }

            // Products
            if ($this->loaded->model->module_nitropack->isCacheWarmupEnabled('product/product') && $this->loaded->model->module_nitropack->isRouteEnabled('product/product')) {
                $this->iterateEntities('product/product', $ssl, array($this->loaded->model->module_nitropack, 'iterateProducts'));
            }

            // Specials
            if ($this->loaded->model->module_nitropack->isCacheWarmupEnabled('product/special') && $this->loaded->model->module_nitropack->isRouteEnabled('product/special')) {
                echo $this->outputSitemapUrl($this->url->link('product/special', '', $ssl));
            }

            // Manufacturers
            if ($this->loaded->model->module_nitropack->isCacheWarmupEnabled('product/manufacturer') && $this->loaded->model->module_nitropack->isRouteEnabled('product/manufacturer')) {
                echo $this->outputSitemapUrl($this->url->link('product/manufacturer', '', $ssl));

                $this->iterateEntities('product/manufacturer/info', $ssl, array($this->loaded->model->module_nitropack, 'iterateManufacturers'));
            }
        }

        echo '</urlset>';

        exit;
    }

    private function iterateEntities($route, $ssl, $iterate_method) {
        $page = 1;

        do {
            $success = $iterate_method($this->config->get('config_store_id'), $page++, function($batch) use (&$route, &$ssl) {
                $route_parts = explode('/', $route);

                $cache_key = $route_parts[0] . '.nitropackio.' . $this->config->get('config_store_id') . '.' . (int)$ssl . '.' . md5(json_encode($batch) . json_encode($this->enabledLanguages));

                $xmlTags = $this->cache->get($cache_key);

                if (empty($xmlTags)) {
                    $xmlTags = '';

                    $all_language_urls = array();
                    $default_language = $this->config->get('config_language_id');

                    foreach ($batch as $entity) {
                        foreach ($this->enabledLanguages as $language) {
                            $this->config->set('config_language_id', $language['language_id']);

                            $all_language_urls[] = $this->url->link($route, http_build_query($entity), $ssl);
                        }
                    }

                    $all_language_urls = array_values(array_unique($all_language_urls));

                    foreach ($all_language_urls as $language_url) {
                        $xmlTags .= $this->outputSitemapUrl($language_url);
                    }

                    $this->config->set('config_language_id', $default_language);

                    $this->cache->set($cache_key, $xmlTags);
                }

                echo $xmlTags;

                return true;
            });
        } while ($success);
    }

    private function outputSitemapUrl($url) {
        return '<url><loc>' . $url . '</loc></url>';
    }

    /* START EVENTS */

    public function cartPlaceholder($route = null, &$args = null, &$output = null) {
        $do_override = !isset($this->request->get['route']) || $this->request->get['route'] != 'common/cart/info';

        if ($do_override && $this->loaded->model->module_nitropack->isSettingEnabled('allow_cart', $this->config->get('config_store_id')) && $this->loaded->model->module_nitropack->isSettingEnabled('status', $this->config->get('config_store_id'))) {
            $url = $this->url->link('common/cart/info', '', $this->getUrlSsl());
            $matches = array();

            if (preg_match('~(.*<\/div>)(.*)~s', $output, $matches)) {
                $output = $matches[1] . $this->loaded->model->module_nitropack->cartPlaceholder($url) . $matches[2];
            } else {
                $output .= $this->loaded->model->module_nitropack->cartPlaceholder($url);
            }

            return $output;
        }

        return $output;
    }

    public function afterGetProduct($route = null, $args = null, $output = null) {
        if (version_compare(NITROPACK_OPENCART_VERSION, '2.3.0.0', '>=') || $this->loaded->model->module_nitropack->isSettingEnabled('is_using_d_event_manager', $this->config->get('config_store_id'))) {
            $product_id = $args[0];
        } else if (version_compare(NITROPACK_OPENCART_VERSION, '2.2.0.0', '>=')) {
            $product_id = !empty($args['product_id']) ? $args['product_id'] : 0;
        } else {
            $product_id = $route;
        }

        if (!empty($product_id) && is_numeric($product_id)) {
            $this->loaded->model->module_nitropack->setExpiresHeaderByProductId((int)$product_id);

            if (!$this->routeCompare($this->getHomeRoute())) {
                $this->loaded->model->module_nitropack->tag('product', (int)$product_id);

                // Only when we are on the product route, tag the product page with a product:quantity:<id> tag, so that we can clear the product pages for the special case when the quantity has been changed.
                if ($this->routeCompare('product/product') && isset($this->request->get['product_id']) && (int)$this->request->get['product_id'] == (int)$product_id) {
                    $this->loaded->model->module_nitropack->tag('product:quantity', (int)$product_id);
                }
            }
        }
    }

    // In OpenCart 2.1 and older, this method is not used because everything goes through afterGetProduct()
    public function afterGetProducts($route = null, $args = null, $output = null) {
        if (version_compare(NITROPACK_OPENCART_VERSION, '2.3.0.0', '>=') || $this->loaded->model->module_nitropack->isSettingEnabled('is_using_d_event_manager', $this->config->get('config_store_id'))) {
            $products = $output;
        } else if (version_compare(NITROPACK_OPENCART_VERSION, '2.2.0.0', '>=')) {
            $products = $args;
        } else {
            $products = $route;
        }

        if (is_array($products)) {
            foreach ($products as $product) {
                if (is_array($product) && !empty($product['product_id']) && is_numeric($product['product_id'])) {
                    $this->loaded->model->module_nitropack->setExpiresHeaderByProductId((int)$product['product_id']);

                    if (!$this->routeCompare($this->getHomeRoute())) {
                        $this->loaded->model->module_nitropack->tag('product', (int)$product['product_id']);

                        // Only when we are on the product route, tag the product page with a product:quantity:<id> tag, so that we can clear the product pages for the special case when the quantity has been changed.
                        if ($this->routeCompare('product/product') && isset($this->request->get['product_id']) && (int)$this->request->get['product_id'] == (int)$product['product_id']) {
                            $this->loaded->model->module_nitropack->tag('product:quantity', (int)$product['product_id']);
                        }
                    }
                }
            }
        }
    }

    public function afterGetCategory($route = null, $args = null, $output = null) {
        if (version_compare(NITROPACK_OPENCART_VERSION, '2.3.0.0', '>=') || $this->loaded->model->module_nitropack->isSettingEnabled('is_using_d_event_manager', $this->config->get('config_store_id'))) {
            $category_id = $args[0];
        } else if (version_compare(NITROPACK_OPENCART_VERSION, '2.2.0.0', '>=')) {
            $category_id = !empty($args['category_id']) ? $args['category_id'] : 0;
        } else {
            $category_id = $route;
        }

        if (!empty($category_id) && is_numeric($category_id) && !$this->routeCompare($this->getHomeRoute()) && $this->routeCompare('product/category') && isset($this->request->get['path'])) {
            $path_categories = array_filter(explode('_', $this->request->get['path']));
            $final_category_id = end($path_categories);

            if ($final_category_id == $category_id) {
                $this->loaded->model->module_nitropack->tag('category', (int)$category_id);
            }
        }
    }

    public function afterGetManufacturer($route = null, $args = null, $output = null) {
        if (version_compare(NITROPACK_OPENCART_VERSION, '2.3.0.0', '>=') || $this->loaded->model->module_nitropack->isSettingEnabled('is_using_d_event_manager', $this->config->get('config_store_id'))) {
            $manufacturer_id = $args[0];
        } else if (version_compare(NITROPACK_OPENCART_VERSION, '2.2.0.0', '>=')) {
            $manufacturer_id = !empty($args['manufacturer_id']) ? $args['manufacturer_id'] : 0;
        } else {
            $manufacturer_id = $route;
        }

        if (!empty($manufacturer_id) && is_numeric($manufacturer_id) && !$this->routeCompare($this->getHomeRoute())) {
            $this->loaded->model->module_nitropack->tag('manufacturer', (int)$manufacturer_id);
        }
    }

    public function afterGetManufacturers($route = null, $args = null, $output = null) {
        if (version_compare(NITROPACK_OPENCART_VERSION, '2.3.0.0', '>=') || $this->loaded->model->module_nitropack->isSettingEnabled('is_using_d_event_manager', $this->config->get('config_store_id'))) {
            $manufacturers = $output;
        } else if (version_compare(NITROPACK_OPENCART_VERSION, '2.2.0.0', '>=')) {
            $manufacturers = $args;
        } else {
            $manufacturers = $route;
        }

        if (!$this->routeCompare($this->getHomeRoute())) {
            foreach ($manufacturers as $manufacturer) {
                if (is_array($manufacturer) && !empty($manufacturer['manufacturer_id']) && is_numeric($manufacturer['manufacturer_id'])) {
                    $this->loaded->model->module_nitropack->tag('manufacturer', (int)$manufacturer['manufacturer_id']);
                }
            }
        }
    }

    public function afterGetInformation($route = null, $args = null, $output = null) {
        if (version_compare(NITROPACK_OPENCART_VERSION, '2.3.0.0', '>=') || $this->loaded->model->module_nitropack->isSettingEnabled('is_using_d_event_manager', $this->config->get('config_store_id'))) {
            $information_id = $args[0];
        } else if (version_compare(NITROPACK_OPENCART_VERSION, '2.2.0.0', '>=')) {
            $information_id = !empty($args['information_id']) ? $args['information_id'] : 0;
        } else {
            $information_id = $route;
        }

        if (!empty($information_id) && is_numeric($information_id) && !$this->routeCompare($this->getHomeRoute()) && $this->routeCompare('information/information') && isset($this->request->get['information_id']) && $this->request->get['information_id'] == $information_id) {
            $this->loaded->model->module_nitropack->tag('information', (int)$information_id);
        }
    }

    // Deprecated
    public function afterGetCategories($route = null, $args = null, $output = null) {
    }

    // Deprecated
    public function afterGetInformations($route = null, $args = null, $output = null) {
    }

    // Deprecated
    public function afterAddOrderHistory($route = null, $args = null, $output = null) {
    }

    /* END EVENTS */
}
