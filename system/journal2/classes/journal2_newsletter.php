<?php

class Journal2Newsletter {

    private $registry;
    private $email;
    private $db;
    private $config;

    public function __construct($registry, $email) {
        $this->registry = $registry;
        $this->db = $registry->get('db');
        $this->config = $registry->get('config');
        $this->email = $this->db->escape($email);

        /* create table if not exists */
        if ($this->db->query(str_replace('_', '\_', 'show tables like "' . DB_PREFIX . 'journal2_newsletter"'))->num_rows === 0) {
            $this->db->query('CREATE TABLE IF NOT EXISTS `' . DB_PREFIX . 'journal2_newsletter` (
                `email` varchar(128) NOT NULL,
                `token` varchar(64) NOT NULL,
                `store_id` INT NOT NULL DEFAULT 0,
                PRIMARY KEY `pk` (`email`)
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8;');
        }
    }

    public function isSubscribed() {
        $query = $this->db->query('SELECT customer_id FROM ' . DB_PREFIX . 'customer WHERE email = "' . $this->email . '" AND newsletter = 1');
        if ($query->num_rows > 0) {
            return true;
        }

        $query = $this->db->query('SELECT email FROM ' . DB_PREFIX . 'journal2_newsletter WHERE email = "' . $this->email . '"');
        if ($query->num_rows > 0) {
            return true;
        }

        return false;
    }

    public function subscribe() {
        $query = $this->db->query('SELECT customer_id FROM ' . DB_PREFIX . 'customer WHERE email = "' . $this->email . '"');
        if ($query->num_rows > 0) {
            $this->db->query('UPDATE ' . DB_PREFIX . 'customer SET newsletter = 1 WHERE customer_id = "' . (int)$query->row['customer_id'] . '"');
        } else {
            $this->db->query('INSERT INTO ' . DB_PREFIX . 'journal2_newsletter (email, token, store_id) VALUES ("' . $this->email . '", "' . sha1(mt_rand()) . '", "' . $this->config->get('config_store_id') . '")');
        }
    }

    public function unsubscribe() {
        $this->db->query('UPDATE ' . DB_PREFIX . 'customer SET newsletter = 0 WHERE email = "' . $this->email . '"');
        $this->db->query('DELETE FROM ' . DB_PREFIX . 'journal2_newsletter WHERE email = "' . $this->email . '"');
    }

    public function getSubscribers() {
        $query = $this->db->query('SELECT email FROM ' . DB_PREFIX . 'journal2_newsletter');
        return $query->rows;
    }

}