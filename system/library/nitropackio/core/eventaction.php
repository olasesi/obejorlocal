<?php

namespace nitropackio\core;

class EventAction {
    const MESSAGE = "SDK: %s | METHOD: %s | PARAMS (serialized): <<< %s >>>";

    public $nitropack;
    private $method;
    private $params;

    public function __construct($nitropack, $method, $params = array()) {
        $this->nitropack = $nitropack;
        $this->method = $method;
        $this->params = $params;
    }

    public function __toString() {
        return $this->method . ":" . serialize($this->params);
    }

    public function getMessage() {
        return sprintf(self::MESSAGE, $this->nitropack->setting->get('site_id'), $this->method, serialize($this->params));
    }

    public function execute() {
        call_user_func_array(array($this->nitropack->sdk, $this->method), $this->params);
    }
}
