<?php
namespace Opencart\Admin\Model\Catalog;
/**
 * Class Manufacturer
 *
 * Can be called from $this->load->model('catalog/manufacturer');
 *
 * @package Opencart\Admin\Model\Catalog
 */
class Manufacturer extends \Opencart\System\Engine\Model {
	/**
	 * Add Manufacturer
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return int returns the primary key of the new manufacturer record
	 *
	 * @example
	 *
	 * $manufacturer_id = $this->model_catalog_manufacturer->addManufacturer($data);
	 */
	public function addManufacturer(array $data): int {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "manufacturer` SET `name` = '" . $this->db->escape((string)$data['name']) . "', `image` = '" . $this->db->escape((string)$data['image']) . "', `sort_order` = '" . (int)$data['sort_order'] . "'");

		$manufacturer_id = $this->db->getLastId();

		// Store
		if (isset($data['manufacturer_store'])) {
			foreach ($data['manufacturer_store'] as $store_id) {
				$this->model_catalog_manufacturer->addStore($manufacturer_id, $store_id);
			}
		}

		// SEO URL
		$this->load->model('design/seo_url');

		foreach ($data['manufacturer_seo_url'] as $store_id => $language) {
			foreach ($language as $language_id => $keyword) {
				$this->model_design_seo_url->addSeoUrl('manufacturer_id', $manufacturer_id, $keyword, $store_id, $language_id);
			}
		}

		// Layouts
		if (isset($data['manufacturer_layout'])) {
			foreach ($data['manufacturer_layout'] as $store_id => $layout_id) {
				if ($layout_id) {
					$this->model_catalog_manufacturer->addLayout($manufacturer_id, $store_id, $layout_id);
				}
			}
		}

		$this->cache->delete('manufacturer');

		return $manufacturer_id;
	}

	/**
	 * Edit Manufacturer
	 *
	 * @param int                  $manufacturer_id primary key of the manufacturer record
	 * @param array<string, mixed> $data            array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_manufacturer->editManufacturer($manufacturer_id, $data);
	 */
	public function editManufacturer(int $manufacturer_id, array $data): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "manufacturer` SET `name` = '" . $this->db->escape((string)$data['name']) . "', `image` = '" . $this->db->escape((string)$data['image']) . "', `sort_order` = '" . (int)$data['sort_order'] . "' WHERE `manufacturer_id` = '" . (int)$manufacturer_id . "'");

		// Store
		$this->deleteStores($manufacturer_id);

		if (isset($data['manufacturer_store'])) {
			foreach ($data['manufacturer_store'] as $store_id) {
				$this->model_catalog_manufacturer->addStore($manufacturer_id, $store_id);
			}
		}

		// SEO URL
		$this->load->model('design/seo_url');

		$this->model_design_seo_url->deleteSeoUrlsByKeyValue('manufacturer_id', $manufacturer_id);

		if (isset($data['manufacturer_seo_url'])) {
			foreach ($data['manufacturer_seo_url'] as $store_id => $language) {
				foreach ($language as $language_id => $keyword) {
					$this->model_design_seo_url->addSeoUrl('manufacturer_id', $manufacturer_id, $keyword, $store_id, $language_id);
				}
			}
		}

		// Layouts
		$this->model_catalog_manufacturer->deleteLayouts($manufacturer_id);

		if (isset($data['manufacturer_layout'])) {
			foreach ($data['manufacturer_layout'] as $store_id => $layout_id) {
				if ($layout_id) {
					$this->model_catalog_manufacturer->addLayout($manufacturer_id, $store_id, $layout_id);
				}
			}
		}

		$this->cache->delete('manufacturer');
	}

	/**
	 * Delete Manufacturer
	 *
	 * @param int $manufacturer_id primary key of the manufacturer record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_manufacturer->deleteManufacturer($manufacturer_id);
	 */
	public function deleteManufacturer(int $manufacturer_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "manufacturer` WHERE `manufacturer_id` = '" . (int)$manufacturer_id . "'");

		$this->model_catalog_manufacturer->deleteStores($manufacturer_id);
		$this->model_catalog_manufacturer->deleteLayouts($manufacturer_id);

		// SEO URL
		$this->load->model('design/seo_url');

		$this->model_design_seo_url->deleteSeoUrlsByKeyValue('manufacturer_id', $manufacturer_id);

		$this->cache->delete('manufacturer');
	}

	/**
	 * Get Manufacturer
	 *
	 * @param int $manufacturer_id primary key of the manufacturer record
	 *
	 * @return array<string, mixed> manufacturer record that has manufacturer ID
	 *
	 * @example
	 *
	 * $manufacturer_info = $this->model_catalog_manufacturer->getManufacturer($manufacturer_id);
	 */
	public function getManufacturer(int $manufacturer_id): array {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "manufacturer` WHERE `manufacturer_id` = '" . (int)$manufacturer_id . "'");

		return $query->row;
	}

	/**
	 * Get Manufacturers
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return array<int, array<string, mixed>> manufacturer records
	 *
	 * @example
	 *
	 * $results = $this->model_catalog_manufacturer->getManufacturers();
	 */
	public function getManufacturers(array $data = []): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "manufacturer`";

		if (!empty($data['filter_name'])) {
			$sql .= " WHERE LCASE(`name`) LIKE '" . $this->db->escape(oc_strtolower($data['filter_name']) . '%') . "'";
		}

		$sort_data = [
			'name',
			'sort_order'
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

		$query = $this->db->query($sql);

		return $query->rows;
	}

	/**
	 * Get Total Manufacturers
	 *
	 * @return int total number of manufacturer records
	 *
	 * @example
	 *
	 * $manufacturer_total = $this->model_catalog_manufacturer->getTotalManufacturers();
	 */
	public function getTotalManufacturers(): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "manufacturer`");

		return (int)$query->row['total'];
	}

	/**
	 * Add Store
	 *
	 * @param int $manufacturer_id primary key of the manufacturer record
	 * @param int $store_id        primary key of the store record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_manufacturer->addStore($manufacturer_id, $store_id);
	 */
	public function addStore(int $manufacturer_id, int $store_id): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "manufacturer_to_store` SET `manufacturer_id` = '" . (int)$manufacturer_id . "', `store_id` = '" . (int)$store_id . "'");
	}

	/**
	 * Delete Stores
	 *
	 * @param int $manufacturer_id primary key of the manufacturer record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_manufacturer->deleteStores($manufacturer_id);
	 */
	public function deleteStores(int $manufacturer_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "manufacturer_to_store` WHERE `manufacturer_id` = '" . (int)$manufacturer_id . "'");
	}

	/**
	 * Delete Stores By Store ID
	 *
	 * @param int $store_id primary key of the store record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_manufacturer->deleteStoresByStoreId($store_id);
	 */
	public function deleteStoresByStoreId(int $store_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "manufacturer_to_store` WHERE `store_id` = '" . (int)$store_id . "'");
	}

	/**
	 * Get Stores
	 *
	 * @param int $manufacturer_id primary key of the manufacturer record
	 *
	 * @return array<int, int> store records that have manufacturer ID
	 *
	 * @example
	 *
	 * $manufacturer_store = $this->model_catalog_manufacturer->getStores($manufacturer_id);
	 */
	public function getStores(int $manufacturer_id): array {
		$manufacturer_store_data = [];

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "manufacturer_to_store` WHERE `manufacturer_id` = '" . (int)$manufacturer_id . "'");

		foreach ($query->rows as $result) {
			$manufacturer_store_data[] = $result['store_id'];
		}

		return $manufacturer_store_data;
	}

	/**
	 * Add Layout
	 *
	 * @param int $manufacturer_id primary key of the manufacturer record
	 * @param int $store_id        primary key of the store record
	 * @param int $layout_id       primary key of the layout record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_manufacturer->addLayout($manufacturer_id, $store_id, $layout_id);
	 */
	public function addLayout(int $manufacturer_id, int $store_id, int $layout_id): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "manufacturer_to_layout` SET `manufacturer_id` = '" . (int)$manufacturer_id . "', `store_id` = '" . (int)$store_id . "', `layout_id` = '" . (int)$layout_id . "'");
	}

	/**
	 * Delete Layouts
	 *
	 * @param int $manufacturer_id primary key of the manufacturer record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_manufacturer->deleteLayouts($manufacturer_id);
	 */
	public function deleteLayouts(int $manufacturer_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "manufacturer_to_layout` WHERE `manufacturer_id` = '" . (int)$manufacturer_id . "'");
	}

	/**
	 * Delete Layouts By Layout ID
	 *
	 * @param int $layout_id primary key of the layout record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_manufacturer->deleteLayoutsByLayoutId($layout_id);
	 */
	public function deleteLayoutsByLayoutId(int $layout_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "manufacturer_to_layout` WHERE `layout_id` = '" . (int)$layout_id . "'");
	}

	/**
	 * Delete Layouts By Store ID
	 *
	 * @param int $store_id primary key of the store record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_manufacturer->deleteLayoutsByStoreId($store_id);
	 */
	public function deleteLayoutsByStoreId(int $store_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "manufacturer_to_layout` WHERE `store_id` = '" . (int)$store_id . "'");
	}

	/**
	 * Get Layouts
	 *
	 * @param int $manufacturer_id primary key of the manufacturer record
	 *
	 * @return array<int, int> layout records that have manufacturer ID
	 *
	 * @example
	 *
	 * $manufacturer_layout = $this->model_catalog_manufacturer->getLayouts($manufacturer_id);
	 */
	public function getLayouts(int $manufacturer_id): array {
		$manufacturer_layout_data = [];

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "manufacturer_to_layout` WHERE `manufacturer_id` = '" . (int)$manufacturer_id . "'");

		foreach ($query->rows as $result) {
			$manufacturer_layout_data[$result['store_id']] = $result['layout_id'];
		}

		return $manufacturer_layout_data;
	}

	/**
	 * Get Total Layouts By Layout ID
	 *
	 * @param int $layout_id primary key of the layout record
	 *
	 * @return int total number of layout records that have layout ID
	 *
	 * @example
	 *
	 * $manufacturer_total = $this->model_catalog_manufacturer->getTotalLayoutsByLayoutId($layout_id);
	 */
	public function getTotalLayoutsByLayoutId(int $layout_id): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "manufacturer_to_layout` WHERE `layout_id` = '" . (int)$layout_id . "'");

		return (int)$query->row['total'];
	}
}
