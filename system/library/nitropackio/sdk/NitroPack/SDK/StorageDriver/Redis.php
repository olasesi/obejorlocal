<?php
// Disclaimer mtimes are only accurate for the final entries. But mtimes for parent directories (more than 1 level up the hierarchy) might not be updated correctly when children have been modified
// This is also a bad design for emulating a file system performance wise. Only use this driver when you need shared storage between multiple servers. On a single server with an SSD using the Disk diver is a better idea.
namespace NitroPack\SDK\StorageDriver;

class Redis {
    private $redis;

    private function preparePathInput($path) {
        return $path == DIRECTORY_SEPARATOR ? $path : rtrim($path, DIRECTORY_SEPARATOR);
    }

    public function __construct($host = "127.0.0.1", $port = 6379, $password = NULL, $db = NULL) {
        $this->redis = new \Redis();
        $this->redis->connect($host, $port);

        if ($password !== NULL) {
            $this->redis->auth($password);
        }

        if ($db !== NULL) {
            $this->redis->select($db);
        }
    }

    public function getOsPath($parts) {
        return implode(DIRECTORY_SEPARATOR, $parts);
    }

    public function deleteFile($path) {
        $path = $this->preparePathInput($path);
        $dirKey = dirname($path);
        $fileName = basename($path);

        try {
            $this->redis->zRem($dirKey, $fileName);
            $this->redis->zAdd($dirKey, time(), "::self::mtime::"); // Log the dir mtime
            $this->redis->unlink($path);
        } catch (\Exception $e) {
            return false;
        }

        return true;
    }

    public function createDir($dir) {
        $dir = $this->preparePathInput($dir);
        $now = time();
        $childDir = NULL;
        try {
            while ($childDir !== "") {
                $this->redis->zAdd($dir, $now, "::self::mtime::");
                if ($childDir) {
                    $this->redis->zAdd($dir, $now, $childDir);
                }
                $childDir = basename($dir);
                $dir = dirname($dir);
            }
        } catch (\Exception $e) {
            return false;
        }

        return true;
    }

    private function isDir($dir) {
        $dir = $this->preparePathInput($dir);
        return !!$this->redis->zCard($dir); // if this is a non-empty sorted set then it is a dir
    }

    public function deleteDir($dir) {
        $dir = $this->preparePathInput($dir);
        try {
            if (!$this->isDir($dir)) return true;
            $this->trunkDir($dir) && $this->redis->unlink($dir);
        } catch (\Exception $e) {
            return false;
        }
        return true;
    }

    public function trunkDir($dir) {
        $dir = $this->preparePathInput($dir);
        if (!$this->isDir($dir)) return true;
        $this->dirForeach($dir, function($path) {
            if ($this->isDir($path)) {
                if (!$this->deleteDir($path)) {
                    return false;
                }
            } else {
                if (!$this->deleteFile($path)) {
                    return false;
                }
            }
        });
        return true;
    }

    public function isDirEmpty($dir) {
        $dir = $this->preparePathInput($dir);
        return $this->redis->zCard($dir) > 1;
    }

    public function dirForeach($dir, $callback) {
        $dir = $this->preparePathInput($dir);
        if (!$this->isDir($dir)) return false;
        $it = NULL;
        $prevScanMode = $this->redis->getOption(\Redis::OPT_SCAN);
        $this->redis->setOption(\Redis::OPT_SCAN, \Redis::SCAN_RETRY);
        try {
            while($entries = $this->redis->zScan($dir, $it)) {
                foreach($entries as $entry => $mtime) {
                    if ($entry == "::self::mtime::") continue;
                    $path = $dir != DIRECTORY_SEPARATOR ? $this->getOsPath(array($dir, $entry)) : $dir . $entry;
                    call_user_func($callback, $path);
                }
            }
        } catch (\Exception $e) {
            // TODO: Log an error
            return false;
        } finally {
            $this->redis->setOption(\Redis::OPT_SCAN, $prevScanMode);
        }
        return true;
    }

    public function mtime($path) {
        $path = $this->preparePathInput($path);
        if ($this->isDir($path)) {
            return $this->redis->zScore($path, "::self::mtime::");
        } else {
            $dir = dirname($path);
            $file = basename($path);
            return $this->redis->zScore($dir, $file);
        }
    }

    public function exists($path) {
        $path = $this->preparePathInput($path);
        if ($this->isDir($path)) {
            return true;
        } else {
            $dir = dirname($path);
            $file = basename($path);
            return !!$this->redis->zScore($dir, $file);
        }
    }

    public function getContent($path) {
        $path = $this->preparePathInput($path);
        if ($this->isDir($path)) {
            return false;
        } else {
            return $this->redis->get($path);
        }
    }

    public function setContent($path, $content) {
        $path = $this->preparePathInput($path);
        if ($this->isDir($path)) {
            return false;
        } else {
            try {
                $dir = dirname($path);
                $file = basename($path);
                $this->redis->zAdd($dir, time(), $file);
                $this->redis->set($path, $content);
            } catch (\Exception $e) {
                return false;
            }
            return true;
        }
    }

    public function rename($oldKey, $newKey, $onlyKeyRename = false) {
        $oldKey = $this->preparePathInput($oldKey);
        $newKey = $this->preparePathInput($newKey);

        $oldDir = dirname($oldKey);
        $oldEntry = basename($oldKey);

        $newDir = dirname($newKey);
        $newEntry = basename($newKey);

        try {
            if (!$onlyKeyRename) {
                $mtime = $this->redis->zScore($oldDir, $oldEntry);
                $this->redis->zRem($oldDir, $oldEntry);
                $this->redis->zAdd($newDir, $mtime, $newEntry);
                $this->dirForeach($oldKey, function ($path) use($oldKey, $newKey) {
                    $this->rename($path, str_replace($oldKey, $newKey, $path), true);
                });
            }
            $this->redis->rename($oldKey, $newKey);
        } catch (\Exception $e) {
            return false;
        }
        return true;
    }
}
