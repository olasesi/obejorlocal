<?php

namespace nitropackio\compatibility\traits;

trait CacheLoader {
    public function getCache($key) {
        $value = $this->cache->get($key);

        return !empty($value) ? $value : null;
    }

    public function setCache($key, $value) {
        $this->cache->set($key, $value);
    }
}
