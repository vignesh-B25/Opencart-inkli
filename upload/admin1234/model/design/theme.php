<?php
namespace Opencart\Admin\Model\Design;
/**
 * Class Theme
 *
 * Can be called from $this->load->model('design/theme');
 *
 * @package Opencart\Admin\Model\Design
 */
class Theme extends \Opencart\System\Engine\Model {
	/**
	 * Add Theme
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return int
	 *
	 * @example
	 *
	 * $theme_id = $this->model_design_theme->addTheme($data);
	 */
	public function addTheme(array $data): int {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "theme` SET `store_id` = '" . (int)$data['store_id'] . "', `route` = '" . $this->db->escape($data['route']) . "', `code` = '" . $this->db->escape($data['code']) . "', `status` = '" . (bool)$data['status'] . "', `date_added` = NOW()");

		return $this->db->getLastId();
	}

	/**
	 * Edit Theme
	 *
	 * @param int                  $theme_id primary key of the theme record
	 * @param array<string, mixed> $data     array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_design_theme->editTheme($theme_id, $data);
	 */
	public function editTheme(int $theme_id, array $data): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "theme` SET `store_id` = '" . (int)$data['store_id'] . "', `route` = '" . $this->db->escape($data['route']) . "', `code` = '" . $this->db->escape($data['code']) . "', `status` = '" . (bool)$data['status'] . "', `date_added` = NOW() WHERE `theme_id` = '" . (int)$theme_id . "'");
	}

	/**
	 * Delete Theme
	 *
	 * @param int $theme_id primary key of the theme record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_design_theme->deleteTheme($theme_id);
	 */
	public function deleteTheme(int $theme_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "theme` WHERE `theme_id` = '" . (int)$theme_id . "'");
	}

	/**
	 * Delete Themes By Store ID
	 *
	 * @param int $store_id primary key of the store record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_design_theme->deleteThemesByStoreId($store_id);
	 */
	public function deleteThemesByStoreId(int $store_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "theme` WHERE `store_id` = '" . (int)$store_id . "'");
	}

	/**
	 * Get Theme
	 *
	 * @param int $theme_id primary key of the theme record
	 *
	 * @return array<string, mixed> theme record that has theme ID
	 *
	 * @example
	 *
	 * $theme_info = $this->model_design_theme->getTheme($theme_id);
	 */
	public function getTheme(int $theme_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "theme` WHERE `theme_id` = '" . (int)$theme_id . "'");

		return $query->row;
	}

	/**
	 * Get Themes
	 *
	 * @param int $start
	 * @param int $limit
	 *
	 * @return array<int, array<string, mixed>> theme records
	 *
	 * @example
	 *
	 * $results = $this->model_design_theme->getThemes();
	 */
	public function getThemes(int $start = 0, int $limit = 10): array {
		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 10;
		}

		$query = $this->db->query("SELECT *, (SELECT `name` FROM `" . DB_PREFIX . "store` `s` WHERE `s`.`store_id` = `t`.`store_id`) AS `store` FROM `" . DB_PREFIX . "theme` `t` ORDER BY `t`.`date_added` DESC LIMIT " . (int)$start . "," . (int)$limit);

		return $query->rows;
	}

	/**
	 * Get Total Themes
	 *
	 * @return int total number of theme records
	 *
	 * @example
	 *
	 * $theme_total = $this->model_design_theme->getTotalThemes();
	 */
	public function getTotalThemes(): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "theme`");

		return (int)$query->row['total'];
	}
}
