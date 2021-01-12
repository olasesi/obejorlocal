<?php
class HtmlDomSelectorPatternAttributeValue {
    public $mode;
    public $value;

    public function __construct($mode, $val) {
        switch ($mode) {
            case '^':
                $this->mode = HtmlDomSelectorPatternMode::STARTS_WITH;
                break;
            case '*':
                $this->mode = HtmlDomSelectorPatternMode::CONTAINS;
                break;
            case '$':
                $this->mode = HtmlDomSelectorPatternMode::ENDS_WITH;
                break;
            default:
                $this->mode = HtmlDomSelectorPatternMode::EQUALS;
                break;
        }

        $this->value = $val;
    }
}
