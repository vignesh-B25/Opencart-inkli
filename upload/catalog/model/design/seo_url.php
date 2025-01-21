<?php
namespace Opencart\Catalog\Model\Design;
/**
 * Class Seo Url
 *
 * @example $seo_url_model = $this->model_design_seo_url;
 *
 * Can be called from $this->load->model('design/seo_url');
 *
 * @package Opencart\Catalog\Model\Design
 */
class SeoUrl extends \Opencart\System\Engine\Model {
	/**
	 * Get Seo Url By Keyword
	 *
	 * @param string $keyword
	 *
	 * @return array<string, mixed>
	 */
	public function getSeoUrlByKeyword(string $keyword): array {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "seo_url` WHERE (`keyword` = '" . $this->db->escape($keyword) . "' OR `keyword` LIKE '" . $this->db->escape('%/' . $keyword) . "') AND `store_id` = '" . (int)$this->config->get('config_store_id') . "' LIMIT 1");

		return $query->row;
	}

	/**
	 * Get Seo Url By Key Value
	 *
	 * @param string $key
	 * @param string $value
	 *
	 * @return array<string, mixed>
	 */
	public function getSeoUrlByKeyValue(string $key, string $value): array {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "seo_url` WHERE `key` = '" . $this->db->escape($key) . "' AND `value` = '" . $this->db->escape($value) . "' AND `store_id` = '" . (int)$this->config->get('config_store_id') . "' AND `language_id` = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row;
	}
}
