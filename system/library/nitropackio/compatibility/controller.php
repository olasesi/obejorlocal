<?php

namespace nitropackio\compatibility;

use \Controller as OcController;
use nitropackio\compatibility\traits\ExtensionLoader;
use nitropackio\compatibility\traits\LanguageLoader;
use nitropackio\compatibility\traits\OrderEventLoader;
use nitropackio\compatibility\traits\RouteLoader;

class Controller extends OcController {
    use ExtensionLoader;
    use LanguageLoader;
    use OrderEventLoader;
    use RouteLoader;

    public function __construct($registry) {
        parent::__construct($registry);

        require_once DIR_SYSTEM . 'library/nitropackio/sdk/autoload.php';

        $this->initExtension();
    }
}
