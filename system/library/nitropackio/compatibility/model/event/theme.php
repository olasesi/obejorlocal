<?php

namespace nitropackio\compatibility\model\event;

use nitropackio\compatibility\Model\Admin as NitropackAdminModel;

class Theme extends NitropackAdminModel {
    const MODIFIED_IN_STORE = "{T.U.01} Theme MODIFIED in store <%s>. Differences:\n%s";
    const SKIP_ACTION_MODIFY = "SKIPPING theme MODIFY action for store <%s>.";

    // User-friendly reasons and actions
    const TEXT_MODIFY = "modifying";
    const TEXT_ALL = "all";
    const TEXT_SOME = "affected";
    const TEXT_INVALIDATE = "invalidation";
    const TEXT_PURGE = "purge";
    const TEXT_REASON = "Automatic %s of %s store pages after %s the store theme.";

    public function beforePersist() {
        foreach (array_keys($this->getStores()) as $store_id) {
            $this->nitropack_entity_state->setState("theme", $store_id, $this->getVariationCookies($store_id));
        }
    }

    public function afterPersist() {
        foreach (array_keys($this->getStores()) as $store_id) {
            if (null != $before = $this->getBefore("theme", $store_id, true)) {
                $after = $this->getVariationCookies($store_id);

                $difference_in = array();

                if ($this->hasStateDifference($before, $after, $difference_in, array())) {
                    // First, push the new variation cookies
                    $this->pushVariationCookies($store_id);

                    $this->debugLog(sprintf(self::MODIFIED_IN_STORE, $store_id, implode(PHP_EOL, $difference_in)));

                    // Only for this case, we are omitting $this->isSettingEnabled('auto_cache_clear_admin_theme', $store_id)
                    // We want to always purge the whole cache, as the variation cookies amendment is critical for the whole cache

                    if ($this->isSettingEnabled('status', $store_id)) {
                        // We must always do a complete purge because we want the service to generate cache files, containing the Set-Cookie headers for the new variation cookies. I.e. we want to avoid cached files serving content without the new variation cookies.
                        $this->purgeEverything($store_id, sprintf(self::TEXT_REASON, self::TEXT_PURGE, self::TEXT_ALL, self::TEXT_MODIFY));
                    } else {
                        $this->debugLog(sprintf(self::SKIP_ACTION_MODIFY, $store_id));
                    }
                }
            }
        }
    }
}
