<?php
namespace Opencart\Admin\Model\Localisation;
/**
 * Class Weight Class
 *
 * Can be called from $this->load->model('localisation/weight_class');
 *
 * @package Opencart\Admin\Model\Localisation
 */
class WeightClass extends \Opencart\System\Engine\Model {
	/**
	 * Add Weight Class
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return int returns the primary key of the new weight class record
	 *
	 * @example
	 *
	 * $weight_class_id = $this->model_localisation_weight_class->addWeightClass($data);
	 */
	public function addWeightClass(array $data): int {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "weight_class` SET `value` = '" . (float)$data['value'] . "'");

		$weight_class_id = $this->db->getLastId();

		foreach ($data['weight_class_description'] as $language_id => $value) {
			$this->addDescription($weight_class_id, $language_id, $value);
		}

		$this->cache->delete('weight_class');

		return $weight_class_id;
	}

	/**
	 * Edit Weight Class
	 *
	 * @param int                  $weight_class_id primary key of the weight class record
	 * @param array<string, mixed> $data            array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_weight_class->editWeightClass($weight_class_id, $data);
	 */
	public function editWeightClass(int $weight_class_id, array $data): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "weight_class` SET `value` = '" . (float)$data['value'] . "' WHERE `weight_class_id` = '" . (int)$weight_class_id . "'");

		$this->deleteDescriptions($weight_class_id);

		foreach ($data['weight_class_description'] as $language_id => $value) {
			$this->addDescription($weight_class_id, $language_id, $value);
		}

		$this->cache->delete('weight_class');
	}

	/**
	 * Delete Weight Class
	 *
	 * @param int $weight_class_id primary key of the weight class record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_weight_class->deleteWeightClass($weight_class_id);
	 */
	public function deleteWeightClass(int $weight_class_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "weight_class` WHERE `weight_class_id` = '" . (int)$weight_class_id . "'");

		$this->deleteDescriptions($weight_class_id);

		$this->cache->delete('weight_class');
	}

	/**
	 * Get Weight Classes
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return array<int, array<string, mixed>> weight class records
	 *
	 * @example
	 *
	 * $results = $this->model_localisation_weight_class->getWeightClasses();
	 */
	public function getWeightClasses(array $data = []): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "weight_class` `wc` LEFT JOIN `" . DB_PREFIX . "weight_class_description` `wcd` ON (`wc`.`weight_class_id` = `wcd`.`weight_class_id`) WHERE `wcd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "'";

		$sort_data = [
			'title',
			'unit',
			'value'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY `title`";
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

		$weight_class_data = $this->cache->get('weight_class.' . $key);

		if (!$weight_class_data) {
			$query = $this->db->query($sql);

			$weight_class_data = $query->rows;

			$this->cache->set('weight_class.' . $key, $weight_class_data);
		}

		return $weight_class_data;
	}

	/**
	 * Get Weight Class
	 *
	 * @param int $weight_class_id primary key of the weight class record
	 *
	 * @return array<string, mixed> weight class record that has weight class ID
	 *
	 * @example
	 *
	 * $weight_class_info = $this->model_localisation_weight_class->getWeightClass($weight_class_id);
	 */
	public function getWeightClass(int $weight_class_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "weight_class` `wc` LEFT JOIN `" . DB_PREFIX . "weight_class_description` `wcd` ON (`wc`.`weight_class_id` = `wcd`.`weight_class_id`) WHERE `wc`.`weight_class_id` = '" . (int)$weight_class_id . "' AND `wcd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row;
	}

	/**
	 * Get Total Weight Classes
	 *
	 * @return int total number of weight class records
	 *
	 * @example
	 *
	 * $weight_class_total = $this->model_localisation_weight_class->getTotalWeightClasses();
	 */
	public function getTotalWeightClasses(): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "weight_class`");

		return (int)$query->row['total'];
	}

	/**
	 * Add Description
	 *
	 * @param int                  $weight_class_id primary key of the weight class record
	 * @param int                  $language_id     primary key of the language record
	 * @param array<string, mixed> $data            array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_weight_class->addDescription($weight_class_id, $language_id, $data);
	 */
	public function addDescription(int $weight_class_id, int $language_id, array $data): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "weight_class_description` SET `weight_class_id` = '" . (int)$weight_class_id . "', `language_id` = '" . (int)$language_id . "', `title` = '" . $this->db->escape($data['title']) . "', `unit` = '" . $this->db->escape($data['unit']) . "'");
	}

	/**
	 * Delete Description
	 *
	 * @param int $weight_class_id primary key of the weight class record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_weight_class->deleteDescriptions($weight_class_id);
	 */
	public function deleteDescriptions(int $weight_class_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "weight_class_description` WHERE `weight_class_id` = '" . (int)$weight_class_id . "'");
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
	 * $this->model_localisation_weight_class->deleteDescriptionsByLanguageId($language_id);
	 */
	public function deleteDescriptionsByLanguageId(int $language_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "weight_class_description` WHERE `language_id` = '" . (int)$language_id . "'");
	}

	/**
	 * Get Descriptions
	 *
	 * @param int $weight_class_id primary key of the weight class record
	 *
	 * @return array<int, array<string, mixed>> description records that have weight class ID
	 *
	 * @example
	 *
	 * $weight_class_description = $this->model_localisation_weight_class->getDescriptions($weight_class_id);
	 */
	public function getDescriptions(int $weight_class_id): array {
		$weight_class_data = [];

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "weight_class_description` WHERE `weight_class_id` = '" . (int)$weight_class_id . "'");

		foreach ($query->rows as $result) {
			$weight_class_data[$result['language_id']] = $result;
		}

		return $weight_class_data;
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
	 * $results = $this->model_localisation_weight_class->getDescriptionsByLanguageId($language_id);
	 */
	public function getDescriptionsByLanguageId(int $language_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "weight_class_description` WHERE `language_id` = '" . (int)$language_id . "'");

		return $query->rows;
	}

	/**
	 * Get Descriptions By Unit
	 *
	 * @param string $unit
	 *
	 * @return array<string, mixed>
	 *
	 * @example
	 *
	 * $results = $this->model_localisation_weight_class->getDescriptionsByUnit($unit);
	 */
	public function getDescriptionsByUnit(string $unit): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "weight_class_description` WHERE `unit` = '" . $this->db->escape($unit) . "' AND `language_id` = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row;
	}
}
