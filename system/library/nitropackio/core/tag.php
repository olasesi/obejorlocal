<?php

namespace nitropackio\core;

class Tag {
    protected $group = '';
    protected $identifier = '';

    public function __construct($group, $identifier) {
        $this->group = $group;
        $this->identifier = $identifier;
    }

    public function getText() {
        return preg_replace('/[^a-zA-Z0-9:]+/', ':', $this->group . ':' . $this->identifier);
    }
}
