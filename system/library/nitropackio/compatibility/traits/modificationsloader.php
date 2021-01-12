<?php

namespace nitropackio\compatibility\traits;

trait ModificationsLoader {
    protected function getModificationModel() {
        if (version_compare(NITROPACK_OPENCART_VERSION, '3', '>=')) {
            $this->load->model('setting/modification');
            return $this->model_setting_modification;
        } else {
            $this->load->model('extension/modification');
            return $this->model_extension_modification;
        }
    }

    protected function getModificationByName($name) {
        foreach ($this->getModificationModel()->getModifications() as $modification) {
            if (strcmp($modification['name'], $name) === 0) {
                return $modification;
            }
        }

        return null;
    }

    protected function getModifications() {
        return $this->getModificationModel()->getModifications();
    }

    protected function deleteModification($modification_id) {
        return $this->getModificationModel()->deleteModification($modification_id);
    }

    protected function addModification($data) {
        return $this->getModificationModel()->addModification($data);
    }

    protected function isUsingDEventManager() {
        if ($this->is_using_d_event_manager === null) {
            if (null !== $modification = $this->getModificationByName("d_event_manager")) {
                return (bool)$modification['status'] && version_compare($modification['version'], '3', '<');
            }
        }

        return false;
    }
}
