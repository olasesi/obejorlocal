<?php

namespace nitropackio\core;

class EntityState extends Library {
    private $state = array();

    public function setState($type, $id, $state) {
        $this->state[$type][$id] = $state;
    }

    public function hasState($type, $id) {
        return isset($this->state[$type][$id]);
    }

    public function getState($type, $id, $reset = true) {
        $result = null;

        if ($this->hasState($type, $id)) {
            $result = $this->state[$type][$id];
        }

        if ($reset) {
            $this->resetState();
        }

        return $result;
    }

    public function resetState() {
        $this->state = null;
        $this->state = array();
    }

    public function hasStateValue($type, $id, $value) {
        return isset($this->state[$type][$id][$value]);
    }

    public function getStateValue($type, $id, $value) {
        if ($this->hasStateValue($type, $id, $value)) {
            return $this->state[$type][$id][$value];
        }

        return null;
    }
}
