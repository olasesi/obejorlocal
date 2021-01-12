<?php

namespace nitropackio\hook;

require_once DIR_SYSTEM . 'library/nitropackio/sdk/autoload.php';

// Init config
if (is_file(DIR_CONFIG . 'nitropackio/override.php')) {
    require_once DIR_CONFIG . 'nitropackio/override.php';
}

require_once DIR_CONFIG . 'nitropackio/default.php';

use nitropackio\core\Nitropack;
use nitropackio\core\exception\Domain as DomainException;

class Init {
    public static function executeNitroPackIfActive($callback, $error_callback = null) {
        Nitropack::executionBlock(function() use (&$callback) {
            try {
                $nitropack = Nitropack::getInstance();
            } catch (DomainException $e) {
                // Do nothing in case there is a domain exception error
                return;
            }

            // We only need to use NitroPack if it is enabled, and connected (SDK is active)
            if ($nitropack->isEnabled() && $nitropack->isConnected()) {
                $callback($nitropack);
            }
        }, $error_callback);
    }

    public static function executeNitroPackIfConnected($callback, $error_callback = null) {
        Nitropack::executionBlock(function() use (&$callback) {
            try {
                $nitropack = Nitropack::getInstance();
            } catch (DomainException $e) {
                // Do nothing in case there is a domain exception error
                return;
            }

            // We only need to use NitroPack if it is enabled, and connected (SDK is active)
            if ($nitropack->isConnected()) {
                $callback($nitropack);
            }
        }, $error_callback);
    }

    public static function executeNitroPack($callback, $error_callback = null) {
        Nitropack::executionBlock(function() use (&$callback) {
            try {
                $nitropack = Nitropack::getInstance();
            } catch (DomainException $e) {
                // Do nothing in case there is a domain exception error
                return;
            }

            // We only need to use NitroPack if it is enabled, and connected (SDK is active)
            $callback($nitropack);
        }, $error_callback);
    }
}
