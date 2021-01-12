<?php
if (!property_exists('Front', 'IS_OC2') && !property_exists('Router', 'IS_OC2')) {
    echo '
        <h3>Journal Installation Error</h3>
        <p>Make sure you have uploaded all Journal files to your server and successfully replaced <b>system/engine/front.php</b> file.</p>
        <p>You can find more information <a href="http://docs.digital-atelier.com/opencart/journal/#/settings/install" target="_blank">here</a>.</p>
    ';
    exit();
}
class Journal2DBUpgrade {

    private $db;
    private $config;

    public function __construct() {
        global $registry;
        $this->db       = $registry->get('db');
        $this->config   = $registry->get('config');
    }

    private function checkColumn($table, $column) {
        if ($this->config->get('journal_db_check_journal2_newsletter_store_id') == 1) {
            return true;
        }

        $query = $this->db->query('SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = "' . $this->db->escape(DB_DATABASE) . '" AND TABLE_NAME = "' . $this->db->escape(DB_PREFIX . $table) . '" AND LCASE(DATA_TYPE) NOT IN ("blob", "text")');

        if (version_compare(VERSION, '2', '>=')) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = '0', `code` = 'config', `key` = '" . $this->db->escape('journal_db_check_' . $table . '_' . $column) . "', `value` = '1'");
        } else {
            $this->db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = '0', `group` = 'config', `key` = '" . $this->db->escape('journal_db_check_' . $table . '_' . $column) . "', `value` = '1'");
        }


        if (!$query->num_rows) {
            return true;
        }

        foreach ($query->rows as $row) {
            if ($row['COLUMN_NAME'] === $column) {
                return true;
            }
        }

        return false;
    }

    private function addColumn($table, $column, $type) {
        $this->db->query('ALTER TABLE `' . $this->db->escape(DB_PREFIX . $table) . '` ADD ' . $column . ' ' . $type);
    }

    private function checkNewsletterStoreId() {
        if (!$this->checkColumn('journal2_newsletter', 'store_id')) {
            $this->addColumn('journal2_newsletter', 'store_id', 'INT NOT NULL DEFAULT 0');
        }
    }

    public static function check() {
        $obj = new Journal2DBUpgrade();

        $obj->checkNewsletterStoreId();
    }

}