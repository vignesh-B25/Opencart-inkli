<?php
namespace Opencart\Admin\Model\User;
/**
 * Class Api
 *
 * Can be called from $this->load->model('user/api');
 *
 * @package Opencart\Admin\Model\User
 */
class Api extends \Opencart\System\Engine\Model {
	/**
	 * Add Api
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return int returns the primary key of the new api record
	 *
	 * @example
	 *
	 * $api_id = $this->model_user_api->addApi($data);
	 */
	public function addApi(array $data): int {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "api` SET `username` = '" . $this->db->escape((string)$data['username']) . "', `key` = '" . $this->db->escape((string)$data['key']) . "', `status` = '" . (bool)($data['status'] ?? 0) . "', `date_added` = NOW(), `date_modified` = NOW()");

		$api_id = $this->db->getLastId();

		if (isset($data['api_ip'])) {
			foreach ($data['api_ip'] as $ip) {
				if ($ip) {
					$this->addIp($api_id, $ip);
				}
			}
		}

		return $api_id;
	}

	/**
	 * Edit Api
	 *
	 * @param int                  $api_id primary key of the Api record
	 * @param array<string, mixed> $data   array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_user_api->editApi($api_id, $data);
	 */
	public function editApi(int $api_id, array $data): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "api` SET `username` = '" . $this->db->escape((string)$data['username']) . "', `key` = '" . $this->db->escape((string)$data['key']) . "', `status` = '" . (bool)($data['status'] ?? 0) . "', `date_modified` = NOW() WHERE `api_id` = '" . (int)$api_id . "'");

		$this->deleteIps($api_id);

		if (isset($data['api_ip'])) {
			foreach ($data['api_ip'] as $ip) {
				if ($ip) {
					$this->addIp($api_id, $ip);
				}
			}
		}
	}

	/**
	 * Delete Api
	 *
	 * @param int $api_id primary key of the Api record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_user_api->deleteApi($api_id);
	 */
	public function deleteApi(int $api_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "api` WHERE `api_id` = '" . (int)$api_id . "'");

		$this->deleteIps($api_id);
	}

	/**
	 * Get Api
	 *
	 * @param int $api_id primary key of the Api record
	 *
	 * @return array<string, mixed> api record that has api ID
	 *
	 * @example
	 *
	 * $api_info = $this->model_user_api->getApi($api_id);
	 */
	public function getApi(int $api_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "api` WHERE `api_id` = '" . (int)$api_id . "'");

		return $query->row;
	}

	/**
	 * Get Apis
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return array<int, array<string, mixed>> api records
	 *
	 * @example
	 *
	 * $results = $this->model_user_api->getApis();
	 */
	public function getApis(array $data = []): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "api`";

		$sort_data = [
			'username',
			'status',
			'date_added',
			'date_modified'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY `username`";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	/**
	 * Get Total Apis
	 *
	 * @return int total number of api records
	 *
	 * @example
	 *
	 * $api_total = $this->model_user_api->getTotalApis();
	 */
	public function getTotalApis(): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "api`");

		return (int)$query->row['total'];
	}

	/**
	 * Add Ip
	 *
	 * @param int    $api_id primary key of the Api record
	 * @param string $ip
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_user_api->addIp($api_id, $ip);
	 */
	public function addIp(int $api_id, string $ip): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "api_ip` SET `api_id` = '" . (int)$api_id . "', `ip` = '" . $this->db->escape($ip) . "'");
	}

	/**
	 * Delete Ips
	 *
	 * @param int $api_id primary key of the Api record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_user_api->deleteIps($api_id);
	 */
	public function deleteIps(int $api_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "api_ip` WHERE `api_id` = '" . (int)$api_id . "'");
	}

	/**
	 * Get Ips
	 *
	 * @param int $api_id primary key of the Api record
	 *
	 * @return array<int, string> IP records that have api id
	 *
	 * @example
	 *
	 * $results = $this->model_user_api->getIps($api_id);
	 */
	public function getIps(int $api_id): array {
		$ip_data = [];

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "api_ip` WHERE `api_id` = '" . (int)$api_id . "'");

		foreach ($query->rows as $result) {
			$ip_data[] = $result['ip'];
		}

		return $ip_data;
	}

	/**
	 * Get Histories
	 *
	 * @param int $api_id primary key of the Api record
	 * @param int $start
	 * @param int $limit
	 *
	 * @return array<int, array<string, mixed>> history records that have api ID
	 *
	 * @example
	 *
	 * $results = $this->model_user_api->getHistories($api_id, $start, $limit);
	 */
	public function getHistories(int $api_id, int $start = 0, int $limit = 10): array {
		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 10;
		}

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "api_history` WHERE `api_id` = '" . (int)$api_id . "' ORDER BY `date_added` DESC LIMIT " . (int)$start . "," . (int)$limit);

		return $query->rows;
	}

	/**
	 * Get Total Histories
	 *
	 * @param int $api_id primary key of the Api record
	 *
	 * @return int total number of history records that have api ID
	 *
	 * @example
	 *
	 * $history_total = $this->model_user_api->getTotalHistories($api_id);
	 */
	public function getTotalHistories(int $api_id): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "api_history` WHERE `api_id` = '" . (int)$api_id . "'");

		return (int)$query->row['total'];
	}
}
