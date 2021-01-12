<?php

namespace nitropackio\compatibility\model\event;

use nitropackio\compatibility\Model\Admin as NitropackAdminModel;

class Information extends NitropackAdminModel {
    const ADDED_TO_STORE = "{I.C.01} ENABLED and BOTTOM information <%s> ADDED to store <%s>.";
    const DELETED_FROM_STORE_BOTTOM = "{I.D.01} ENABLED and BOTTOM information <%s> DELETED from store <%s>.";
    const DELETED_FROM_STORE_NOT_BOTTOM = "{I.D.02} ENABLED and NOT_BOTTOM information <%s> DELETED from store <%s>.";
    const EDITED_IN_STORE_UNEXPECTED = "{I.U.00} An UNEXPECTED value of information <%s> EDITED in store <%s>. Differences:\n%s";
    const EDITED_LINKED_TO_STORE = "{I.U.01} ENABLED and BOTTOM information <%s> LINKED to store <%s>.";
    const EDITED_UNLINKED_FROM_STORE_BOTTOM = "{I.U.02} ENABLED and BOTTOM information <%s> UNLINKED from store <%s>.";
    const EDITED_UNLINKED_FROM_STORE_NOT_BOTTOM = "{I.U.03} ENABLED and NOT_BOTTOM information <%s> UNLINKED from store <%s>.";
    const EDITED_IN_STORE_BOTTOM_STATUS_ENABLED_TO_DISABLED = "{I.U.04} ENABLED and BOTTOM information <%s> DISABLED in store <%s>.";
    const EDITED_IN_STORE_NOT_BOTTOM_STATUS_ENABLED_TO_DISABLED = "{I.U.05} ENABLED and NOT_BOTTOM information <%s> DISABLED in store <%s>.";
    const EDITED_IN_STORE_BOTTOM_ENABLED_SEO_URL_CHANGED = "{I.U.06} ENABLED and BOTTOM information <%s> in store <%s> has different SEO URL | Before (serialized): <<< %s >>> | After (serialized): <<< %s >>>";
    const EDITED_IN_STORE_NOT_BOTTOM_ENABLED_SEO_URL_CHANGED = "{I.U.07} ENABLED and NOT_BOTTOM information <%s> in store <%s> has different SEO URL | Before (serialized): <<< %s >>> | After (serialized): <<< %s >>>";
    const EDITED_IN_STORE_BOTTOM_STATUS_DISABLED_TO_ENABLED = "{I.U.08} DISABLED information <%s> ENABLED in store and put to BOTTOM<%s>.";
    const EDITED_IN_STORE_BOTTOM_DIFFERENT = "{I.U.09} ENABLED information <%s> in store <%s> has different BOTTOM | Before: <<< %s >>> | After: <<< %s >>>";
    const EDITED_IN_STORE_ENABLED_BOTTOM_SORT_ORDER_DIFFERENT = "{I.U.10} ENABLED and BOTTOM information <%s> in store <%s> has different SORT_ORDER | Before: <<< %s >>> | After: <<< %s >>>";
    const EDITED_IN_STORE_ENABLED_BOTTOM_TITLE_DIFFERENT = "{I.U.11} ENABLED and BOTTOM information <%s> in store <%s> has different TITLE | Before: <<< %s >>> | After: <<< %s >>>";
    const SKIP_ACTION_ADD = "SKIPPING information <%s> ADD action for store <%s>.";
    const SKIP_ACTION_EDIT = "SKIPPING information <%s> EDIT action for store <%s>.";
    const SKIP_ACTION_DELETE = "SKIPPING information <%s> DELETE action for store <%s>.";

    // User-friendly reasons and actions
    const TEXT_ADD = "adding";
    const TEXT_EDIT = "editing";
    const TEXT_DELETE = "deleting";
    const TEXT_ALL = "all";
    const TEXT_SOME = "affected";
    const TEXT_INVALIDATE = "invalidation";
    const TEXT_PURGE = "purge";
    const TEXT_REASON = "Automatic %s of %s store pages after %s the information '%s'.";

    public function __construct($registry) {
        parent::__construct($registry);

        $this->load->model("catalog/information"); // We need this for OC 1.x
    }

    public function afterAdd($information_id) {
        $after = $this->getInformationState($information_id);

        if ((bool)$after['data']['status'] && (bool)$after['data']['bottom']) {
            foreach ($after['stores'] as $store_id) {
                $this->debugLog(sprintf(self::ADDED_TO_STORE, $information_id, $store_id));

                if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_information', $store_id)) {
                    if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                        $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_ADD, $this->getInformationTitle($after)));
                    } else {
                        $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_ADD, $this->getInformationTitle($after)));
                    }
                } else {
                    $this->debugLog(sprintf(self::SKIP_ACTION_ADD, $information_id, $store_id));
                }
            }
        }
    }

    public function beforePersist($information_id) {
        $this->nitropack_entity_state->setState("information", $information_id, $this->getInformationState($information_id));
    }

    public function afterEdit($information_id) {
        if (null !== $before = $this->getBefore("information", $information_id)) {
            $after = $this->getInformationState($information_id);

            // Create link to store
            if ((bool)$after['data']['status'] && (bool)$after['data']['bottom']) {
                $linked_to_stores = array_diff($after['stores'], $before['stores']);

                foreach ($linked_to_stores as $store_id) {
                    $this->debugLog(sprintf(self::EDITED_LINKED_TO_STORE, $information_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_information', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                            $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                        } else {
                            $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $information_id, $store_id));
                    }
                }
            }

            // Unlink from store
            if ((bool)$before['data']['status']) {
                $unlinked_from_stores = array_diff($before['stores'], $after['stores']);

                foreach ($unlinked_from_stores as $store_id) {
                    if ((bool)$before['data']['bottom']) {
                        $this->debugLog(sprintf(self::EDITED_UNLINKED_FROM_STORE_BOTTOM, $information_id, $store_id));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_information', $store_id)) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                                if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                    $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                                } else {
                                    $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                                }
                            } else {
                                $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $information_id, $store_id));
                        }
                    } else {
                        $this->debugLog(sprintf(self::EDITED_UNLINKED_FROM_STORE_NOT_BOTTOM, $information_id, $store_id));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_information', $store_id)) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                                if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                    $this->purge("information", $information_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getInformationTitle($after)));
                                } else {
                                    $this->invalidate("information", $information_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getInformationTitle($after)));
                                }
                            } else {
                                // Purge tagged information pages
                                $this->purge("information", $information_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getInformationTitle($after)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $information_id, $store_id));
                        }
                    }
                }
            }

            // Link to store remains
            $edited_in_stores = array_intersect($before['stores'], $after['stores']);

            foreach ($edited_in_stores as $store_id) {
                $triggered_expected_case = false;

                // Enabled and Bottom information is now Disabled
                if ((bool)$before['data']['status'] && (bool)$before['data']['bottom'] && !(bool)$after['data']['status']) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_BOTTOM_STATUS_ENABLED_TO_DISABLED, $information_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_information', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                            } else {
                                $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                            }
                        } else {
                            $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $information_id, $store_id));
                    }


                    $triggered_expected_case = true;
                }

                // Enabled and not Bottom information is now Disabled
                if ((bool)$before['data']['status'] && !(bool)$before['data']['bottom'] && !(bool)$after['data']['status']) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_NOT_BOTTOM_STATUS_ENABLED_TO_DISABLED, $information_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_information', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge("information", $information_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getInformationTitle($after)));
                            } else {
                                $this->invalidate("information", $information_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getInformationTitle($after)));
                            }
                        } else {
                            $this->purge("information", $information_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getInformationTitle($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $information_id, $store_id));
                    }

                    $triggered_expected_case = true;
                }

                // Enabled and Bottom information with different SEO URLs
                if ((bool)$before['data']['status'] && (bool)$before['data']['bottom'] && (bool)$after['data']['status'] && (bool)$after['data']['bottom'] && $this->isSeoUrlsChanged($before['seo_url'][$store_id], $after['seo_url'][$store_id])) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_BOTTOM_ENABLED_SEO_URL_CHANGED, $information_id, $store_id, serialize($before['seo_url'][$store_id]), serialize($after['seo_url'][$store_id])));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_information', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                            } else {
                                $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                            }
                        } else {
                            $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $information_id, $store_id));
                    }

                    $triggered_expected_case = true;
                }

                // Enabled and NOT Bottom information with different SEO URLs
                if ((bool)$before['data']['status'] && (bool)!$before['data']['bottom'] && (bool)$after['data']['status'] && (bool)!$after['data']['bottom'] && $this->isSeoUrlsChanged($before['seo_url'][$store_id], $after['seo_url'][$store_id])) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_NOT_BOTTOM_ENABLED_SEO_URL_CHANGED, $information_id, $store_id, serialize($before['seo_url'][$store_id]), serialize($after['seo_url'][$store_id])));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_information', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge("information", $information_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getInformationTitle($after)));
                            } else {
                                $this->invalidate("information", $information_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getInformationTitle($after)));
                            }
                        } else {
                            $this->purge("information", $information_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getInformationTitle($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $information_id, $store_id));
                    }

                    $triggered_expected_case = true;
                }

                // Disabled information is now Enabled and in Bottom
                if (!(bool)$before['data']['status'] && (bool)$after['data']['status'] && (bool)$after['data']['bottom']) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_BOTTOM_STATUS_DISABLED_TO_ENABLED, $information_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_information', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                            $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                        } else {
                            $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $information_id, $store_id));
                    }

                    $triggered_expected_case = true;
                }

                // Information is enabled and Bottom is different
                if ((bool)$before['data']['status'] && (bool)$after['data']['status'] && (bool)$before['data']['bottom'] != (bool)$after['data']['bottom']) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_BOTTOM_DIFFERENT, $information_id, $store_id, $before['data']['bottom'], $after['data']['bottom']));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_information', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                            $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                        } else {
                            $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $information_id, $store_id));
                    }

                    $triggered_expected_case = true;
                }

                // Information is Bottom and Enabled, with changed Sort Order
                if ((bool)$before['data']['status'] && (bool)$after['data']['status'] && (bool)$before['data']['bottom'] && (bool)$after['data']['bottom'] && (int)$before['data']['sort_order'] != (int)$after['data']['sort_order']) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_ENABLED_BOTTOM_SORT_ORDER_DIFFERENT, $information_id, $store_id, (int)$before['data']['sort_order'], (int)$after['data']['sort_order']));
                    
                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_information', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                            $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                        } else {
                            $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $information_id, $store_id));
                    }

                    $triggered_expected_case = true;
                }

                // Information is Bottom and Enabled, with changed Name
                if ((bool)$before['data']['status'] && (bool)$after['data']['status'] && (bool)$before['data']['bottom'] && (bool)$after['data']['bottom']) {
                    foreach (array_keys($this->getLanguages()) as $language_id) {
                        if ($before['descriptions'][$language_id]['title'] != $after['descriptions'][$language_id]['title']) {
                            $this->debugLog(sprintf(self::EDITED_IN_STORE_ENABLED_BOTTOM_TITLE_DIFFERENT, $information_id, $store_id, $before['descriptions'][$language_id]['title'], $after['descriptions'][$language_id]['title']));
                            
                            if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_information', $store_id)) {
                                if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                    $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                                } else {
                                    $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getInformationTitle($after)));
                                }
                            } else {
                                $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $information_id, $store_id));
                            }

                            $triggered_expected_case = true;
                        }
                    }
                }

                // No expected case was found, revert to default behavior if a field was changed
                if (!$triggered_expected_case) {
                    $difference_in = array();

                    if ($this->hasStateDifference($before, $after, $difference_in, array(), array('date_modified'))) {
                        $this->debugLog(sprintf(self::EDITED_IN_STORE_UNEXPECTED, $information_id, $store_id, implode(PHP_EOL, $difference_in)));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_information', $store_id)) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge("information", $information_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getInformationTitle($after)));
                            } else {
                                $this->invalidate("information", $information_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getInformationTitle($after)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $information_id, $store_id));
                        }
                    }
                }
            }
        }
    }

    public function afterDelete($information_id) {
        if (null !== $before = $this->getBefore("information", $information_id)) {
            if ((bool)$before['data']['status']) {
                foreach ($before['stores'] as $store_id) {
                    if ((bool)$before['data']['bottom']) {
                        $this->debugLog(sprintf(self::DELETED_FROM_STORE_BOTTOM, $information_id, $store_id));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_information', $store_id)) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                                if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                    $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_DELETE, $this->getInformationTitle($before)));
                                } else {
                                    $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_DELETE, $this->getInformationTitle($before)));
                                }
                            } else {
                                $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_DELETE, $this->getInformationTitle($before)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_DELETE, $information_id, $store_id));
                        }
                    } else {
                        $this->debugLog(sprintf(self::DELETED_FROM_STORE_NOT_BOTTOM, $information_id, $store_id));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_information', $store_id)) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                                if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                    $this->purge("information", $information_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_DELETE, $this->getInformationTitle($before)));
                                } else {
                                    $this->invalidate("information", $information_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_DELETE, $this->getInformationTitle($before)));
                                }
                            } else {
                                $this->purge("information", $information_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_DELETE, $this->getInformationTitle($before)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_DELETE, $information_id, $store_id));
                        }
                    }
                }
            }
        }
    }

    public function getInformationState($information_id) {
        $state = array();
        $state['data'] = $this->model_catalog_information->getInformation($information_id);
        $state['descriptions'] = $this->model_catalog_information->getInformationDescriptions($information_id);
        $state['stores'] = $this->model_catalog_information->getInformationStores($information_id);
        $state['layouts'] = $this->model_catalog_information->getInformationLayouts($information_id);
        $state['seo_url'] = $this->getSeoUrls("information_id=" . $information_id);

        sort($state['stores']);

        return $state;
    }

    public function getInformationTitle($state) {
        return $state['descriptions'][$this->config->get('config_language_id')]['title'];
    }
}
