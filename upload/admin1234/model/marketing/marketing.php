<?php
namespace Opencart\Admin\Model\Marketing;
/**
 * Class Marketing
 *
 * Can be called from $this->load->model('marketing/marketing');
 *
 * @package Opencart\Admin\Model\Marketing
 */
class Marketing extends \Opencart\System\Engine\Model {
	/**
	 * Add Marketing
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return int returns the primary key of the new coupon record
	 *
	 * @example
	 *
	 * $marketing_id = $this->model_marketing_marketing->addMarketing($data);
	 */
	public function addMarketing(array $data): int {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "marketing` SET `name` = '" . $this->db->escape((string)$data['name']) . "', `description` = '" . $this->db->escape((string)$data['description']) . "', `code` = '" . $this->db->escape((string)$data['code']) . "', `date_added` = NOW()");

		return $this->db->getLastId();
	}

	/**
	 * Edit Marketing
	 *
	 * @param int                  $marketing_id primary key of the marketing record
	 * @param array<string, mixed> $data         array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_marketing_marketing->editMarketing($marketing_id, $data);
	 */
	public function editMarketing(int $marketing_id, array $data): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "marketing` SET `name` = '" . $this->db->escape((string)$data['name']) . "', `description` = '" . $this->db->escape((string)$data['description']) . "', `code` = '" . $this->db->escape((string)$data['code']) . "' WHERE `marketing_id` = '" . (int)$marketing_id . "'");
	}

	/**
	 * Delete Marketing
	 *
	 * @param int $marketing_id primary key of the marketing record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_marketing_marketing->deleteMarketing($marketing_id);
	 */
	public function deleteMarketing(int $marketing_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "marketing` WHERE `marketing_id` = '" . (int)$marketing_id . "'");

		$this->deleteReports($marketing_id);
	}

	/**
	 * Get Marketing
	 *
	 * @param int $marketing_id primary key of the marketing record
	 *
	 * @return array<string, mixed> marketing record that has marketing ID
	 *
	 * @example
	 *
	 * $marketing_info = $this->model_marketing_marketing->getMarketing($marketing_id);
	 */
	public function getMarketing(int $marketing_id): array {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "marketing` WHERE `marketing_id` = '" . (int)$marketing_id . "'");

		return $query->row;
	}

	/**
	 * Get Marketing By Code
	 *
	 * @param string $code
	 *
	 * @return array<string, mixed>
	 *
	 * @example
	 *
	 * $marketing_info = $this->model_marketing_marketing->getMarketingByCode($code);
	 */
	public function getMarketingByCode(string $code): array {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "marketing` WHERE `code` = '" . $this->db->escape($code) . "'");

		return $query->row;
	}

	/**
	 * Get Marketing(s)
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return array<int, array<string, mixed>> marketing records
	 *
	 * @example
	 *
	 * $results = $this->model_marketing_marketing->getMarketings();
	 */
	public function getMarketings(array $data = []): array {
		$implode = [];

		$order_statuses = (array)$this->config->get('config_complete_status');

		foreach ($order_statuses as $order_status_id) {
			$implode[] = "`o`.`order_status_id` = '" . (int)$order_status_id . "'";
		}

		$sql = "SELECT *, (SELECT COUNT(*) FROM `" . DB_PREFIX . "order` `o` WHERE (" . implode(" OR ", $implode) . ") AND `o`.`marketing_id` = `m`.`marketing_id`) AS `orders` FROM `" . DB_PREFIX . "marketing` `m`";

		$implode = [];

		if (!empty($data['filter_name'])) {
			$implode[] = "LCASE(`m`.`name`) LIKE '" . $this->db->escape(oc_strtolower($data['filter_name']) . '%') . "'";
		}

		if (!empty($data['filter_code'])) {
			$implode[] = "LCASE(`m`.`code`) = '" . $this->db->escape(oc_strtolower($data['filter_code'])) . "'";
		}

		if (!empty($data['filter_date_from'])) {
			$implode[] = "DATE(`m`.`date_added`) >= DATE('" . $this->db->escape((string)$data['filter_date_from']) . "')";
		}

		if (!empty($data['filter_date_to'])) {
			$implode[] = "DATE(`m`.`date_added`) <= DATE('" . $this->db->escape((string)$data['filter_date_to']) . "')";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$sort_data = [
			'm.name',
			'm.code',
			'm.date_added'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY `m`.`name`";
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
	 * Get Total Marketing(s)
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return int total number of marketing records
	 *
	 * @example
	 *
	 * $marketing_total = $this->model_marketing_marketing->getTotalMarketings();
	 */
	public function getTotalMarketings(array $data = []): int {
		$sql = "SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "marketing`";

		$implode = [];

		if (!empty($data['filter_name'])) {
			$implode[] = "LCASE(`name`) LIKE '" . $this->db->escape(oc_strtolower($data['filter_name'])) . "'";
		}

		if (!empty($data['filter_code'])) {
			$implode[] = "LCASE(`code`) = '" . $this->db->escape(oc_strtolower($data['filter_code'])) . "'";
		}

		if (!empty($data['filter_date_from'])) {
			$implode[] = "DATE(`date_added`) >= DATE('" . $this->db->escape((string)$data['filter_date_from']) . "')";
		}

		if (!empty($data['filter_date_to'])) {
			$implode[] = "DATE(`date_added`) <= DATE('" . $this->db->escape((string)$data['filter_date_to']) . "')";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$query = $this->db->query($sql);

		return (int)$query->row['total'];
	}

	/**
	 * Delete Marketing Reports
	 *
	 * @param int $marketing_id primary key of the marketing record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_marketing_marketing->deleteReports($marketing_id);
	 */
	public function deleteReports(int $marketing_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "marketing_report` WHERE `marketing_id` = '" . (int)$marketing_id . "'");
	}

	/**
	 * Get Reports
	 *
	 * @param int $marketing_id primary key of the marketing record
	 * @param int $start
	 * @param int $limit
	 *
	 * @return array<int, array<string, mixed>> report records that have marketing ID
	 *
	 * @example
	 *
	 * $results = $this->model_marketing_marketing->getReports($marketing_id, $start, $limit);
	 */
	public function getReports(int $marketing_id, int $start = 0, int $limit = 10): array {
		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 10;
		}

		$query = $this->db->query("SELECT `ip`, `store_id`, `country`, `date_added` FROM `" . DB_PREFIX . "marketing_report` WHERE `marketing_id` = '" . (int)$marketing_id . "' ORDER BY `date_added` ASC LIMIT " . (int)$start . "," . (int)$limit);

		return $query->rows;
	}

	/**
	 * Get Total Reports
	 *
	 * @param int $marketing_id primary key of the marketing record
	 *
	 * @return int total number of report records
	 *
	 * @example
	 *
	 * $report_total = $this->model_marketing_marketing->getTotalReports($marketing_id);
	 */
	public function getTotalReports(int $marketing_id): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "marketing_report` WHERE `marketing_id` = '" . (int)$marketing_id . "'");

		return (int)$query->row['total'];
	}
}
