<?php
namespace Opencart\Admin\Model\Localisation;
/**
 * Class Return Status
 *
 * Can be called from $this->load->model('localisation/return_status');
 *
 * @package Opencart\Admin\Model\Localisation
 */
class ReturnStatus extends \Opencart\System\Engine\Model {
	/**
	 * Add Return Status
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return ?int
	 *
	 * @example
	 *
	 * $return_status_id = $this->model_localisation_return_status->addReturnStatus($data);
	 */
	public function addReturnStatus(array $data): ?int {
		$return_status_id = 0;

		foreach ($data['return_status'] as $language_id => $return_status) {
			if (!$return_status_id) {
				$this->db->query("INSERT INTO `" . DB_PREFIX . "return_status` SET `language_id` = '" . (int)$language_id . "', `name` = '" . $this->db->escape($return_status['name']) . "'");

				$return_status_id = $this->db->getLastId();
			} else {
				$this->model_localisation_return_status->addDescription($return_status_id, $language_id, $return_status);
			}
		}

		$this->cache->delete('return_status');

		return $return_status_id;
	}

	/**
	 * Edit Return Status
	 *
	 * @param int                  $return_status_id primary key of the return status record
	 * @param array<string, mixed> $data             array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_return_status->editReturnStatus($return_status_id, $data);
	 */
	public function editReturnStatus(int $return_status_id, array $data): void {
		$this->deleteReturnStatus($return_status_id);

		foreach ($data['return_status'] as $language_id => $return_status) {
			$this->model_localisation_return_status->addDescription($return_status_id, $language_id, $return_status);
		}

		$this->cache->delete('return_status');
	}

	/**
	 * Delete Return Status
	 *
	 * @param int $return_status_id primary key of the return status record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_return_status->deleteReturnStatus($return_status_id);
	 */
	public function deleteReturnStatus(int $return_status_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "return_status` WHERE `return_status_id` = '" . (int)$return_status_id . "'");

		$this->cache->delete('return_status');
	}

	/**
	 * Delete Return Statuses By Language ID
	 *
	 * @param int $language_id primary key of the language record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_return_status->deleteReturnStatusesByLanguageId($language_id);
	 */
	public function deleteReturnStatusesByLanguageId(int $language_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "return_status` WHERE `language_id` = '" . (int)$language_id . "'");

		$this->cache->delete('return_status');
	}

	/**
	 * Get Return Status
	 *
	 * @param int $return_status_id primary key of the return status record
	 *
	 * @return array<string, mixed> return status record that has return status ID
	 *
	 * @example
	 *
	 * $return_status_info = $this->model_localisation_return_status->getReturnStatus($return_status_id);
	 */
	public function getReturnStatus(int $return_status_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "return_status` WHERE `return_status_id` = '" . (int)$return_status_id . "' AND `language_id` = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row;
	}

	/**
	 * Get Return Statuses
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return array<int, array<string, mixed>> return status records
	 *
	 * @example
	 *
	 * $return_statuses = $this->model_localisation_return_status->getReturnStatuses();
	 */
	public function getReturnStatuses(array $data = []): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "return_status` WHERE `language_id` = '" . (int)$this->config->get('config_language_id') . "' ORDER BY `name`";

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

		$key = md5($sql);

		$return_status_data = $this->cache->get('return_status.' . $key);

		if (!$return_status_data) {
			$query = $this->db->query($sql);

			$return_status_data = $query->rows;

			$this->cache->set('return_status.' . $key, $return_status_data);
		}

		return $return_status_data;
	}

	/**
	 * Add Description
	 *
	 * @param int                  $return_status_id primary key of the return status record
	 * @param int                  $language_id      primary key of the language record
	 * @param array<string, mixed> $data             array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_return_status->addDescription($return_status_id, $language_id, $data);
	 */
	public function addDescription(int $return_status_id, int $language_id, array $data): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "return_status` SET `return_status_id` = '" . (int)$return_status_id . "', `language_id` = '" . (int)$language_id . "', `name` = '" . $this->db->escape($data['name']) . "'");
	}

	/**
	 * Get Descriptions
	 *
	 * @param int $return_status_id primary key of the return status record
	 *
	 * @return array<int, array<string, string>> description records that have return status ID
	 *
	 * @example
	 *
	 * $return_status = $this->model_localisation_return_status->getDescriptions($return_status_id);
	 */
	public function getDescriptions(int $return_status_id): array {
		$return_status_data = [];

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "return_status` WHERE `return_status_id` = '" . (int)$return_status_id . "'");

		foreach ($query->rows as $result) {
			$return_status_data[$result['language_id']] = $result;
		}

		return $return_status_data;
	}

	/**
	 * Get Descriptions By Language ID
	 *
	 * @param int $language_id primary key of the language record
	 *
	 * @return array<int, array<string, string>> description records that have language ID
	 *
	 * @example
	 *
	 * $results = $this->model_localisation_return_status->getDescriptionsByLanguageId($language_id);
	 */
	public function getDescriptionsByLanguageId(int $language_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "return_status` WHERE `language_id` = '" . (int)$language_id . "'");

		return $query->rows;
	}

	/**
	 * Get Total Return Statuses
	 *
	 * @return int total number of return status records
	 *
	 * @example
	 *
	 * $return_status_total = $this->model_localisation_return_status->getTotalReturnStatuses();
	 */
	public function getTotalReturnStatuses(): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "return_status` WHERE `language_id` = '" . (int)$this->config->get('config_language_id') . "'");

		return (int)$query->row['total'];
	}
}
