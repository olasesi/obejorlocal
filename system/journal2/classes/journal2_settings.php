<?php

class Journal2Settings {

    private static $file_settings;
    private $settings;

    public function __construct($registry) {
        $this->settings = array();
        self::$file_settings = array();

        $filename = DIR_SYSTEM . 'journal2/data/settings.json';

        if (!file_exists($filename)) {
            trigger_error('Journal Error: Could not load config file ' . $filename . '!');
            exit();
        }

        $file_content = file_get_contents($filename);

        $file_content = preg_replace('!/\*.*?\*/!s', '', $file_content);
        $file_content = preg_replace('/\n\s*\n/', "\n", $file_content);

        self::$file_settings = json_decode($file_content, true);

        if (function_exists('json_last_error') && json_last_error() !== JSON_ERROR_NONE) {
            trigger_error('Journal Error: Config file ' . $filename . ' is not valid!');
            exit();
        }
    }

    public function getAll() {
        return self::$file_settings;
    }

    public function get($key, $default = null) {
        $value = Journal2Utils::getProperty($this->settings, $key, FALSE);
        return $value === FALSE ? $default : $value;
    }

    public function set($key, $value) {
        $this->settings[$key] = $value;
    }

    public function getAllSettings() {
        return $this->settings;
    }

    public function setAllSettings($settings) {
        $this->settings = array_merge($this->settings, $settings);
    }

}