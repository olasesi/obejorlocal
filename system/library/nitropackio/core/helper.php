<?php

namespace nitropackio\core;

class Helper {
    public static function convertToHumanReadableSize($value) {
        $level = array('YB', 'ZB', 'EB', 'PB', 'TB', 'GB', 'MB', 'kB');
        $unit = 'B';

        while ($value >= 1024) {
            $value = $value / 1024;
            $unit = array_pop($level);
        }

        return round($value, 2, PHP_ROUND_HALF_DOWN) . $unit;
    }

    public static function htmlEntityDecode($text) {
        return html_entity_decode($text, ENT_COMPAT, 'UTF-8');
    }
}
