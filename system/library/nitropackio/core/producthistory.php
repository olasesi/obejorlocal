<?php

namespace nitropackio\core;

class ProductHistory extends Library {
    private $stock = array();

    public function persistProductQuantity($product_id) {
        // We must persist the quantity only the first time. We will compare it with the quantity at the end of the request.
        if (!isset($this->stock[$product_id])) {
            $this->stock[$product_id] = $this->getProductQuantity($product_id);
        }
    }

    public function getProductIdsWithDifference() {
        $result = array();

        foreach ($this->stock as $product_id => $old_quantity) {
            // We only care about the quantity availability, not the actual value
            if ((bool)$old_quantity != (bool)$this->getProductQuantity($product_id)) {
                $result[] = $product_id;
            }
        }

        return $result;
    }

    protected function getProductQuantity($product_id) {
        $sql = "SELECT p.quantity FROM `" . DB_PREFIX . "product` p WHERE p.product_id=" . (int)$product_id;

        $result = $this->db->query($sql);

        if ($result->num_rows > 0) {
            $quantity = (int)$result->row['quantity'];

            return $quantity > 0 ? $quantity : 0;
        }

        return 0;
    }
}