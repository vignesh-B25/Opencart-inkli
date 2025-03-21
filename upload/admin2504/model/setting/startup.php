<?php
namespace Opencart\Admin\Model\Setting;
/**
 * Class Startup
 *
 * Can be called from $this->load->model('setting/startup');
 *
 * @package Opencart\Admin\Model\Setting
 */
class Startup extends \Opencart\System\Engine\Model {
	/**
	 * Add Startup
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return int
	 *
	 * @example
	 *
	 * $startup_id = $this->model_setting_startup->addStartup($data);
	 */
	public function addStartup(array $data): int {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "startup` SET `code` = '" . $this->db->escape($data['code']) . "', `description` = '" . $this->db->escape($data['description']) . "', `action` = '" . $this->db->escape($data['action']) . "', `status` = '" . (bool)$data['status'] . "', `sort_order` = '" . (int)$data['sort_order'] . "'");

		return $this->db->getLastId();
	}

	/**
	 * Delete Startup
	 *
	 * @param int $startup_id primary key of the startup record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_setting_startup->deleteStartup($startup_id);
	 */
	public function deleteStartup(int $startup_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "startup` WHERE `startup_id` = '" . (int)$startup_id . "'");
	}

	/**
	 * Delete Startup By Code
	 *
	 * @param string $code
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_setting_startup->deleteStartupByCode($code);
	 */
	public function deleteStartupByCode(string $code): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "startup` WHERE `code` = '" . $this->db->escape($code) . "'");
	}

	/**
	 * Edit Status
	 *
	 * @param int  $startup_id primary key of the startup record
	 * @param bool $status
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_setting_startup->editStatus($startup_id, $status);
	 */
	public function editStatus(int $startup_id, bool $status): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "startup` SET `status` = '" . (bool)$status . "' WHERE `startup_id` = '" . (int)$startup_id . "'");
	}

	/**
	 * Get Startup
	 *
	 * @param int $startup_id primary key of the startup record
	 *
	 * @return array<string, mixed> startup record that has startup ID
	 *
	 * @example
	 *
	 * $startup_info = $this->model_setting_startup->getStartup($startup_id);
	 */
	public function getStartup(int $startup_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "startup` WHERE `startup_id` = '" . (int)$startup_id . "'");

		return $query->row;
	}

	/**
	 * Get Startup By Code
	 *
	 * @param string $code
	 *
	 * @return array<string, mixed>
	 *
	 * @example
	 *
	 * $startup_info = $this->model_setting_startup->getStartupByCode($code);
	 */
	public function getStartupByCode(string $code): array {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "startup` WHERE `code` = '" . $this->db->escape($code) . "' LIMIT 1");

		return $query->row;
	}

	/**
	 * Get Startups
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return array<int, array<string, mixed>> startup records
	 *
	 * @example
	 *
	 * $results = $this->model_setting_startup->getStartups();
	 */
	public function getStartups(array $data = []): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "startup`";

		$sort_data = [
			'code',
			'action',
			'status',
			'sort_order',
			'date_added'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY `sort_order`";
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
	 * Get Total Startups
	 *
	 * @return int total number of startup records
	 *
	 * @example
	 *
	 * $startup_total = $this->model_setting_startup->getTotalStartups();
	 */
	public function getTotalStartups(): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "startup`");

		return (int)$query->row['total'];
	}
}
