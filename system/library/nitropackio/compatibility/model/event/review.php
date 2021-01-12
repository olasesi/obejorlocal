<?php

namespace nitropackio\compatibility\model\event;

use nitropackio\compatibility\Model\Admin as NitropackAdminModel;

class Review extends NitropackAdminModel {
    const ADDED_TO_STORE = "{R.C.01} ENABLED review <%s> CREATED in store <%s>.";
    const DELETED_FROM_STORE = "{R.D.01} ENABLED review <%s> DELETED from store <%s>.";
    const EDITED_IN_STORE_UNEXPECTED = "{R.U.00} An UNEXPECTED value of review <%s> EDITED in store <%s>. Differences:\n%s";
    const EDITED_IN_STORE_STATUS_ENABLED_TO_DISABLED = "{R.U.01} ENABLED review <%s> DISABLED in store <%s>.";
    const EDITED_IN_STORE_STATUS_DISABLED_TO_ENABLED = "{R.U.02} DISABLED review <%s> ENABLED in store <%s>.";
    const EDITED_IN_STORE_PRODUCT_DIFFERENT = "{R.U.03} review <%s> in store <%s> has different PRODUCT | Before: <<< %s >>> | After: <<< %s >>>";
    const SKIP_ACTION_ADD = "SKIPPING review <%s> ADD action for store <%s>.";
    const SKIP_ACTION_EDIT = "SKIPPING review <%s> EDIT action for store <%s>.";
    const SKIP_ACTION_DELETE = "SKIPPING review <%s> DELETE action for store <%s>.";

    // User-friendly reasons and actions
    const TEXT_ADD = "adding";
    const TEXT_EDIT = "editing";
    const TEXT_DELETE = "deleting";
    const TEXT_ALL = "all";
    const TEXT_SOME = "affected";
    const TEXT_INVALIDATE = "invalidation";
    const TEXT_PURGE = "purge";
    const TEXT_REASON = "Automatic %s of %s store pages after %s a review for the product '%s'.";

    public function __construct($registry) {
        parent::__construct($registry);

        $this->load->model("catalog/review"); // We need this for OC 1.x
        $this->load->model("catalog/product"); // We need this for OC 1.x
    }

    public function afterAdd($review_id) {
        $after = $this->getReviewState($review_id);

        if ((bool)$after['data']['status']) {
            foreach ($after['stores'] as $store_id) {
                $this->debugLog(sprintf(self::ADDED_TO_STORE, $review_id, $store_id));

                if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_review', $store_id)) {
                    if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                        $this->purge("product", $after["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_ADD, $this->getProductName($after)));
                    } else {
                        $this->invalidate("product", $after["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_ADD, $this->getProductName($after)));
                    }
                } else {
                    $this->debugLog(sprintf(self::SKIP_ACTION_ADD, $review_id, $store_id));
                }
            }
        }
    }

    public function beforePersist($review_id) {
        $this->nitropack_entity_state->setState("review", $review_id, $this->getReviewState($review_id));
    }

    public function afterEdit($review_id) {
        if (null !== $before = $this->getBefore("review", $review_id)) {
            $after = $this->getReviewState($review_id);

            $stores = array_unique(array_merge($before['stores'], $after['stores']));

            foreach ($stores as $store_id) {
                $triggered_expected_case = false;

                // Enabled review is now Disabled
                if ((bool)$before['data']['status'] && !(bool)$after['data']['status']) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_STATUS_ENABLED_TO_DISABLED, $review_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_review', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge("product", $before["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            } else {
                                $this->invalidate("product", $before["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            }
                        } else {
                            $this->purge("product", $before["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $review_id, $store_id));
                    }

                    $triggered_expected_case = true;
                }

                // Disabled review is now Enabled
                if (!(bool)$before['data']['status'] && (bool)$after['data']['status']) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_STATUS_DISABLED_TO_ENABLED, $review_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_review', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                            $this->purge("product", $before["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                        } else {
                            $this->invalidate("product", $before["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $review_id, $store_id));
                    }

                    $triggered_expected_case = true;
                }

                if ((int)$before["data"]["product_id"] != (int)$after["data"]["product_id"]) {
                    $this->debugLog(sprintf(self::EDITED_IN_STORE_PRODUCT_DIFFERENT, $review_id, $store_id, (int)$before["data"]["product_id"], (int)$after["data"]["product_id"]));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_review', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                            $this->purge("product", $before["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($before)));
                        } else {
                            $this->invalidate("product", $before["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($before)));
                        }
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                            $this->purge("product", $after["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                        } else {
                            $this->invalidate("product", $after["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $review_id, $store_id));
                    }

                    $triggered_expected_case = true;
                }

                // No expected case was found, revert to default behavior if a field was changed
                if (!$triggered_expected_case) {
                    $difference_in = array();

                    if ($this->hasStateDifference($before, $after, $difference_in, array(), array('date_modified'))) {
                        $this->debugLog(sprintf(self::EDITED_IN_STORE_UNEXPECTED, $review_id, $store_id, implode(PHP_EOL, $difference_in)));

                        if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_review', $store_id)) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge("product", $before["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($before)));
                            } else {
                                $this->invalidate("product", $before["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($before)));
                            }
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge("product", $after["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            } else {
                                $this->invalidate("product", $after["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_EDIT, $this->getProductName($after)));
                            }
                        } else {
                            $this->debugLog(sprintf(self::SKIP_ACTION_EDIT, $review_id, $store_id));
                        }
                    }
                }
            }
        }
    }

    public function afterDelete($review_id) {
        if (null !== $before = $this->getBefore("review", $review_id)) {
            if ((bool)$before['data']['status']) {
                foreach ($before['stores'] as $store_id) {
                    $this->debugLog(sprintf(self::DELETED_FROM_STORE, $review_id, $store_id));

                    if ($this->isSettingEnabled('status', $store_id) && $this->isSettingEnabled('auto_cache_clear_admin_review', $store_id)) {
                        if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_INVALIDATE) {
                            if (NITROPACK_AUTO_CACHE_CLEAR_ALWAYS_PURGE) {
                                $this->purge("product", $before["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_DELETE, $this->getProductName($before)));
                            } else {
                                $this->invalidate("product", $before["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_INVALIDATE, self::TEXT_SOME, self::TEXT_DELETE, $this->getProductName($before)));
                            }
                        } else {
                            $this->purge("product", $before["data"]["product_id"], $store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_SOME, self::TEXT_DELETE, $this->getProductName($before)));
                        }
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_DELETE, $review_id, $store_id));
                    }
                }
            }
        }
    }

    public function getReviewState($review_id) {
        $state = array();
        $state['data'] = $this->model_catalog_review->getReview($review_id);
        $state['stores'] = $this->model_catalog_product->getProductStores($state['data']['product_id']);

        return $state;
    }

    public function getProductName($state) {
        $product_descriptions = $this->model_catalog_product->getProductDescriptions($state['data']['product_id']);

        if (!empty($product_descriptions[$this->config->get('config_language_id')]['name'])) {
            return $product_descriptions[$this->config->get('config_language_id')]['name'];
        }

        return 'N/A';
    }
}
