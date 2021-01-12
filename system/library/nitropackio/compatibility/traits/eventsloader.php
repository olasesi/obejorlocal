<?php

namespace nitropackio\compatibility\traits;

trait EventsLoader {
    protected function getEventModel() {
        if (version_compare(NITROPACK_OPENCART_VERSION, '3', '>=')) {
            $this->load->model('setting/event');

            return $this->model_setting_event;
        } else if (version_compare(NITROPACK_OPENCART_VERSION, '2.0.1', '>=')) {
            $this->load->model('extension/event');

            return $this->model_extension_event;
        } else {
            $this->load->model('tool/event');
            
            return $this->model_tool_event;
        }
    }

    protected function eventExists($code, $trigger, $action) {
        return $this->db->query("SELECT * FROM `" . DB_PREFIX . "event` WHERE `code` = '" . $this->db->escape($code) . "' AND `trigger` = '" . $this->db->escape($trigger) . "' AND `action` = '" . $this->db->escape($action) . "'")->num_rows > 0;
    }

    protected function getEventsByCode($code) {
        return $this->db->query("SELECT * FROM `" . DB_PREFIX . "event` WHERE `code` = '" . $this->db->escape($code) . "'")->rows;
    }

    protected function deleteEventsByAction($action) {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `action` = '" . $this->db->escape($action) . "'");
    }

    protected function deleteEventsByTrigger($trigger) {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `trigger` = '" . $this->db->escape($trigger) . "'");
    }

    protected function addEvents($code, $events) {
        foreach ($events as $trigger => $actions) {
            foreach ($actions as $action) {
                $this->getEventModel()->addEvent($code, $trigger, $action);
            }
        }
    }

    protected function deleteEvents($code) {
        if (version_compare(NITROPACK_OPENCART_VERSION, '3', '>=')) {
            $this->getEventModel()->deleteEventByCode($code);
        } else {
            $this->getEventModel()->deleteEvent($code);
        }
    }
}
