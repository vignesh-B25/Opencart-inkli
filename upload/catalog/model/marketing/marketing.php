<?php
namespace Opencart\Catalog\Model\Marketing;
/**
 * Class Marketing
 *
 * @example $marketing_model = $this->model_marketing_marketing;
 *
 * Can be called from $this->load->model('marketing/marketing');
 *
 * @package Opencart\Catalog\Model\Marketing
 */
class Marketing extends \Opencart\System\Engine\Model {
	/**
	 * Get Marketing By Code
	 *
	 * @param string $code
	 *
	 * @return array<string, mixed>
	 */
	public function getMarketingByCode(string $code): array {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "marketing` WHERE `code` = '" . $this->db->escape($code) . "'");

		return $query->row;
	}

	/**
	 * Add Report
	 *
	 * @param int    $marketing_id primary key of the marketing record
	 * @param string $ip
	 * @param string $country
	 *
	 * @return void
	 */
	public function addReport(int $marketing_id, string $ip, string $country = ''): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "marketing_report` SET `marketing_id` = '" . (int)$marketing_id . "', `store_id` = '" . (int)$this->config->get('config_store_id') . "', `ip` = '" . $this->db->escape($ip) . "', `country` = '" . $this->db->escape($country) . "', `date_added` = NOW()");
	}
}
