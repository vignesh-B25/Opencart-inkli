<?php
namespace Opencart\Catalog\Model\Account;
/**
 * Class Affiliate
 *
 * @example $affiliate_model = $this->model_account_affiliate;
 *
 * Can be called from $this->load->model('account/affiliate');
 *
 * @package Opencart\Catalog\Model\Account
 */
class Affiliate extends \Opencart\System\Engine\Model {
	/**
	 * Add Affiliate
	 *
	 * @param int                  $customer_id primary key of the customer record
	 * @param array<string, mixed> $data        array of data
	 *
	 * @return void
	 */
	public function addAffiliate(int $customer_id, array $data): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "customer_affiliate` SET `customer_id` = '" . (int)$customer_id . "', `company` = '" . $this->db->escape($data['company']) . "', `website` = '" . $this->db->escape($data['website']) . "', `tracking` = '" . $this->db->escape(oc_token(10)) . "', `commission` = '" . (float)$this->config->get('config_affiliate_commission') . "', `tax` = '" . $this->db->escape($data['tax']) . "', `payment_method` = '" . $this->db->escape($data['payment_method']) . "', `cheque` = '" . $this->db->escape($data['cheque']) . "', `paypal` = '" . $this->db->escape($data['paypal']) . "', `bank_name` = '" . $this->db->escape($data['bank_name']) . "', `bank_branch_number` = '" . $this->db->escape($data['bank_branch_number']) . "', `bank_swift_code` = '" . $this->db->escape($data['bank_swift_code']) . "', `bank_account_name` = '" . $this->db->escape($data['bank_account_name']) . "', `bank_account_number` = '" . $this->db->escape($data['bank_account_number']) . "', `custom_field` = '" . $this->db->escape(isset($data['custom_field']) ? json_encode($data['custom_field']) : '') . "', `status` = '" . (int)!$this->config->get('config_affiliate_approval') . "', `date_added` = NOW()");

		if ($this->config->get('config_affiliate_approval')) {
			$this->load->model('account/approval');

			$this->model_account_approval->addApproval($customer_id, 'affiliate');
		}
	}

	/**
	 * Edit Affiliate
	 *
	 * @param int                  $customer_id primary key of the customer record
	 * @param array<string, mixed> $data        array of data
	 *
	 * @return void
	 */
	public function editAffiliate(int $customer_id, array $data): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "customer_affiliate` SET `company` = '" . $this->db->escape($data['company']) . "', `website` = '" . $this->db->escape($data['website']) . "', `commission` = '" . (float)$this->config->get('config_affiliate_commission') . "', `tax` = '" . $this->db->escape($data['tax']) . "', `payment_method` = '" . $this->db->escape($data['payment_method']) . "', `cheque` = '" . $this->db->escape($data['cheque']) . "', `paypal` = '" . $this->db->escape($data['paypal']) . "', `bank_name` = '" . $this->db->escape($data['bank_name']) . "', `bank_branch_number` = '" . $this->db->escape($data['bank_branch_number']) . "', `bank_swift_code` = '" . $this->db->escape($data['bank_swift_code']) . "', `bank_account_name` = '" . $this->db->escape($data['bank_account_name']) . "', `bank_account_number` = '" . $this->db->escape($data['bank_account_number']) . "', `custom_field` = '" . $this->db->escape(isset($data['custom_field']) ? json_encode($data['custom_field']) : '') . "' WHERE `customer_id` = '" . (int)$customer_id . "'");
	}

	/**
	 * Delete Affiliate
	 *
	 * @param int $customer_id primary key of the customer record
	 *
	 * @return void
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
	 */
	public function getAffiliate(int $customer_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "customer_affiliate` WHERE `customer_id` = '" . (int)$customer_id . "'");

		if ($query->num_rows) {
			return ['custom_field' => json_decode($query->row['custom_field'], true)] + $query->row;
		} else {
			return [];
		}
	}

	/**
	 * Get Affiliate By Tracking
	 *
	 * @param string $code
	 *
	 * @return array<string, mixed>
	 */
	public function getAffiliateByTracking(string $code): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "customer_affiliate` WHERE `tracking` = '" . $this->db->escape($code) . "'");

		if ($query->num_rows) {
			return ['custom_field' => json_decode($query->row['custom_field'], true)] + $query->row;
		} else {
			return [];
		}
	}

	/**
	 * Add Report
	 *
	 * @param int    $customer_id primary key of the customer record
	 * @param string $ip
	 * @param string $country
	 *
	 * @return void
	 */
	public function addReport(int $customer_id, string $ip, string $country = ''): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "customer_affiliate_report` SET `customer_id` = '" . (int)$customer_id . "', `store_id` = '" . (int)$this->config->get('config_store_id') . "', `ip` = '" . $this->db->escape($ip) . "', `country` = '" . $this->db->escape($country) . "', `date_added` = NOW()");
	}

	/**
	 * Delete Customer Affiliate Reports
	 *
	 * @param int $customer_id primary key of the customer record
	 *
	 * @return void
	 */
	public function deleteReports(int $customer_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "customer_affiliate_report` WHERE `customer_id` = '" . (int)$customer_id . "'");
	}
}
