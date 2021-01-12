<?php

require_once __DIR__ . '/init.php';

nitropackio\core\Nitropack::executionBlock(function() {
    ob_start();

    register_shutdown_function(function() {
        nitropackio\hook\Init::executeNitroPackIfActive(function($nitropack) {
            // Do the content output
            echo ob_get_clean();

            // Post-output tasks
            try {
                $nitropack->invalidateEditedProducts();
                nitropackio\core\Nitropack::executeEventActions();
            } catch (\Exception $e) {
                nitropackio\core\Nitropack::logException($e);
            }
        });
    });
});
