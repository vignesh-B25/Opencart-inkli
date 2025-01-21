<?php
namespace Opencart\Catalog\Model\Setting;
/**
 * Class Startup
 *
 * @example $startup_model = $this->model_setting_startup;
 *
 * Can be called from $this->load->model('setting/startup');
 *
 * @package Opencart\Catalog\Model\Setting
 */
class Startup extends \Opencart\System\Engine\Model {
	/**
	 * Get Startups
	 *
	 * @return array<int, array<string, mixed>> startup records
	 */
	public function getStartups(): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "startup` WHERE `status` = '1' ORDER BY `sort_order` ASC");

		return $query->rows;
	}
}
