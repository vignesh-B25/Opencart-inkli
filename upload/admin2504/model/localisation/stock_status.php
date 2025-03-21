<?php
namespace Opencart\Admin\Model\Localisation;
/**
 * Class Stock Status
 *
 * Can be called from $this->load->model('localisation/stock_status');
 *
 * @package Opencart\Admin\Model\Localisation
 */
class StockStatus extends \Opencart\System\Engine\Model {
	/**
	 * Add Stock Status
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return ?int
	 *
	 * @example
	 *
	 * $stock_status_id = $this->model_localisation_stock_status->addStockStatus($data);
	 */
	public function addStockStatus(array $data): ?int {
		$stock_status_id = 0;

		foreach ($data['stock_status'] as $language_id => $stock_status) {
			if (!$stock_status_id) {
				$this->db->query("INSERT INTO `" . DB_PREFIX . "stock_status` SET `language_id` = '" . (int)$language_id . "', `name` = '" . $this->db->escape($stock_status['name']) . "'");

				$stock_status_id = $this->db->getLastId();
			} else {
				$this->model_localisation_stock_status->addDescription($stock_status_id, $language_id, $stock_status);
			}
		}

		$this->cache->delete('stock_status');

		return $stock_status_id;
	}

	/**
	 * Edit Stock Status
	 *
	 * @param int                  $stock_status_id primary key of the stock status record
	 * @param array<string, mixed> $data            array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_stock_status->editStockStatus($stock_status_id, $data);
	 */
	public function editStockStatus(int $stock_status_id, array $data): void {
		$this->deleteStockStatus($stock_status_id);

		foreach ($data['stock_status'] as $language_id => $stock_status) {
			$this->model_localisation_stock_status->addDescription($stock_status_id, $language_id, $stock_status);
		}

		$this->cache->delete('stock_status');
	}

	/**
	 * Delete Stock Status
	 *
	 * @param int $stock_status_id primary key of the stock status record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_stock_status->deleteStockStatus($stock_status_id);
	 */
	public function deleteStockStatus(int $stock_status_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "stock_status` WHERE `stock_status_id` = '" . (int)$stock_status_id . "'");

		$this->cache->delete('stock_status');
	}

	/**
	 * Delete Stock Statuses By Language ID
	 *
	 * @param int $language_id primary key of the language record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_stock_status->deleteStockStatusesByLanguageId($language_id);
	 */
	public function deleteStockStatusesByLanguageId(int $language_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "stock_status` WHERE `language_id` = '" . (int)$language_id . "'");

		$this->cache->delete('stock_status');
	}

	/**
	 * Get Stock Status
	 *
	 * @param int $stock_status_id primary key of the stock status record
	 *
	 * @return array<string, mixed> stock status record that has stock status ID
	 *
	 * @example
	 *
	 * $stock_status_info = $this->model_localisation_stock_status->getStockStatus($stock_status_id);
	 */
	public function getStockStatus(int $stock_status_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "stock_status` WHERE `stock_status_id` = '" . (int)$stock_status_id . "' AND `language_id` = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row;
	}

	/**
	 * Get Stock Statuses
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return array<int, array<string, mixed>> stock status records
	 *
	 * @example
	 *
	 * $stock_statuses = $this->model_localisation_stock_status->getStockStatuses();
	 */
	public function getStockStatuses(array $data = []): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "stock_status` WHERE `language_id` = '" . (int)$this->config->get('config_language_id') . "' ORDER BY `name`";

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

		$stock_status_data = $this->cache->get('stock_status.' . $key);

		if (!$stock_status_data) {
			$query = $this->db->query($sql);

			$stock_status_data = $query->rows;

			$this->cache->set('stock_status.' . $key, $stock_status_data);
		}

		return $stock_status_data;
	}

	/**
	 * Add Description
	 *
	 * @param int                  $stock_status_id primary key of the stock status record
	 * @param int                  $language_id     primary key of the language record
	 * @param array<string, mixed> $data            array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_stock_status->addDescription($stock_status_id, $language_id, $data);
	 */
	public function addDescription(int $stock_status_id, int $language_id, array $data): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "stock_status` SET `stock_status_id` = '" . (int)$stock_status_id . "', `language_id` = '" . (int)$language_id . "', `name` = '" . $this->db->escape($data['name']) . "'");
	}

	/**
	 * Get Descriptions
	 *
	 * @param int $stock_status_id primary key of the stock status record
	 *
	 * @return array<int, array<string, string>> description records that have stock status ID
	 *
	 * @example
	 *
	 * $stock_status = $this->model_localisation_stock_status->getDescriptions($stock_status_id);
	 */
	public function getDescriptions(int $stock_status_id): array {
		$stock_status_data = [];

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "stock_status` WHERE `stock_status_id` = '" . (int)$stock_status_id . "'");

		foreach ($query->rows as $result) {
			$stock_status_data[$result['language_id']] = $result;
		}

		return $stock_status_data;
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
	 * $results = $this->model_localisation_stock_status->getDescriptionsByLanguageId($language_id);
	 */
	public function getDescriptionsByLanguageId(int $language_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "stock_status` WHERE `language_id` = '" . (int)$language_id . "'");

		return $query->rows;
	}

	/**
	 * Get Total Stock Statuses
	 *
	 * @return int total number of stock status records
	 *
	 * @example
	 *
	 * $stock_status_total = $this->model_localisation_stock_status->getTotalStockStatuses();
	 */
	public function getTotalStockStatuses(): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "stock_status` WHERE `language_id` = '" . (int)$this->config->get('config_language_id') . "'");

		return (int)$query->row['total'];
	}
}
