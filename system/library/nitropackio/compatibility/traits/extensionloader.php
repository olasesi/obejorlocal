<?php

namespace nitropackio\compatibility\traits;

use nitropackio\core\Helper;
use nitropackio\core\Nitropack;

trait ExtensionLoader {
    protected $ext;
    protected $loaded;

    protected function initExtension() {
        // Load config
        $this->load->config('nitropackio/compatibility');

        $this->ext = new \Stdclass;
        $this->loaded = new \Stdclass;
        $this->loaded->model = new \Stdclass;
        $this->loaded->language = array();

        $this->recursiveConfig($this->ext, $this->config->get('nitropackio'));
    }

    protected function responseRedirect($url, $status = 301) {
        if (version_compare(NITROPACK_OPENCART_VERSION, '2.0.0.0', '>=')) {
            $this->response->redirect($url);
        } else {
            Nitropack::header('Location: ' . str_replace(array('&amp;', "\n", "\r"), array('&', '', ''), $url), true, $status);
            exit();
        }
    }

    // For backward compatibility, do not delete this.
    protected function htmlEntityDecode($text) {
        return Helper::htmlEntityDecode($text);
    }

    protected function getToken() {
        if (version_compare(NITROPACK_OPENCART_VERSION, '3', '>=')) {
            return $this->session->data['user_token'];
        } else {
            return $this->session->data['token'];
        }
    }

    protected function getUrlSsl($value = true) {
        if (version_compare(NITROPACK_OPENCART_VERSION, '2', '>=')) {
            return $value;
        } else {
            return $value ? 'SSL' : 'NONSSL';
        }
    }

    protected function getParamToken() {
        if (version_compare(NITROPACK_OPENCART_VERSION, '3', '>=')) {
            return 'user_token=' . $this->session->data['user_token'];
        } else {
            return 'token=' . $this->session->data['token'];
        }
    }

    protected function serializeOrEncode($data) {
        if (version_compare(NITROPACK_OPENCART_VERSION, '2.1.0.1', '>=')) {
            return json_encode($data);
        } else {
            return serialize($data);
        }
    }

    protected function unserializeOrDecode($data) {
        if (version_compare(NITROPACK_OPENCART_VERSION, '2.1.0.1', '>=')) {
            return json_decode($data, true);
        } else {
            return unserialize($data);
        }
    }

    protected function recursiveConfig(&$root, $values) {
        foreach ($values as $key => $value) {
            if (is_array($value)) {
                $root->$key = new \Stdclass;

                $this->recursiveConfig($root->$key, $value);
            } else {
                $root->$key = $value;
            }
        }
    }

    protected function isSSL() {
        if (version_compare(NITROPACK_OPENCART_VERSION, '2.0.0.0', '>=')) {
            return $this->request->server['HTTPS'];
        } else {
            return isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'));
        }
    }

    protected function loadLibrary($route) {
        if (method_exists($this->load, 'library')) {
            $this->load->library($route);
        }

        $route = preg_replace('/[^a-zA-Z0-9_\/]/', '', (string)$route);
        $class = str_replace('/', '\\', $route);

        if (!$this->registry->has(basename($route))) {
            $this->registry->set(basename($route), new $class($this->registry));
        }
    }

    protected function loadView($route, $data) {
        if (version_compare(NITROPACK_OPENCART_VERSION, '2.2.0.0', '>=')) {
            return $this->load->view($route, $data);
        } else {
            if ($this->isInAdmin()) {
                return $this->renderView($route . '.tpl', $data);
            } else {
                if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/' . $route . '.tpl')) {
                    return $this->renderView($this->config->get('config_template') . '/template/' . $route . '.tpl', $data);
                } else {
                    return $this->renderView('default/template/' . $route . '.tpl', $data);
                }
            }
        }
    }

    protected function renderView($tpl, $data) {
        if (version_compare(NITROPACK_OPENCART_VERSION, '2.0.0.0', '>=')) {
            return $this->load->view($tpl, $data);
        } else {
            $this->data = $data;
            $this->template = $tpl;

            return $this->render();
        }
    }
}
