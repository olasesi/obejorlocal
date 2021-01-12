<?php
require_once(DIR_SYSTEM . 'journal2/lib/Mobile_Detect.php');

class Journal2Cache {

    /* set cache duration in seconds (3600 means one hour) */
    const EXPIRE = 3600;

    public static $path;
    public static $dir = 'journal-cache/';
    public static $mobile_detect;
    public static $device = 'desktop';
    public static $page_cache_file = null;

    private $skin_id = '1';
    private $store_id = '1';
    private $language_id = '1';
    private $currency_id = '1';
    private $price = '';
    private $logged_in = '0';
    private $developer_mode = '1';
    private $hostname = '';
    private $customer_group_id;

    private $request;

    public function __construct($registry) {
        $config = $registry->get('config');
        $currency = $registry->get('currency');
        $this->request = $registry->get('request');
        $session = $registry->get('session');

        $this->store_id = $config->get('config_store_id');
        $this->language_id = $config->get('config_language_id');
        $this->currency_id = version_compare(VERSION, '2.2', '>=') ? Journal2Utils::getProperty($session->data, 'currency', $config->get('config_currency')) : $currency->getCode();

        if (self::$mobile_detect->isMobile()) {
            if (self::$mobile_detect->isTablet()) {
                self::$device = 'tablet';
            } else {
                self::$device = 'mobile';
            }
        }

        if (version_compare(VERSION, '2.2', '>=')) {
            $customer = new Cart\Customer($registry);
        } else {
            $customer = $registry->get('customer');
        }

        $this->logged_in = $customer->isLogged() ? 1 : 0;
        $this->price = ($config->get('config_customer_price') && $customer->isLogged()) || !$config->get('config_customer_price') ? 'price' : 'noprice';

        if ($customer->isLogged()) {
			$this->customer_group_id = version_compare(VERSION, '2', '>=') ? $customer->getGroupId() : $customer->getCustomerGroupId();
		} else {
			$this->customer_group_id = $config->get('config_customer_group_id');
		}

        $this->hostname = md5(Journal2Utils::getHostName());
    }

    public function getLanguageId() {
        return $this->language_id;
    }

    public function getJournalAssetsFileName($extension) {
        return "journal-skin-{$this->skin_id}-" . self::$device ."-{$this->language_id}-" . JOURNAL_VERSION . ".{$extension}";
    }

    public function setDeveloperMode($mode) {
        $this->developer_mode = self::canCache() ? $mode : false;
    }

    public function getDeveloperMode() {
        if (self::canCache()) {
            if ($this->developer_mode) {
                self::createCacheFiles();
            }
            return $this->developer_mode;
        }
        return true;
    }

    public function setSkinId($skin_id) {
        $this->skin_id = $skin_id;
    }

    public function get($property) {
        if ($this->developer_mode) {
            return null;
        }
        $file_name = $this->getFileName($property);

        if (file_exists($file_name)) {
            return file_get_contents($file_name);
        }

        return null;
    }

    public function set($property, $value) {
        if (!$this->developer_mode && self::canCache()) {
        	if (defined('JOURNAL_CACHE_CG_ID') && JOURNAL_CACHE_CG_ID === true) {
				$file_name = self::getCachePath() . (time() + self::EXPIRE) . "_j2_{$property}_sk{$this->skin_id}_s{$this->store_id}_l{$this->language_id}_c{$this->currency_id}_u{$this->logged_in}_g{$this->customer_group_id}_" . self::$device ."_{$this->price}_" . JOURNAL_VERSION . "_{$this->hostname}.cache.html";
			} else {
				$file_name = self::getCachePath() . (time() + self::EXPIRE) . "_j2_{$property}_sk{$this->skin_id}_s{$this->store_id}_l{$this->language_id}_c{$this->currency_id}_u{$this->logged_in}_" . self::$device ."_{$this->price}_" . JOURNAL_VERSION . "_{$this->hostname}.cache.html";
			}

            file_put_contents($file_name, $value, LOCK_EX);
        }
        return $value;
    }

    private function getFileName($property) {
		if (defined('JOURNAL_CACHE_CG_ID') && JOURNAL_CACHE_CG_ID === true) {
			$file_name = self::getCachePath() . "*_j2_{$property}_sk{$this->skin_id}_s{$this->store_id}_l{$this->language_id}_c{$this->currency_id}_u{$this->logged_in}_g{$this->customer_group_id}_" . self::$device ."_{$this->price}_" . JOURNAL_VERSION . "_{$this->hostname}.cache.html";
		} else {
			$file_name = self::getCachePath() . "*_j2_{$property}_sk{$this->skin_id}_s{$this->store_id}_l{$this->language_id}_c{$this->currency_id}_u{$this->logged_in}_" . self::$device ."_{$this->price}_" . JOURNAL_VERSION . "_{$this->hostname}.cache.html";
		}

        $files = glob($file_name);

        if (!$files) {
            return null;
        }

        $time = (int)substr(str_replace(self::getCachePath(), '', $files[0]), 0, 10);

        if (time() > $time) {
            foreach ($files as $file) {
                if (is_file($file)) {
                    @unlink($file);
                }
            }
            return null;
        }

        return $files[0];
    }

    public static function getCachePath() {
        return self::$path . DIRECTORY_SEPARATOR . self::$dir;
    }

    public static function getCacheDir() {
        return self::$dir;
    }

    public static function canCache() {
        $cache_path = self::getCachePath();

        /* if folder exists and it's writable */
        if (file_exists($cache_path) && is_writable($cache_path)) {
            return true;
        }

        /* try to create folder */
        if (is_writable(self::$path) && @mkdir($cache_path)) {
            return true;
        }

        /* can't use cache */
        return false;
    }

    public static function createCacheFiles() {
        $path = self::getCachePath();
        if (!file_exists($path . '.htaccess')) {
            file_put_contents($path . '.htaccess', file_get_contents(DIR_SYSTEM . 'journal2/data/cache.htaccess'));
        }
        if (!file_exists($path . 'empty.css')) {
            file_put_contents($path . 'empty.css', '');
        }
        if (!file_exists($path . 'empty.js')) {
            file_put_contents($path . 'empty.js', '');
        }
    }

    public static function deleteCache($pattern = '*') {
        $path = self::getCachePath();
        if (!$path) return;
        $files = glob($path . $pattern);
        if ($files) {
            foreach ($files as $file) {
                if (is_file($file)) {
                    @unlink($file);
                }
            }
        }
    }

    public static function deleteModuleCache($pattern) {
        self::deleteCache("*_j2_{$pattern}*.cache.html");
        self::deleteSettingsCache();
    }

    public static function deleteSettingsCache() {
        self::deleteCache('journal-*.css');
        self::deleteCache('journal-*.js');
        self::deleteCache('_*.css');
        self::deleteCache('_*.js');
    }

    public function getRouteCacheKey() {
        $result = array();
        if (isset($this->request->get['path'])) {
            $result[] = 'c' . md5($this->request->get['path']);
        }
        if (isset($this->request->get['product_id'])) {
            $result[] = 'p' . md5($this->request->get['product_id']);
        }
        return implode('_', $result);
    }

    public static function getCurrentUrl() {
        $url = isset($_SERVER['HTTPS']) && (($_SERVER['HTTPS'] == 'on') || ($_SERVER['HTTPS'] == '1')) ? "https://" : "http://";
        $url .= $_SERVER["HTTP_HOST"];
        $url .= $_SERVER["REQUEST_URI"];
        return $url;
    }

    private static function canPageCache() {
        if (!self::canCache()) {
            return false;
        }
        if (isset($_SESSION['customer_id']) || isset($_SESSION['user_id'])) {
            return false;
        }
        $session_keys = array('cart', 'wishlist', 'compare');
        foreach ($session_keys as $session_key) {
            if (isset($_SESSION[$session_key]) && is_array($_SESSION[$session_key]) && count($_SESSION[$session_key]) > 0) {
                return false;
            }
        }
        return true;
    }

    public static function enablePageCache($language = 'en', $currency = 'usd') {
        if (!session_id()) {
            session_start();
        }
        if (self::canPageCache()) {
            self::$page_cache_file = Journal2Cache::$path . '/' . Journal2Cache::$dir . implode('_', array(
                md5(self::getCurrentUrl()),
                $language,
                $currency,
                self::$device
            ));
            if (file_exists(self::$page_cache_file)) {
                echo file_get_contents(self::$page_cache_file);
                exit();
            }
        }
    }

}

Journal2Cache::$path = realpath(DIR_SYSTEM . '../');
Journal2Cache::$mobile_detect = new Mobile_Detect();
