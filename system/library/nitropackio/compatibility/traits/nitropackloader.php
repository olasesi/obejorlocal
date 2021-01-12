<?php

namespace nitropackio\compatibility\traits;

use nitropackio\core\Domain;
use nitropackio\core\Nitropack;

trait NitropackLoader {
    protected function nitropackAutoloader() {
        require_once DIR_SYSTEM . 'library/nitropackio/sdk/autoload.php';
    }

    protected function initNitroPackConfig() {
        // Init config
        if (is_file(DIR_CONFIG . 'nitropackio/override.php')) {
            require_once DIR_CONFIG . 'nitropackio/override.php';
        }

        require_once DIR_CONFIG . 'nitropackio/default.php';
    }

    protected function nitropackFromStoreUrl($url, $connect = true) {
        return new Nitropack(Domain::parse($url), $connect);
    }
}
