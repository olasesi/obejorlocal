<?php

class Journal2Export {

    const JOURNAL_TABLES        = 'journal_tables';
    const JOURNAL_BLOG_TABLES   = 'journal_blog_tables';
    const LAYOUTS_TABLES        = 'layouts_tables';
    const STORE_DATA_TABLES     = 'store_data_tables';

    const OC1 = 1;
    const OC2 = 2;

    private $from;
    private $to;
    private $dummy_images = false;

    private static $TABLES = array(
        'journal_tables' => array(
            'journal2_config',
            'journal2_modules',
            'journal2_settings',
            'journal2_skins'
        ),
        'journal_blog_tables' => array(
            'journal2_blog_category',
            'journal2_blog_category_description',
            'journal2_blog_category_to_layout',
            'journal2_blog_category_to_store',
            'journal2_blog_comments',
            'journal2_blog_post',
            'journal2_blog_post_description',
            'journal2_blog_post_to_category',
            'journal2_blog_post_to_layout',
            'journal2_blog_post_to_product',
            'journal2_blog_post_to_store'
        ),
        'store_data_tables' => array(
            'attribute',
            'attribute_description',
            'attribute_group',
            'attribute_group_description',

            'category',
            'category_description',
            'category_filter',
            'category_path',
            'category_to_layout',
            'category_to_store',

            'information',
            'information_description',
            'information_to_layout',
            'information_to_store',

            'layout',
            'layout_route',

            'manufacturer',
            'manufacturer_to_store',

            'option',
            'option_description',
            'option_value',
            'option_value_description',

            'product',
            'product_attribute',
            'product_description',
            'product_discount',
            'product_filter',
            'product_image',
            'product_option',
            'product_option_value',
            'product_related',
            'product_reward',
            'product_special',
            'product_to_category',
            'product_to_download',
            'product_to_layout',
            'product_to_store',

            'stock_status',

//            'url_alias'
        )
    );

    /** @var DBMySQL*/
    private $db;
    private $exported_tables = array();

    public function __construct($db, $from, $to) {
        $this->db   = $db;
        $this->from = $from;
        $this->to   = $to;
    }

    public function addTables($tables) {
        $this->exported_tables = array_unique(array_merge($this->exported_tables, self::$TABLES[$tables]));
    }

    public function addDummyImages() {
        $this->dummy_images = true;
    }

    public function export() {
        $result = '';

        $result .= '-- EXPORT FOR: ' . $this->to . ";\n\n";;

        foreach ($this->exported_tables as $table) {
            /* add table prefix */
            $table = DB_PREFIX . $table;

            /* build query */
            $sql = 'SELECT * FROM `' . $table . '`';

            /* remove system settings */
            if ($table === DB_PREFIX . 'journal2_config') {
                $sql .= ' WHERE `key` <> "system_settings"';
            }

            /* truncate table */
            $result .= 'TRUNCATE TABLE `' . $table . '`;' . "\n\n";

            /* add increment for journal_skins */
            if ($table === DB_PREFIX . 'journal2_skins') {
                $result .= "ALTER TABLE `" . $table . "` AUTO_INCREMENT = 100;" . "\n\n";
            }

            /* dump results*/
            $result .= $this->dump($this->db->query($sql)->rows, $table);

            /* add line separator between queries */
            $result .= "\n\n";
        }

        /* export extensions */
        $extensions = $this->db->query("SELECT * FROM `" . DB_PREFIX . "extension` WHERE `type` = \"module\" AND `code` LIKE \"journal2%\"", DB_PREFIX . 'extension')->rows;
        $extensions = $this->unsetFields($extensions, 'extension_id');
        $result .= "DELETE FROM `" . DB_PREFIX . "extension` WHERE `type` = \"module\" AND `code` LIKE \"journal2%\";" . "\n\n";
        $result .= $this->dump($extensions,  DB_PREFIX . 'extension');
        $result .= "\n\n";

        /* export module placements */
        if ($this->from === self::OC1) {
            $modules = $this->db->query("SELECT `group` AS module, `value` FROM `" . DB_PREFIX . "setting` WHERE `key` LIKE \"journal2_%_module\"")->rows;
            foreach ($modules as &$v) {
                $v['value'] = unserialize($v['value']);
            }
        } else {
            $modules_status = array();
            $modules = array();

            foreach ($this->db->query("SELECT * FROM `" . DB_PREFIX . "setting` WHERE `key` LIKE \"journal2_%\"")->rows as $row) {
                $id = str_replace('_status', '', $row['key']);
                $id = str_replace($row['code'] . '_', '', $id);
                $modules_status[$id] = $row['value'];
            }

            foreach ($this->db->query("SELECT * FROM `" . DB_PREFIX . "layout_module` WHERE `code` LIKE \"journal2_%\"")->rows as $row) {
                $code = explode('.', $row['code']);
                $id = $code[1];
                $code = $code[0];
                if (!isset($modules[$code])) {
                    $modules[$code] = array(
                        'module'    => $code,
                        'value'     => array()
                    );
                }
                $modules[$code]['value'][] = array(
                    'module_id' => $id,
                    'layout_id' => $row['layout_id'],
                    'position'  => $row['position'],
                    'status'    => isset($modules_status[$row['layout_module_id']]) ? $modules_status[$row['layout_module_id']] : 0,
                    'sort_order'=> $row['sort_order'],
                );
            }

        }

        if ($this->to === self::OC1) {
            $result .= "DELETE FROM `" . DB_PREFIX . "setting` WHERE `key` LIKE \"%_module\";"  . "\n\n";;
            $extensions = array();
            foreach ($modules as $module) {
                $result .= "INSERT INTO `" . DB_PREFIX . "setting` (`setting_id`, `store_id`, `group`, `key`, `value`, `serialized`) VALUES (NULL, '0', '" . $module['module'] . "', '" . $module['module'] . "_module', '" . serialize($module['value']) . "', '1');" . "\n";
                $extensions[$module['module']] = array(
                    'extension_id'  => 'NULL',
                    'type'          => 'module',
                    'code'          => $module['module']
                );
            }

            if ($this->from === self::OC2) {
                $result .= $this->dump($extensions,  DB_PREFIX . 'extension');
            }
        } else {
            $result .= "DELETE FROM `" . DB_PREFIX . "layout_module` WHERE `code` LIKE \"journal2_%\";"  . "\n\n";;
            $result .= "DELETE FROM `" . DB_PREFIX . "setting` WHERE `key` LIKE \"journal2_%\";"  . "\n\n";;
            foreach ($modules as $module) {
                foreach ($module['value'] as $m) {
                    $result .= "INSERT INTO `" . DB_PREFIX . "layout_module` (`layout_module_id`, `layout_id`, `code`, `position`, `sort_order`) VALUES (NULL, '" . $m['layout_id'] . "', '" . $module['module'] . "." . $m['module_id'] . "', '" . $m['position'] . "', '" . $m['sort_order'] . "');" . "\n";
                    $result .= "INSERT INTO `" . DB_PREFIX . "setting` (`setting_id`, `store_id`, `code`, `key`, `value`, `serialized`) VALUES (NULL, '0', '" . $module['module'] . "', CONCAT('" . $module['module'] . "_', LAST_INSERT_ID(), '_status'), '" . $m['status'] . "', '0');" . "\n";
                }
            }
        }

        return $result;
    }

    private function dump($rows, $table_name) {
        $output = '';

        foreach ($rows as $row) {
            $fields = '';

            /* manufacturer fix */
            if ($table_name === DB_PREFIX . 'manufacturer') {
                foreach ($row as $key => $value) {
                    if (!in_array($key, array('manufacturer_id', 'name', 'image', 'sort_order'))) {
                        unset($row[$key]);
                    }
                }
            }

            /* meta category_description fix */
            if ($this->to === self::OC1 && $table_name === DB_PREFIX . 'category_description') {
                foreach ($row as $key => $value) {
                    if (in_array($key, array('meta_title'))) {
                        unset($row[$key]);
                    }
                }
            }

            /* meta information_description fix */
            if ($this->to === self::OC1 && $table_name === DB_PREFIX . 'information_description') {
                foreach ($row as $key => $value) {
                    if (in_array($key, array('meta_title', 'meta_description', 'meta_keyword'))) {
                        unset($row[$key]);
                    }
                }
            }

            /* meta product_description fix */
            if ($this->to === self::OC1 && $table_name === DB_PREFIX . 'product_description') {
                foreach ($row as $key => $value) {
                    if (in_array($key, array('meta_title'))) {
                        unset($row[$key]);
                    }
                }
            }

            /* product options fix */
            if ($table_name === DB_PREFIX . 'product_option') {
                if ($this->from === self::OC1 && $this->to === self::OC2) {
                    $row['value'] = $row['option_value'];
                    unset($row['option_value']);
                }
                if ($this->from === self::OC2 && $this->to === self::OC1) {
                    $row['option_value'] = $row['value'];
                    unset($row['value']);
                }
            }

            foreach (array_keys($row) as $value) {
                $fields .= '`' . $value . '`, ';
            }

            $values = '';

            foreach ($row as $key => $value) {

                $value = str_replace(array("\x00", "\x0a", "\x0d", "\x1a"), array('\0', '\n', '\r', '\Z'), $value);
                $value = str_replace(array("\n", "\r", "\t"), array('\n', '\r', '\t'), $value);
                $value = str_replace('\\', '\\\\',	$value);
                $value = str_replace('\'', '\\\'',	$value);
                $value = str_replace('\\\n', '\n',	$value);
                $value = str_replace('\\\r', '\r',	$value);
                $value = str_replace('\\\t', '\t',	$value);

                /* check dummy image */
                if ($this->dummy_images && $value && $key === 'image' && in_array($table_name, array(
                        DB_PREFIX . 'category',
                        DB_PREFIX . 'manufacturer',
                        DB_PREFIX . 'product',
                        DB_PREFIX . 'product_image'
                    ))) {
                    $value = $this->to === self::OC2 ? 'no_image.png' : 'data/journal2/no_image_large.jpg';
                }
                /* end check dummy image */

                /* json fix */
                if (in_array($table_name, array(
                    DB_PREFIX . 'journal2_config',
                    DB_PREFIX . 'journal2_modules',
                    DB_PREFIX . 'journal2_newsletter',
                    DB_PREFIX . 'journal2_settings',
                    DB_PREFIX . 'journal2_skins',
                ))) {
                    $value = str_replace('\n', '\\\n', $value);
                    $value = str_replace('\t', '\\\t', $value);
                }
                /* end json fix */

                $values .= '\'' . $value . '\', ';
            }

            $output .= str_replace("'NULL'", 'NULL', 'INSERT INTO `' . $table_name . '` (' . preg_replace('/, $/', '', $fields) . ') VALUES (' . preg_replace('/, $/', '', $values) . ');') . "\n";
        }

        return $output;
    }

    private function unsetFields($values, $fields) {
        foreach ($values as &$array) {
            foreach ($array as $key => &$value) {
                if (is_array($fields)) {
                    foreach ($fields as $field) {
                        if ($key === $field) {
                            $value = 'NULL';
                        }
                    }
                } else if ($key === $fields) {
                    $value = 'NULL';
                }
            }
        }
        return $values;
    }

    public function import($sql) {
        foreach (explode(";\n", $sql) as $sql) {
            $sql = trim($sql);

            if ($sql) {
                $this->db->query($sql);
            }
        }
    }

}
