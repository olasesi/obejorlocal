<?php

class Journal2Skin {

    private $db = null;
    private $skin_id = -1;

    public function __construct($db, $skin_id) {
        $this->db = $db;
        $this->skin_id = (int)$skin_id;
    }

    public function load($category = null, $default_only = false) {
        /* load settings from file */
        $default_settings = $this->loadFromFile($category);

        /* load database settings */
        $db_settings = $this->loadFromDb($category);

        /* load available settings */
        $available_settings = $this->loadAvailableSettings();

        /* settings */
        $settings = array();

        /* add default settings */
        foreach ($default_settings as $key => $value) {
            $settings[$key] = $value;
        }

        /* overwrite with db settings */
        if ($default_only === false) {
            foreach ($db_settings as $key => $value) {
                $settings[$key] = $value;
            }
        }

        /* remove undefined settings */
        foreach ($settings as $key => $value) {
            if (!isset($available_settings[$key])) {
                unset($settings[$key]);
            }
        }

        /* return settings */
        return $settings;
    }

    public function save($category, $settings) {
        /* quick checkout one_page settings fix */
        $this->db->query("DELETE FROM " . DB_PREFIX . "journal2_settings WHERE `category` = 'pages' AND `key` LIKE 'one_page_%'");

        /* delete all settings from category */
        $this->db->query("DELETE FROM " . DB_PREFIX . "journal2_settings WHERE `category` = '" . $this->db->escape($category) . "' AND theme_id = '" . $this->skin_id . "'");

        /* save new settings into db */
        foreach ($settings as $key => $value) {
            if (!is_array($value)) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "journal2_settings SET `category` = '" . $this->db->escape($category) . "', theme_id = '" . $this->skin_id . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape($value) . "'");
            } else {
                $this->db->query("INSERT INTO " . DB_PREFIX . "journal2_settings SET `category` = '" . $this->db->escape($category) . "', theme_id = '" . $this->skin_id . "', `key` = '" . $this->db->escape($key) . "', `value` = '" . $this->db->escape(json_encode($value)) . "', serialized = '1'");
            }
        }
    }

    public static function exportAll($db) {
        $skins = self::getAvailableSkins();
        foreach ($skins as $skin) {
            $journal_skin = new self($db, $skin);
            $journal_skin->export();
        }
    }

    private function export() {
        $categories = $this->getCategories();
        $settings = array();
        foreach ($categories as $category) {
            $settings[$category] = $this->load($category);
            /* quick checkout one_page settings fix */
            if ($category === 'pages') {
                foreach ($settings[$category] as $key => $value) {
                    if (strpos($key, 'one_page_') === 0) {
                        unset($settings[$category][$key]);
                    }
                }
            }
        }
        $file = DIR_SYSTEM . 'journal2/data/themes/' . $this->skin_id . '.json';
        file_put_contents($file, json_encode($settings, JSON_PRETTY_PRINT), LOCK_EX);
    }

    private function loadFromFile($category) {
        $json = $this->loadSkinFromFile();
        if ($category !== null) {
            $json = isset($json[$category]) ? $json[$category] : array();
        } else {
            $temp = array();
            foreach ($json as $settings) {
                $temp = array_merge($temp, $settings);
            }
            $json = $temp;
        }

        return $json;
    }

    private function loadFromDb($category) {
        if ($category !== null) {
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "journal2_settings WHERE `category` = '" . $this->db->escape($category) . "' AND `theme_id` = '" . $this->skin_id . "'");
        } else {
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "journal2_settings WHERE `theme_id` = '" . $this->skin_id . "'");
        }

        $settings = array();

        $parent_id = $this->getParentId();
        if ($parent_id !== -1) {
            $parent = new Journal2Skin($this->db, $parent_id);
            $parent_settings = $parent->load($category);
            foreach ($parent_settings as $key => $value) {
                $settings[$key] = $value;
            }
        }

        foreach ($query->rows as $row) {
            $settings[$row['key']] = $row['serialized'] ? json_decode($row['value'], true) : $row['value'];
        }

        return $settings;
    }

    private function loadAvailableSettings() {
        $file = DIR_SYSTEM . 'journal2/data/settings.json';

        if (!file_exists($file)) {
            trigger_error('Journal Error: Could not load config file ' . $file . '!');
            exit();
        }

        $content = file_get_contents($file);

        $content = preg_replace('!/\*.*?\*/!s', '', $content);
        $content = preg_replace('/\n\s*\n/', "\n", $content);

        $json = json_decode($content, true);

        if (function_exists('json_last_error') && json_last_error() !== JSON_ERROR_NONE) {
            trigger_error('Journal Error: Config file ' . $file . ' is not valid!');
            exit();
        }

        return array_flip(array_keys($json));
    }

    private function getCategories() {
        $default_categories = array_keys($this->loadSkinFromFile());
        $query = $this->db->query("SELECT distinct(category) FROM " . DB_PREFIX . "journal2_settings WHERE `theme_id` = '" . $this->skin_id . "'");
        $db_categories = array();
        foreach ($query->rows as $row) {
            $db_categories[] = $row['category'];
        }
        return array_unique(array_merge($default_categories, $db_categories));
    }

    private function loadSkinFromFile() {
        $file = DIR_SYSTEM . 'journal2/data/themes/' . $this->skin_id . '.json';
        if (file_exists($file)) {
            $content = file_get_contents($file);

            $json = json_decode($content, true);

            if (function_exists('json_last_error') && json_last_error() !== JSON_ERROR_NONE) {
                trigger_error('Journal Error: Skin file ' . $file . ' is not valid!');
                exit();
            }

            return $json;
        }
        return array();
    }

    public static function getAvailableSkins() {
        $files = glob(DIR_SYSTEM . 'journal2/data/themes/*.json');

        foreach ($files as &$file) {
            $file = str_replace(array(DIR_SYSTEM . 'journal2/data/themes/', '.json'), array('', ''), $file);
        }

        asort($files);

        return $files;
    }

    private function getParentId() {
        $query = $this->db->query("SELECT parent_id FROM " . DB_PREFIX . "journal2_skins WHERE `skin_id` = '" . $this->skin_id . "'");
        return $query->num_rows ? $query->row['parent_id'] : -1;
    }

}