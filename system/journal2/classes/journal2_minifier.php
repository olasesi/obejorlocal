<?php

require_once DIR_SYSTEM . 'journal2/lib/Minify/CSS/Compressor.php';
require_once DIR_SYSTEM . 'journal2/lib/Minify/CommentPreserver.php';
require_once DIR_SYSTEM . 'journal2/lib/Minify/CSS/UriRewriter.php';
require_once DIR_SYSTEM . 'journal2/lib/Minify/CSS.php';
require_once DIR_SYSTEM . 'journal2/lib/Minify/JSMin.php';
require_once DIR_SYSTEM . 'journal2/lib/Minify/HTML.php';

function j2_js_minify ($js) {
    return JSMin::minify($js);
}

class Journal2Minifier {

    /** @var Journal2Cache */
    private $cache;

    private $minify_css = false;
    private $minify_js = false;
    private $google_recaptcha = false;

    private $path = null;
    private $dir = null;

    private $styles = array();
    private $scripts = array(
        'header'   => array(),
        'footer'   => array(),
        'external' => array(),
    );

    public function __construct($cache) {
        $this->cache = $cache;
        $this->path = Journal2Cache::getCachePath();
        $this->dir = Journal2Cache::getCacheDir();
    }

    public function getMinifyCss() {
        return $this->minify_css;
    }

    public function setMinifyCss($value) {
        $this->minify_css = $value;
    }

    public function getMinifyJs() {
        return $this->minify_js;
    }

    public function setMinifyJs($value) {
        $this->minify_js = $value;
    }

    public function addStyle($href) {
        if ($href === 'catalog/view/javascript/jquery/magnific/magnific-popup.css') {
            return;
        }
        $this->styles[md5($href)] = $href;
    }

    public function addScript($src, $position = 'header') {
        if ($src === 'catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js') {
            return;
        }

        if (strpos($src, 'http') === 0) {
            $this->scripts['external'][md5($src)] = $src;
        } else {
            $this->scripts[$position][md5($src)] = $src;
        }
    }

    public function loadGoogleRecaptcha() {
        return false;
    }

    public function css($src = false) {
        if ($this->cache->canCache() && !$this->cache->getDeveloperMode() && $this->minify_css) {
            /* generate file if not exits */
            $combined_css_file = '_' . $this->getHash($this->styles, 'css');
            if (!file_exists($this->path . $combined_css_file)) {
                /* parse all styles, generate corresponding minified css file */
                foreach ($this->styles as $style) {
                    $file = $this->path . $this->getHash($style, 'css');
                    if (!file_exists($file)) {
                        $css_file = realpath(DIR_SYSTEM . '../' . $this->removeQueryString($style));
                        if (!file_exists($css_file)) {
                            continue;
                        }
                        $content = file_get_contents($css_file);
                        $content_min = Minify_CSS::minify($content, array(
                            'preserveComments' => false,
                            'currentDir' => dirname($css_file)
                        ));
                        file_put_contents($file, $content_min, LOCK_EX);
                    }
                }

                /* combine all styles into one file */
                $fh = @fopen($this->path . $combined_css_file, 'w');
                flock($fh, LOCK_EX);
                foreach ($this->styles as $style) {
                    $file = $this->path . $this->getHash($style, 'css');
                    if (!file_exists($file)) {
                        continue;
                    }
                    $content = file_get_contents($file);
                    fwrite($fh, $content);
                }

                /* append journal.css at the end */
                $options = array(
                    'preserveComments'      => false,
                );
                if (Journal2Utils::staticAsset('') === '') {
                    $options['currentDir'] = realpath($this->path . '../');
                } else {
                    $options['prependRelativePath'] = Journal2Utils::staticAsset('');
                }
                if (is_file($this->path . $this->cache->getJournalAssetsFileName('css'))) {
                    $content_min = Minify_CSS::minify(file_get_contents($this->path . $this->cache->getJournalAssetsFileName('css')), $options);
                } else {
                    $content_min = '';
                }
                fwrite($fh, $content_min);
                flock($fh, LOCK_UN);
                fclose($fh);
            }
            /* return link tag */
            if ($src) {
                return Journal2Utils::staticAsset($this->dir . $combined_css_file);
            }
            return $this->printStyle($this->dir . $combined_css_file);
        }
        $assets = '';
        foreach ($this->styles as $style) {
            $assets .= $this->printStyle($style);
        }
        return $assets;
    }

    public function js($position = 'header', $src= false) {
        // mm fix
        $ckeditor_script = null;

        if ($this->cache->canCache() && !$this->cache->getDeveloperMode() && $this->minify_js) {
            /* generate file if not exits */
            $combined_js_file = '_' . $this->getHash($this->scripts[$position], 'js', $this->cache->getLanguageId());
            if (!file_exists($this->path . $combined_js_file)) {
                /* parse all scripts, generate corresponding minified js file */
                foreach ($this->scripts[$position] as $script) {
                    $file = $this->path . $this->getHash($script, 'js');

                    if (strpos($script, 'multimerch/ckeditor/ckeditor.js') !== false) {
                        $ckeditor_script = $script;
                        continue;
                    }

                    if (!file_exists($file)) {
                        $js_file = realpath(DIR_SYSTEM . '../' . $this->removeQueryString($script));
                        if (!file_exists($js_file)) {
                            continue;
                        }
                        $content = file_get_contents($js_file);

                        try {
							$content_min = JSMin::minify($content);
						} catch (Exception $e) {
                        	$content_min = $content;
						}

                        file_put_contents($file, $content_min, LOCK_EX);
                    }
                }

                /* combine all scripts into one file */
                $fh = @fopen($this->path . $combined_js_file, 'w');
                flock($fh, LOCK_EX);
                foreach ($this->scripts[$position] as $script) {
                    $file = $this->path . $this->getHash($script, 'js');
                    if (!file_exists($file)) {
                        continue;
                    }
                    $content = file_get_contents($file);
                    fwrite($fh, ';' . $content);
                }

                /* append journal.js at the end */
                if ($position === 'footer' && is_file($this->path . $this->cache->getJournalAssetsFileName('js'))) {
                    fwrite($fh, file_get_contents($this->path . $this->cache->getJournalAssetsFileName('js')));
                }
                flock($fh, LOCK_UN);
                fclose($fh);
            }
            /* return link tag */
            if ($src) {
                return Journal2Utils::staticAsset($this->dir . $combined_js_file);
            }
            if ($position === 'footer') {
                return $this->printScript($this->dir . $combined_js_file, ' defer');
            }

            $assets = $this->printScript($this->dir . $combined_js_file);

            // mm fix
            if ($ckeditor_script) {
                $assets .= $this->printScript($ckeditor_script);
            }

            if ($position === 'header') {
                foreach ($this->scripts['external'] as $script) {
                    $assets .= $this->printScript($script);
                }
            }

            return $assets;
        }
        $assets = '';
        foreach ($this->scripts[$position] as $script) {
            $assets .= $this->printScript($script);
        }
        if ($position === 'header') {
        	foreach ($this->scripts['external'] as $script) {
                $assets .= $this->printScript($script);
            }
        }
        return $assets;
    }

    private function getHash($files, $ext, $language = '') {
        $hash = '';
        if (is_array($files)) {
            foreach ($files as $file) {
                $hash .= $file;
            }
        } else {
            $hash = $files;
        }
        $hash .= JOURNAL_VERSION;
        $hash .= Journal2Utils::getHostName();
        $hash .= $language;
        return md5($hash) . '.' . $ext;
    }

    private function printStyle($href) {
        return '<link rel="stylesheet" href="' . Journal2Utils::staticAsset($this->addJournalVersion($href, $this->minify_css)) . '"/>' . PHP_EOL;
    }

    private function printScript($src, $def = '') {
        $def = rtrim($def) . ' ';
        return '<script type="text/javascript"' . $def . 'src="' . Journal2Utils::staticAsset($this->addJournalVersion($src, $this->minify_css)) .  '"></script>' . PHP_EOL;
    }

    private function removeQueryString($file) {
        $file = explode('?', $file);
        return $file[0];
    }

    private function addJournalVersion($url, $is_minified) {
        if (!$this->cache->getDeveloperMode() && $is_minified) {
            return $url;
        }
        if (strpos($url, '?') === false) {
            return $url . '?j2v=' . JOURNAL_VERSION;
        }
        return $url . '&amp;j2v=' . JOURNAL_VERSION;
    }

}
