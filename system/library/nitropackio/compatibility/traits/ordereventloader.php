<?php

namespace nitropackio\compatibility\traits;

use nitropackio\core\ProductHistory;

trait OrderEventLoader {
    /* START EVENTS */

    public function beforeModifyOrder($route, $args = null) {
        if (!$this->registry->has('nitropack_product_history')) {
            $this->registry->set('nitropack_product_history', new ProductHistory($this->registry));
        }

        if (version_compare(NITROPACK_OPENCART_VERSION, '2.3.0.0', '>=') || $this->loaded->model->module_nitropack->isSettingEnabled('is_using_d_event_manager', $this->config->get('config_store_id'))) {
            $order_id = $args[0];
        } else if (version_compare(NITROPACK_OPENCART_VERSION, '2.2.0.0', '>=')) {
            $order_id = $args;
        } else if (version_compare(NITROPACK_OPENCART_VERSION, '2.1.0.1', '>=')) {
            $order_id = !empty($route['order_id']) ? $route['order_id'] : 0;
        } else {
            $order_id = $route;
        }

        if (is_numeric($order_id)) {
            foreach ($this->loaded->model->module_nitropack->getOrderProducts($order_id) as $order_product) {
                $this->nitropack_product_history->persistProductQuantity((int)$order_product['product_id']);
            }
        }
    }

    public function beforeAddOrder($route, $args = null, $output = null) {
        if (!$this->registry->has('nitropack_product_history')) {
            $this->registry->set('nitropack_product_history', new ProductHistory($this->registry));
        }

        if (version_compare(NITROPACK_OPENCART_VERSION, '2.3.0.0', '>=') || $this->loaded->model->module_nitropack->isSettingEnabled('is_using_d_event_manager', $this->config->get('config_store_id'))) {
            $data = !empty($args[1]['products']) ? $args[1]['products'] : array();
        } else if (version_compare(NITROPACK_OPENCART_VERSION, '2.2.0.0', '>=')) {
            $data = !empty($args['products']) ? $args['products'] : array();
        } else if (version_compare(NITROPACK_OPENCART_VERSION, '2.1.0.1', '>=')) {
            $data = !empty($route['products']) ? $route['products'] : array();
        } else {
            $data = !empty($route['products']) ? $route['products'] : array();
        }

        foreach ($data as $order_product) {
            $this->nitropack_product_history->persistProductQuantity((int)$order_product['product_id']);
        }
    }

    /* END EVENTS */

    public function getOrderProducts($order_id) {
        $sql = "SELECT * FROM `" . DB_PREFIX . "order_product` WHERE order_id=" . (int)$order_id;

        return $this->db->query($sql)->rows;
    }
}
