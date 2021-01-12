<?php
class HtmlDomSelectorPattern {
    private static $mode_modifiers = array('^', '*', '$');
    private $pattern_string;
    private $tagName;
    private $attributes;
    private $state;
    private $parent_patterns;
    public $is_direct_parent;

    public function __construct($patt_str, $is_direct_parent = false) {
        $this->pattern_string = $patt_str;
        $this->is_direct_parent = $is_direct_parent;
        $this->tagName = '';
        $this->state = '';
        $this->attributes = array();
        $this->parent_patterns = new SplObjectStorage();

        $this->parse();
    }

    public function test(&$node) {
        if ($this->tagName && $node->tagName !== $this->tagName) return false;

        foreach ($this->attributes as $attr => $values) {
            $node_attr = $node->getAttribute($attr);

            if (!$node_attr) return false;
            if (!$values->count()) continue;//this handles selectors like: a[rel]

            foreach ($values as $pattern) {
                switch ($pattern->mode) {
                    case HtmlDomSelectorPatternMode::EQUALS:
                        if ($node_attr->value != $pattern->value) return false;
                        break;
                    case HtmlDomSelectorPatternMode::STARTS_WITH:
                        if (strpos($node_attr->value, $pattern->value) !== 0) return false;
                        break;
                    case HtmlDomSelectorPatternMode::CONTAINS:
                        if ($attr == "class") {
                            $class_names = preg_split("/\s+/", $node_attr->value);
                            $match = false;
                            foreach ($class_names as $class_name) {
                                if ($class_name == $pattern->value) $match = true;
                            }

                            if (!$match) return false;
                        } else {
                            if (strpos($node_attr->value, $pattern->value) === false) return false;
                        }
                        break;
                    case HtmlDomSelectorPatternMode::ENDS_WITH:
                        if (substr($node_attr->value, -strlen($pattern->value)) != $pattern->value) return false;
                        break;
                }
            }
        }

        if ($this->parent_patterns->count()) {
            $parent = $node->parent;
            $this->parent_patterns->rewind();
            $parent_pattern = $this->parent_patterns->current();

            $parents_found = false;
            while ($parent) {//walk up the tree
                if ($parent_pattern->test($parent)) {
                    $this->parent_patterns->next();
                    if (!$this->parent_patterns->valid()) {
                        $parents_found = true;
                        break;
                    } else {
                        $targets_parent = $this->parent_patterns->current();
                    }
                } else if ($parent_pattern->is_direct_parent) {
                    break;
                }
                $parent = $parent->parent;
            }
            if (!$parents_found) return false;
        }

        return true;
    }

    private function addAttribValue($attr, $val) {
        $attr = trim($attr, ' ');
        $mode = substr($attr, -1);

        if (in_array($mode, self::$mode_modifiers)) {
            $attr = substr($attr, 0, -1);
        }

        if (!isset($this->attributes[$attr])) {
            $this->attributes[$attr] = new SplObjectStorage();
        }

        if ($val) {
            $this->attributes[$attr]->attach(new HtmlDomSelectorPatternAttributeValue($mode, $val));
        }
    }

    private function parse() {
        $parts = explode(' ', preg_replace('/\s?>\s?/', '> ', preg_replace('/\s+/', ' ', $this->pattern_string)));//This will break if there are spaces in the attribute query. Example: [data-greeting="hello world"]

        $part = array_pop($parts);
        foreach(array_reverse($parts) as $parent_part) {
            $is_direct_parent = false;
            if (substr($parent_part, -1) == '>') {
                $parent_part = substr($parent_part, 0, -1);
                $is_direct_parent = true;
            }
            $this->parent_patterns->attach(new HtmlDomSelectorPattern($parent_part, $is_direct_parent));
        }

        if (preg_match('/^(.*?)(\..*?)?(\[.*?\])?$/', $part, $matches)) {
            if (!empty($matches[1])) {
                if (strpos($matches[1], '#') !== false) {//look for id
                    $tag_parts = explode('#', $matches[1]);

                    $this->addAttribValue('id', array_pop($tag_parts));
                    $this->tagName = implode('', $tag_parts);
                } else {
                    $this->tagName = $matches[1];
                }
            }

            if (!empty($matches[2])) {
                $parts = explode('.', ltrim($matches[2], '.'));

                foreach ($parts as $part) {
                    $this->addAttribValue('class*', $part);
                }
            }

            if (!empty($matches[3])) {
                $parts = explode('][', trim($matches[3], '[]'));

                foreach($parts as $part) {
                    $subparts = explode('=', $part);
                    $attr = array_shift($subparts);

                    if ($subparts) {
                        $val = implode('=', $subparts);
                        $this->addAttribValue($attr, trim(trim($val, ' '), '\'"'));//the trims should be nested because a space may be desired in the value
                    } else {
                        $this->addAttribValue($attr, null);
                    }
                }
            }
        }
    }
}
