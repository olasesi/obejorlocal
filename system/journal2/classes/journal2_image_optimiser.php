<?php
require_once DIR_SYSTEM . 'journal2/lib/SmushIt.php';
class Journal2ImageOptimiser {

    public static function getAllImages() {
        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(DIR_IMAGE . 'cache'), RecursiveIteratorIterator::CHILD_FIRST);

        $files = array();
        $size = 0;

        foreach ($iterator as $path) {
            if ($path->isFile()) {
                $filename = $path->__toString();
                if (in_array(mb_strtolower(pathinfo($filename, PATHINFO_EXTENSION)), array('jpeg', 'jpg', 'png'))) {
                    $filesize = filesize($filename);
                    $size += $filesize;
                    $files[] = array(
                        'name'  => $filename,
                        'size'  =>  $filesize
                    );
                }
            }
        }

        return array(
            'total' => $size,
            'files' => $files
        );
    }

    public static function getOptimisedImages() {
        $cached_file = DIR_IMAGE . 'cache/cached.dat';
        if (!file_exists($cached_file)) {
            return array(
                'total' => 0,
                'files' => array()
            );
        }

        $size = 0;

        $files = explode(PHP_EOL, file_get_contents($cached_file));

        foreach ($files as $key => $file) {
            if (!file_exists($file)) {
                unset($files[$key]);
            } else {
                $size += filesize($file);
            }
        }

        file_put_contents($cached_file, implode(PHP_EOL, $files) . (count($files) ? PHP_EOL : ''));

        return array(
            'total' => $size,
            'files' => $files
        );
    }

    public static function setOptimisedImages($images) {
        $cached_file = DIR_IMAGE . 'cache/cached.dat';
        $lines = '';
        foreach ($images as $image) {
            $lines .= $image . PHP_EOL;
        }
        file_put_contents($cached_file, $lines, FILE_APPEND);
    }

    public static function clearOptimisedImages() {
        $cached_file = DIR_IMAGE . 'cache/cached.dat';
        if (file_exists($cached_file)) {
            unlink($cached_file);
        }
    }

    public static function getStatus() {
        $all_images = self::getAllImages();
        $optimised_images = self::getOptimisedImages();
        $optimised_images = $optimised_images['files'];

        $current = count($optimised_images);
        $total = count($all_images['files']);
        $percent = self::percent($current, $total);

        return array(
            'optimised' => $current,
            'total'     => $total,
            'percent'   => $percent
        );
    }

    public static function optimise($all = false) {
        /* clear cache if all parameter is true */
        if ($all) {
            self::clearOptimisedImages();
        }

        /* get all files */
        $all_images = self::getAllImages();
        $all_files = $all_images['files'];
        $total_size = $all_images['total'];

        /* get already optimised files */
        $optimised_images = self::getOptimisedImages();
        $optimised_files = $optimised_images['files'];
        $current_size = $optimised_images['total'];
        $optimised = count($optimised_files);

        /* exclude already optimised images */
        foreach ($all_files as $key => $file) {
            if (in_array($file['name'], $optimised_files)) {
                unset($all_files[$key]);
            }
        }

        /* make array chunks */
        $all_files = array_chunk($all_files, defined('JOURNAL_SMUSH_BATCH_SIZE') ? JOURNAL_SMUSH_BATCH_SIZE : 1);

        /* optimise process */
        foreach ($all_files as $files) {
            try {
                $start = microtime(true);

                $batch = array();
                $batch_size = 0;

                foreach ($files as $file) {
                    $batch[] = $file['name'];
                    $batch_size += $file['size'];
                }

                $current_size += $batch_size;
                $percent = self::percent($current_size, $total_size);

                $smushit = new SmushIt($batch);
                foreach($smushit->get() as $file) {
                    $file = $file[0];
                    $src = pathinfo($file->source, PATHINFO_EXTENSION);
                    $dst = pathinfo($file->destination, PATHINFO_EXTENSION);
                    if ($src === $dst) {
                        copy($file->destination, $file->source);
                    }
                }

                self::setOptimisedImages($batch);
                $optimised++;

                $stop = microtime(true);

                self::send(array('percent' => $percent, 'time' => $stop - $start, 'all' => $all, 'optimised' => $optimised, 'total' => count($all_images['files'])));
            } catch (Exception $e) {
                self::send(array('error' => $e->getMessage()));
            }
        }
    }

    public static function send($message) {
        echo "data: " . json_encode($message) . PHP_EOL;
        echo PHP_EOL;
        ob_flush();
        flush();
    }

    private static function percent($current, $total) {
        if ((float)$current <= 0 || (float)$total <= 0) {
            return 0;
        }
        return round ($current / $total * 10000) / 100;
    }

}