<?php
namespace Opencart\Admin\Model\Marketing;
/**
 * Class Affiliate
 *
 * Can be called from $this->load->model('marketing/affiliate');
 *
 * @package Opencart\Admin\Model\Marketing
 */
class Affiliate extends \Opencart\System\Engine\Model {
	/**
	 * Add Affiliate
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_marketing_affiliate->addAffiliate($data);
	 */
	public function addAffiliate(array $data): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "customer_affiliate` SET `customer_id` = '" . (int)$data['customer_id'] . "', `company` = '" . $this->db->escape((string)$data['company']) . "', `website` = '" . $this->db->escape((string)$data['website']) . "', `tracking` = '" . $this->db->escape((string)$data['tracking']) . "', `commission` = '" . (float)$data['commission'] . "', `tax` = '" . $this->db->escape((string)$data['tax']) . "', `payment_method` = '" . $this->db->escape((string)$data['payment_method']) . "', `cheque` = '" . $this->db->escape((string)$data['cheque']) . "', `paypal` = '" . $this->db->escape((string)$data['paypal']) . "', `bank_name` = '" . $this->db->escape((string)$data['bank_name']) . "', `bank_branch_number` = '" . $this->db->escape((string)$data['bank_branch_number']) . "', `bank_swift_code` = '" . $this->db->escape((string)$data['bank_swift_code']) . "', `bank_account_name` = '" . $this->db->escape((string)$data['bank_account_name']) . "', `bank_account_number` = '" . $this->db->escape((string)$data['bank_account_number']) . "', `custom_field` = '" . $this->db->escape(isset($data['custom_field']) ? json_encode($data['custom_field']) : json_encode([])) . "', `status` = '" . (bool)($data['status'] ?? 0) . "', `date_added` = NOW()");
	}

	/**
	 * Edit Affiliate
	 *
	 * @param int                  $customer_id primary key of the customer record
	 * @param array<string, mixed> $data        array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_marketing_affiliate->editAffiliate($customer_id, $data);
	 */
	public function editAffiliate(int $customer_id, array $data): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "customer_affiliate` SET `company` = '" . $this->db->escape((string)$data['company']) . "', `website` = '" . $this->db->escape((string)$data['website']) . "', `tracking` = '" . $this->db->escape((string)$data['tracking']) . "', `commission` = '" . (float)$data['commission'] . "', `tax` = '" . $this->db->escape((string)$data['tax']) . "', `payment_method` = '" . $this->db->escape((string)$data['payment_method']) . "', `cheque` = '" . $this->db->escape((string)$data['cheque']) . "', `paypal` = '" . $this->db->escape((string)$data['paypal']) . "', `bank_name` = '" . $this->db->escape((string)$data['bank_name']) . "', `bank_branch_number` = '" . $this->db->escape((string)$data['bank_branch_number']) . "', `bank_swift_code` = '" . $this->db->escape((string)$data['bank_swift_code']) . "', `bank_account_name` = '" . $this->db->escape((string)$data['bank_account_name']) . "', `bank_account_number` = '" . $this->db->escape((string)$data['bank_account_number']) . "', `custom_field` = '" . $this->db->escape(isset($data['custom_field']) ? json_encode($data['custom_field']) : json_encode([])) . "', `status` = '" . (bool)($data['status'] ?? 0) . "' WHERE `customer_id` = '" . (int)$customer_id . "'");
	}

	/**
	 * Edit Balance
	 *
	 * @param int   $customer_id primary key of the customer record
	 * @param float $amount
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_marketing_affiliate->editBalance($customer_id, $amount);
	 */
	public function editBalance(int $customer_id, float $amount): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "customer_affiliate` SET `balance` = '" . (float)$amount . "' WHERE `customer_id` = '" . (int)$customer_id . "'");
	}

	/**
	 * Delete Affiliate
	 *
	 * @param int $customer_id primary key of the customer record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_marketing_affiliate->deleteAffiliate($customer_id);
	 */
	public function deleteAffiliate(int $customer_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "customer_affiliate` WHERE `customer_id` = '" . (int)$customer_id . "'");

		$this->deleteReports($customer_id);
	}

	/**
	 * Get Affiliate
	 *
	 * @param int $customer_id primary key of the customer record
	 *
	 * @return array<string, mixed> affiliate record that has customer ID
	 *
	 * @example
	 *
	 * $affiliate_info = $this->model_marketing_affiliate->getAffiliate($customer_id);
	 */
	public function getAffiliate(int $customer_id): array {
		$query = $this->db->query("SELECT DISTINCT *, CONCAT(`c`.`firstname`, ' ', `c`.`lastname`) AS `customer`, `ca`.`custom_field`, `ca`.`status` FROM `" . DB_PREFIX . "customer_affiliate` `ca` LEFT JOIN `" . DB_PREFIX . "customer` `c` ON (`ca`.`customer_id` = `c`.`customer_id`) WHERE `ca`.`customer_id` = '" . (int)$customer_id . "'");

		if ($query->num_rows) {
			return ['custom_field' => json_decode($query->row['custom_field'], true)] + $query->row;
		} else {
			return [];
		}
	}

	/**
	 * Get Affiliate By Tracking
	 *
	 * @param string $tracking
	 *
	 * @return array<string, mixed>
	 *
	 * @example
	 *
	 * $affiliate_info = $this->model_marketing_affiliate->getAffiliateByTracking($tracking);
	 */
	public function getAffiliateByTracking(string $tracking): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "customer_affiliate` WHERE `tracking` = '" . $this->db->escape($tracking) . "'");

		if ($query->num_rows) {
			return ['custom_field' => json_decode($query->row['custom_field'], true)] + $query->row;
		} else {
			return [];
		}
	}

	/**
	 * Get Affiliates
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return array<int, array<string, mixed>> affiliate records
	 *
	 * @example
	 *
	 * $results = $this->model_marketing_affiliate->getAffiliates();
	 */
	public function getAffiliates(array $data = []): array {
		$sql = "SELECT *, CONCAT(`c`.`firstname`, ' ', `c`.`lastname`) AS `name`, `ca`.`status` FROM `" . DB_PREFIX . "customer_affiliate` `ca` LEFT JOIN `" . DB_PREFIX . "customer` `c` ON (`ca`.`customer_id` = `c`.`customer_id`)";

		$implode = [];

		if (!empty($data['filter_name'])) {
			$implode[] = "LCASE(CONCAT(`c`.`firstname`, ' ', `c`.`lastname`)) LIKE '" . $this->db->escape(oc_strtolower($data['filter_name']) . '%') . "'";
		}

		if (!empty($data['filter_tracking'])) {
			$implode[] = "LCASE(`ca`.`tracking`) = '" . $this->db->escape(oc_strtolower($data['filter_tracking'])) . "'";
		}

		if (!empty($data['filter_payment_method'])) {
			$implode[] = "LCASE(`ca`.`payment_method`) = '" . $this->db->escape(oc_strtolower($data['filter_payment_method'])) . "'";
		}

		if (!empty($data['filter_commission'])) {
			$implode[] = "`ca`.`commission` = '" . (float)$data['filter_commission'] . "'";
		}

		if (!empty($data['filter_date_from'])) {
			$implode[] = "DATE(`ca`.`date_added`) >= DATE('" . $this->db->escape((string)$data['filter_date_from']) . "')";
		}

		if (!empty($data['filter_date_to'])) {
			$implode[] = "DATE(`ca`.`date_added`) <= DATE('" . $this->db->escape((string)$data['filter_date_to']) . "')";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$implode[] = "`ca`.`status` = '" . (bool)$data['filter_status'] . "'";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$sort_data = [
			'name',
			'ca.tracking',
			'ca.commission',
			'ca.status',
			'ca.date_added'
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

		$order_data = [];

		$query = $this->db->query($sql);

		foreach ($query->rows as $key => $result) {
			$order_data[$key] = $result + ['custom_field' => json_decode($result['custom_field'], true)];
		}

		return $order_data;
	}

	/**
	 * Get Total Affiliates
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return int total number of affiliate records
	 *
	 * @example
	 *
	 * $affiliate_total = $this->model_marketing_affiliate->getTotalAffiliates();
	 */
	public function getTotalAffiliates(array $data = []): int {
		$sql = "SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "customer_affiliate` `ca` LEFT JOIN `" . DB_PREFIX . "customer` `c` ON (`ca`.`customer_id` = `c`.`customer_id`)";

		$implode = [];

		if (!empty($data['filter_name'])) {
			$implode[] = "LCASE(CONCAT(`c`.`firstname`, ' ', `c`.`lastname`)) LIKE '" . $this->db->escape(oc_strtolower($data['filter_name']) . '%') . "'";
		}

		if (!empty($data['filter_tracking'])) {
			$implode[] = "LCASE(`ca`.`tracking`) = '" . $this->db->escape(oc_strtolower($data['filter_tracking'])) . "'";
		}

		if (!empty($data['filter_payment_method'])) {
			$implode[] = "LCASE(`ca`.`payment_method`) = '" . $this->db->escape(oc_strtolower($data['filter_payment_method'])) . "'";
		}

		if (!empty($data['filter_commission'])) {
			$implode[] = "`ca`.`commission` = '" . (float)$data['filter_commission'] . "'";
		}

		if (!empty($data['filter_date_from'])) {
			$implode[] = "DATE(`ca`.`date_added`) >= DATE('" . $this->db->escape((string)$data['filter_date_from']) . "')";
		}

		if (!empty($data['filter_date_to'])) {
			$implode[] = "DATE(`ca`.`date_added`) <= DATE('" . $this->db->escape((string)$data['filter_date_to']) . "')";
		}

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$implode[] = "`ca`.`status` = '" . (bool)$data['filter_status'] . "'";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$query = $this->db->query($sql);

		return (int)$query->row['total'];
	}

	/**
	 * Get Reports
	 *
	 * @param int $customer_id primary key of the customer record
	 * @param int $start
	 * @param int $limit
	 *
	 * @return array<int, array<string, mixed>> report records that have customer ID
	 *
	 * @example
	 *
	 * $results = $this->model_marketing_affiliate->getReports($customer_id, $start, $limit);
	 */
	public function getReports(int $customer_id, int $start = 0, int $limit = 10): array {
		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 10;
		}

		$query = $this->db->query("SELECT `ip`, `store_id`, `country`, `date_added` FROM `" . DB_PREFIX . "customer_affiliate_report` WHERE `customer_id` = '" . (int)$customer_id . "' ORDER BY `date_added` ASC LIMIT " . (int)$start . "," . (int)$limit);

		return $query->rows;
	}

	/**
	 * Delete Reports
	 *
	 * @param int $customer_id primary key of the customer record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_marketing_affiliate->deleteReports($customer_id);
	 */
	public function deleteReports(int $customer_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "customer_affiliate_report` WHERE `customer_id` = '" . (int)$customer_id . "'");
	}

	/**
	 * Get Total Reports
	 *
	 * @param int $customer_id primary key of the customer record
	 *
	 * @return int total number of report records
	 *
	 * @example
	 *
	 * $report_total = $this->model_marketing_affiliate->getTotalReports($customer_id);
	 */
	public function getTotalReports(int $customer_id): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "customer_affiliate_report` WHERE `customer_id` = '" . (int)$customer_id . "'");

		return (int)$query->row['total'];
	}
}
