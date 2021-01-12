<?php

namespace nitropackio\compatibility\model\event;

use nitropackio\compatibility\Model\Admin as NitropackAdminModel;

class Manufacturer extends NitropackAdminModel {
    const ADDED_TO_STORE = "{M.C.01} manufacturer <%s> ADDED to store <%s>.";
    const DELETED_FROM_STORE = "{M.D.01} manufacturer <%s> DELETED from store <%s>.";
    const EDITED_IN_STORE_UNEXPECTED = "{M.U.00} An UNEXPECTED value of manufacturer <%s> EDITED in store <%s>. Differences:\n%s";
    const EDITED_LINKED_TO_STORE = "{M.U.01} manufacturer <%s> LINKED to store <%s>.";
    const EDITED_UNLINKED_FROM_STORE = "{M.U.02} manufacturer <%s> UNLINKED from store <%s>.";
    const EDITED_IN_STORE_SEO_URL_CHANGED = "{M.U.03} manufacturer <%s> in store <%s> has different SEO URL | Before (serialized): <<< %s >>> | After (serialized): <<< %s >>>";
    const SKIP_ACTION_ADD = "SKIPPING manufacturer <%s> ADD action for store <%s>.";
    const SKIP_ACTION_EDIT = "SKIPPING manufacturer <%s> EDIT action for store <%s>.";
    const SKIP_ACTION_DELETE = "SKIPPING manufacturer <%s> DELETE action for store <%s>.";

    // User-friendly reasons and actions
    const TEXT_ADD = "adding";
    const TEXT_EDIT = "editing";
    const TEXT_DELETE = "deleting";
    const TEXT_ALL = "all";
    const TEXT_SOME = "affected";
    const TEXT_INVALIDATE = "invalidation";
    const TEXT_PURGE = "purge";
    const TEXT_REASON = "Automatic %s of %s store pages after %s the manufacturer '%s'.";

    public function __construct($registry) {
        parent::__construct($registry);

        $this->load->model("catalog/manufacturer"); // We need this for OC 1.x
    }

    public function afterAdd($manufacturer_id) {
        $after = $this->getManufacturerState($manufacturer_id);

        foreach ($after['stores'] as $store_id) {
            $this->debugLog(sprintf(self::ADDED_TO_STORE, $manufacturer_id, $store_id));

            if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_manufacturer', $store_id)) {
                if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                    $this->purge("route", "product/manufacturer", $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_ADD, $this->getManufacturerName($after)));
                } else {
                    $this->invalidate("route", "product/manufacturer", $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_ADD, $this->getManufacturerName($after)));
                }
            } else {
                $this->debugLog(sprintf(self::SKIP_ACTION_ADD, $manufacturer_id, $store_id));
            }
        }
    }

    public function beforePersist($manufacturer_id) {
        $this->nitropack_entity_state->setState("manufacturer", $manufacturer_id, $this->getManufacturerState($manufacturer_id));
    }

    public function afterEdit($manufacturer_id) {
        if (null !== $before = $this->getBefore("manufacturer", $manufacturer_id)) {
            $after = $this->getManufacturerState($manufacturer_id);

            // Create link to store
            $linked_to_stores = array_diff($after['stores'], $before['stores']);

            foreach ($linked_to_stores as $store_id) {
                $this->debugLog(sprintf(self::EDITED_LINKED_TO_STORE, $manufacturer_id, $store_id));

                if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_manufacturer', $store_id)) {
                    if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                        $this->purge("route", "product/manufacturer", $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getManufacturerName($after)));
                    } else {
                        $this->invalidate("route", "product/manufacturer", $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getManufacturerName($after)));
                    }
                } else {
                    $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $manufacturer_id, $store_id));
                }
            }

            // Unlink from store
            $unlinked_from_stores = array_diff($before['stores'], $after['stores']);

            foreach ($unlinked_from_stores as $store_id) {
                $this->debugLog(sprintf(self::EDITED_UNLINKED_FROM_STORE, $manufacturer_id, $store_id));

                if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_manufacturer', $store_id)) {
                    if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                            $this->purge("manufacturer", $manufacturer_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getManufacturerName($after)));
                        } else {
                            $this->invalidate("manufacturer", $manufacturer_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getManufacturerName($after)));
                        }
                    } else {
                        // Purge tagged manufacturer pages
                        $this->purge("manufacturer", $manufacturer_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getManufacturerName($after)));
                    }
                } else {
                    $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $manufacturer_id, $store_id));
                }
            }

            // Link to store remains
            $edited_in_stores = array_intersect($before['stores'], $after['stores']);

            foreach ($edited_in_stores as $store_id) {
                $triggered_expected_case = false;

                // SEO URL is different in manufacturer
                if ($this->isSeoUrlsChanged($before['seo_url'][$store_id], $after['seo_url'][$store_id])) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_SEO_URL_CHANGED, $manufacturer_id, $store_id, serialize($before['seo_url'][$store_id]), serialize($after['seo_url'][$store_id])));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_manufacturer', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge("manufacturer", $manufacturer_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getManufacturerName($after)));
                            } else {
                                $this->invalidate("manufacturer", $manufacturer_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getManufacturerName($after)));
                            }
                        } else {
                            // Purge tagged manufacturer pages
                            $this->purge("manufacturer", $manufacturer_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getManufacturerName($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $manufacturer_id, $store_id));
                    }

                    $triggered_expected_case = true;
                }

                // No expected case was found, revert to default behavior if a field was changed
                if (!$triggered_expected_case) {
                    $difference_in = array();

                    if ($this->hasStateDifference($before, $after, $difference_in, array(), array('date_modified'))) {
                        $this->debugLog(sprintf(self::EDITED_IN_STORE_UNEXPECTED, $manufacturer_id, $store_id, implode(PHP_EOL, $difference_in)));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_manufacturer', $store_id)) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge("manufacturer", $manufacturer_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getManufacturerName($after)));
                            } else {
                                $this->invalidate("manufacturer", $manufacturer_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getManufacturerName($after)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $manufacturer_id, $store_id));
                        }
                    }
                }
            }
        }
    }

    public function afterDelete($manufacturer_id) {
        if (null !== $before = $this->getBefore("manufacturer", $manufacturer_id)) {
            foreach ($before['stores'] as $store_id) {
                $this->debugLog(sprintf(self::DELETED_FROM_STORE, $manufacturer_id, $store_id));

                if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_manufacturer', $store_id)) {
                    if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                            $this->purge("manufacturer", $manufacturer_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_DELETE, $this->getManufacturerName($before)));
                        } else {
                            $this->invalidate("manufacturer", $manufacturer_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_DELETE, $this->getManufacturerName($before)));
                        }
                    } else {
                        $this->purge("manufacturer", $manufacturer_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_DELETE, $this->getManufacturerName($before)));
                    }
                } else {
                    $this->debugLog(sprintf(self::SKIP_ACTION_DELETE, $manufacturer_id, $store_id));
                }
            }
        }
    }

    public function getManufacturerState($manufacturer_id) {
        $state = array();
        $state['data'] = $this->model_catalog_manufacturer->getManufacturer($manufacturer_id);
        $state['stores'] = $this->model_catalog_manufacturer->getManufacturerStores($manufacturer_id);
        $state['seo_url'] = $this->getSeoUrls("manufacturer_id=" . $manufacturer_id);

        sort($state['stores']);

        return $state;
    }

    public function getManufacturerName($state) {
        return $state['data']['name'];
    }
}
