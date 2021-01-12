<?php

namespace nitropackio\compatibility\traits;

trait LanguageLoader {
    public function getLanguages() {
        $result = array();

        $languages = $this->db->query("SELECT * FROM " . DB_PREFIX . "language WHERE status=1")->rows;

        foreach ($languages as $language) {
            $result[$language['language_id']] = $language;
        }

        return $result;
    }

    protected function loadLanguage($route) {
        if (version_compare(NITROPACK_OPENCART_VERSION, '3', '>=')) {
            $all_languages = $this->load->language($route, 'nitropackio');

            $loaded_language = $all_languages['nitropackio']->all();
        } else {
            $loaded_language = $this->load->language($route);
        }

        $this->loaded->language = array_merge(
            $this->loaded->language,
            $loaded_language
        );
    }

    protected function languageGet($key) {
        if (isset($this->loaded->language[$key])) {
            return $this->loaded->language[$key];
        } else {
            return $key;
        }
    }
}
