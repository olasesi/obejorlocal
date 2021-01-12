<?php

require_once __DIR__ . '/init.php';

nitropackio\hook\Init::executeNitroPackIfActive(function($nitropack) {
    // At this point, we are sure NitroPack is enabled and connected (i.e. active).

    if ($nitropack->isBeaconRequest() && $nitropack->verifyBeaconSignature()) {
        // Handle beacon requests

        // Override incoming cookies. They will later be passed to the beacon HTML
        $nitropack->overrideIncomingSupportedCookies($_POST['nitropack_beacon_cookies']);

        // Set the NitroPack working URL to the one provided by the beacon
        $nitropack->setCurrentUrl(nitropackio\core\Helper::htmlEntityDecode($_POST['nitropack_beacon_url']));

        // Reload the SDK to use the new URL and cookies
        $nitropack->reload();

        // Fetch remote file
        $nitropack->sdk->hasRemoteCache('default', false);

        // Exit, as we have nothing more to do here
        exit;
    } else {
        // Handle standard requests

        // Preserve incoming supported cookies, so that they can be passed to the beacon request
        $nitropack->preserveIncomingSupportedCookies();

        // Serve fresh (non-invalidated) cache, if it exists
        $nitropack->serveLocalCache(false, "INDEX");

        // In case this is not a service request, serve stale invalidated cache if it exists
        if (!$nitropack->isServiceRequest()) {
            $nitropack->serveLocalCache(true, "INDEX");
        }
    }
});

nitropackio\hook\Init::executeNitroPackIfConnected(function($nitropack) {
    if ($nitropack->setting->get('status', false)) {
        // Wrap the OpenCart output in a buffer, and register a shutdown function
        ob_start();

        register_shutdown_function(function() use (&$nitropack) {
            // Serve relevant cookies
            $nitropack->languageFix();
            $nitropack->currencyFix();
            $nitropack->cookie();

            // Get the output
            $buf = ob_get_clean();

            try {
                // Tasks for cacheable pages
                if ($nitropack->isPageCacheable()) {
                    // Tasks only for the case when the request is coming from the worker
                    if ($nitropack->isWorkerRequest()) {
                        // X-Nitro-Expires header
                        $nitropack->expiresHeader();

                        // Push NitroPack tags
                        $nitropack->pushTags();

                        // Attach tracking script
                        $nitropack->tracking($buf);
                    }

                    // Attach the beacon
                    if ($nitropack->getUseBeacon()) {
                        $nitropack->beacon($buf);
                    }
                }
            } catch (\Exception $e) {
                nitropackio\core\Nitropack::header("X-Nitro-Disabled: 1");
                nitropackio\core\Nitropack::$overrideStatus = false;
                nitropackio\core\Nitropack::logException($e);
            }

            // Do the output
            echo $buf;

            // Post-output tasks
            try {
                $nitropack->invalidateEditedProducts();
                nitropackio\core\Nitropack::executeEventActions();
            } catch (\Exception $e) {
                nitropackio\core\Nitropack::$overrideStatus = false;
                nitropackio\core\Nitropack::logException($e);
            }
        });
    }
});