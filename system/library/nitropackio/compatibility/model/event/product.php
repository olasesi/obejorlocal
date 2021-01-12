<?php

namespace nitropackio\compatibility\model\event;

use nitropackio\compatibility\Model\Admin as NitropackAdminModel;

class Product extends NitropackAdminModel {
    const ADDED_TO_STORE = "{P.C.01} ENABLED and AVAILABLE product <%s> CREATED in store <%s>.";
    const DELETED_FROM_STORE = "{P.D.01} ENABLED and AVAILABLE product <%s> DELETED from store <%s>.";
    const EDITED_IN_STORE_UNEXPECTED = "{P.U.00} An UNEXPECTED value of product <%s> EDITED in store <%s>. Differences:\n%s";
    const EDITED_LINKED_TO_STORE = "{P.U.01} ENABLED and AVAILABLE product <%s> LINKED to store <%s>.";
    const EDITED_UNLINKED_FROM_STORE = "{P.U.02} ENABLED and AVAILABLE product <%s> UNLINKED from store <%s>.";
    const EDITED_IN_STORE_STATUS_TO_DISABLED = "{P.U.03} ENABLED and AVAILABLE product <%s> DISABLED in store <%s>.";
    const EDITED_IN_STORE_SEO_URL_CHANGED = "{P.U.04} ENABLED and AVAILABLE product <%s> in store <%s> has different SEO URL | Before (serialized): <<< %s >>> | After (serialized): <<< %s >>>";
    const EDITED_IN_STORE_AVAILABILITY_TO_UNAVAILABLE = "{P.U.05} ENABLED and AVAILABLE product <%s> MADE UNAVAILABLE in store <%s>.";
    const EDITED_IN_STORE_AVAILABLE_DISABLED_TO_ENABLED = "{P.U.06} DISABLED and AVAILABLE product <%s> ENABLED in store <%s>";
    const EDITED_IN_STORE_ENABLED_UNAVAILABLE_TO_AVAILABLE = "{P.U.07} ENABLED and UNAVAILABLE product <%s> MADE AVAILABLE in store <%s>";
    const EDITED_IN_STORE_DISABLED_UNAVAILABLE_TO_ENABLED_AVAILABLE = "{P.U.08} DISABLED and UNAVAILABLE product <%s> ENABLED and MADE AVAILABLE in store <%s>";
    const EDITED_IN_STORE_MOVED_CATEGORIES = "{P.U.09} ENABLED and AVAILABLE product <%s> in store <%s> MOVED from/to CATEGORIES: %s";
    const EDITED_IN_STORE_MOVED_MANUFACTURERS = "{P.U.10} ENABLED and AVAILABLE product <%s> in store <%s> MOVED from manufacturer <%s> to manufacturer <%s>";
    const EDITED_IN_STORE_CHANGED_QUANTITY_AVAILABILITY = "{P.U.11} ENABLED and AVAILABLE product <%s> in store <%s> CHANGED QUANTITY AVAILABILITY from <%s> to <%s>";
    const EDITED_IN_STORE_CHANGED_DESCRIPTION = "{P.U.12} ENABLED and AVAILABLE product <%s> in store <%s> CHANGED DESCRIPTION";
    const EDITED_IN_STORE_CHANGED_STOCK_STATUS = "{P.U.13} ENABLED and AVAILABLE product <%s> in store <%s> CHANGED STOCK STATUS from <%s> to <%s>";
    const EDITED_IN_STORE_CHANGED_PRODUCT_TABS = "{P.U.14} ENABLED and AVAILABLE product <%s> in store <%s> CHANGED PRODUCT TABS";

    const SKIP_ACTION_ADD = "SKIPPING product <%s> ADD action for store <%s>.";
    const SKIP_ACTION_EDIT = "SKIPPING product <%s> EDIT action for store <%s>.";
    const SKIP_ACTION_DELETE = "SKIPPING product <%s> DELETE action for store <%s>.";

    // User-friendly reasons and actions
    const TEXT_ADD = "adding";
    const TEXT_EDIT = "editing";
    const TEXT_DELETE = "deleting";
    const TEXT_ALL = "all";
    const TEXT_SOME = "affected";
    const TEXT_INVALIDATE = "invalidation";
    const TEXT_PURGE = "purge";
    const TEXT_REASON = "Automatic %s of %s store pages after %s the product '%s'.";

    public function __construct($registry) {
        parent::__construct($registry);

        $this->load->model("catalog/product"); // We need this for OC 1.x
    }

    public function afterAdd($product_id) {
        if ($this->isProductActive($this->model_catalog_product->getProduct($product_id))) {
            $stores = $this->model_catalog_product->getProductStores($product_id);

            foreach ($stores as $store_id) {
                $this->debugLog(sprintf(self::ADDED_TO_STORE, $product_id, $store_id));

                if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_product', $store_id)) {
                    $after = $this->getProductState($product_id);

                    $this->invalidatePostAddPages($after, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_ADD, $this->getProductName($after)));
                } else {
                    $this->debugLog(sprintf(self::SKIP_ACTION_ADD, $product_id, $store_id));
                }
            }
        }
    }

    public function beforePersist($product_id) {
        $this->nitropack_entity_state->setState("product", $product_id, $this->getProductState($product_id));
    }

    public function afterEdit($product_id) {
        if (null !== $before = $this->getBefore("product", $product_id)) {
            $after = $this->getProductState($product_id);

            // Create link to store
            if ($this->isProductActive($after['data'])) {
                $linked_to_stores = array_diff($after['stores'], $before['stores']);

                foreach ($linked_to_stores as $store_id) {
                    $this->debugLog(sprintf(self::EDITED_LINKED_TO_STORE, $product_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_product', $store_id)) {
                        $this->invalidatePostAddPages($after, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $product_id, $store_id));
                    }
                }
            }

            // Unlink from store
            if ($this->isProductActive($before['data'])) {
                $unlinked_from_stores = array_diff($before['stores'], $after['stores']);

                foreach ($unlinked_from_stores as $store_id) {
                    $this->debugLog(sprintf(self::EDITED_UNLINKED_FROM_STORE, $product_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_product', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge("product", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            } else {
                                $this->invalidate("product", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            }
                        } else {
                            // Purge tagged product pages
                            $this->purge("product", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $product_id, $store_id));
                    }
                }
            }

            // Link to store remains
            $edited_in_stores = array_intersect($before['stores'], $after['stores']);

            foreach ($edited_in_stores as $store_id) {
                $triggered_expected_case = false;

                // Enabled and Available product is now Disabled
                if ($this->isProductActive($before['data']) && !(bool)$after['data']['status']) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_STATUS_TO_DISABLED, $product_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_product', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge("product", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            } else {
                                $this->invalidate("product", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            }
                        } else {
                            // Purge tagged product pages
                            $this->purge("product", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $product_id, $store_id));
                    }

                    $triggered_expected_case = true;
                }

                // Enabled and Available product is now Unavailable
                if ($this->isProductActive($before['data']) && !$this->checkDatabaseDate($after['data']['date_available'])) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_AVAILABILITY_TO_UNAVAILABLE, $product_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_product', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge("product", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            } else {
                                $this->invalidate("product", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            }
                        } else {
                            // Purge tagged product pages
                            $this->purge("product", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $product_id, $store_id));
                    }

                    $triggered_expected_case = true;
                }

                // Enabled and Available product is with a different SEO URL
                if ($this->isProductActive($before['data']) && $this->isProductActive($after['data']) && $this->isSeoUrlsChanged($before['seo_url'][$store_id], $after['seo_url'][$store_id])) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_SEO_URL_CHANGED, $product_id, $store_id, serialize($before['seo_url'][$store_id]), serialize($after['seo_url'][$store_id])));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_product', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge("product", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            } else {
                                $this->invalidate("product", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            }
                        } else {
                            // Purge tagged product pages
                            $this->purge("product", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $product_id, $store_id));
                    }

                    $triggered_expected_case = true;
                }

                // Disabled and Available product is now Enabled
                if (!(bool)$before['data']['status'] && $this->checkDatabaseDate($before['data']['date_available']) && $this->isProductActive($after['data'])) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_AVAILABLE_DISABLED_TO_ENABLED, $product_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_product', $store_id)) {
                        // Invalidate affected store pages
                        $this->invalidatePostAddPages($after, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $product_id, $store_id));
                    }

                    $triggered_expected_case = true;
                }

                // Enabled and Unavailable product is now Available
                if ((bool)$before['data']['status'] && !$this->checkDatabaseDate($before['data']['date_available']) && $this->isProductActive($after['data'])) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_ENABLED_UNAVAILABLE_TO_AVAILABLE, $product_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_product', $store_id)) {
                        // Invalidate affected store pages
                        $this->invalidatePostAddPages($after, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $product_id, $store_id));
                    }

                    $triggered_expected_case = true;
                }

                // Disabled and Unavailable product is now Enabled and Available
                if (!(bool)$before['data']['status'] && !$this->checkDatabaseDate($before['data']['date_available']) && $this->isProductActive($after['data'])) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_DISABLED_UNAVAILABLE_TO_ENABLED_AVAILABLE, $product_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_product', $store_id)) {
                        // Invalidate affected store pages
                        $this->invalidatePostAddPages($after, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $product_id, $store_id));
                    }

                    $triggered_expected_case = true;
                }

                // ACTIVE product link changes - categories and manufacturers
                if ($this->isProductActive($before['data']) && $this->isProductActive($after['data'])) {
                    $added_to_categories = array_diff($after['categories'], $before['categories']);
                    $deleted_from_categories = array_diff($before['categories'], $after['categories']);

                    $moved_between_categories = array_unique(array_merge($added_to_categories, $deleted_from_categories));

                    // Categories are changed
                    if (!empty($moved_between_categories)) {
                        $this->debugLog(sprintf(self::EDITED_IN_STORE_MOVED_CATEGORIES, $product_id, $store_id, implode(',', $moved_between_categories)));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_product', $store_id)) {
                            // Invalidate edited category pages
                            foreach ($moved_between_categories as $category_id) {
                                if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                    $this->purge("category", $category_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                                } else {
                                    $this->invalidate("category", $category_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                                }
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $product_id, $store_id));
                        }
                    }

                    // Manufacturers are changed
                    if ((int)$before['data']['manufacturer_id'] != (int)$after['data']['manufacturer_id']) {
                        $this->debugLog(sprintf(self::EDITED_IN_STORE_MOVED_MANUFACTURERS, $product_id, $store_id, $before['data']['manufacturer_id'], $after['data']['manufacturer_id']));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_product', $store_id)) {
                            // Invalidate manufacturer pages
                            if ((bool)$before['data']['manufacturer_id']) {
                                if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                    $this->purge("manufacturer", $before['data']['manufacturer_id'], $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                                } else {
                                    $this->invalidate("manufacturer", $before['data']['manufacturer_id'], $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                                }
                            }

                            if ((bool)$after['data']['manufacturer_id']) {
                                if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                    $this->purge("manufacturer", $after['data']['manufacturer_id'], $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                                } else {
                                    $this->invalidate("manufacturer", $after['data']['manufacturer_id'], $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                                }
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $product_id, $store_id));
                        }
                    }

                    // Quantity Availability is changed
                    if ((bool)$before['data']['quantity'] != (bool)$after['data']['quantity']) {
                        $this->debugLog(sprintf(self::EDITED_IN_STORE_CHANGED_QUANTITY_AVAILABILITY, $product_id, $store_id, $before['data']['quantity'], $after['data']['quantity']));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_product', $store_id)) {
                            $group = NITROPACK_AUTO_CACHE_CLEAR_QUANTITY_CLEAR_ALL ? "product" : "product:quantity";

                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge($group, $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            } else {
                                $this->invalidate($group, $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $product_id, $store_id));
                        }
                    }

                    // Stock Status is changed
                    if ((int)$before['data']['stock_status_id'] != (int)$after['data']['stock_status_id']) {
                        $this->debugLog(sprintf(self::EDITED_IN_STORE_CHANGED_STOCK_STATUS, $product_id, $store_id, (int)$before['data']['stock_status_id'], (int)$after['data']['stock_status_id']));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_product', $store_id)) {
                            $group = NITROPACK_AUTO_CACHE_CLEAR_STOCK_STATUS_CLEAR_ALL ? "product" : "product:quantity";

                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge($group, $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            } else {
                                $this->invalidate($group, $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $product_id, $store_id));
                        }
                    }

                    // Description has changed
                    foreach (array_keys($this->getLanguages()) as $language_id) {
                        $difference_in = array();

                        if (isset($before['descriptions'][$language_id]) && $after['descriptions'][$language_id] && $this->hasStateDifference($before['descriptions'][$language_id], $after['descriptions'][$language_id], $difference_in, array('description', $language_id), array('name'))) {
                            $this->debugLog(sprintf(self::EDITED_IN_STORE_CHANGED_DESCRIPTION, $product_id, $store_id));

                            if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_product', $store_id)) {
                                if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                    $this->purge("product:quantity", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                                } else {
                                    $this->invalidate("product:quantity", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                                }
                            } else {
                                $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $product_id, $store_id));
                            }
                        }
                    }

                    // Product tabs have changed
                    $product_tabs_difference_in = array();
                    if ($this->hasStateDifference($before['product_tabs'], $after['product_tabs'], $product_tabs_difference_in, array('product_tabs'))) {
                        $this->debugLog(sprintf(self::EDITED_IN_STORE_CHANGED_PRODUCT_TABS, $product_id, $store_id));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_product', $store_id)) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge("product:quantity", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            } else {
                                $this->invalidate("product:quantity", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $product_id, $store_id));
                        }
                    }
                }

                // No expected case was found, revert to default behavior if a field was changed
                if (!$triggered_expected_case) {
                    $difference_in = array();

                    if ($this->hasStateDifference($before, $after, $difference_in, array(), array('date_modified', 'manufacturer_id', 'categories', 'quantity', 'product_image_id', 'product_special_id', 'product_discount_id', 'product_option_id', 'product_option_value_id', 'description', 'product_tabs', 'tag', 'meta_title', 'meta_description', 'meta_keyword', 'descriptions', 'stock_status_id'))) {
                        $this->debugLog(sprintf(self::EDITED_IN_STORE_UNEXPECTED, $product_id, $store_id, implode(PHP_EOL, $difference_in)));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_product', $store_id)) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge("product", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            } else {
                                $this->invalidate("product", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $product_id, $store_id));
                        }
                    }
                }
            }
        }
    }

    public function afterDelete($product_id) {
        if (null !== $before = $this->getBefore("product", $product_id)) {
            if ($this->isProductActive($before['data'])) {
                foreach ($before['stores'] as $store_id) {
                    $this->debugLog(sprintf(self::DELETED_FROM_STORE, $product_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_product', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge("product", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_DELETE, $this->getProductName($before)));
                            } else {
                                $this->invalidate("product", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_DELETE, $this->getProductName($before)));
                            }
                        } else {
                            $this->purge("product", $product_id, $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_DELETE, $this->getProductName($before)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_DELETE, $product_id, $store_id));
                    }
                }
            }
        }
    }

    public function invalidatePostAddPages($state, $store_id, $reason) {
        // Categories
        foreach ($state['categories'] as $category_id) {
            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                $this->purge("category", $category_id, $store_id, $reason);
            } else {
                $this->invalidate("category", $category_id, $store_id, $reason);
            }
        }

        // Manufacturer
        if ($state['data']['manufacturer_id']) {
            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                $this->purge("manufacturer", $state['data']['manufacturer_id'], $store_id, $reason);
            } else {
                $this->invalidate("manufacturer", $state['data']['manufacturer_id'], $store_id, $reason);
            }
        }

        // Specials
        // Only in case the product has an active special, we clear the specials page
        foreach ($state['specials'] as $special) {
            if (($special['date_start'] == '0000-00-00' && $this->checkDatabaseDate($special['date_start'], ">=")) && ($special['date_end'] == '0000-00-00' || $this->checkDatabaseDate($special['date_end'], "<="))) {
                if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                    $this->purge("route", "product/special", $store_id, $reason);
                } else {
                    $this->invalidate("route", "product/special", $store_id, $reason);
                }
                break;
            }
        }
    }

    public function isProductActive($product_info) {
        return (bool)$product_info['status'] && $this->checkDatabaseDate($product_info['date_available']);
    }

    public function getProductState($product_id) {
        $state = array();

        $state['attributes'] = $this->model_catalog_product->getProductAttributes($product_id);
        $state['categories'] = $this->model_catalog_product->getProductCategories($product_id);
        $state['descriptions'] = $this->model_catalog_product->getProductDescriptions($product_id);
        $state['data'] = $this->model_catalog_product->getProduct($product_id);
        $state['discounts'] = $this->model_catalog_product->getProductDiscounts($product_id);
        $state['downloads'] = $this->model_catalog_product->getProductDownloads($product_id);
        $state['filters'] = $this->model_catalog_product->getProductFilters($product_id);
        $state['images'] = $this->model_catalog_product->getProductImages($product_id);
        $state['layouts'] = $this->model_catalog_product->getProductLayouts($product_id);
        $state['options'] = $this->model_catalog_product->getProductOptions($product_id);
        $state['related'] = $this->model_catalog_product->getProductRelated($product_id);
        $state['rewards'] = $this->model_catalog_product->getProductRewards($product_id);
        $state['seo_url'] = $this->getSeoUrls("product_id=" . $product_id);
        $state['specials'] = $this->model_catalog_product->getProductSpecials($product_id);
        $state['stores'] = $this->model_catalog_product->getProductStores($product_id);
        $state['product_tabs'] = method_exists("ModelCatalogProduct", "getProductTabbyProductID") ? $this->model_catalog_product->getProductTabbyProductID($product_id) : array();

        if (version_compare(NITROPACK_OPENCART_VERSION, '2', '<')) {
            $state['recurring_profiles'] = $this->model_catalog_product->getProfiles($product_id);
        } else {
            $state['recurring_profiles'] = $this->model_catalog_product->getRecurrings($product_id);
        }

        // Sort stores
        sort($state['stores']);

        // Sort categories
        sort($state['categories']);

        // Sort related
        sort($state['related']);

        // Sort images
        $this->customSortBy($state['images'], 'image');

        // Sort options
        $this->customSortBy($state['options'], 'option_id');

        foreach ($state['options'] as &$option) {
            // Sort option values
            $this->customSortBy($option['product_option_value'], 'option_value_id');
        }

        return $state;
    }

    public function getProductName($state) {
        return $state['descriptions'][$this->config->get('config_language_id')]['name'];
    }

    public function customSortBy(&$target, $key, $sort_array_values = true) {
        uasort($target, function($t1, $t2) use (&$key) {
            return strcmp($t1[$key], $t2[$key]);
        });

        if ($sort_array_values) {
            $target = array_values($target);
        }
    }
}
