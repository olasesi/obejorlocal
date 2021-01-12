<?php

namespace nitropackio\core;

use nitropackio\core\Nitropack;

class CacheExpires extends Library {
    private $min_expires = null;
    private $min_expires_product_id = null;

    public function amendExpiresIfNeeded($new_expires, $product_id) {
        if ($this->min_expires == null || $new_expires < $this->min_expires) {
            $this->min_expires = $new_expires;
            $this->min_expires_product_id = $product_id;
        }
    }

    public function expiresHeader() {
        if ($this->min_expires != null && $this->min_expires > time()) {
            Nitropack::logDebugMessage(sprintf("Set X-Nitro-Expires: %s | Date: %s | Product: %s", $this->min_expires, date('Y-m-d', $this->min_expires), $this->min_expires_product_id));

            Nitropack::header("X-Nitro-Expires: " . $this->min_expires);
        }
    }
}
