<?php

namespace nitropackio\core;

use nitropackio\core\exception\Domain as DomainException;

class Domain {
    public static function identify() {
        $result = null;

        if (empty($_SERVER['HTTP_HOST'])) {
            throw new DomainException("Cannot identify current host.");
        }

        if (empty($_SERVER['REQUEST_URI'])) {
            throw new DomainException("Cannot identify current host.");
        }

        $url = self::trimLower($_SERVER['HTTP_HOST']) . '/' . self::trimLower($_SERVER['REQUEST_URI']);

        $settings = Setting::load();

        $parsed_url = self::parse($url);

        $best_match = '';

        foreach ($settings as $domain => $config) {
            if (stripos($parsed_url, $domain) === 0 && strlen($domain) > strlen($best_match)) {
                $best_match = $domain;
            }
        }

        if ($best_match === '') {
            return $parsed_url;
        } else {
            return $best_match;
        }
    }

    public static function parse($url) {
        $parsed = parse_url(self::trimLower($url));

        $candidate = array();

        if (isset($parsed['host'])) {
            $candidate[] = $parsed['host'];
        }

        if (isset($parsed['path'])) {
            $candidate[] = self::trimPath($parsed['path']);
        }

        if (empty($candidate)) {
            throw new DomainException("Cannot determine the current URL.");
        }

        return preg_replace('~^www\.~i', '', implode('/', array_filter($candidate)));
    }

    public static function trimLower($text) {
        return strtolower(trim($text, ' /\\'));
    }

    public static function trimPath($path) {
        $parts = explode('/', $path);

        $final = array_pop($parts);

        if ($final != 'index.php') {
            array_push($parts, $final);
        }

        return implode('/', array_filter($parts));
    }
}
