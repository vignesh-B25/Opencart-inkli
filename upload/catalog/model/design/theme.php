<?php
namespace Opencart\Catalog\Model\Design;
/**
 * Class Theme
 *
 * @example $theme_model = $this->model_design_theme;
 *
 * Can be called from $this->load->model('design/theme');
 *
 * @package Opencart\Catalog\Model\Design
 */
class Theme extends \Opencart\System\Engine\Model {
	/**
	 * Get Theme
	 *
	 * @param string $route
	 *
	 * @return array<string, mixed>
	 */
	public function getTheme(string $route): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "theme` WHERE `store_id` = '" . (int)$this->config->get('config_store_id') . "' AND `route` = '" . $this->db->escape($route) . "'");

		return $query->row;
	}
}
