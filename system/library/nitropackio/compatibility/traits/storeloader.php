<?php

namespace nitropackio\compatibility\traits;

trait StoreLoader {
    public function getStores() {
        $result = array();

        $result[0] = array(
            'store_id' => 0,
            'name' => $this->config->get('config_name'),
            'url' => $this->isInAdmin() ? HTTP_CATALOG : HTTP_SERVER,
            'ssl' => $this->isInAdmin() ? HTTPS_CATALOG : HTTPS_SERVER
        );

        $stores = $this->db->query("SELECT * FROM `" . DB_PREFIX . "store` ORDER BY url")->rows;

        foreach ($stores as $store) {
            $result[(int)$store['store_id']] = $store;
        }

        return $result;
    }

    protected function getStore($store_id) {
        $stores = $this->getStores();

        if (isset($stores[$store_id])) {
            return $stores[$store_id];
        } else {
            trigger_error("Store not found: " . $store_id);
        }
    }

    protected function isInAdmin() {
        return basename(rtrim(DIR_TEMPLATE, '/\\')) == 'template';
    }
}
