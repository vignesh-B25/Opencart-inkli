<?php
namespace Opencart\Admin\Model\Design;
/**
 * Class Layout
 *
 * Can be called from $this->load->model('design/layout');
 *
 * @package Opencart\Admin\Model\Design
 */
class Layout extends \Opencart\System\Engine\Model {
	/**
	 * Add Layout
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return int returns the primary key of the new layout record
	 *
	 * @example
	 *
	 * $layout_id = $this->model_design_layout->addLayout($data);
	 */
	public function addLayout(array $data): int {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "layout` SET `name` = '" . $this->db->escape((string)$data['name']) . "'");

		$layout_id = $this->db->getLastId();

		if (isset($data['layout_route'])) {
			foreach ($data['layout_route'] as $layout_route) {
				$this->addRoute($layout_id, $layout_route);
			}
		}

		if (isset($data['layout_module'])) {
			foreach ($data['layout_module'] as $layout_module) {
				$this->addModule($layout_id, $layout_module);
			}
		}

		return $layout_id;
	}

	/**
	 * Edit Layout
	 *
	 * @param int                  $layout_id primary key of the layout record
	 * @param array<string, mixed> $data      array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_design_layout->editLayout($layout_id, $data);
	 */
	public function editLayout(int $layout_id, array $data): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "layout` SET `name` = '" . $this->db->escape((string)$data['name']) . "' WHERE `layout_id` = '" . (int)$layout_id . "'");

		$this->deleteRoutes($layout_id);

		if (isset($data['layout_route'])) {
			foreach ($data['layout_route'] as $layout_route) {
				$this->addRoute($layout_id, $layout_route);
			}
		}

		$this->deleteModules($layout_id);

		if (isset($data['layout_module'])) {
			foreach ($data['layout_module'] as $layout_module) {
				$this->addModule($layout_id, $layout_module);
			}
		}
	}

	/**
	 * Delete Layout
	 *
	 * @param int $layout_id primary key of the layout record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_design_layout->deleteLayout($layout_id);
	 */
	public function deleteLayout(int $layout_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "layout` WHERE `layout_id` = '" . (int)$layout_id . "'");

		$this->deleteRoutes($layout_id);
		$this->deleteModules($layout_id);

		// Category
		$this->load->model('catalog/category');

		$this->model_catalog_category->deleteLayoutsByLayoutId($layout_id);

		// Product
		$this->load->model('catalog/product');

		$this->model_catalog_product->deleteLayoutsByLayoutId($layout_id);

		// Information
		$this->load->model('catalog/information');

		$this->model_catalog_information->deleteLayoutsByLayoutId($layout_id);

		// CMS Article
		$this->load->model('cms/article');

		$this->model_cms_article->deleteLayoutsByLayoutId($layout_id);

		// CMS Topic
		$this->load->model('cms/topic');

		$this->model_cms_topic->deleteLayoutsByLayoutId($layout_id);
	}

	/**
	 * Get Layout
	 *
	 * @param int $layout_id primary key of the layout record
	 *
	 * @return array<string, mixed> layout record that has layout ID
	 *
	 * @example
	 *
	 * $layout_info = $this->model_design_layout->getLayout($layout_id);
	 */
	public function getLayout(int $layout_id): array {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "layout` WHERE `layout_id` = '" . (int)$layout_id . "'");

		return $query->row;
	}

	/**
	 * Get Layouts
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return array<int, array<string, mixed>> layout records
	 *
	 * @example
	 *
	 * $results = $this->model_design_layout->getLayouts();
	 */
	public function getLayouts(array $data = []): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "layout`";

		$sort_data = ['name'];

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

		$query = $this->db->query($sql);

		return $query->rows;
	}

	/**
	 * Get Total Layouts
	 *
	 * @return int total number of layout records
	 *
	 * @example
	 *
	 * $layout_total = $this->model_design_layout->getTotalLayouts();
	 */
	public function getTotalLayouts(): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "layout`");

		return (int)$query->row['total'];
	}

	/**
	 * Add Route
	 *
	 * @param int                  $layout_id primary key of the layout record
	 * @param array<string, mixed> $data      array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_design_layout->addRoute($layout_id, $data);
	 */
	public function addRoute(int $layout_id, array $data): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "layout_route` SET `layout_id` = '" . (int)$layout_id . "', `store_id` = '" . (int)$data['store_id'] . "', `route` = '" . $this->db->escape($data['route']) . "'");
	}

	/**
	 * Delete Routes
	 *
	 * @param int $layout_id primary key of the layout record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_design_layout->deleteRoutes($layout_id);
	 */
	public function deleteRoutes(int $layout_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "layout_route` WHERE `layout_id` = '" . (int)$layout_id . "'");
	}

	/**
	 * Delete Routes By Layout ID
	 *
	 * @param int $layout_id primary key of the layout record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_design_layout->deleteRoutesByLayoutId($layout_id);
	 */
	public function deleteRoutesByLayoutId(int $layout_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "layout_route` WHERE `layout_id` = '" . (int)$layout_id . "'");
	}

	/**
	 * Delete Routes By Store ID
	 *
	 * @param int $store_id primary key of the store record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_design_layout->deleteRoutesByStoreId($store_id);
	 */
	public function deleteRoutesByStoreId(int $store_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "layout_route` WHERE `store_id` = '" . (int)$store_id . "'");
	}

	/**
	 * Get Routes
	 *
	 * @param int $layout_id primary key of the layout record
	 *
	 * @return array<int, array<string, mixed>> route records that have layout ID
	 *
	 * @example
	 *
	 * $layout_routes = $this->model_design_layout->getRoutes($layout_id);
	 */
	public function getRoutes(int $layout_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "layout_route` WHERE `layout_id` = '" . (int)$layout_id . "'");

		return $query->rows;
	}

	/**
	 * Get Routes By Store ID
	 *
	 * @param int $store_id primary key of the store record
	 *
	 * @return array<int, array<string, mixed>> route records that have store ID
	 *
	 * @example
	 *
	 * $results = $this->model_design_layout->getRoutesByStoreId($store_id);
	 */
	public function getRoutesByStoreId(int $store_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "layout_route` WHERE `store_id` = '" . (int)$store_id . "'");

		return $query->rows;
	}

	/**
	 * Add Module
	 *
	 * @param int                  $layout_id primary key of the layout record
	 * @param array<string, mixed> $data      array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_design_layout->addModule($layout_id, $data);
	 */
	public function addModule(int $layout_id, array $data): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "layout_module` SET `layout_id` = '" . (int)$layout_id . "', `code` = '" . $this->db->escape($data['code']) . "', `position` = '" . $this->db->escape($data['position']) . "', `sort_order` = '" . (int)$data['sort_order'] . "'");
	}

	/**
	 * Delete Modules
	 *
	 * @param int $layout_id primary key of the layout record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_design_layout->deleteModules($layout_id);
	 */
	public function deleteModules(int $layout_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "layout_module` WHERE `layout_id` = '" . (int)$layout_id . "'");
	}

	/**
	 * Delete Modules By Code
	 *
	 * @param string $code
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_design_layout->deleteModulesByCode($code);
	 */
	public function deleteModulesByCode(string $code): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "layout_module` WHERE `code` = '" . $this->db->escape($code) . "' OR `code` LIKE '" . $this->db->escape($code . '.%') . "'");
	}

	/**
	 * Get Modules
	 *
	 * @param int $layout_id primary key of the layout record
	 *
	 * @return array<int, array<string, mixed>> module records that have layout ID
	 *
	 * @example
	 *
	 * $layout_modules = $this->model_design_layout->getModules($layout_id);
	 */
	public function getModules(int $layout_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "layout_module` WHERE `layout_id` = '" . (int)$layout_id . "' ORDER BY `position` ASC, `sort_order` ASC");

		return $query->rows;
	}
}
