<?php

namespace nitropackio\core;

use nitropackio\core\exception\Setting as SettingException;

class Setting {
    const FILE = 'setting.json';

    private $data;
    private $domain;

    public function __construct($domain) {
        $this->domain = $domain;

        $this->initStorageDir();

        $this->initFile();

        $data = self::load();

        if (isset($data[$this->domain])) {
            $this->data = $data[$this->domain];
        } else {
            $this->data = array();
        }
    }

    public function get($key, $default = null) {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }

        return $default;
    }

    public function has($key) {
        return isset($this->data[$key]);
    }

    public function set($key, $value) {
        $this->data[$key] = $value;
    }

    public function delete($key) {
        unset($this->data[$key]);
    }

    public function save() {
        $data = self::load();

        $data[$this->domain] = $this->data;

        if (false === $temp = @tempnam(NITROPACK_DIR_SETTING, 'tmp')) {
            throw new SettingException("Cannot create a temp settings file.");
        }

        if (!@file_put_contents($temp, json_encode($data), LOCK_EX)) {
            throw new SettingException("Cannot write to the NitroPack temp setting file.");
        }

        if (!@rename($temp, NITROPACK_DIR_SETTING . self::FILE)) {
            throw new SettingException("Cannot write to the NitroPack setting file.");
        }
    }

    public function purge() {
        $this->data = array();

        $this->save();
    }

    public static function load() {
        if (is_file(NITROPACK_DIR_SETTING . self::FILE)) {
            $data = @json_decode(file_get_contents(NITROPACK_DIR_SETTING . self::FILE), true);

            if (!is_array($data)) {
                throw new SettingException("The NitroPack settings cannot be read.");
            }

            return $data;
        } else {
            return [];
        }
    }

    private function initStorageDir() {
        if (!is_dir(NITROPACK_DIR_SETTING) && !@mkdir(NITROPACK_DIR_SETTING, 0700)) {
            throw new SettingException("Cannot create NitroPack setting directory: " . NITROPACK_DIR_SETTING);
        }
    }

    private function initFile() {
        if (!is_file(NITROPACK_DIR_SETTING . self::FILE) || filesize(NITROPACK_DIR_SETTING . self::FILE) === 0) {
            if (!is_writable(NITROPACK_DIR_SETTING)) {
                throw new SettingException("Cannot write to NitroPack setting directory: " . NITROPACK_DIR_SETTING);
            } else if (!file_put_contents(NITROPACK_DIR_SETTING . self::FILE, '[]', LOCK_EX)) {
                throw new SettingException("Cannot initialize the NitroPack settings file! Is there enough disk space?");
            }
        }
    }
}
