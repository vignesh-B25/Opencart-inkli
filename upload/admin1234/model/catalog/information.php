<?php
namespace Opencart\Admin\Model\Catalog;
/**
 * Class Information
 *
 * Can be called from $this->load->model('catalog/information');
 *
 * @package Opencart\Admin\Model\Catalog
 */
class Information extends \Opencart\System\Engine\Model {
	/**
	 * Add Information
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return int returns the primary key of the new information record
	 *
	 * @example
	 *
	 * $information_id = $this->model_catalog_information->addInformation($data);
	 */
	public function addInformation(array $data): int {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "information` SET `sort_order` = '" . (int)$data['sort_order'] . "', `status` = '" . (bool)($data['status'] ?? 0) . "'");

		$information_id = $this->db->getLastId();

		foreach ($data['information_description'] as $language_id => $information_description) {
			$this->model_catalog_information->addDescription($information_id, $language_id, $information_description);
		}

		if (isset($data['information_store'])) {
			foreach ($data['information_store'] as $store_id) {
				$this->model_catalog_information->addStore($information_id, $store_id);
			}
		}

		// SEO URL
		$this->load->model('design/seo_url');

		foreach ($data['information_seo_url'] as $store_id => $language) {
			foreach ($language as $language_id => $keyword) {
				$this->model_design_seo_url->addSeoUrl('information_id', $information_id, $keyword, $store_id, $language_id);
			}
		}

		if (isset($data['information_layout'])) {
			foreach ($data['information_layout'] as $store_id => $layout_id) {
				if ($layout_id) {
					$this->model_catalog_information->addLayout($information_id, $store_id, $layout_id);
				}
			}
		}

		$this->cache->delete('information');

		return $information_id;
	}

	/**
	 * Edit Information
	 *
	 * @param int                  $information_id primary key of the information record
	 * @param array<string, mixed> $data           array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_information->editInformation($information_id, $data);
	 */
	public function editInformation(int $information_id, array $data): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "information` SET `sort_order` = '" . (int)$data['sort_order'] . "', `status` = '" . (bool)($data['status'] ?? 0) . "' WHERE `information_id` = '" . (int)$information_id . "'");

		$this->model_catalog_information->deleteDescriptions($information_id);

		foreach ($data['information_description'] as $language_id => $information_description) {
			$this->model_catalog_information->addDescription($information_id, $language_id, $information_description);
		}

		$this->model_catalog_information->deleteStores($information_id);

		if (isset($data['information_store'])) {
			foreach ($data['information_store'] as $store_id) {
				$this->model_catalog_information->addStore($information_id, $store_id);
			}
		}

		// SEO URL
		$this->load->model('design/seo_url');

		$this->model_design_seo_url->deleteSeoUrlsByKeyValue('information_id', $information_id);

		foreach ($data['information_seo_url'] as $store_id => $language) {
			foreach ($language as $language_id => $keyword) {
				$this->model_design_seo_url->addSeoUrl('information_id', $information_id, $keyword, $store_id, $language_id);
			}
		}

		$this->model_catalog_information->deleteLayouts($information_id);

		if (isset($data['information_layout'])) {
			foreach ($data['information_layout'] as $store_id => $layout_id) {
				if ($layout_id) {
					$this->model_catalog_information->addLayout($information_id, $store_id, $layout_id);
				}
			}
		}

		$this->cache->delete('information');
	}

	/**
	 * Delete Information
	 *
	 * @param int $information_id primary key of the information record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_information->deleteInformation($information_id);
	 */
	public function deleteInformation(int $information_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "information` WHERE `information_id` = '" . (int)$information_id . "'");

		$this->model_catalog_information->deleteDescriptions($information_id);
		$this->model_catalog_information->deleteStores($information_id);
		$this->model_catalog_information->deleteLayouts($information_id);

		// SEO URL
		$this->load->model('design/seo_url');

		$this->model_design_seo_url->deleteSeoUrlsByKeyValue('information_id', $information_id);

		$this->cache->delete('information');
	}

	/**
	 * Get Information
	 *
	 * @param int $information_id primary key of the information record
	 *
	 * @return array<string, mixed> information record that has information ID
	 *
	 * @example
	 *
	 * $information_info = $this->model_catalog_information->getInformation($information_id);
	 */
	public function getInformation(int $information_id): array {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "information` WHERE `information_id` = '" . (int)$information_id . "'");

		return $query->row;
	}

	/**
	 * Get Information(s)
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return array<int, array<string, mixed>> information records
	 *
	 * @example
	 *
	 * $results = $this->model_catalog_information->getInformations();
	 */
	public function getInformations(array $data = []): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "information` `i` LEFT JOIN `" . DB_PREFIX . "information_description` `id` ON (`i`.`information_id` = `id`.`information_id`) WHERE `id`.`language_id` = '" . (int)$this->config->get('config_language_id') . "'";

		$sort_data = [
			'id.title',
			'i.sort_order'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY `id`.`title`";
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

		$key = md5($sql);

		$information_data = $this->cache->get('information.' . $key);

		if (!$information_data) {
			$query = $this->db->query($sql);

			$information_data = $query->rows;

			$this->cache->set('information.' . $key, $information_data);
		}

		return $information_data;
	}

	/**
	 * Get Total Information(s)
	 *
	 * @return int total number of information records
	 *
	 * @example
	 *
	 * $information_total = $this->model_catalog_information->getTotalInformations();
	 */
	public function getTotalInformations(): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "information`");

		return (int)$query->row['total'];
	}

	/**
	 * Add Description
	 *
	 * @param int                  $information_id primary key of the information record
	 * @param int                  $language_id    primary key of the language record
	 * @param array<string, mixed> $data           array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_information->addDescription($information_id, $language_id, $information_description);
	 */
	public function addDescription(int $information_id, int $language_id, array $data): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "information_description` SET `information_id` = '" . (int)$information_id . "', `language_id` = '" . (int)$language_id . "', `title` = '" . $this->db->escape($data['title']) . "', `description` = '" . $this->db->escape($data['description']) . "', `meta_title` = '" . $this->db->escape($data['meta_title']) . "', `meta_description` = '" . $this->db->escape($data['meta_description']) . "', `meta_keyword` = '" . $this->db->escape($data['meta_keyword']) . "'");
	}

	/**
	 * Delete Descriptions
	 *
	 * @param int $information_id primary key of the information record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_information->deleteDescriptions($information_id);
	 */
	public function deleteDescriptions(int $information_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "information_description` WHERE `information_id` = '" . (int)$information_id . "'");
	}

	/**
	 * Delete Descriptions By Language ID
	 *
	 * @param int $language_id primary key of the language record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_information->deleteDescriptionsByLanguageId($language_id);
	 */
	public function deleteDescriptionsByLanguageId(int $language_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "information_description` WHERE `language_id` = '" . (int)$language_id . "'");
	}

	/**
	 * Get Descriptions
	 *
	 * @param int $information_id primary key of the information record
	 *
	 * @return array<int, array<string, string>> description records that have information ID
	 *
	 * @example
	 *
	 * $information_description = $this->model_catalog_information->getDescriptions($information_id);
	 */
	public function getDescriptions(int $information_id): array {
		$information_description_data = [];

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "information_description` WHERE `information_id` = '" . (int)$information_id . "'");

		foreach ($query->rows as $result) {
			$information_description_data[$result['language_id']] = $result;
		}

		return $information_description_data;
	}

	/**
	 * Get Descriptions By Language ID
	 *
	 * @param int $language_id primary key of the language record
	 *
	 * @return array<int, array<string, string>> description records that have language ID
	 *
	 * @example
	 *
	 * $results = $this->model_catalog_information->getDescriptionsByLanguageId($language_id);
	 */
	public function getDescriptionsByLanguageId(int $language_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "information_description` WHERE `language_id` = '" . (int)$language_id . "'");

		return $query->rows;
	}

	/**
	 * Add Store
	 *
	 * @param int $information_id primary key of the information record
	 * @param int $store_id       primary key of the store record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_information->addStore($information_id, $store_id);
	 */
	public function addStore(int $information_id, int $store_id): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "information_to_store` SET `information_id` = '" . (int)$information_id . "', `store_id` = '" . (int)$store_id . "'");
	}

	/**
	 * Delete Stores
	 *
	 * @param int $information_id primary key of the information record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_information->deleteStores($information_id);
	 */
	public function deleteStores(int $information_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "information_to_store` WHERE `information_id` = '" . (int)$information_id . "'");
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
	 * $this->model_catalog_information->deleteStoresByStoreId($store_id);
	 */
	public function deleteStoresByStoreId(int $store_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "information_to_store` WHERE `store_id` = '" . (int)$store_id . "'");
	}

	/**
	 * Get Stores
	 *
	 * @param int $information_id primary key of the information record
	 *
	 * @return array<int, int> store records that have information ID
	 *
	 * @example
	 *
	 * $information_store = $this->model_catalog_information->getStores($information_id);
	 */
	public function getStores(int $information_id): array {
		$information_store_data = [];

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "information_to_store` WHERE `information_id` = '" . (int)$information_id . "'");

		foreach ($query->rows as $result) {
			$information_store_data[] = $result['store_id'];
		}

		return $information_store_data;
	}

	/**
	 * Add Layout
	 *
	 * @param int $information_id primary key of the information record
	 * @param int $store_id       primary key of the store record
	 * @param int $layout_id      primary key of the layout record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_information->addLayout($information_id, $store_id, $layout_id);
	 */
	public function addLayout(int $information_id, int $store_id, int $layout_id): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "information_to_layout` SET `information_id` = '" . (int)$information_id . "', `store_id` = '" . (int)$store_id . "', `layout_id` = '" . (int)$layout_id . "'");
	}

	/**
	 * Delete Layouts
	 *
	 * @param int $information_id primary key of the information record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_information->deleteLayouts($information_id);
	 */
	public function deleteLayouts(int $information_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "information_to_layout` WHERE `information_id` = '" . (int)$information_id . "'");
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
	 * $this->model_catalog_information->deleteLayoutsByLayoutId($layout_id);
	 */
	public function deleteLayoutsByLayoutId(int $layout_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "information_to_layout` WHERE `layout_id` = '" . (int)$layout_id . "'");
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
	 * $this->model_catalog_information->deleteLayoutsByStoreId($store_id);
	 */
	public function deleteLayoutsByStoreId(int $store_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "information_to_layout` WHERE `store_id` = '" . (int)$store_id . "'");
	}

	/**
	 * Get Layouts
	 *
	 * @param int $information_id primary key of the information record
	 *
	 * @return array<int, int> layout records that have information ID
	 *
	 * @example
	 *
	 * $information_layout = $this->model_catalog_information->getLayouts($information_id);
	 */
	public function getLayouts(int $information_id): array {
		$information_layout_data = [];

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "information_to_layout` WHERE `information_id` = '" . (int)$information_id . "'");

		foreach ($query->rows as $result) {
			$information_layout_data[$result['store_id']] = $result['layout_id'];
		}

		return $information_layout_data;
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
	 * $information_total = $this->model_catalog_information->getTotalLayoutsByLayoutId($layout_id);
	 */
	public function getTotalLayoutsByLayoutId(int $layout_id): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "information_to_layout` WHERE `layout_id` = '" . (int)$layout_id . "'");

		return (int)$query->row['total'];
	}
}
