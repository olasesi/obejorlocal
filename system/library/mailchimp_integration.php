<?php
//==============================================================================
// MailChimp Integration v303.1
// 
// Author: Clear Thinking, LLC
// E-mail: johnathan@getclearthinking.com
// Website: http://www.getclearthinking.com
// 
// All code within this file is copyright Clear Thinking, LLC.
// You may not copy or reuse code within this file without written permission.
//==============================================================================

class Mailchimp_Integration {
	private $type = 'module';
	private $name = 'mailchimp_integration';
	private $settings;
	
	public function __construct($registry) {
		$this->config = $registry->get('config');
		$this->db = $registry->get('db');
		$this->session = $registry->get('session');
		$this->tax = $registry->get('tax');
		$this->url = $registry->get('url');
	}
	
	//==============================================================================
	// Utility functions
	//==============================================================================
	public function getLists() {
		$response = $this->curlRequest('GET', 'lists', array('count' => 99));
		return (isset($response['lists'])) ? $response['lists'] : array();
	}
	
	public function getMergeTags($listid) {
		$response = $this->curlRequest('GET', 'lists/' . $listid . '/merge-fields', array('count' => 99));
		return (isset($response['merge_fields'])) ? $response['merge_fields'] : array();
	}
	
	public function getMemberInfo($listid, $email) {
		$response = $this->curlRequest('GET', 'lists/' . $listid . '/members/' . md5(strtolower($email)));
		return (empty($response['error'])) ? $response : array();
	}
	
	public function createWebhooks($lists) {
		$settings = $this->getSettings();
		
		$catalog_url = ($this->config->get('config_ssl') || $this->config->get('config_secure')) ? str_replace('http:', 'https:', HTTP_CATALOG) : HTTP_CATALOG;
		$url = $catalog_url . 'index.php?route=extension/' . $this->type . '/' . $this->name . '/webhook&key=' . md5($this->config->get('config_encryption'));
		
		$webhooks = (!empty($settings['webhooks'])) ? explode(';', $settings['webhooks']) : array();
		if (empty($webhooks)) return;
		
		foreach ($lists as $list) {
			$response = $this->curlRequest('GET', 'lists/' . $list['id'] . '/webhooks');
			
			$mc_webhooks = array();
			if (empty($response['error'])) {
				foreach ($response['webhooks'] as $mc_webhook) {
					if ($mc_webhook['url'] == $url) {
						$this->curlRequest('DELETE', 'lists/' . $list['id'] . '/webhooks/' . $mc_webhook['id'], array());
					}
				}
			}
			
			$curl_data = array(
				'url'		=> $url,
				'events'	=> array(
					'subscribe'		=> in_array('subscribe', $webhooks),
					'unsubscribe'	=> in_array('unsubscribe', $webhooks),
					'profile'		=> in_array('profile', $webhooks),
					'upemail'		=> in_array('profile', $webhooks),
					'cleaned'		=> in_array('cleaned', $webhooks),
					'campaign'		=> false,
				),
				'sources'	=> array(
					'user'		=> true,
					'admin'		=> true,
					'api'		=> true,
				),
			);
			
			$response = $this->curlRequest('POST', 'lists/' . $list['id'] . '/webhooks', $curl_data);
		}
	}
	
	public function determineList($customer, $address) {
		$settings = $this->getSettings();
		return $settings['listid'];
	}
	
	//==============================================================================
	// send()
	//==============================================================================
	public function send($data) {
		$settings = $this->getSettings();
		
		if (empty($settings['status'])) {
			$this->logMessage('Error: Extension is disabled');
			return;
		} elseif (empty($settings['apikey'])) {
			$this->logMessage('Error: API Key is not filled in');
			return;
		} elseif (empty($settings['listid'])) {
			$this->logMessage('Error: Default list is not set');
			return;
		}
		
		unset($this->session->data['mailchimp_lists']);
		unset($this->session->data['mailchimp_subscribed_lists']);
		
		// Get customer information
		if (!empty($data['customer_id'])) {
			if (!empty($data['newsletter']) && !empty($settings['subscribed_group'])) {
				$this->db->query("UPDATE " . DB_PREFIX . "customer SET customer_group_id = " . (int)$settings['subscribed_group'] . " WHERE customer_id = " . (int)$data['customer_id']);
			} elseif (empty($data['newsletter']) && !empty($settings['unsubscribed_group'])) {
				$this->db->query("UPDATE " . DB_PREFIX . "customer SET customer_group_id = " . (int)$settings['unsubscribed_group'] . " WHERE customer_id = " . (int)$data['customer_id']);
			}
			
			$customer = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE customer_id = " . (int)$data['customer_id'])->row;
			if (isset($data['customer_newsletter'])) {
				$customer['newsletter'] = $data['customer_newsletter'];
			}
			
			if (!empty($data['custom_field'])) {
				$customer['custom_field'] = $data['custom_field'];
			} elseif (!empty($customer['custom_field'])) {
				$customer['custom_field'] = (version_compare(VERSION, '2.1', '<')) ? unserialize($customer['custom_field']) : json_decode($customer['custom_field'], true);
			} else {
				$customer['custom_field'] = array();
			}
		} else {
			$customer = array(
				'customer_id'		=> 0,
				'customer_group_id'	=> (isset($data['customer_group_id'])) ? $data['customer_group_id'] : 0,
				'email'				=> (isset($data['email'])) ? $data['email'] : '',
				'firstname'			=> '',
				'lastname'			=> '',
				'address_id'		=> '',
				'telephone'			=> '',
				'newsletter'		=> 0,
				'custom_field'		=> (isset($data['custom_field'])) ? $data['custom_field'] : array(),
			);
		}
		
		// Get address information
		if (!empty($data['addresses'])) {
			$data['address'] = $data['addresses'];
		}
		if (!empty($data['address'])) {
			foreach ($data['address'] as $address_data) {
				$address = $address_data;
				if (!empty($address['default'])) break;
			}
		} else {
			$address = $data;
		}
		unset($data['address']);
		
		if (!empty($address['country_id'])) {
			$country_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "country WHERE country_id = " . (int)$address['country_id']);
			$address['iso_code_2'] = (!empty($country_query->row['iso_code_2'])) ? $country_query->row['iso_code_2'] : '';
		}
		if (!empty($address['zone_id'])) {
			$zone_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone WHERE zone_id = " . (int)$address['zone_id']);
			$address['zone'] = (!empty($zone_query->row['name'])) ? html_entity_decode($zone_query->row['name'], ENT_QUOTES, 'UTF-8') : '';
		}
		
		$address_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "address WHERE address_id = " . (int)$customer['address_id']);
		$default_address = ($address_query->num_rows) ? $address_query->row : array(
			'address_1'		=> '',
			'address_2'		=> '',
			'city'			=> '',
			'postcode'		=> '',
			'zone_id'		=> '',
			'country_id'	=> '',
		);
		
		if (!empty($address['custom_field'])) {
			$customer['custom_field'] += $address['custom_field'];
		} elseif (!empty($default_address['custom_field'])) {
			$address_custom_fields = (version_compare(VERSION, '2.1', '<')) ? unserialize($default_address['custom_field']) : json_decode($default_address['custom_field'], true);
			$customer['custom_field'] += $address_custom_fields; // needs + to avoid losing indexes
		}
		
		$country_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "country WHERE country_id = " . (int)$default_address['country_id']);
		$default_address['iso_code_2'] = (!empty($country_query->row['iso_code_2'])) ? $country_query->row['iso_code_2'] : '';
		
		$zone_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone WHERE zone_id = " . (int)$default_address['zone_id']);
		$default_address['zone'] = (!empty($zone_query->row['name'])) ? html_entity_decode($zone_query->row['name'], ENT_QUOTES, 'UTF-8') : '';
		
		$customer['address'] = array(
			'addr1'		=> (isset($address['address_1']))	? $address['address_1']		: $default_address['address_1'],
			'addr2'		=> (isset($address['address_2']))	? $address['address_2']		: $default_address['address_2'],
			'city'		=> (isset($address['city']))		? $address['city']			: $default_address['city'],
			'state'		=> (isset($address['zone']))		? $address['zone']			: $default_address['zone'],
			'zip'		=> (isset($address['postcode']))	? $address['postcode']		: $default_address['postcode'],
			'country'	=> (isset($address['iso_code_2']))	? $address['iso_code_2']	: $default_address['iso_code_2'],
		);
		
		// Set list_id
		if (empty($data['list'])) {
			$list_ids = array($this->determineList($customer, $address));
		} else {
			$list_ids = (is_array($data['list'])) ? $data['list'] : array($data['list']);
		}
		
		// Loop through lists, and Subscribe or Unsubscribe
		$errors = array();
		$first_loop = true;
		
		foreach ($list_ids as $list_id) {
			if (empty($data['newsletter'])) {
				$curl_request = 'PATCH';
				$curl_api = 'lists/' . $list_id . '/members/' . md5(strtolower($customer['email']));
				$curl_data = array(
					'status'	=> 'unsubscribed',
				);
			} else {
				// Unsubscribe customer from other lists first
				if (!empty($data['list']) && $first_loop) {
					foreach ($this->getLists() as $list) {
						if (in_array($list['id'], $list_ids)) continue;
						
						$curl_request = 'PATCH';
						$curl_api = 'lists/' . $list['id'] . '/members/' . md5(strtolower($customer['email']));
						$curl_data = array('status' => 'unsubscribed');
						$response = $this->curlRequest($curl_request, $curl_api, $curl_data);
					}
					
					$first_loop = false;
				}
				
				// Set up merge data
				$merge_array = array();
				
				// Language merge tag
				if (!empty($this->session->data['language'])) {
					$merge_array['MC_LANGUAGE'] = $this->session->data['language'];
				} elseif (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
					$language_region = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5));
					if ($language_region == 'fr-ca' || $language_region == 'pt-pt' || $language_region == 'es-es') {
						$merge_array['MC_LANGUAGE']	= substr($language_region, 0, 2) . '_' . strtoupper(substr($language_region, -2));
					} else {
						$merge_array['MC_LANGUAGE']	= substr($language_region, 0, 2);
					}
				} else {
					$merge_array['MC_LANGUAGE']	= $this->config->get('config_language');
				}
				
				// Other merge tags
				foreach ($this->getMergeTags($list_id) as $merge) {
					if ($merge['tag'] == 'EMAIL') continue;
					
					$merge_setting_value = (!empty($settings[$list_id . '_' . $merge['tag']])) ? $settings[$list_id . '_' . $merge['tag']] : '';
					
					if (empty($merge_setting_value)) {
						if (!$merge['required']) continue;
						$merge_array[$merge['tag']] = ($merge['type'] == 'zip') ? '00000' : '(none)';
					} else {
						$merge_setting_split = explode(':', $merge_setting_value);
						$table = $merge_setting_split[0];
						$column = ($merge_setting_split[1] == 'address_id') ? 'address' : $merge_setting_split[1];
						
						if ($table == 'custom_field') {
							if (!empty($customer['custom_field'][$column])) {
								$custom_field_value_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "custom_field_value_description WHERE custom_field_id = " . (int)$column . " AND custom_field_value_id = " . (int)$customer['custom_field'][$column]);
								if ($custom_field_value_query->num_rows) {
									$merge_array[$merge['tag']] = $custom_field_value_query->row['name'];
								} else {
									$merge_array[$merge['tag']] = $customer['custom_field'][$column];
								}
							}
						} elseif (!empty($data[$column])) {
							$merge_array[$merge['tag']] = $data[$column];
						} elseif (!empty($customer[$column])) {
							$merge_array[$merge['tag']] = $customer[$column];
						} else {
							$customer_query = $this->db->query("SELECT * FROM " . DB_PREFIX . $table . " WHERE customer_id = " . (int)$customer['customer_id']);
							if (!empty($customer_query->row[$column])) {
								$merge_array[$merge['tag']] = $customer_query->row[$column];
							} elseif ($merge['required']) {
								$merge_array[$merge['tag']] = ($merge['type'] == 'zip') ? '00000' : '(none)';
							}
						}
						
						if ($merge['type'] == 'phone' && !empty($merge_array[$merge['tag']])) {
							$telephone = preg_replace('/[^0-9]/', '', $merge_array[$merge['tag']]);
							if ($telephone || $merge['required']) {
								$merge_array[$merge['tag']] = substr($telephone, 0, 3) . '-' . substr($telephone, 3, 3) . '-' . substr($telephone, 6);
							} else {
								unset($merge_array[$merge['tag']]);
							}
						}
					}
					
					if ($merge['type'] == 'address') {
						if (!array_filter($merge_array[$merge['tag']])) {
							unset($merge_array[$merge['tag']]);
						} else {
							$zip = trim($merge_array[$merge['tag']]['zip']);
							if (empty($zip)) $merge_array[$merge['tag']]['zip'] = '00000';
						}
					}
				}
				
				foreach ($merge_array as &$merge) {
					if (is_array($merge)) {
						foreach ($merge as &$m) {
							$m = html_entity_decode($m, ENT_QUOTES, 'UTF-8');
						}
					} else {
						$merge = html_entity_decode($merge, ENT_QUOTES, 'UTF-8');
					}
				}
				
				// Subscribe
				if (isset($data['update_existing']) && $data['update_existing'] == false) {
					$curl_request = 'POST';
					$curl_api = 'lists/' . $list_id . '/members';
				} else {
					$curl_request = 'PUT';
					$curl_api = 'lists/' . $list_id . '/members/' . md5(strtolower($customer['email']));
				}
				
				$curl_data = array(
					'email_type'	=> 'html',
					'status'		=> 'subscribed',
					'merge_fields'	=> $merge_array,
					'language'		=> $merge_array['MC_LANGUAGE'],
					'email_address'	=> (isset($data['email'])) ? $data['email'] : $customer['email'],
				);
				
				$double_optin = (isset($data['double_optin'])) ? $data['double_optin'] : $settings['double_optin'];
				
				if ($double_optin && !$customer['newsletter']) {
					$curl_data['status'] = 'pending';
					
					/* The "status_if_new" field isn't documented in the API currently, so I'm not sure if they removed it or if it just can't be set alongside the "status" field
					if ($curl_request == 'POST') {
						$curl_data['status'] = 'pending';
					} else {
						$curl_data['status_if_new'] = 'pending';
					}
					*/
				} else {
					$curl_data['ip_opt'] = $_SERVER['REMOTE_ADDR'];
				}
			}
			
			$response = $this->curlRequest($curl_request, $curl_api, $curl_data);
			
			if (!empty($response['error'])) {
				$errors[] = $response['error'];
			}
		}
		
		return ($errors) ? '&bull; ' . implode('<br />&bull; ', $errors) : '';
	}
	
	//==============================================================================
	// sync()
	//==============================================================================
	public function sync($start, $end) {
		$settings = $this->getSettings();
		
		if (empty($settings['apikey'])) {
			return 'Error: No API Key is filled in';
		} elseif (empty($settings['listid'])) {
			return 'Error: No List ID is set';
		}
		
		$output = "Completed!\n\n";
		$data_center = explode('-', $settings['apikey']);
		$lists = $this->getLists();
		
		// MailChimp to OpenCart
		if ($settings['autocreate']) {
			// Get all OpenCart e-mails
			$opencart_emails = array();
			$all_customers = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer")->rows;
			
			foreach ($all_customers as $customer) {
				$opencart_emails[] = strtolower($customer['email']);
			}
			
			$created = 0;
			
			// Loop through lists to get MailChimp e-mails
			foreach ($lists as $list) {
				if ($list['id'] != $settings['listid']) continue;
				
				$context = stream_context_create(array('http' => array('ignore_errors' => '1')));
				$response = @file_get_contents('https://' . $data_center[1] . '.api.mailchimp.com/export/1.0/list/?apikey=' . $settings['apikey'] . '&id=' . $list['id'], false, $context);
				
				$mailchimp_emails = array();
				foreach (explode("\n", $response) as $line) {
					$subscriber = json_decode($line);
					if (strpos($subscriber[0], '@') === false) continue;
					$mailchimp_emails[] = strtolower($subscriber[0]);
				}
				$diff_emails = array_diff($mailchimp_emails, $opencart_emails);
				
				// Auto-create customers that don't exist in OpenCart
				foreach ($diff_emails as $email) {
					$response = $this->curlRequest('GET', 'lists/' . $list['id'] . '/members/' . md5(strtolower($email)));
					
					if (!empty($response['error'])) {
						$this->logMessage('SYNC ERROR: ' . $errors);
						return $response['error'];
					} else {
						$this->createCustomer($response);
						$created++;
					}
				}
			}
			
			$output .= $created . " customer(s) created in OpenCart\n";
		}
		
		// Get merge tags
		$merge_array = array();
		foreach ($lists as $list) {
			foreach ($this->getMergeTags($list['id']) as $merge) {
				if ($merge['tag'] == 'EMAIL') {
					$merge_array[$list['id']]['EMAIL'] = 'email';
					continue;
				}
				
				$merge_setting_value = (!empty($settings[$list['id'] . '_' . $merge['tag']])) ? $settings[$list['id'] . '_' . $merge['tag']] : '';
				
				if (empty($merge_setting_value)) {
					if (!$merge['required']) continue;
					$merge_array[$list['id']][$merge['tag']] = ($merge['type'] == 'zip') ? '00000' : '(none)';
				} else {
					$merge_setting_split = explode(':', $merge_setting_value);
					if ($merge_setting_split[0] == 'customer' || $merge_setting_split[1] == 'address_id') {
						$merge_array[$list['id']][$merge['tag']] = $merge_setting_split[1];
					} else {
						$merge_array[$list['id']][$merge['tag']] = $merge_setting_value;
					}
				}
			}
		}
			
		// Get OpenCart customers, and change customer groups
		$customer_id_sql = '';
		if ($start) $customer_id_sql .= " AND customer_id >= " . (int)$start;
		if ($end) $customer_id_sql .= " AND customer_id <= " . (int)$end;
		
		$customers = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE TRUE" . $customer_id_sql . " ORDER BY customer_group_id, store_id ASC")->rows;
		
		if (!empty($settings['subscribed_group'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "customer SET customer_group_id = " . (int)$settings['subscribed_group'] . " WHERE newsletter = 1" . $customer_id_sql);
		}
		if (!empty($settings['unsubscribed_group'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "customer SET customer_group_id = " . (int)$settings['unsubscribed_group'] . " WHERE newsletter = 0" . $customer_id_sql);
		}
		
		// OpenCart to MailChimp
		$operations = array();
		$count = 0;
		
		foreach ($customers as $customer) {
			if (!$customer['newsletter']) continue;
			
			$address = $this->db->query("SELECT * FROM " . DB_PREFIX . "address WHERE address_id = " . (int)$customer['address_id'])->row;
			
			$this->config->set($this->name . '_testing_mode', 0);
			$listid = $this->determineList($customer, $address);
			$this->config->set($this->name . '_testing_mode', $settings['testing_mode']);
			
			$formatted_customer = array('email_address' => $customer['email'], 'status' => 'subscribed');
			
			foreach ($merge_array as $merge_listid => $merges) {
				if ($merge_listid != $listid) continue;
				foreach ($merges as $merge_tag => $opencart_field) {
					if ($opencart_field == 'address_id') {
						$address_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "address WHERE address_id = " . (int)$customer['address_id']);
						if ($address_query->num_rows) {
							$address = $address_query->row;
							if (!empty($address['country_id'])) {
								$country_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "country WHERE country_id = " . (int)$address['country_id']);
								$address['iso_code_2'] = (!empty($country_query->row['iso_code_2'])) ? $country_query->row['iso_code_2'] : '';
							}
							if (!empty($address['zone_id'])) {
								$zone_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone WHERE zone_id = " . (int)$address['zone_id']);
								$address['zone'] = (!empty($zone_query->row['name'])) ? html_entity_decode($zone_query->row['name'], ENT_QUOTES, 'UTF-8') : '(none)';
							}
							$formatted_customer['merge_fields'][$merge_tag] = array(
								'addr1'		=> $address['address_1'],
								'addr2'		=> $address['address_2'],
								'city'		=> $address['city'],
								'state'		=> (isset($address['zone'])) ? $address['zone'] : '(none)',
								'zip'		=> (!empty($address['postcode'])) ? $address['postcode'] : '00000',
								'country'	=> (isset($address['iso_code_2'])) ? $address['iso_code_2'] : ''
							);
						}
					} elseif ($opencart_field == 'telephone') {
						$telephone = preg_replace('/[^0-9]/', '', $customer[$opencart_field]);
						if ($telephone) {
							$formatted_customer['merge_fields'][$merge_tag] = substr($telephone, 0, 3) . '-' . substr($telephone, 3, 3) . '-' . substr($telephone, 6);
						}
					} elseif ($opencart_field == '00000' || $opencart_field == '(none)') {
						$formatted_customer['merge_fields'][$merge_tag] = $opencart_field;
					} elseif (isset($customer[$opencart_field])) {
						$formatted_customer['merge_fields'][$merge_tag] = $customer[$opencart_field];
					} else {
						$field_split = explode(':', $opencart_field);
						if ($field_split[0] == 'custom_field') {
							$address_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "address WHERE address_id = " . (int)$customer['address_id']);
							if ($address_query->num_rows && !empty($address_query->row['custom_field'])) {
								$address_custom_fields = (version_compare(VERSION, '2.1', '<')) ? unserialize($address_query->row['custom_field']) : json_decode($address_query->row['custom_field'], true);
							} else {
								$address_custom_fields = array();
							}
							$custom_fields = (version_compare(VERSION, '2.1', '<')) ? unserialize($customer['custom_field']) : json_decode($customer['custom_field'], true);
							$custom_fields += $address_custom_fields;
							
							if (isset($custom_fields[$field_split[1]])) {
								$custom_field_value_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "custom_field_value_description WHERE custom_field_id = " . (int)$field_split[1] . " AND custom_field_value_id = " . (int)$custom_fields[$field_split[1]]);
								if ($custom_field_value_query->num_rows) {
									$formatted_customer['merge_fields'][$merge_tag] = $custom_field_value_query->row['name'];
								} else {
									$formatted_customer['merge_fields'][$merge_tag] = $custom_fields[$field_split[1]];
								}
							}
							if (empty($formatted_customer['merge_fields'][$merge_tag])) {
								$formatted_customer['merge_fields'][$merge_tag] = '(none)';
							}
						} else {
							if ($field_split[0] == 'address') {
								$database_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "address WHERE address_id = " . (int)$customer['address_id']);
							} else {
								$database_query = $this->db->query("SELECT * FROM " . DB_PREFIX . $field_split[0] . " WHERE customer_id = " . (int)$customer['customer_id']);
							}
							$formatted_customer['merge_fields'][$merge_tag] = (isset($field_split[1]) && isset($database_query->row[$field_split[1]])) ? $database_query->row[$field_split[1]] : '(none)';
						}
					}
				}
			}
			
			foreach ($formatted_customer['merge_fields'] as &$merge) {
				if (is_array($merge)) {
					foreach ($merge as &$m) {
						$m = html_entity_decode($m, ENT_QUOTES, 'UTF-8');
					}
				} else {
					$merge = html_entity_decode($merge, ENT_QUOTES, 'UTF-8');
				}
			}
			
			$operations[] = array(
				'method'	=> 'PUT',
				'path'		=> 'lists/' . $listid . '/members/' . md5(strtolower($formatted_customer['email_address'])),
				'body'		=> json_encode($formatted_customer),
			);
			
			$count += 1;
		}
		
		if (empty($operations)) {
			return 'No eligible customers';
		}
		
		$response = $this->curlRequest('POST', 'batches', array('operations' => $operations));
		
		if (!empty($response['error'])) {
			$this->logMessage('SYNC ERROR: ' . $errors);
			return $response['error'];
		}
		
		$output .= $count . " customer(s) sent to MailChimp\n";
		$output .= "\nNote: Customers are processed by MailChimp as part of a batch request, and added or updated accordingly. You can check the status of the batch request here:\n\n";
		$output .= 'https://' . $data_center[1] . '.api.mailchimp.com/3.0/batches/' . $response['id'] . '?apikey=' . $settings['apikey'];
		
		$this->logMessage('SYNC SUCCESS: ' . str_replace("\n", ' ', $output));
		
		return $output;
	}
	
	//==============================================================================
	// webhook()
	//==============================================================================
	public function webhook($type, $data) {
		$settings = $this->getSettings();
		
		if (empty($settings['status'])) {
			$this->logMessage('WEBHOOK ERROR: Extension is disabled in the admin panel');
			return;
		}
		
		if (empty($settings['webhooks'])) {
			$this->logMessage('WEBHOOK ERROR: No webhooks are enabled in the admin panel');
			return;
		}
		
		$webhooks = explode(';', $settings['webhooks']);
		
		$listid = $settings['listid'];
		$customer_group_id = $this->config->get('config_customer_group_id');
		/*
		foreach ($settings as $key => $value) {
			if (strpos($value, '_list') && $value == $data['list_id']) {
				if (customer group rule exists) {
					$listid = $data['list_id'];
					$customer_group_id = customer group value
					break;
				}
			}
		}
		*/
		$data['customer_group_id'] = $customer_group_id;
		
		$success = false;
		
		if ($type == 'subscribe' && in_array('subscribe', $webhooks)) {
			
			if ($settings['autocreate'] && $data['list_id'] == $settings['listid']) {
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE email = '" . $this->db->escape($data['email']) . "'");
				if (!$query->num_rows) {
					$this->createCustomer($data);
				}
			}
			$this->db->query("UPDATE " . DB_PREFIX . "customer SET newsletter = 1 WHERE email = '" . $this->db->escape($data['email']) . "'");
			if (!empty($settings['subscribed_group'])) $this->db->query("UPDATE " . DB_PREFIX . "customer SET customer_group_id = " . (int)$settings['subscribed_group'] . " WHERE email = '" . $this->db->escape($data['email']) . "'");
			$success = true;
			
		} elseif (($type == 'unsubscribe' && in_array('unsubscribe', $webhooks)) || ($type == 'cleaned' && in_array('cleaned', $webhooks))) {
			
			$this->db->query("UPDATE " . DB_PREFIX . "customer SET newsletter = 0 WHERE email = '" . $this->db->escape($data['email']) . "'");
			//$this->db->query("DELETE FROM " . DB_PREFIX . "journal2_newsletter WHERE email = '" . $this->db->escape($data['email']) . "'");
			if (!empty($settings['unsubscribed_group'])) $this->db->query("UPDATE " . DB_PREFIX . "customer SET customer_group_id = " . (int)$settings['unsubscribed_group'] . " WHERE email = '" . $this->db->escape($data['email']) . "'");
			$success = true;
			
		} elseif ($type == 'profile' && in_array('profile', $webhooks)) {
			
			$customer_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer WHERE email = '" . $this->db->escape($data['email']) . "'");
			if (empty($customer_query->row['address_id'])) {
				$this->logMessage('WEBHOOK ERROR: customer ' . $data['email'] . ' does not have a valid address_id');
				return;
			}
			
			foreach ($data['merges'] as $merge_tag => $merge_value) {
				if ($merge_tag == 'EMAIL' || empty($settings[$data['list_id'] . '_' . $merge_tag])) continue;
				$merge_mapping = $settings[$data['list_id'] . '_' . $merge_tag];
				if (strpos($merge_mapping, ':firstname')) {
					$this->db->query("UPDATE " . DB_PREFIX . "customer SET firstname = '" . $this->db->escape($merge_value) . "' WHERE email = '" . $this->db->escape($data['email']) . "'");
					$this->db->query("UPDATE " . DB_PREFIX . "address SET firstname = '" . $this->db->escape($merge_value) . "' WHERE address_id = " . (int)$customer_query->row['address_id']);
				} elseif (strpos($merge_mapping, ':lastname')) {
					$this->db->query("UPDATE " . DB_PREFIX . "customer SET lastname = '" . $this->db->escape($merge_value) . "' WHERE email = '" . $this->db->escape($data['email']) . "'");
					$this->db->query("UPDATE " . DB_PREFIX . "address SET lastname = '" . $this->db->escape($merge_value) . "' WHERE address_id = " . (int)$customer_query->row['address_id']);
				} elseif (strpos($merge_mapping, ':telephone')) {
					$this->db->query("UPDATE " . DB_PREFIX . "customer SET telephone = '" . $this->db->escape($merge_value) . "' WHERE email = '" . $this->db->escape($data['email']) . "'");
				} elseif (strpos($merge_mapping, ':address_id')) {
					$country_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "country WHERE iso_code_2 = '" . $this->db->escape($merge_value['country']) . "'");
					$country_id = ($country_query->num_rows) ? (int)$country_query->row['country_id'] : 0;
					
					$zone_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone WHERE (`name` = '" . $this->db->escape($merge_value['state']) . "' OR `code` = '" . $this->db->escape($merge_value['state']) . "') AND country_id = " . (int)$country_id);
					$zone_id = ($zone_query->num_rows) ? (int)$zone_query->row['zone_id'] : 0;
					
					$this->db->query("
						UPDATE " . DB_PREFIX . "address SET
						address_1 = '" . $this->db->escape($merge_value['addr1']) . "',
						address_2 = '" . $this->db->escape($merge_value['addr2']) . "',
						city = '" . $this->db->escape($merge_value['city']) . "',
						zone_id = " . $zone_id . ",
						postcode = '" . $this->db->escape($merge_value['zip']) . "',
						country_id = " . $country_id . "
						WHERE address_id = " . (int)$customer_query->row['address_id'] . "
					");
				} else {
					$merge_mapping_split = explode(':', $merge_mapping);
					if ($merge_mapping_split[1] != 'customer_id') {
						$this->db->query("UPDATE `" . DB_PREFIX . $merge_mapping_split[0] . "` SET `" . $merge_mapping_split[1] . "` = '" . $this->db->escape($merge_value) . "' WHERE email = '" . $this->db->escape($data['email']) . "'");
					}
				}
			}
			
			$success = true;
			
		} elseif ($type == 'upemail' && in_array('profile', $webhooks)) {
			
			$this->db->query("UPDATE " . DB_PREFIX . "customer SET email = '" . $this->db->escape($data['new_email']) . "' WHERE email = '" . $this->db->escape($data['old_email']) . "'");
			$success = true;
			
		}
		
		if ($success) {
			$this->logMessage('WEBHOOK SUCCESS: ' . $type . ' ' . $data['email'] . ' (List ID ' . $data['list_id'] . ')');
		}
	}
	
	//==============================================================================
	// createCustomer()
	//==============================================================================
	private function createCustomer($data) {
		$settings = $this->getSettings();
		
		$merge_mapping = array();
		foreach ($settings as $key => $value) {
			if (strpos($key, $data['list_id']) !== 0 || is_array($value)) {
				continue;
			}
			if (strpos($value, ':firstname')) {
				$merge_mapping['firstname'] = str_replace($data['list_id'] . '_', '', $key);
			} elseif (strpos($value, ':lastname')) {
				$merge_mapping['lastname'] = str_replace($data['list_id'] . '_', '', $key);
			} elseif (strpos($value, ':telephone')) {
				$merge_mapping['telephone'] = str_replace($data['list_id'] . '_', '', $key);
			} elseif (strpos($value, ':address_id')) {
				$merge_mapping['address'] = str_replace($data['list_id'] . '_', '', $key);
			}
		}
		
		$customer = array(
			'status'			=> (int)($settings['autocreate'] == 2),
			'customer_group_id'	=> (!empty($data['customer_group_id']) ? $data['customer_group_id'] : $this->config->get('config_customer_group_id')),
			'email'				=> (isset($data['email_address'])) ? $data['email_address'] : $data['email'],
			'firstname'			=> (isset($merge_mapping['firstname']) &&!empty($data['merges'][$merge_mapping['firstname']]) ? $data['merges'][$merge_mapping['firstname']] : ''),
			'lastname'			=> (isset($merge_mapping['lastname']) &&!empty($data['merges'][$merge_mapping['lastname']]) ? $data['merges'][$merge_mapping['lastname']] : ''),
			'telephone'			=> (isset($merge_mapping['telephone']) && !empty($data['merges'][$merge_mapping['telephone']]) ? $data['merges'][$merge_mapping['telephone']] : ''),
			'address'			=> (isset($merge_mapping['address']) &&!empty($data['merges'][$merge_mapping['address']]) ? $data['merges'][$merge_mapping['address']] : array()),
			'ip'				=> $data['ip_opt'],
			'password'			=> rand(),
		);
		
		$this->db->query("
			INSERT INTO " . DB_PREFIX . "customer SET
			status = " . (int)$customer['status'] . ",
			" . (version_compare(VERSION, '3.0', '<') ? "approved = 1," : "") . "
			newsletter = 1,
			customer_group_id = " . (int)$customer['customer_group_id'] . ",
			email = '" . $this->db->escape($customer['email']) . "',
			firstname = '" . $this->db->escape($customer['firstname']) . "',
			lastname = '" . $this->db->escape($customer['lastname']) . "',
			telephone = '" . $this->db->escape($customer['telephone']) . "',
			ip = '" . $this->db->escape($customer['ip']) . "',
			password = '" . $this->db->escape(md5($customer['password'])) . "',
			date_added = NOW()
		");
		
		$customer_id = $this->db->getLastId();
		
		if (version_compare(VERSION, '2.3', '>=')) {
			$this->db->query("UPDATE " . DB_PREFIX . "customer SET language_id = " . (int)$this->config->get('config_language_id') . " WHERE customer_id = " . (int)$customer_id);
		}
		
		if (!isset($customer['address']['addr1']))		$customer['address']['addr1']	= '';
		if (!isset($customer['address']['addr2']))		$customer['address']['addr2']	= '';
		if (!isset($customer['address']['city']))		$customer['address']['city']	= '';
		if (!isset($customer['address']['zip']))		$customer['address']['zip']	= '';
		if (!isset($customer['address']['country']))	$customer['address']['country']	= '';
		if (!isset($customer['address']['state']))		$customer['address']['state'] = '';
		
		$country_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "country WHERE iso_code_2 = '" . $this->db->escape($customer['address']['country']) . "'");
		$country_id = ($country_query->num_rows) ? $country_query->row['country_id'] : 0;
		$zone_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone WHERE (`name` = '" . $this->db->escape($customer['address']['state']) . "' OR `code` = '" . $this->db->escape($customer['address']['state']) . "') AND country_id = " . (int)$country_id);
		$zone_id = ($zone_query->num_rows) ? $zone_query->row['zone_id'] : 0;
		
		$this->db->query("
			INSERT INTO " . DB_PREFIX . "address SET
			customer_id = " . (int)$customer_id . ",
			firstname = '" . $this->db->escape($customer['firstname']) . "',
			lastname = '" . $this->db->escape($customer['lastname']) . "',
			address_1 = '" . $this->db->escape($customer['address']['addr1']) . "',
			address_2 = '" . $this->db->escape($customer['address']['addr2']) . "',
			city = '" . $this->db->escape($customer['address']['city']) . "',
			zone_id = " . (int)$zone_id . ",
			postcode = '" . $this->db->escape($customer['address']['zip']) . "',
			country_id = " . (int)$country_id . "
		");
		
		$address_id = $this->db->getLastId();
		$this->db->query("UPDATE " . DB_PREFIX . "customer SET address_id = " . (int)$address_id . " WHERE customer_id = " . (int)$customer_id);
		
		$language = (!empty($this->session->data['language'])) ? $this->session->data['language'] : $this->config->get('config_language');
		$email_subject = str_replace('[store]', $this->config->get('config_name'), $settings['emailtext_subject_' . $language]);
		$email_body = html_entity_decode(str_replace(array('[store]', '[email]', '[password]', '[firstname]', '[lastname]'), array($this->config->get('config_name'), $customer['email'], $customer['password'], $customer['firstname'], $customer['lastname']), $settings['emailtext_body_' . $language]), ENT_QUOTES, 'UTF-8');
		
		if ($settings['email_password'] && $customer['status']) {
			if (version_compare(VERSION, '2.0', '<')) {
				$mail->hostname = $this->config->get('config_smtp_host');
				$mail->username = $this->config->get('config_smtp_username');
				$mail->password = html_entity_decode($this->config->get('config_smtp_password'), ENT_QUOTES, 'UTF-8');
				$mail->port = $this->config->get('config_smtp_port');
				$mail->timeout = $this->config->get('config_smtp_timeout');
			} elseif (version_compare(VERSION, '2.0.2', '<')) {
				$mail = new Mail($this->config->get('config_mail'));
			} else {
				if (version_compare(VERSION, '3.0', '<')) {
					$mail = new Mail();
					$mail->protocol = $this->config->get('config_mail_protocol');
				} else {
					$mail = new Mail($this->config->get('config_mail_engine'));
				}
				$mail->parameter = $this->config->get('config_mail_parameter');
				$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
				$mail->smtp_username = $this->config->get('config_mail_smtp_username');
				$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
				$mail->smtp_port = $this->config->get('config_mail_smtp_port');
				$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');
			}
			
			$mail->setSubject($email_subject);
			$mail->setHtml($email_body);
			$mail->setSender(str_replace(array(',', '&'), array('', 'and'), html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8')));
			$mail->setFrom($this->config->get('config_email'));
			$mail->setTo($customer['email']);
			$mail->send();
		}
		
		$this->logMessage('CUSTOMER CREATED: ' . $customer['firstname'] . ' ' . $customer['lastname'] . ' (' . $customer['email'] . ')');
	}
	
	//==============================================================================
	// Private functions
	//==============================================================================
	private function getSettings() {
		if (!empty($this->settings)) {
			return $this->settings;
		}
		
		$code = (version_compare(VERSION, '3.0', '<')) ? $this->name : $this->type . '_' . $this->name;
		
		$settings = array();
		$settings_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "setting WHERE `" . (version_compare(VERSION, '2.0.1', '<') ? 'group' : 'code') . "` = '" . $this->db->escape($code) . "' ORDER BY `key` ASC");
		
		foreach ($settings_query->rows as $setting) {
			$value = $setting['value'];
			if ($setting['serialized']) {
				$value = (version_compare(VERSION, '2.1', '<')) ? unserialize($setting['value']) : json_decode($setting['value'], true);
			}
			$split_key = preg_split('/_(\d+)_?/', str_replace($code . '_', '', $setting['key']), -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
			
				if (count($split_key) == 1)	$settings[$split_key[0]] = $value;
			elseif (count($split_key) == 2)	$settings[$split_key[0]][$split_key[1]] = $value;
			elseif (count($split_key) == 3)	$settings[$split_key[0]][$split_key[1]][$split_key[2]] = $value;
			elseif (count($split_key) == 4)	$settings[$split_key[0]][$split_key[1]][$split_key[2]][$split_key[3]] = $value;
			else 							$settings[$split_key[0]][$split_key[1]][$split_key[2]][$split_key[3]][$split_key[4]] = $value;
		}
		
		$this->settings = $settings;
		return $settings;
	}
	
	private function logMessage($message) {
		$settings = $this->getSettings();
		if ($settings['testing_mode']) {
			file_put_contents(DIR_LOGS . $this->name . '.messages', print_r($message, true) . "\n\n", FILE_APPEND|LOCK_EX);
		}
	}
	
	//==============================================================================
	// curlRequest()
	//==============================================================================
	private function curlRequest($request, $api, $data = array()) {
		$prefix = (version_compare(VERSION, '3.0', '<')) ? '' : $this->type . '_';
		
		$apikey = $this->config->get($prefix . $this->name . '_apikey');
		$data_center = explode('-', $apikey);
		$url = 'https://' . (isset($data_center[1]) ? $data_center[1] : 'us1') . '.api.mailchimp.com/3.0/';
		
		if ($request == 'GET') {
			$curl = curl_init($url . $api . '?' . http_build_query($data));
		} else {
			$curl = curl_init($url . $api);
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
			curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
			if ($request != 'POST') {
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $request);
			}
		}
		
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($curl, CURLOPT_FORBID_REUSE, true);
		curl_setopt($curl, CURLOPT_FRESH_CONNECT, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_TIMEOUT, 300);
		curl_setopt($curl, CURLOPT_USERPWD, ' :' . $apikey);
		$response = json_decode(curl_exec($curl), true);
		
		if ((!empty($response['type']) && $response['type'] == 'akamai_error_message') || ($this->config->get($prefix . $this->name . '_testing_mode') == 'debug' && empty($response['detail']) && $api != 'lists' && !strpos($api, 'interest-categories') && !strpos($api, 'merge-fields') && !strpos($api, 'webhooks'))) {
			$hr = '------------------------------------------------------------------------------';
			$this->logMessage($hr . "\n" . $request . '   ' . $url . $api . "\n" . $hr);
			$this->logMessage('DATA SENT: ' . print_r($data, true));
			
			$response_with_no_links = $response;
			
			if (is_array($response_with_no_links)) {
				foreach ($response_with_no_links as $key => $value) {
					if (!is_array($value)) continue;
					if ($key == '_links') unset($response_with_no_links[$key]);
					
					foreach ($value as $ke => $va) {
						if (!is_array($va)) continue;
						if ($ke == '_links') unset($response_with_no_links[$key][$ke]);
						
						foreach ($va as $k => $v) {
							if ($k == '_links') unset($response_with_no_links[$key][$ke][$k]);
						}
					}
				}
			}
			
			$this->logMessage('DATA RECEIVED: ' . print_r($response_with_no_links, true));
		}
		
		if (curl_error($curl)) {
			$response['error'] = 'CURL ERROR #' . curl_errno($curl) . ' - ' . curl_error($curl);
		} elseif (empty($response) && $request != 'DELETE') {
			$response['error'] = 'Empty CURL gateway response';
		} elseif (!empty($response['detail'])) {
			$response['error'] = $response['detail'];
			if (isset($response['errors'])) {
				foreach ($response['errors'] as $error) {
					$response['error'] .= ' '. $error['message'];
				}
			}
		}
		curl_close($curl);
		
		if (!empty($response['error']) && $this->config->get($prefix . $this->name . '_testing_mode') && !strpos($response['error'], 'A store with the provided ID already exists') && $response['error'] != 'The requested resource could not be found.') {
			$this->logMessage('ERROR: ' . $response['error']);
		}
		
		return $response;
	}
}
?>