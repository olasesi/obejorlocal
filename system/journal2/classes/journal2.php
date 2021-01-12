<?php

class Journal2 {

    private static $elapsed_time = 0;
    private static $current_time = array();

    /** @var Journal2Cache */
    public $cache;

    /** @var Journal2Config */
    public $config;

    /** @var Journal2Settings */
    public $settings;

    /** @var Journal2Minifier */
    public $minifier;

    /** @var Journal2GoogleFonts */
    public $google_fonts;

    /** @var mixed */
    public $css_settings;

    /** @var Journal2HtmlClasses */
    public $html_classes;

    /** @var Journal2Page */
    public $page;

    /** @var Mobile_Detect */
    public $mobile_detect;

    private static function getCurrentTime($data) {
        return isset(self::$current_time[$data]) ? self::$current_time[$data] : 0;
    }

    public static function startTimer($data) {
        self::$current_time[$data] = self::getCurrentTime($data) + microtime(true);
    }

    public static function stopTimer($data) {
        self::$current_time[$data] = microtime(true) - self::$current_time[$data];
        self::$elapsed_time += self::$current_time[$data];
    }

    public static function getTimer() {
        return self::$current_time;
    }

    public static function getElapsedTime() {
        return self::$elapsed_time;
    }

}