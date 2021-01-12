<?php

namespace nitropackio\compatibility\traits;

use Action;

trait RouteLoader {
    public function getRequestRoute() {
        if (isset($this->request->get['route']) && $this->request->get['route'] != 'startup/router') {
            $route = $this->request->get['route'];
        } else {
            $route = $this->getHomeRoute();
        }

        return preg_replace('/[^a-zA-Z0-9_\/]/', '', $route);
    }

    protected function getRequestRouteBase() {
        if ('' !== $request_route = $this->getRequestRoute()) {
            $route_parts = array_values(array_filter(explode('/', $request_route)));

            do {
                $candidate = implode('/', $route_parts);

                if (is_file(DIR_APPLICATION . 'controller/' . $candidate . '.php')) {
                    return $candidate;
                } else {
                    array_pop($route_parts);
                }
            } while (!empty($candidate));
        }

        return null;
    }

    protected function routeCompare($route) {
        return strcmp((string)$this->getRequestRouteBase(), (string)$route) === 0;
    }

    protected function getHomeRoute() {
        if ($this->config->has('action_default')) {
            return $this->config->get('action_default');
        } else {
            return 'common/home';
        }
    }
}
