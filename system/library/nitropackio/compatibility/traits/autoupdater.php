<?php

namespace nitropackio\compatibility\traits;

use nitropackio\core\Nitropack;
use NitroPack\HttpClient;
use NitroPack\SDK\Api\ResponseStatus;

trait AutoUpdater {
    public function update_check() {
        session_write_close();

        $json = array(
            'status' => false,
            'details' => null,
            'message' => ""
        );

        if (!$this->validatePermissions()) {
            $json['message'] = $this->error['warning'];
        } else {
            Nitropack::executionBlock(function() use (&$json) {
                $nitropack = $this->nitropackFromStoreUrl($this->store['url']);

                $url = $nitropack->sdk->integrationUrl("extensionUpdateCheck", "v1");
                $data = array(
                    'manifest_version' => "v1",
                    'platform_name' => "OpenCart",
                    'platform_version' => NITROPACK_OPENCART_VERSION,
                    'extension_version' => $this->ext->version
                );

                $cache_key = 'nitropackio.update_check.' . $this->ext->version;

                if (null !== $cache_data = $this->getCache($cache_key)) {
                    $details = $this->releaseDetails($cache_data);

                    $json['status'] = true;
                    $json['details'] = $details;
                    $json['message'] = sprintf($this->languageGet('text_update_available'), $details['newest_version']);
                } else {
                    $client = new HttpClient($url);
                    $client->setPostData($data);
                    $client->fetch(true, "POST");
                    $body = $client->getBody();

                    if ($client->getStatusCode() == ResponseStatus::OK && !empty($body)) {
                        // Everything is fine
                        $checker_data = json_decode($body, true);

                        if (!empty($checker_data['status'])) {
                            $this->setCache($cache_key, $checker_data['details']);

                            $details = $this->releaseDetails($checker_data['details']);

                            $json['status'] = true;
                            $json['details'] = $details;
                            $json['message'] = !empty($details['new_releases']) ? sprintf($this->languageGet('text_update_available'), $details['newest_version']) : $this->languageGet('success_already_updated');
                        } else {
                            throw new \Exception($checker_data['message']);
                        }
                    } else {
                        // Something went wrong
                        throw new \Exception(sprintf($this->languageGet('error_update_check'), $client->getStatusCode(), $body));
                    }
                }
            }, function($error) use (&$json) {
                $json['status'] = false;
                $json['details'] = null;
                $json['message'] = $error;
            });
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function check_system_requirements() {
        $this->commonUpdateWrapper(function(&$json) {
            if (version_compare(phpversion(), self::UPDATE_REQUIRED_PHP_VERSION, '<')) {
                $json['status'] = false;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_ERROR);
                $json['error_message'] = sprintf($this->languageGet('error_update_php_version'), phpversion(), self::UPDATE_REQUIRED_PHP_VERSION);
            } else if (!class_exists("ZipArchive")) {
                $json['status'] = false;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_ERROR);
                $json['error_message'] = $this->languageGet('error_update_php_zip');
            } else if (!function_exists('simplexml_load_string')) {
                $json['status'] = false;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_ERROR);
                $json['error_message'] = $this->languageGet('error_update_php_xml');
            } else {
                $json['status'] = true;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_OK);
            }
        });
    }

    public function download_current_version() {
        $this->commonUpdateWrapper(function(&$json) {
            try {
                $this->session->data['nitropackio_update']['zip_current'] = $this->downloadFileFromPostKey("zip_current");

                $this->openArchiveFromSessionKey('zip_current')->close();

                $json['status'] = true;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_OK);
            } catch (\Exception $e) {
                unset($this->session->data['nitropackio_update']['zip_current']);

                $json['status'] = false;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_ERROR);
                $json['error_message'] = $e->getMessage();
            }
        });
    }

    public function download_new_version() {
        $this->commonUpdateWrapper(function(&$json) {
            try {
                $this->session->data['nitropackio_update']['zip_new'] = $this->downloadFileFromPostKey("zip_new");

                $this->openArchiveFromSessionKey('zip_new')->close();

                $json['status'] = true;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_OK);
            } catch (\Exception $e) {
                unset($this->session->data['nitropackio_update']['zip_new']);

                $json['status'] = false;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_ERROR);
                $json['error_message'] = $e->getMessage();
            }
        });
    }

    public function identify_changes() {
        $this->commonUpdateWrapper(function(&$json) {
            try {
                if (empty($this->session->data['nitropackio_update']['zip_new']) || empty($this->session->data['nitropackio_update']['zip_current']) || !is_file($this->session->data['nitropackio_update']['zip_new']) || !is_file($this->session->data['nitropackio_update']['zip_current'])) {
                    throw new \Exception($this->languageGet('error_update_files_not_exist'));
                }

                $zip_current = $this->openArchiveFromSessionKey('zip_current');
                $zip_new = $this->openArchiveFromSessionKey('zip_new');

                $list_current = $this->getFilesList($zip_current);

                // All files in the new archive will be written to the disk
                $list_update = $this->getFilesList($zip_new);

                // Any old files, not existing in the new archive, will be deleted
                $list_delete = array();

                foreach ($list_current as $item) {
                    if (!in_array($item, $list_update)) {
                        $list_delete[] = $item;
                    }
                }

                $this->session->data['nitropackio_update']['list_update'] = $list_update;
                $this->session->data['nitropackio_update']['list_delete'] = $list_delete;

                @$zip_current->close();
                @$zip_new->close();

                $json['status'] = true;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_OK);
            } catch (\Exception $e) {
                if (!empty($zip_current)) {
                    @$zip_current->close();
                }

                if (!empty($zip_new)) {
                    @$zip_new->close();
                }

                $json['status'] = false;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_ERROR);
                $json['error_message'] = $e->getMessage();
            }
        });
    }

    public function check_disk_space() {
        $this->commonUpdateWrapper(function(&$json) {
            try {
                // Try creating a temp file with filesize self::UPDATE_DISK_SPACE_CHECK
                $file = $this->initTempFile(NITROPACK_DIR_SETTING);

                $chunk_size = 1024;
                $total_written = 0;

                $fh = fopen($file, 'wb');

                do {
                    if (false === $written = @fwrite($fh, str_repeat('A', $chunk_size), $chunk_size)) {
                        // Close the temp file
                        @fclose($fh);

                        // We no longer need this file
                        @unlink($file);

                        throw new \Exception($this->languageGet("error_upload_disk_space"));
                    }

                    $total_written += $written;
                } while ($total_written < self::UPDATE_DISK_SPACE_CHECK);

                // Close the temp file
                @fclose($fh);

                // We no longer need this file
                @unlink($file);

                if ($total_written !== self::UPDATE_DISK_SPACE_CHECK) {
                    throw new \Exception($this->languageGet("error_upload_disk_space"));
                }

                $json['status'] = true;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_OK);
            } catch (\Exception $e) {
                $json['status'] = false;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_ERROR);
                $json['error_message'] = $e->getMessage();
            }
        });
    }

    public function check_modification() {
        $this->commonUpdateWrapper(function(&$json) {
            try {
                if (null === $modification = $this->getModificationByName(self::MODIFICATION_NAME)) {
                    throw new \Exception(sprintf($this->languageGet("error_modification_not_found"), self::MODIFICATION_NAME));
                }

                $json['status'] = true;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_OK);
            } catch (\Exception $e) {
                $json['status'] = false;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_ERROR);
                $json['error_message'] = $e->getMessage();
            }
        });
    }

    public function verify_fs_permissions() {
        $this->commonUpdateWrapper(function(&$json) {
            $list = array_filter(
                array_unique(
                    array_map(
                        array($this, 'identifyWorkableFsInode'),
                        array_merge(
                            $this->session->data['nitropackio_update']['list_update'],
                            $this->session->data['nitropackio_update']['list_delete']
                        )
                    )
                )
            );

            if ($issues = $this->checkWritePermissions($list)) {
                $json['status'] = false;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_ERROR);
                $json['error_message'] = sprintf(
                    $this->languageGet('error_update_write_permission_list'),
                    '<li>' . implode(
                        '</li><li>',
                        $issues
                    ) . '</li>'
                );
            } else {
                $json['status'] = true;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_OK);
            }
        });
    }

    public function disable_extension() {
        $this->commonUpdateWrapper(function(&$json) {
            Nitropack::executionBlock(function() use (&$json) {
                foreach ($this->getStores() as $store_id => $store) {
                    $nitropack = $this->nitropackFromStoreUrl($store['url']);

                    $this->session->data['nitropackio_update']['status'][$store_id] = $nitropack->setting->get('status', false);

                    $nitropack->setting->set('status', false);
                    $nitropack->setting->save();

                    $this->load->model('setting/setting');
                    $setting = $this->model_setting_setting->getSetting($this->ext->oc->setting_code, $store_id);
                    $setting[$this->ext->oc->field->status] = "0";
                    $this->model_setting_setting->editSetting($this->ext->oc->setting_code, $setting, $store_id);
                }

                $json['status'] = true;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_OK);
            }, function($error_message) use (&$json) {
                $json['status'] = false;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_ERROR);
                $json['error_message'] = $error_message;
            });
        });
    }

    public function install_new_modification() {
        $this->commonUpdateWrapper(function(&$json) {
            try {
                if (empty($this->session->data['nitropackio_update']['zip_new']) || !is_file($this->session->data['nitropackio_update']['zip_new'])) {
                    throw new \Exception($this->languageGet('error_update_files_not_exist'));
                }

                $zip_new = $this->openArchiveFromSessionKey('zip_new');

                // Delete old modification
                if (null !== $modification = $this->getModificationByName(self::MODIFICATION_NAME)) {
                    $this->deleteModification($modification['modification_id']);
                }

                $xml_filename = version_compare(NITROPACK_OPENCART_VERSION, '3', '>=') ? 'install.xml' : '_ocmod/nitropack_io.ocmod.xml';

                if (false === $xml_string = @$zip_new->getFromName($xml_filename)) {
                    throw new \Exception(sprintf($this->languageGet('error_update_compressed_file_missing'), $xml_filename));
                }

                $modification = $this->modificationFromXml($xml_filename, $xml_string);

                $this->addModification($modification);

                @$zip_new->close();

                $json['status'] = true;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_OK);
            } catch (\Exception $e) {
                if (!empty($zip_new)) {
                    @$zip_new->close();
                }

                $json['status'] = false;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_ERROR);
                $json['error_message'] = $e->getMessage();
            }
        });
    }

    public function apply_file_changes() {
        $this->commonUpdateWrapper(function(&$json) {
            try {
                $f_source = null;
                $f_destination = null;

                if (empty($this->session->data['nitropackio_update']['zip_new']) || !is_file($this->session->data['nitropackio_update']['zip_new'])) {
                    throw new \Exception($this->languageGet('error_update_files_not_exist'));
                }

                $zip_new = $this->openArchiveFromSessionKey('zip_new');

                // We are sure that everything in list_update is a file.
                foreach ($this->session->data['nitropackio_update']['list_update'] as $update_file) {
                    $node = $this->zipEntryToNode($update_file);

                    // Create parent directory if it does not exist
                    $dir = dirname($node);

                    if (!file_exists($dir)) {
                        if (!@mkdir($dir, 0755, true)) {
                            throw new \Exception(sprintf($this->languageGet('error_update_mkdir'), $dir));
                        }
                    }

                    if (false === $f_source = @$zip_new->getStream($update_file)) {
                        throw new \Exception(sprintf($this->languageGet('error_update_fopen_zip'), $update_file));
                    }

                    if (false === $f_destination = @fopen($node, 'wb')) {
                        throw new \Exception(sprintf($this->languageGet('error_update_fopen_file'), $node));
                    }

                    while (!@feof($f_source)) {
                        $buf = (string)@fread($f_source, 512);
                        $len = strlen($buf);

                        if ($len > 0) {
                            $written = @fwrite($f_destination, $buf, $len);

                            if (false === $written || $written !== $len) {
                                throw new \Exception(sprintf($this->languageGet('error_update_fwrite'), $node));
                            }
                        }
                    }

                    @fclose($f_source);
                    @fclose($f_destination);

                    $attempts = 0;
                    while (!file_exists($node) && $attempts < self::UPDATE_MAX_FILE_EXISTS_ATTEMPTS) {
                        usleep(500);
                        $attempts++;
                    }

                    if (!file_exists($node) && $attempts == self::UPDATE_MAX_FILE_EXISTS_ATTEMPTS) {
                        throw new \Exception(sprintf($this->languageGet('error_update_missing'), $node));
                    }
                }

                // We are sure that everything in list_delete is a file.
                foreach ($this->session->data['nitropackio_update']['list_delete'] as $delete_file) {
                    @unlink($this->zipEntryToNode($delete_file));
                }

                @$zip_new->close();

                $json['status'] = true;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_OK);
            } catch (\Exception $e) {
                if (!empty($zip_new)) {
                    @$zip_new->close();
                }

                if (is_resource($f_source)) {
                    @fclose($f_source);
                }

                if (is_resource($f_destination)) {
                    @fclose($f_destination);
                }

                $json['status'] = false;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_ERROR);
                $json['error_message'] = $e->getMessage();
            }
        });
    }

    public function cleanup_tmp_files() {
        $this->commonUpdateWrapper(function(&$json) {
            if (!empty($this->session->data['nitropackio_update']['zip_current'])) {
                @unlink($this->session->data['nitropackio_update']['zip_current']);
            }

            if (!empty($this->session->data['nitropackio_update']['zip_new'])) {
                @unlink($this->session->data['nitropackio_update']['zip_new']);
            }

            $json['status'] = true;
            $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_OK);
        });
    }

    public function reset_extension_status() {
        $this->commonUpdateWrapper(function(&$json) {
            Nitropack::executionBlock(function() use (&$json) {
                foreach ($this->getStores() as $store_id => $store) {
                    $nitropack = $this->nitropackFromStoreUrl($store['url']);

                    $nitropack->setting->set('status', $this->session->data['nitropackio_update']['status'][$store_id]);
                    $nitropack->setting->save();

                    $this->load->model('setting/setting');
                    $setting = $this->model_setting_setting->getSetting($this->ext->oc->setting_code, $store_id);
                    $setting[$this->ext->oc->field->status] = (string)(int)$this->session->data['nitropackio_update']['status'][$store_id];
                    $this->model_setting_setting->editSetting($this->ext->oc->setting_code, $setting, $store_id);
                }

                $json['status'] = true;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_OK);
            }, function($error_message) use (&$json) {
                $json['status'] = false;
                $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_ERROR);
                $json['error_message'] = $error_message;
            });
        });
    }

    public function finalize() {
        $this->commonUpdateWrapper(function(&$json) {
            unset($this->session->data['nitropackio_update']);
            $this->session->data['success'] = $this->languageGet('success_update_complete');

            $json['redirect'] = $this->htmlEntityDecode($this->url->link($this->ext->route->module->nitropack, $this->getParamToken() . '&store_id=' . $this->store_id . '&autosave=1', $this->getUrlSsl()));
            $json['status'] = true;
            $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_ALMOST_DONE);
        });
    }

    private function commonUpdateWrapper($callback) {
        $json = array(
            'error_message' => "",
            'progress_status' => "",
            'redirect' => null,
            'status' => false
        );

        if (!$this->validatePermissions()) {
            $json['error_message'] = $this->error['warning'];
            $json['progress_status'] = $this->progressStatus(self::PROGRESS_STATUS_ERROR);
        } else {
            Nitropack::executionBlock(function() use (&$callback, &$json) {
                $callback($json);
            }, function($error) use (&$json) {
                $json['status'] = false;
                $json['error_message'] = $error;
            });
        }

        $this->response->addHeader("Content-Type: application/json");
        $this->response->setOutput(json_encode($json));
    }

    private function progressStatus($type) {
        switch ($type) {
            case self::PROGRESS_STATUS_OK :
                return sprintf('<span class="badge badge-success">%s</span>', $this->languageGet('text_ok'));
            case self::PROGRESS_STATUS_SKIP :
                return sprintf('<span class="badge badge-secondary">%s</span>', $this->languageGet('text_skip'));
            case self::PROGRESS_STATUS_ERROR :
                return sprintf('<span class="badge badge-danger">%s</span>', $this->languageGet('text_error'));
            case self::PROGRESS_STATUS_ALMOST_DONE :
                return sprintf('<small class="text-secondary"><i class="fa fa-spin fa-circle-o-notch"></i> %s</small>', $this->languageGet('text_almost_done'));
        }
    }

    private function releaseDetails($details) {
        $result = array(
            'title' => "",
            'new_releases' => array(),
            'zip_current' => null,
            'zip_new' => null,
            'newest_version' => null,
            'update_steps' => array()
        );

        $steps = array();

        $steps[] = array(
            'abortable' => true,
            'message' => $this->languageGet('text_update_check_system_requirements'),
            'method' => 'check_system_requirements'
        );
        $steps[] = array(
            'abortable' => true,
            'message' => $this->languageGet('text_update_check_disk_space'),
            'method' => 'check_disk_space'
        );
        $steps[] = array(
            'abortable' => true,
            'message' => $this->languageGet('text_update_check_modification'),
            'method' => 'check_modification'
        );
        $steps[] = array(
            'abortable' => true,
            'message' => $this->languageGet('text_update_download_current_version'),
            'method' => 'download_current_version'
        );
        $steps[] = array(
            'abortable' => true,
            'message' => $this->languageGet('text_update_download_new_version'),
            'method' => 'download_new_version'
        );
        $steps[] = array(
            'abortable' => true,
            'message' => $this->languageGet('text_update_identify_changes'),
            'method' => 'identify_changes'
        );
        $steps[] = array(
            'abortable' => true,
            'message' => $this->languageGet('text_update_verify_fs_permissions'),
            'method' => 'verify_fs_permissions'
        );
        $steps[] = array(
            'abortable' => false,
            'message' => $this->languageGet('text_update_disable_extension'),
            'method' => 'disable_extension'
        );
        $steps[] = array(
            'abortable' => false,
            'message' => $this->languageGet('text_update_install_new_modification'),
            'method' => 'install_new_modification'
        );
        $steps[] = array(
            'abortable' => false,
            'message' => $this->languageGet('text_update_apply_file_changes'),
            'method' => 'apply_file_changes'
        );
        $steps[] = array(
            'abortable' => false,
            'message' => $this->languageGet('text_update_cleanup_tmp_files'),
            'method' => 'cleanup_tmp_files'
        );
        $steps[] = array(
            'abortable' => false,
            'message' => $this->languageGet('text_update_refresh_modifications'),
            'method' => null, // Forces the use of ajax_url
            'ajax_url' => $this->htmlEntityDecode($this->url->link($this->ext->oc->route->modification . '/refresh', $this->getParamToken(), $this->getUrlSsl()))
        );
        if (version_compare(NITROPACK_OPENCART_VERSION, '3', '>=')) {
            $steps[] = array(
                'abortable' => false,
                'message' => $this->languageGet('text_update_refresh_theme_cache'),
                'method' => null, // Forces the use of ajax_url
                'ajax_url' => $this->htmlEntityDecode($this->url->link($this->ext->oc->route->theme_cache . '/theme', $this->getParamToken(), $this->getUrlSsl()))
            );
        }
        $steps[] = array(
            'abortable' => false,
            'message' => $this->languageGet('text_update_reset_extension_status'),
            'method' => 'reset_extension_status'
        );
        $steps[] = array(
            'abortable' => false,
            'message' => $this->languageGet('text_update_finalize'),
            'method' => 'finalize'
        );

        // Setting up URLs
        foreach ($steps as &$step) {
            if ($step['method']) {
                $step['url'] = $this->htmlEntityDecode($this->url->link($this->ext->route->module->nitropack . '/' . $step['method'], $this->getParamToken() . '&store_id=' . $this->store_id, $this->getUrlSsl()));
            }
        }

        $result['update_steps'] = $steps;

        $max = $this->ext->version;

        foreach ($details as $release) {
            if (version_compare($release['extension_version'], $this->ext->version, '>')) {
                $result['new_releases'][] = array(
                    'changelog' => $release['changelog'],
                    'date' => $release['release_date'],
                    'version' => $release['extension_version'],
                    'version_text' => sprintf($this->languageGet("text_heading_version"), $release['extension_version'])
                );
            }

            if (version_compare($release['extension_version'], $this->ext->version, '==')) {
                $result['zip_current'] = $release['download_url'];
            }

            if (version_compare($release['extension_version'], $max, '>')) {
                $result['zip_new'] = $release['download_url'];
                $result['newest_version'] = $release['extension_version'];
                $result['title'] = sprintf($this->languageGet("text_title_update_to"), $release['extension_version']);

                $max = $release['extension_version'];
            }
        }

        return $result;
    }

    private function downloadFileFromPostKey($key) {
        if (empty($this->request->post[$key])) {
            throw new \Exception(sprintf($this->languageGet('error_update_invalid_input'), "POST", $key));
        }

        $file = $this->initTempFile();

        $url = $this->request->post[$key];

        $client = new HttpClient($url);
        $client->setDataDrainFile($file);
        $client->fetch();

        if ($client->getStatusCode() !== ResponseStatus::OK) {
            @unlink($file);
            throw new \Exception(sprintf($this->languageGet('error_update_download'), $url, $client->getStatusCode()));
        }

        return $file;
    }

    private function openArchiveFromSessionKey($identifier) {
        $zip = new \ZipArchive;

        if (true !== $open_status = @$zip->open($this->session->data['nitropackio_update'][$identifier], \ZipArchive::CHECKCONS)) {
            switch ($open_status) {
                case \ZipArchive::ER_EXISTS:
                    $reason = $this->languageGet('error_upload_zip_open_case_ER_EXISTS');
                    break;
                case \ZipArchive::ER_INCONS:
                    $reason = $this->languageGet('error_upload_zip_open_case_ER_INCONS');
                    break;
                case \ZipArchive::ER_INVAL:
                    $reason = $this->languageGet('error_upload_zip_open_case_ER_INVAL');
                    break;
                case \ZipArchive::ER_MEMORY:
                    $reason = $this->languageGet('error_upload_zip_open_case_ER_MEMORY');
                    break;
                case \ZipArchive::ER_NOENT:
                    $reason = $this->languageGet('error_upload_zip_open_case_ER_NOENT');
                    break;
                case \ZipArchive::ER_NOZIP:
                    $reason = $this->languageGet('error_upload_zip_open_case_ER_NOZIP');
                    break;
                case \ZipArchive::ER_OPEN:
                    $reason = $this->languageGet('error_upload_zip_open_case_ER_OPEN');
                    break;
                case \ZipArchive::ER_READ:
                    $reason = $this->languageGet('error_upload_zip_open_case_ER_READ');
                    break;
                case \ZipArchive::ER_SEEK:
                    $reason = $this->languageGet('error_upload_zip_open_case_ER_SEEK');
                    break;
                default:
                    $reason = $this->languageGet('error_upload_zip_open_case_UNKNOWN');
            }

            throw new \Exception(sprintf($this->languageGet('error_update_file_invalid'), $this->session->data['nitropackio_update'][$identifier], $reason, filesize($this->session->data['nitropackio_update'][$identifier])));
        }

        return $zip;
    }

    private function getFilesList($zip) {
        $list = array();

        for ($i = 0; $i < $zip->numFiles; $i++) {
            if (false === $stat = @$zip->statIndex($i)) {
                throw new \Exception(sprintf($this->languageGet('error_update_zip_stat'), $i));
            }

            $node = $stat['name'];

            // We are not interested in directories, as this version of the updater will only handle files.
            if (!preg_match('~.*?/$~', $node) && preg_match('~^upload/~', $node)) {
                $list[] = $node;
            }
        }

        return $list;
    }

    private function initTempFile($dir = null) {
        if (false === $file = @tempnam($dir === null ? sys_get_temp_dir() : $dir, 'tmp')) {
            throw new \Exception(sprintf($this->languageGet('error_update_temp_file'), sys_get_temp_dir()));
        }

        return $file;
    }

    private function identifyWorkableFsInode($entry) {
        $node = $this->zipEntryToNode($entry);

        while (!file_exists($node) && !empty($node)) {
            $node = dirname($node);
        }

        return $node;
    }

    private function zipEntryToNode($entry) {
        $admin_name = basename(DIR_APPLICATION);
        $relative_entry = substr($entry, strlen('upload/'));

        if (preg_match('~^admin/~', $relative_entry)) {
            $relative_entry = $admin_name . substr($relative_entry, strlen('admin'));
        }

        return dirname(DIR_APPLICATION) . '/' . $relative_entry;
    }

    private function checkWritePermissions($list) {
        $issues = array();

        foreach ($list as $entry) {
            if (!is_writable($entry)) {
                $issues[] = $entry;
            }
        }

        sort($issues, SORT_NATURAL);

        return $issues;
    }

    private function modificationFromXml($xml_filename, $xml_string) {
        libxml_use_internal_errors(true);

        if (false === $xml = @simplexml_load_string($xml_string)) {
            $errors = array_map(function($error) {
                return $error->message . " | LINE: " . $error->line . " | COLUMN: " . $error->column;
            }, libxml_get_errors());

            libxml_clear_errors();

            throw new \Exception(sprintf($this->languageGet('error_update_invalid_modification_xml'), $xml_filename, '<li>' . implode('</li><li>', $errors) . '</li>'));
        }

        return array(
            'extension_install_id' => 0,
            'name' => $this->extractNodeValue($xml, 'name'),
            'code' => $this->extractNodeValue($xml, 'code'),
            'author' => $this->extractNodeValue($xml, 'author'),
            'version' => $this->extractNodeValue($xml, 'version'),
            'link' => $this->extractNodeValue($xml, 'link'),
            'xml' => $xml_string,
            'status' => 1
        );
    }

    private function extractNodeValue(&$xml, $tagName) {
        $node = (string)$xml->{$tagName};

        if (!$node) {
            throw new \Exception(sprintf($this->languageGet('error_update_xml_node_missing'), $tagName));
        }

        return $node;
    }
}
