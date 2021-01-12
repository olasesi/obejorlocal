#!/bin/env php
<?php

// Error reporting
error_reporting(E_ALL ^ E_WARNING);

// Initialize important $_SERVER variables
$_SERVER["HTTP_HOST"] = null;
$_SERVER["SERVER_NAME"] = null;
$_SERVER["SERVER_PORT"] = null;
$_SERVER["REQUEST_URI"] = null;

function output($message, $exit_code = null) {
    echo $message . PHP_EOL;

    if ($exit_code !== null) {
        exit($exit_code);
    }
}

function executeCron($settings) {
    // If extension is disabled/disconnected, do nothing
    if (empty($settings->status) || empty($settings->site_id) || empty($settings->site_secret)) {
        return;
    }

    // Load the SDK
    $sdk = new NitroPack\SDK\NitroPack($settings->site_id, $settings->site_secret);

    // Run Cache Warmup
    output(sprintf("%s | %s | Running Cache Warmup", date("Y-m-d H:i:sP"), $settings->site_id));
    $sdk->getApi()->runWarmup();
}

// Kick out intruders
if (php_sapi_name() != "cli") {
    exit;
}

// Require SDK
require_once __DIR__ . '/../sdk/autoload.php';

// Load config
$config_file = __DIR__ . '/../setting/setting.json';

if (!is_file($config_file)) {
    output(sprintf("Config file does not exist: %s", $config_file), 1);
}

if (!is_readable($config_file)) {
    output(sprintf("Config file is not readable: %s", $config_file), 1);
}

if (null === $config = @json_decode(@file_get_contents($config_file))) {
    output(sprintf("Config file cannot be parsed: %s", $config_file), 1);
}

// Iterate the config for each store and do the tasks
foreach ($config as $domain => $settings) {
    executeCron($settings);
}
