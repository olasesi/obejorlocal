<?php

namespace nitropackio\compatibility\model\event;

use nitropackio\compatibility\Model\Admin as NitropackAdminModel;

class Category extends NitropackAdminModel {
    const ADDED_TO_STORE = "{C.C.01} ENABLED category <%s> ADDED to store <%s>.";
    const DELETED_FROM_STORE = "{C.D.01} ENABLED category <%s> DELETED from store <%s>.";
    const EDITED_IN_STORE_UNEXPECTED = "{C.U.00} An UNEXPECTED value of category <%s> EDITED in store <%s>. Differences:\n%s";
    const EDITED_LINKED_TO_STORE = "{C.U.01} ENABLED category <%s> LINKED to store <%s>.";
    const EDITED_UNLINKED_FROM_STORE = "{C.U.02} ENABLED category <%s> UNLINKED from store <%s>.";
    const EDITED_IN_STORE_STATUS_ENABLED_TO_DISABLED = "{C.U.03} ENABLED category <%s> DISABLED in store <%s>.";
    const EDITED_IN_STORE_STATUS_DISABLED_TO_ENABLED = "{C.U.04} DISABLED category <%s> ENABLED in store <%s>.";
    const EDITED_IN_STORE_SEO_URL_CHANGED = "{C.U.05} ENABLED category <%s> in store <%s> has different SEO URL | Before (serialized): <<< %s >>> | After (serialized): <<< %s >>>";
    const EDITED_IN_STORE_NAME_DIFFERENT = "{C.U.06} ENABLED category <%s> in store <%s> has different NAME | Before: <<< %s >>> | After: <<< %s >>>";
    const EDITED_IN_STORE_IMAGE_DIFFERENT = "{C.U.07} ENABLED category <%s> in store <%s> has different IMAGE | Before: <<< %s >>> | After: <<< %s >>>";
    const EDITED_IN_STORE_TOP_DIFFERENT = "{C.U.08} ENABLED category <%s> in store <%s> has different TOP | Before: <<< %s >>> | After: <<< %s >>>";
    const EDITED_IN_STORE_SORT_ORDER_DIFFERENT = "{C.U.09} ENABLED category <%s> in store <%s> has different SORT_ORDER | Before: <<< %s >>> | After: <<< %s >>>";
    const EDITED_IN_STORE_COLUMN_DIFFERENT = "{C.U.10} ENABLED category <%s> in store <%s> has different COLUMN | Before: <<< %s >>> | After: <<< %s >>>";
    const EDITED_IN_STORE_PARENT_DIFFERENT = "{C.U.11} ENABLED category <%s> in store <%s> has different PARENT | Before: <<< %s >>> | After: <<< %s >>>";
    const SKIP_ACTION_ADD = "SKIPPING category <%s> ADD action for store <%s>.";
    const SKIP_ACTION_EDIT = "SKIPPING category <%s> EDIT action for store <%s>.";
    const SKIP_ACTION_DELETE = "SKIPPING category <%s> DELETE action for store <%s>.";

    // User-friendly reasons and actions
    const TEXT_ADD = "adding";
    const TEXT_EDIT = "editing";
    const TEXT_DELETE = "deleting";
    const TEXT_ALL = "all";
    const TEXT_SOME = "affected";
    const TEXT_INVALIDATE = "invalidation";
    const TEXT_PURGE = "purge";
    const TEXT_REASON = "Automatic %s of %s store pages after %s the category '%s'.";

    public function __construct($registry) {
        parent::__construct($registry);

        $this->load->model("catalog/category"); // We need this for OC 1.x
    }

    public function afterAdd($category_id) {
        $after = $this->getCategoryState($category_id);

        if ((bool)$after['data']['status']) {
            foreach ($after['stores'] as $store_id) {
                $this->debugLog(sprintf(self::ADDED_TO_STORE, $category_id, $store_id));

                if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_category', $store_id)) {
                    if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                        $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_ADD, $this->getCategoryName($after)));
                    } else {
                        $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_ADD, $this->getCategoryName($after)));
                    }
                } else {
                    $this->debugLog(sprintf(self::SKIP_ACTION_ADD, $category_id, $store_id));
                }
            }
        }
    }

    public function beforePersist($category_id) {
        $this->nitropack_entity_state->setState("category", $category_id, $this->getCategoryState($category_id));
    }

    public function afterEdit($category_id) {
        if (null !== $before = $this->getBefore("category", $category_id)) {
            $after = $this->getCategoryState($category_id);

            // Create link to store
            if ((bool)$after['data']['status']) {
                $linked_to_stores = array_diff($after['stores'], $before['stores']);

                foreach ($linked_to_stores as $store_id) {
                    $this->debugLog(sprintf(self::EDITED_LINKED_TO_STORE, $category_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_category', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                            $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                        } else {
                            $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $category_id, $store_id));
                    }
                }
            }

            // Unlink from store
            if ((bool)$before['data']['status']) {
                $unlinked_from_stores = array_diff($before['stores'], $after['stores']);

                foreach ($unlinked_from_stores as $store_id) {
                    $this->debugLog(sprintf(self::EDITED_UNLINKED_FROM_STORE, $category_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_category', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                            // Invalidate all store pages, as the category may appear anywhere in the header
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                            } else {
                                $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                            }
                        } else {
                            // Purge all store pages, as the category may appear anywhere in the header
                            $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $category_id, $store_id));
                    }
                }
            }

            // Link to store remains
            $edited_in_stores = array_intersect($before['stores'], $after['stores']);

            foreach ($edited_in_stores as $store_id) {
                $triggered_expected_case = false;

                // Enabled category is now Disabled
                if ((bool)$before['data']['status'] && !(bool)$after['data']['status']) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_STATUS_ENABLED_TO_DISABLED, $category_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_category', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                            } else {
                                $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                            }
                        } else {
                            $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $category_id, $store_id));
                    }


                    $triggered_expected_case = true;
                }

                // Disabled category is now Enabled
                if (!(bool)$before['data']['status'] && (bool)$after['data']['status']) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_STATUS_DISABLED_TO_ENABLED, $category_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_category', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                            $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                        } else {
                            $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $category_id, $store_id));
                    }


                    $triggered_expected_case = true;
                }

                // Category was enabled before and it is enabled now, detect invalidate cases
                if ((bool)$before['data']['status'] && (bool)$after['data']['status']) {
                    // SEO URL is different in Enabled category
                    if ($this->isSeoUrlsChanged($before['seo_url'][$store_id], $after['seo_url'][$store_id])) {
                        $this->debugLog(sprintf(self::EDITED_IN_STORE_SEO_URL_CHANGED, $category_id, $store_id, serialize($before['seo_url'][$store_id]), serialize($after['seo_url'][$store_id])));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_category', $store_id)) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                                if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                    $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                                } else {
                                    $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                                }
                            } else {
                                // Purge all store pages
                                $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $category_id, $store_id));
                        }

                        $triggered_expected_case = true;
                    }

                    // Name is different
                    foreach (array_keys($this->getLanguages()) as $language_id) {
                        if ($before['descriptions'][$language_id]['name'] != $after['descriptions'][$language_id]['name']) {
                            $this->debugLog(sprintf(self::EDITED_IN_STORE_NAME_DIFFERENT, $category_id, $store_id, $before['descriptions'][$language_id]['name'], $after['descriptions'][$language_id]['name']));

                            if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_category', $store_id)) {
                                if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                    $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                                } else {
                                    $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                                }
                            } else {
                                $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $category_id, $store_id));
                            }

                            $triggered_expected_case = true;
                        }
                    }

                    // Image is different
                    if ($before['data']['image'] != $after['data']['image']) {
                        $this->debugLog(sprintf(self::EDITED_IN_STORE_IMAGE_DIFFERENT, $category_id, $store_id, $before['data']['image'], $after['data']['image']));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_category', $store_id)) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                            } else {
                                $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $category_id, $store_id));
                        }

                        $triggered_expected_case = true;
                    }

                    // Top is different
                    if ((bool)$before['data']['top'] != (bool)$after['data']['top']) {
                        $this->debugLog(sprintf(self::EDITED_IN_STORE_TOP_DIFFERENT, $category_id, $store_id, $before['data']['top'], $after['data']['top']));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_category', $store_id)) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                            } else {
                                $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $category_id, $store_id));
                        }


                        $triggered_expected_case = true;
                    }

                    // Sort Order is different
                    if ((int)$before['data']['sort_order'] != (int)$after['data']['sort_order']) {
                        $this->debugLog(sprintf(self::EDITED_IN_STORE_SORT_ORDER_DIFFERENT, $category_id, $store_id, (int)$before['data']['sort_order'], (int)$after['data']['sort_order']));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_category', $store_id)) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                            } else {
                                $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $category_id, $store_id));
                        }


                        $triggered_expected_case = true;
                    }

                    // Column is different
                    if ((int)$before['data']['column'] != (int)$after['data']['column']) {
                        $this->debugLog(sprintf(self::EDITED_IN_STORE_COLUMN_DIFFERENT, $category_id, $store_id, (int)$before['data']['column'], (int)$after['data']['column']));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_category', $store_id)) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                            } else {
                                $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $category_id, $store_id));
                        }

                        $triggered_expected_case = true;
                    }

                    // Parent is different
                    if ((int)$before['data']['parent_id'] != (int)$after['data']['parent_id']) {
                        $this->debugLog(sprintf(self::EDITED_IN_STORE_PARENT_DIFFERENT, $category_id, $store_id, (int)$before['data']['parent_id'], (int)$after['data']['parent_id']));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_category', $store_id)) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                            } else {
                                $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_EDIT, $this->getCategoryName($after)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $category_id, $store_id));
                        }

                        $triggered_expected_case = true;
                    }
                }

                // No expected case was found, revert to default behavior if a field was changed
                if (!$triggered_expected_case) {
                    $difference_in = array();

                    if ($this->hasStateDifference($before, $after, $difference_in, array(), array('date_modified'))) {
                        $this->debugLog(sprintf(self::EDITED_IN_STORE_UNEXPECTED, $category_id, $store_id, implode(PHP_EOL, $difference_in)));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_category', $store_id)) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge("category", $category_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getCategoryName($after)));
                            } else {
                                $this->invalidate("category", $category_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getCategoryName($after)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $category_id, $store_id));
                        }
                    }
                }
            }
        }
    }

    public function afterDelete($category_id) {
        if (null !== $before = $this->getBefore("category", $category_id)) {
            if ((bool)$before['data']['status']) {
                foreach ($before['stores'] as $store_id) {
                    $this->debugLog(sprintf(self::DELETED_FROM_STORE, $category_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_category', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_DELETE, $this->getCategoryName($before)));
                            } else {
                                $this->invalidateEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_ALL, self::TEXT_DELETE, $this->getCategoryName($before)));
                            }
                        } else {
                            $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_DELETE, $this->getCategoryName($before)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_DELETE, $category_id, $store_id));
                    }
                }
            }
        }
    }

    public function getCategoryState($category_id) {
        $state = array();
        $state['data'] = $this->model_catalog_category->getCategory($category_id);
        $state['stores'] = $this->model_catalog_category->getCategoryStores($category_id);
        $state['descriptions'] = $this->model_catalog_category->getCategoryDescriptions($category_id);
        $state['filters'] = $this->model_catalog_category->getCategoryFilters($category_id);
        $state['layouts'] = $this->model_catalog_category->getCategoryLayouts($category_id);
        $state['seo_url'] = $this->getSeoUrls("category_id=" . $category_id);

        sort($state['stores']);
        sort($state['filters']);

        return $state;
    }

    public function getCategoryName($state) {
        return $state['descriptions'][$this->config->get('config_language_id')]['name'];
    }
}
