<?php
namespace NitroPack\SDK;

class Pagecache {
    protected $url;
    protected $cookies;
    protected $supportedCookies;
    protected $dataDir;
    protected $isAjax;
    protected $referer;
    protected $parent;
    protected $Device;
    protected $useCompression;
    protected $useInvalidated;

    public static function getUrlDir($dataDir, $url, $useInvalidated = false) {
        $safeUrl = str_replace(array('/','?',':',';','=','&amp;','&','.','--','%','~','-amp-'),'-', $url);
        if (defined('NITRO_DEBUG_MODE') && NITRO_DEBUG_MODE) {
            $urlDir = $dataDir . "/" . $safeUrl;
        } else {
            $urlDir = $dataDir . "/" . md5($safeUrl);
        }

        if ($useInvalidated) {
            return $urlDir . "_i";
        } else {
            return $urlDir;
        }
    }

    public function __construct($url, $userAgent, $cookies = array(), $supportedCookies = array(), $isAjax = false, $referer = NULL) {
        $this->url = new \NitroPack\Url($url);
        $this->cookies = $cookies;
        $this->supportedCookies = $supportedCookies;
        $this->dataDir = NULL;
        $this->isAjax = $isAjax;
        $this->Device = new Device($userAgent);
        $this->useCompression = false;
        $this->useInvalidated = false;
        $this->setReferer($referer);
    }

    public function enableCompression() {
        $this->useCompression = true;
        if ($this->parent) {
            $this->parent->enableCompression();
        }
    }

    public function disableCompression() {
        $this->useCompression = false;
        if ($this->parent) {
            $this->parent->disableCompression();
        }
    }

    public function useInvalidated($useInvalidated) {
        $this->useInvalidated = $useInvalidated;
        if ($this->parent) {
            $this->parent->useInvalidated($useInvalidated);
        }
    }

    public function getUseInvalidated() {
        return $this->useInvalidated;
    }

    public function setReferer($referer) {
        $this->referer = $referer ? new \NitroPack\Url($referer) : NULL;
        if ($this->referer) {
            $this->parent = new Pagecache($this->referer->getUrl(), $this->Device->getUserAgent(), $this->cookies, $this->supportedCookies);
        } else {
            $this->parent = NULL;
        }
    }

    public function getReferer() {
        return $this->referer;
    }

    public function getParent() {
        return $this->parent;
    }

    public function setDataDir($dir) {
        if ($dir === null) {
            $this->dataDir = null;
        } else {
            $this->dataDir = $dir . "/" . $this->Device->getType();
        }

        if ($this->parent) {
            $this->parent->setDataDir($dir);
        }
    }

    public function hasCache() {
        // If there is no cache for the parent we do not need to check cache existance for the current object, because we only serve AJAX cache for pages already cached by NitroPack
        if ($this->parent && !$this->parent->hasCache()) return false;
        return Filesystem::fileExists($this->getCachefilePath());
    }

    public function hasExpired($ttl = 86400) {
        // If the cache for the parent is expired we do not need to check cache for the current object, because we only serve AJAX cache for pages already cached by NitroPack
        if ($this->parent && $this->parent->hasExpired($ttl)) return true;
        $cachefilePath = $this->getCachefilePath();
        if (time() - Filesystem::fileMtime($cachefilePath) >= $ttl) {
            return true;
        } else {
            try {
                $headers = Filesystem::fileGetHeaders($cachefilePath);
                if (!empty($headers["x-nitro-expires"]) && time() > (int)$headers["x-nitro-expires"]) {
                    return true;
                }
            } catch (\Exception $e) {
                return true;
            }
        }
        return  false;
    }

    public function setContent($content, $headers = NULL) {
        if (!$this->dataDir) return;

        $filePath = $this->getCachefilePath();
        if (Filesystem::createDir(dirname($filePath))) {
            if (!Filesystem::filePutContents($filePath, $content, $headers)) {
                return false;
            } else {
                $fileInfo = Filesystem::fileGetAll($filePath);
                $fileInfo->headers["Content-Encoding"] = "gzip";
                $headersFlat = array();
                foreach ($fileInfo->headers as $name => $value) {
                    if (is_array($value)) {
                        foreach ($value as $subValue) {
                            $headersFlat[] = $name . ":" . $subValue;
                        }
                    } else {
                        $headersFlat[] = $name . ":" . $value;
                    }
                }
                return Filesystem::filePutContents($filePath . ".gz", gzencode($fileInfo->content, 4), $headersFlat); // save compressed version of the cache file
            }
        }
    }

    public function readfile() {
        $filePath = $this->getCachefilePath();
        if ($this->canUseCompression() && (ini_get("zlib.output_compression") === "0" || ini_set("zlib.output_compression", "0") !== false)) {
            $filePath .= ".gz";
        }
        $file = Filesystem::fileGetAll($filePath);
        foreach ($file->headers as $name => $value) {
            if (is_array($value)) {
                foreach ($value as $subVal) {
                    header($name . ": " . $subVal, false);
                }
            } else {
                header("$name: $value", false);
            }
        }

        echo $file->content;
    }

    public function getFileContents() {
        return Filesystem::fileGetContents($this->getCachefilePath());
    }

    private function cookiePrefix() {
        $prefix = '';

        ksort($this->cookies);

        foreach ($this->cookies as $cookieName=>$cookieValue) {
            foreach ($this->supportedCookies as $cookie) {
                if (preg_match('/' . NitroPack::wildcardToRegex($cookie) . '/', $cookieName)) {
                    $prefix .= $cookieName.'='.$cookieValue.';';
                }
            }
        }

        return substr(md5($prefix), 0, 16);
    }

    private function sslPrefix() {
        return $this->url->getScheme() == "https" ? "ssl-" : "";
    }

    private function ajaxPrefix() {
        return $this->isAjax && $this->parent ? "ajax-" . md5($this->url->getUrl()) . "-" : "";
    }

    private function customCachePrefix() {
        $customCachePrefix = NitroPack::getCustomCachePrefix();
        return $customCachePrefix ? $customCachePrefix . "-" : "";
    }

    private function isCompressionAllowed() {
        return isset($_SERVER['HTTP_ACCEPT_ENCODING']) && strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') !== false;
    }

    private function canUseCompression() {
        return $this->useCompression && $this->isCompressionAllowed() && !headers_sent();
    }

    public function nameOfCachefile() {
        return  $this->customCachePrefix() . $this->ajaxPrefix() . $this->sslPrefix() . $this->cookiePrefix() . ".html";
    }

    public function getCachefilePath() {
        if ($this->isAjax && $this->referer) {
            return self::getUrlDir($this->dataDir, $this->referer->getUrl(), $this->useInvalidated) . "/" . $this->nameOfCachefile();
        }
        return self::getUrlDir($this->dataDir, $this->url->getUrl(), $this->useInvalidated) . "/" . $this->nameOfCachefile();
    }
}
