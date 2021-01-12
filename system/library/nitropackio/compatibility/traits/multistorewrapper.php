<?php

namespace nitropackio\compatibility\traits;

use nitropackio\core\EventAction;
use nitropackio\core\Nitropack;
use nitropackio\core\Tag;
use NitroPack\SDK\PurgeType;

trait MultiStoreWrapper {
    public function isSettingEnabled($key, $store_id) {
        $value = false;

        $this->multiStoreWrapper(function($nitropack, $store) use (&$key, &$store_id, &$value) {
            if ((int)$store['store_id'] === (int)$store_id) {
                $value = (bool)$nitropack->setting->get($key, 0);
            }
        });

        return $value;
    }

    public function invalidateEverything($store_id = null, $reason = '') {
        $this->multiStoreWrapper(function($nitropack, $store) use (&$store_id, &$reason) {
            // Invalidate only for matching store_ids
            if ($store_id === null || ($store_id !== null && (int)$store['store_id'] === (int)$store_id)) {
                $this->invalidateHomePage($nitropack, $reason);
                $this->clearJournalCache();

                $eventAction = new EventAction($nitropack, 'invalidateCache', array(null, null, $reason));

                Nitropack::pushEventAction($eventAction);
            }
        });
    }

    public function invalidate($group, $identifier, $store_id = null, $reason = '') {
        $this->multiStoreWrapper(function($nitropack, $store) use (&$group, &$identifier, &$store_id, &$reason) {
            // Invalidate only for matching store_ids
            if ($store_id === null || ($store_id !== null && (int)$store['store_id'] === (int)$store_id)) {
                $this->invalidateHomePage($nitropack, $reason);
                $this->clearJournalCache();

                $tag = new Tag($group, $identifier);
                $eventAction = new EventAction($nitropack, 'invalidateCache', array(null, $tag->getText(), $reason));

                Nitropack::pushEventAction($eventAction);
            }
        });
    }

    public function purgeEverything($store_id = null, $reason = '') {
        $this->multiStoreWrapper(function($nitropack, $store) use (&$store_id, &$reason) {
            // Purge only for matching store_ids
            if ($store_id === null || ($store_id !== null && (int)$store['store_id'] === (int)$store_id)) {
                $this->invalidateHomePage($nitropack, $reason);
                $this->clearJournalCache();

                $eventAction = new EventAction($nitropack, 'clearPageCache', array($reason));

                Nitropack::pushEventAction($eventAction);
            }
        });
    }

    public function purge($group, $identifier, $store_id = null, $reason = '') {
        $this->multiStoreWrapper(function($nitropack, $store) use (&$group, &$identifier, &$store_id, &$reason) {
            // Purge only for matching store_ids
            if ($store_id === null || ($store_id !== null && (int)$store['store_id'] === (int)$store_id)) {
                $this->invalidateHomePage($nitropack, $reason);
                $this->clearJournalCache();

                $tag = new Tag($group, $identifier);

                $eventAction = new EventAction($nitropack, 'purgeCache', array(null, $tag->getText(), PurgeType::PAGECACHE_ONLY, $reason));

                Nitropack::pushEventAction($eventAction);
            }
        });
    }

    public function invalidateHomePage(&$nitropack, $reason) {
        $tag = new Tag("route", "common/home");

        $eventAction = new EventAction($nitropack, 'invalidateCache', array(null, $tag->getText(), $reason));

        Nitropack::pushEventAction($eventAction);
    }

    public function multiStoreWrapper($success_callback) {
        if (class_exists('nitropackio\\core\\Nitropack')) {
            foreach ($this->getStores() as $store) {
                Nitropack::executionBlock(function() use (&$store, &$success_callback) {
                    $nitropack = $this->nitropackFromStoreUrl($store['url']);
                    
                    if ($nitropack->isConnected()) {
                        $success_callback($nitropack, $store);
                    }
                });
            }
        }
    }

    public function clearJournalCache() {
        // Journal 2
        if (is_file(DIR_SYSTEM . 'journal2/classes/journal2_cache.php')) {
            require_once DIR_SYSTEM . 'journal2/classes/journal2_cache.php';

            \Journal2Cache::deleteCache();
        }

        // Journal 3
        if ($this->registry->has('journal3')) {
            try {
                $this->journal3->cache->delete();

                $this->journal3->minifier->clearCache();
            } catch (\Exception $e) {
                $this->renderJson(self::ERROR, $e->getMessage());
            }
        }
    }
}
