<?php

namespace nitropackio\compatibility\traits;

trait CurrencyLoader {
    public function getCurrencies() {
        $result = array();

        $currencies = $this->db->query("SELECT * FROM " . DB_PREFIX . "currency WHERE status=1")->rows;

        foreach ($currencies as $currency) {
            $result[$currency['code']] = $currency;
        }

        return $result;
    }
}
