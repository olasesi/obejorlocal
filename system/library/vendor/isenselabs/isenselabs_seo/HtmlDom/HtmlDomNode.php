<?php
class HtmlDomNode {
    public $tagName;
    public $children;
    public $parent;
    public $detached;

    private $attributes;
    private $comments;
    private $innerText;

    public static $self_closing_tags = array('area', 'base', 'br', 'col', 'command', 'embed', 'hr', 'img', 'input', 'keygen', 'link', 'meta', 'param', 'source', 'track', 'wbr');
    public static $head_tags = array('meta', 'link', 'script', 'noscript', 'style', 'template', 'title', 'base');
    public static $optional_closing_tags = array('html', 'head', 'body', 'p', 'dt', 'dd', 'li', 'option', 'thead', 'th', 'tbody', 'tr', 'td', 'tfoot', 'colgroup');
    public static $optional_closing_tags_map = array(
        'p' => array('address', 'article', 'aside', 'blockquote', 'div', 'dl', 'fieldset', 'footer', 'form', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'header', 'hgroup', 'hr', 'main', 'nav', 'ol', 'p', 'pre', 'section', 'table', 'ul'),
        'dt' => array('dt', 'dd'),
        'dd' => array('dd', 'dt'),
        'li' => array('li'),
        'rb' => array('rb', 'rt', 'rtc', 'rp'),
        'rt' => array('rb', 'rt', 'rtc', 'rp'),
        'rp' => array('rb', 'rt', 'rtc', 'rp'),
        'rtc' => array('rb', 'rtc', 'rp'),
        'optgroup' => array('optgroup'),
        'option' => array('option', 'optgroup'),
        'thead' => array('tbody', 'tfoot'),
        'tbody' => array('tbody', 'tfoot'),
        'tfoot' => array('tbody'),
        'tr' => array('tr'),
        'td' => array('td', 'th'),
        'th' => array('td', 'th'),
    );

    public static $htmlNode = NULL;
    public static $headNode = NULL;
    public static $bodyNode = NULL;
    public static $doctype = '';

    public function __construct($tagName, $parent = null) {
        $this->tagName = strtolower($tagName);
        $this->parent = $parent;
        $this->detached = true;
        $this->attributes = new SplObjectStorage();
        $this->children = new SplObjectStorage();
        $this->comments = new SplObjectStorage();

        $this->innerText = '';
    }

    public function getDoctype() {
        return self::$doctype;
    }

    public function addComment(&$comment) {
        $this->comments->attach(new HtmlDomComment($comment));
        $this->innerText .= '{comment_content}';
    }

    public function setAttribute($name, $value, $attrWrapperChar = false, $override = true) {
        if (empty($name)) {
            return;
        }

        if ($attrWrapperChar === false) {
            if (strpos($value, '"') === false) {
                $attrWrapperChar = '"';
            } else if (strpos($value, "'") === false) {
                $attrWrapperChar = "'";
            } else {
                $attrWrapperChar = '';
            }
        }

        $name = strtolower($name);
        $attr = $this->getAttribute($name);
        if (!$attr || $override) {
            if ($attr) {
                $this->attributes->detach($attr);
            }

            $attr = new DomNodeAttribute($name, $value, $attrWrapperChar);
            $this->attributes->attach($attr);
        }
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function getComments() {
        return $this->comments;
    }

    public function getAttribute($name) {
        foreach ($this->attributes as $attr) {
            if ($attr->name == $name) return $attr;
        }
        return null;
    }

    public function remove($node = null) {
        if (!$node) {
            $this->parent->remove($this);
            $this->detached = true;
        } else {
            foreach ($this->children as $k=>$child) {
                if ($node == $child) {
                    $text_parts = explode('{child_node_content}', $this->innerText);
                    $combined_parts = array_splice($text_parts, $k, 2);
                    array_splice($text_parts, $k, 0, implode('', $combined_parts));
                    $this->innerText = implode('{child_node_content}', $text_parts);
                    break;
                }
            }
            $this->children->detach($node);
            $node->detached = true;
        }
    }

    public function appendChild(&$node) {
        $this->children->attach($node);
        $node->parent = $this;
        $this->innerText .= '{child_node_content}';
        $node->detached = false;
    }

    public function after(&$node) {
        //TODO: fix for self-closing tags
        $detached_nodes = new SplObjectStorage();
        $start_detaching = false;
        foreach ($this->parent->children as $child) {
            if ($start_detaching) {
                $detached_nodes->attach($child);
                $child->remove();
            }
            if ($child == $this) $start_detaching = true;
        }

        $this->parent->appendChild($node);

        foreach ($detached_nodes as $node) {
            $this->parent->appendChild($node);
        }
    }

    public function before(&$node) {
        //TODO: fix for self-closing tags
        $detached_nodes = new SplObjectStorage();
        $start_detaching = false;
        foreach ($this->parent->children as $child) {
            if ($child == $this) $start_detaching = true;
            if ($start_detaching) {
                $detached_nodes->attach($child);
                $child->remove();
            }
        }

        $this->parent->appendChild($node);

        foreach ($detached_nodes as $node) {
            $this->parent->appendChild($node);
        }
    }

    public function html($html) {
        $this->parseDom(new StringIterator($html));
    }

    public function find($selector, &$matches = null, &$selectorObject = null, $innerCall = false) {
        if (!$matches) {
            $matches = new SplObjectStorage();
        }

        if (empty($selector)) return $matches;

        if (!$selectorObject) {
            $selectorObject = new HtmlDomSelector($selector);
        }

        if ($selectorObject->test($this)) {
            $matches->attach($this);
        }

        foreach ($this->children as $child) {
            $child->find($selector, $matches, $selectorObject, true);
        }

        if (!$innerCall) {
            /*if ($matches->count() == 1) {
                $matches->rewind();
                return $matches->current();
            }*/

            return $matches;
        }
    }

    public function isSelfClosing() {
        return in_array($this->tagName, self::$self_closing_tags);
    }

    public function getInnerText() {
        $texts = explode('{child_node_content}', str_replace('{comment_content}', '', $this->innerText));
        foreach ($this->children as $k => $child) {
            if (isset($texts[$k])) {
                $texts[$k] .= $child->getInnerText();
            }
        }

        return implode('', $texts);
    }

    public function getHtml($include_comments = false, $minify_level = 0) {
        if (!empty($this->tagName)) {
            $tagHeader = '<' . $this->tagName;
            foreach ($this->attributes as $attr) {
                if ($attr->value !== false) {
                    $tagHeader .= ' ' . $attr->name . '=' . $attr->wrapperChar . $attr->value . $attr->wrapperChar;
                } else {
                    $tagHeader .= ' ' . $attr->name;
                }
            }
            if ($this->isSelfClosing()) return $tagHeader . '/>';

            $tagHeader .= '>';
        }

        $tmp_html = $this->innerText;

        if ($include_comments) {
            $texts = explode('{comment_content}', $tmp_html);
            foreach ($this->comments as $k => $comment) {
                if (isset($texts[$k])) {
                    $texts[$k] .= $comment->text;
                }
            }
            $tmp_html = implode('', $texts);
        } else {
            $tmp_html = str_replace('{comment_content}', '', $tmp_html);
        }


        if ($minify_level && !in_array($this->tagName, array("script", "style", "pre"))) {
            $tmp_html = str_replace(array("\n", "\r", "\t", "\f"), " ", $tmp_html);
            $tmp_html = preg_replace("/\s+/", " ", $tmp_html);
        }

        $texts = explode('{child_node_content}', $tmp_html);
        foreach ($this->children as $k => $child) {
            if (isset($texts[$k])) {
                $texts[$k] .= $child->getHtml($include_comments, $minify_level);
            }
        }

        $tmp_html = implode('', $texts);

        if ($minify_level === 2 && !in_array($this->tagName, array("script", "style", "pre"))) {
            $tmp_html = preg_replace('/([^\s])\s+$/', '$1', $tmp_html);
        }

        if (!empty($this->tagName)) {
            return $tagHeader . $tmp_html . '</' . $this->tagName . '>';
        } else {
            return self::$doctype . $tmp_html;
        }
    }

    public function parseDom(&$iterator) {
        if ($this->isSelfClosing()) return;

        $inTag = false;
        $inTagHeader = false;
        $tagNameRead = false;

        $tagName = '';
        $buffer = '';
        $attributeName = '';
        $readingAttrValue = false;
        $attrValueWrapperChar = '';
        $inComment = false;

        $nextNode = null;

        $inScriptString = false;
        $inScriptComment = false;
        $inScriptRegex = false;
        $inSpecialScriptContext = false;
        $scriptQuoteChar = '';
        $scriptCommentType = 'oneline';

        $containingElement = $this;

        if ($iterator->key() > 0) {
            $iterator->next();//Move to the next character because foreach does not call next() when starting iteration and the the node will not be able to read correctly. It will read the last > from the tag.
        } 

        foreach ($iterator as $char) {
            $nextChar = $iterator->peek();
            if ($this->tagName != 'script' && $this->tagName != 'style') {
                if ($char == '<' && ($nextChar == '!' || $nextChar == '?')) {//This may look like we are going to miss some precious chars, but take a look at the last line of this foreach block :) All should be good
                    if ($nextChar == '!' && $iterator->peek(3) == "!--") {
                        $this->parseComment($iterator);
                        continue;
                    } else if (strtolower($iterator->peek(4)) == '!doc' || strtolower($iterator->peek(4) == '?xml')) {
                        foreach ($iterator as $subchar) {//read untill the closing >
                            //$this->innerText .= $subchar;//Don't touch this!
                            self::$doctype .= $subchar;//Don't touch this!
                            if ($subchar == '>') break;
                        }
                        $buffer = '';
                    }
                    continue;
                }
            }

            if ($this->tagName == 'script' || $this->tagName == 'style') {
                if ($char == '<') {
                    if ($this->tagName == 'script' && strtolower($iterator->peek(7)) == '/script' && !$inScriptString) {
                        //TODO: maybe an $iterator->consume statement will increase things up a bit
                        foreach ($iterator as $subchar) {//read untill the closing > to handle cases like </script wtf>
                            if ($subchar == '>') return;
                        }
                    }

                    if ($this->tagName == 'style' && strtolower($iterator->peek(6)) == '/style') {
                        //TODO: maybe an $iterator->consume statement will increase things up a bit
                        foreach ($iterator as $subchar) {//read untill the closing > to handle cases like </style wtf>
                            if ($subchar == '>') return;
                        }
                    }
                } else if ($this->tagName == 'script') {
                    if (($char == '"' || $char == "'")) {
                        if (!$inScriptString && !$inScriptComment && !$inScriptRegex) {
                            $inScriptString = true;
                            $scriptQuoteChar = $char;
                        } else if ($char == $scriptQuoteChar) {
                            $inScriptString = false;
                            $scriptQuoteChar = '';
                        }
                    } else if ($char == '\\' && $inScriptString) {
                        if ($iterator->peek() == $scriptQuoteChar) {
                            $char .= $scriptQuoteChar;// Append to the char so this can be included in the innerText
                            $iterator->consume(1);
                        }
                    } else if ($char == '/' && !$inScriptString) {
                        $nextChar = $iterator->peek();
                        switch ($nextChar) {
                            case '/':
                                $char .= '/';// Append to the char so this can be included in the innerText
                                $iterator->consume(1);
                                $inScriptComment = true;
                                $scriptCommentType = 'oneline';
                                break;
                            case '*':
                                $char .= '*';// Append to the char so this can be included in the innerText
                                $iterator->consume(1);
                                $inScriptComment = true;
                                $scriptCommentType = 'multiline';
                                break;
                            default:
                                if ($inScriptRegex) {
                                    $inScriptRegex = false;
                                } else if ($inSpecialScriptContext) {
                                    $inScriptRegex = true;
                                }
                        }
                    } else if ($char == "\n" && $inScriptComment && $scriptCommentType == 'oneline') {
                        $inScriptComment = false;
                    } else if ($char == "*" && $inScriptComment && $scriptCommentType == 'multiline') {
                        if ($iterator->peek() == '/') {
                            $inScriptComment = false;
                        }
                    }

                    if ($char == '(' || $char == '=' || $char == ',' || $char == ';') {
                        $inSpecialScriptContext = true;
                    } else if (!$this->isSpaceChar($char)) {
                        $inSpecialScriptContext = false;
                    }
                }
                $this->innerText .= $char;
                continue;
            }

            if ($char == '<' && $iterator->peek() == '!' && $iterator->peek(3) == "!--") {
                $this->parseComment($iterator);
                continue;
            }

            $buffer .= $char;

            $nextChar = $iterator->peek();
            if ($char == '<' && !$inTagHeader && $nextChar != ' ' && $nextChar != '<') {
                $inTagHeader = true;
                $tagNameRead = false;
                $tagName = '';
                $buffer = '';
                $iterator->checkpoint();
                continue;
            }

            if ($inTagHeader) {
                if (!$tagNameRead && ($this->isSpaceChar($char) || $char == '>')) {
                    $tagName = rtrim($buffer, $char);

                    if (strtolower($tagName) == '/' . $this->tagName) {//the closing part of the current tag has been found
                        if ($char != '>') {
                            foreach ($iterator as $subchar) {//read untill the closing > to handle cases like </span wtf>
                                if ($subchar == '>') break;
                            }
                        }
                        return;
                    }

                    if ($tagName[0] == "/") {
                        $parent = $this->parent;
                        $tagNameLower = strtolower(substr($tagName, 1));
                        while ($parent) {
                            if ($tagNameLower == $parent->tagName) {
                                $iterator->consume(-(strlen($tagName) + 2));
                                return;
                            }
                            $parent = $parent->parent;
                        }

                        if ($char != '>') {
                            foreach ($iterator as $subchar) {//read untill the closing > to handle cases like </span wtf>
                                if ($subchar == '>') break;
                            }
                        }

                        $inTagHeader = false;
                        $tagNameRead = false;
                        $tagName = '';
                        $buffer = '';
                        continue;
                    }

                    if (empty($tagName) || $tagName[0] == '/') {
                        $this->innerText .= '<' . $buffer;
                        $inTagHeader = false;
                        $nextNode = null;
                        $tagName = '';
                        $tagNameRead = false;
                        $buffer = '';
                        continue;
                    } else {
                        $tagNameRead = true;
                        $tagNameTrimmed = strtolower(trim($tagName, '/'));//trim is to handle tags like this <br/>, because in this case the detected tag will be br/ not br

                        if (!$this->tagName && $tagNameTrimmed != 'html') {
                            if (!self::$htmlNode) {
                                $nextNode = new HtmlDomNode('html', $this);
                                self::$htmlNode = $nextNode;
                                goto reparse_with_missing_parent;
                            } else {
                                $containingElement = self::$htmlNode;
                            }
                        } 

                        if ($this->tagName == 'html' && $tagNameTrimmed != 'head' && $tagNameTrimmed != 'body') {
                            if (in_array($tagNameTrimmed, self::$head_tags)) {
                                if (!self::$headNode) {
                                    $nextNode = new HtmlDomNode('head', $this);
                                    self::$headNode = $nextNode;
                                    goto reparse_with_missing_parent;
                                } else {
                                    $containingElement = self::$headNode;
                                }
                            } else if ($tagNameTrimmed != 'body' ) {
                                if (!self::$bodyNode) {
                                    $nextNode = new HtmlDomNode('body', $this);
                                    self::$bodyNode = $nextNode;
                                    goto reparse_with_missing_parent;
                                } else {
                                    $containingElement = self::$bodyNode;
                                }
                            }
                        }

                        if (false) {//do not delete this, the code below is reachable by the goto statements above!
                            reparse_with_missing_parent:
                            $containingElement->appendChild($nextNode);

                            $iterator->rewind_to_checkpoint();
                            $nextNode->parseDom($iterator);
                            $containingElement = $this;

                            $inTagHeader = false;
                            $nextNode = null;
                            $tagName = '';
                            $tagNameRead = false;
                            continue;
                        }

                        if ($this->tagName == 'head' && !in_array($tagNameTrimmed, self::$head_tags)) {
                            $iterator->rewind_to_checkpoint();
                            $nextNode = new HtmlDomNode('body', $this->parent);
                            self::$bodyNode = $nextNode;
                            return $nextNode;
                        }

                        switch ($tagNameTrimmed) {
                        case 'html':
                            if (self::$htmlNode) {
                                $nextNode = self::$htmlNode;
                            } else {
                                $nextNode = new HtmlDomNode($tagNameTrimmed, $this);
                                self::$htmlNode = $nextNode;
                            }
                            break;
                        case 'head':
                            if (self::$headNode) {
                                $nextNode = self::$headNode;
                            } else {
                                $nextNode = new HtmlDomNode($tagNameTrimmed, $this);
                                self::$headNode = $nextNode;
                            }
                            break;
                        case 'body':
                            if (self::$bodyNode) {
                                $nextNode = self::$bodyNode;
                            } else {
                                $nextNode = new HtmlDomNode($tagNameTrimmed, $this);
                                self::$bodyNode = $nextNode;
                            }
                            break;
                        default:
                            $nextNode = new HtmlDomNode($tagNameTrimmed, $this);
                            break;
                        }

                        $readingAttrValue = false;
                    }
                    $buffer = '';
                }

                if ($char == '>' && (!$readingAttrValue || $attrValueWrapperChar == '')) {
                    if ($nextNode) {
                        if ($attrValueWrapperChar == '') {
                            if ($readingAttrValue) {
                                $attrValue = rtrim($buffer, $char);
                                if ($nextNode->isSelfClosing() && substr($attrValue, -1) == '/') {
                                    $attrValue = substr($attrValue, 0, -1);
                                }
                                $nextNode->setAttribute($attributeName, $attrValue, $attrValueWrapperChar, false);
                                $readingAttrValue = false;
                                $attrValueWrapperChar = '';
                            } else {
                                $attributeName = trim($buffer, " >");
                                if ($attributeName && $attributeName != '/') {
                                    $nextNode->setAttribute($attributeName, false, $attrValueWrapperChar, false);
                                }
                            }
                            $buffer = '';
                        }

                        if (isset(self::$optional_closing_tags_map[$this->tagName]) && in_array($nextNode->tagName, self::$optional_closing_tags_map[$this->tagName])) return $nextNode;

                        while ($nextNode) {
                            if ($nextNode->detached) {
                                $containingElement->appendChild($nextNode);
                            }

                            $nextNode = $nextNode->parseDom($iterator);
                        }
                        $containingElement = $this;
                    }

                    $inTagHeader = false;
                    $nextNode = null;
                    $tagName = '';
                    $tagNameRead = false;
                    continue;
                }

                if ($tagNameRead) {
                    $nextChar = $iterator->peek();
                    if (($nextChar == '=' || $this->isSpaceChar($nextChar)) && !$readingAttrValue) {
                        $attributeName = trim($buffer);
                        $readingAttrValue = true;
                        $attrValueWrapperChar = '';
                        $iterator->consume(1);//consume the next "=" or space char so we can start reading the value
                        $buffer = '';
                        $passedThroughEquals = $nextChar == '=';

                        $x = 1;
                        while(null !== ($str = $iterator->peek($x))) {
                            $trimmed_str = trim($str);
                            if ($trimmed_str !== '') {
                                if ($trimmed_str == "'" || $trimmed_str == '"') {
                                    $iterator->consume(max($x-1, 0));//consume the spaces before ['"] but leave the quotes, so we can properly detect them on the next run
                                } else if ($trimmed_str == '=') {
                                    $passedThroughEquals = true;
                                    $iterator->consume($x);
                                    $x=1;
                                    continue;
                                } else {
                                    if (!$passedThroughEquals) {
                                        $iterator->consume(max($x-2, 0));//if there were spaces after the = and the next non space char and this char is not ['"] then the attribute does not have a value and this is probably another attribute
                                        $nextNode->setAttribute($attributeName, false, '', false);
                                        $readingAttrValue = false;
                                        $attrValueWrapperChar = '';
                                    }
                                }
                                break;
                            }
                            $x++;
                        }
                        continue;
                    }

                    if ($readingAttrValue) {
                        if ($char == '\'' || $char == '"') {
                            if ($buffer == $char && !$attrValueWrapperChar) {
                                $attrValueWrapperChar = $char;
                                $buffer = '';
                            } else if($attrValueWrapperChar == $char) {
                                $nextNode->setAttribute($attributeName, rtrim($buffer, $char), $attrValueWrapperChar, false);
                                $readingAttrValue = false;
                                $attrValueWrapperChar = '';
                                $buffer = '';
                            }
                        }

                        if ($this->isSpaceChar($char) && $attrValueWrapperChar == '') {
                            $nextNode->setAttribute($attributeName, rtrim($buffer, $char), $attrValueWrapperChar, false);
                            $readingAttrValue = false;
                            $buffer = '';
                        }
                    }
                }
            }

            if (!$inTagHeader) $this->innerText .= $char;
        }
    }

    private function parseComment($iterator) {
        $comment = '';
        foreach ($iterator as $subchar) {
            $comment .= $subchar;
            if ($subchar == '-'){
                $isCommentEnd = false;

                if ($iterator->peek(2) == '->') {
                    $iterator->consume(2);
                    $isCommentEnd = true;
                } else if ($iterator->peek(3) == '-!>') {
                    $iterator->consume(3);
                    $isCommentEnd = true;
                }

                if ($isCommentEnd) {
                    $comment .= '->';
                    $this->addComment($comment);
                    break;
                }
            }
        }
    }

    private function isSpaceChar($char) {
        return $char == ' ' || $char == "\t" || $char == "\r" || $char == "\n" || $char == "\f";
    }
}
