<?php
require_once DIR_SYSTEM . 'journal2/lib/Browser.php';
class Journal2HtmlClasses {

    private $classes = array();

    public function __construct() {
        $browser = new Browser();

        /* browser name */
        $browser_name = null;
        switch ($browser->getBrowser()) {
            case Browser::BROWSER_CHROME:
                $browser_name = 'chrome';
                $this->addClass('webkit');
                break;
            case Browser::BROWSER_FIREFOX:
                $browser_name = 'firefox';
                break;
            case Browser::BROWSER_EDGE;
                $browser_name = 'edge';
                $this->addClass('ie');
                break;
            case Browser::BROWSER_IE:
                $browser_name = 'ie';
                break;
            case Browser::BROWSER_SAFARI:
                $browser_name = 'safari';
                $this->addClass('webkit');
                break;
            case Browser::BROWSER_OPERA:
                $browser_name = 'opera';
                $this->addClass('webkit');
                break;
            default:
                $browser_name = strtolower(str_replace(' ', '', $browser->getBrowser()));
        }

        /* browser version */
        $version = explode('.', $browser->getVersion());
        $version = is_array($version) && count($version) ? $version[0] : '';

        /* browser platform */
        $platform = null;
        switch($browser->getPlatform()) {
            case Browser::PLATFORM_ANDROID:
                $platform = 'android';
                break;
            case Browser::PLATFORM_APPLE:
                $platform = 'mac';
                break;
            case Browser::PLATFORM_IPAD:
                $platform = 'ipad';
                break;
            case Browser::PLATFORM_IPHONE:
                $platform = 'iphone';
                break;
            case Browser::PLATFORM_LINUX:
                $platform = 'linux';
                break;
            case Browser::PLATFORM_WINDOWS:
                $platform = 'win';
                break;
        }

        /* add classes */
        $this->addClass($browser_name);
        $this->addClass($browser_name . $version);
        $this->addClass($platform);
    }

    public function addClass($class) {
        $this->classes[$class] = $class;
    }

    public function hasClass($class) {
        return isset($this->classes[$class]);
    }

    public function removeClass($class) {
        if ($this->hasClass($class)) {
            unset($this->classes[$class]);
        }
    }

    public function getAll() {
        return implode(' ', $this->classes);
    }

}