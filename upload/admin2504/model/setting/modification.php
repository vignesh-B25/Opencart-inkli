<?php
namespace Opencart\Admin\Model\Setting;
/**
 * Class Modification
 *
 * Can be called from $this->load->model('setting/modification');
 *
 * @package Opencart\Admin\Model\Setting
 */
class Modification extends \Opencart\System\Engine\Model {
	/**
	 * Add Modification
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_setting_modification->addModification($data);
	 */
	public function addModification(array $data): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "modification` SET `extension_install_id` = '" . (int)$data['extension_install_id'] . "', `name` = '" . $this->db->escape($data['name']) . "', `description` = '" . $this->db->escape($data['description']) . "', `code` = '" . $this->db->escape($data['code']) . "', `author` = '" . $this->db->escape($data['author']) . "', `version` = '" . $this->db->escape($data['version']) . "', `link` = '" . $this->db->escape($data['link']) . "', `xml` = '" . $this->db->escape($data['xml']) . "', `status` = '" . (int)$data['status'] . "', `date_added` = NOW()");
	}

	/**
	 * Delete Modification
	 *
	 * @param int $modification_id primary key of the modification record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_setting_modification->deleteModification($modification_id);
	 */
	public function deleteModification(int $modification_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "modification` WHERE `modification_id` = '" . (int)$modification_id . "'");
	}

	/**
	 * Delete Modifications By Extension Install ID
	 *
	 * @param int $extension_install_id primary key of the extension install record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_setting_modification->deleteModificationsByExtensionInstallId($extension_install_id);
	 */
	public function deleteModificationsByExtensionInstallId(int $extension_install_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "modification` WHERE `extension_install_id` = '" . (int)$extension_install_id . "'");
	}

	/**
	 * Edit Status
	 *
	 * @param int  $modification_id primary key of the modification record
	 * @param bool $status
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_setting_modification->editStatus($modification_id, $status);
	 */
	public function editStatus(int $modification_id, bool $status): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "modification` SET `status` = '" . (bool)$status . "' WHERE `modification_id` = '" . (int)$modification_id . "'");
	}

	/**
	 * Get Modification
	 *
	 * @param int $modification_id primary key of the modification record
	 *
	 * @return array<string, mixed> modification record that has modification ID
	 *
	 * @example
	 *
	 * $modification_info = $this->model_setting_modification->getModification($modification_id);
	 */
	public function getModification(int $modification_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "modification` WHERE `modification_id` = '" . (int)$modification_id . "'");

		return $query->row;
	}

	/**
	 * Get Modifications
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return array<int, array<string, mixed>> modification records
	 *
	 * @example
	 *
	 * $results = $this->model_setting_modification->getModifications();
	 */
	public function getModifications(array $data = []): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "modification`";

		$sort_data = [
			'name',
			'description',
			'author',
			'version',
			'status',
			'date_added'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY `name`";
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
	 * Get Total Modifications
	 *
	 * @return int total number of modification records
	 *
	 * @example
	 *
	 * $modification_total = $this->model_setting_modification->getTotalModifications();
	 */
	public function getTotalModifications(): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "modification`");

		return (int)$query->row['total'];
	}

	/**
	 * Get Modification By Code
	 *
	 * @param string $code
	 *
	 * @return array<string, mixed>
	 *
	 * @example
	 *
	 * $modification_info = $this->model_setting_modification->getModificationByCode($code);
	 */
	public function getModificationByCode(string $code): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "modification` WHERE `code` = '" . $this->db->escape($code) . "'");

		return $query->row;
	}
}
