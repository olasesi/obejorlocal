<?php

namespace NitroPack;

class HttpClientMulti {
    private $clients;
    private $successCallback;
    private $errorCallback;
    private $returnClients;

    public function __construct() {
        $this->clients = array();
        $this->successCallback = NULL;
        $this->errorCallback = NULL;
        $this->returnClients = true;
    }

    public function returnClients($status) {
        $this->returnClients = $status;
    }

    public function push($client) {
        $this->clients[] = $client;
    }

    public function getClients() {
        return $this->clients;
    }

    public function onSuccess($callback) {
        $this->successCallback = $callback;
    }

    public function onError($callback) {
        $this->errorCallback = $callback;
    }

    public function fetchAll($follow_redirects = true, $method = "GET") {
        foreach ($this->clients as $client) {
            $client->fetch($follow_redirects, $method, true);
        }

        return $this->readAll();
    }

    /* Returns an array with succeeded and failed clients
     * [
     *     [succeeded clients...],
     *     [[failed client, exception]...]
     * ]
     */
    public function readAll() {
        $succeededClients = [];
        $failedClients = [];

        while ($this->clients) {
            // Check whether to sleep using a syscall in order to conserve CPU usage
            $except = NULL;
            $read = [];
            $write = [];
            $remainingTimeouts = [];
            $canSleep = true;

            foreach ($this->clients as $client) {
                if ($client->getState() == HttpClientState::READY || $client->getState() == HttpClientState::INIT || $client->getState() == HttpClientState::CONNECT) {
                    $canSleep = false;
                    break;
                }

                switch ($client->getState()) {
                case HttpClientState::SSL_HANDSHAKE:
                    $read[] = $client->sock;
                    $write[] = $client->sock;
                    $operationTimeout = $client->ssl_timeout ? $client->ssl_timeout : $client->timeout;
                    $remainingTimeout = $operationTimeout - (microtime(true) - $client->ssl_negotiation_start);
                    break;
                case HttpClientState::SEND_REQUEST:
                    $write[] = $client->sock;
                    $operationTimeout = $client->timeout;
                    $remainingTimeout = $operationTimeout - (microtime(true) - $client->last_write);
                    break;
                case HttpClientState::DOWNLOAD:
                    if ($client->wasEmptyRead()) {
                        $read[] = $client->sock;
                        $operationTimeout = $client->timeout;
                        $remainingTimeout = $operationTimeout - (microtime(true) - $client->last_read);
                    } else {
                        $canSleep = false;
                        break 2;
                    }
                    break;
                default:
                    $canSleep = false;
                    break 2;
                }

                $remainingTimeouts[] = $remainingTimeout;
            }

            if ($canSleep) {
                $read = $read ? $read : NULL;
                $write = $write ? $write : NULL;
                if (defined("NITROPACK_USE_MICROTIMEOUT") && NITROPACK_USE_MICROTIMEOUT) {
                    stream_select($read, $write, $except, 0, NITROPACK_USE_MICROTIMEOUT);
                } else {
                    $microtimeout = (int)(min($remainingTimeouts) * 1000000);
                    if ($microtimeout > 0) {
                        stream_select($read, $write, $except, 0, $microtimeout);
                    }
                }
            }
            // End check

            foreach ($this->clients as $client) {
                try {
                    if ($client->asyncLoop()) {
                        $this->removeClient($client);
                        if ($this->returnClients) {
                            $succeededClients[] = $client;
                        }
                        if ($this->successCallback) {
                            call_user_func($this->successCallback, $client);
                        }
                    }
                } catch (\Exception $e) {
                    $this->removeClient($client);
                    if ($this->returnClients) {
                        $failedClients[] = [$client, $e];
                    }
                    if ($this->errorCallback) {
                        call_user_func($this->errorCallback, $client, $e);
                    }
                }
            }
        }

        return [$succeededClients, $failedClients];
    }

    private function removeClient($client) {
        $index = array_search($client, $this->clients, true);
        array_splice($this->clients, $index, 1);
    }
}
