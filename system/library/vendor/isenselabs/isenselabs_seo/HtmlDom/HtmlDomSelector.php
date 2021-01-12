<?php
class HtmlDomSelector {
    private $selector;
    private $patterns;

    public function __construct($str) {
        $this->selector = $str;
        $this->patterns = new SplObjectStorage();
        $this->parse();
    }

    public function test(&$node) {
        foreach ($this->patterns as $pattern) {
            if ($pattern->test($node)) return true;
        }

        return false;
    }

    private function parse() {
        $patterns = array_map('trim', explode(',', $this->selector));

        foreach ($patterns as $p_str) {
            $this->patterns->attach(new HtmlDomSelectorPattern($p_str));
        }
    }
}
