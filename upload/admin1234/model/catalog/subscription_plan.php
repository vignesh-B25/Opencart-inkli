<?php
namespace Opencart\Admin\Model\Catalog;
/**
 * Class Subscription Plan
 *
 * Can be called from $this->load->model('catalog/subscription_plan');
 *
 * @package Opencart\Admin\Model\Catalog
 */
class SubscriptionPlan extends \Opencart\System\Engine\Model {
	/**
	 * Add Subscription Plan
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return int returns the primary key of the new subscription plan record
	 *
	 * @example
	 *
	 * $subscription_plan_id = $this->model_catalog_subscription_plan->addSubscriptionPlan($data);
	 */
	public function addSubscriptionPlan(array $data): int {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "subscription_plan` SET `trial_frequency` = '" . $this->db->escape((string)$data['trial_frequency']) . "', `trial_duration` = '" . (int)$data['trial_duration'] . "', `trial_cycle` = '" . (int)$data['trial_cycle'] . "', `trial_status` = '" . (int)$data['trial_status'] . "', `frequency` = '" . $this->db->escape((string)$data['frequency']) . "', `duration` = '" . (int)$data['duration'] . "', `cycle` = '" . (int)$data['cycle'] . "', `status` = '" . (bool)$data['status'] . "', `sort_order` = '" . (int)$data['sort_order'] . "'");

		$subscription_plan_id = $this->db->getLastId();

		foreach ($data['subscription_plan_description'] as $language_id => $subscription_plan_description) {
			$this->model_catalog_subscription_plan->addDescription($subscription_plan_id, $language_id, $subscription_plan_description);
		}

		return $subscription_plan_id;
	}

	/**
	 * Edit Subscription Plan
	 *
	 * @param int                  $subscription_plan_id primary key of the subscription plan record
	 * @param array<string, mixed> $data                 array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_subscription_plan->editSubscriptionPlan($subscription_plan_id, $data);
	 */
	public function editSubscriptionPlan(int $subscription_plan_id, array $data): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "subscription_plan` SET `trial_frequency` = '" . $this->db->escape((string)$data['trial_frequency']) . "', `trial_duration` = '" . (int)$data['trial_duration'] . "', `trial_cycle` = '" . (int)$data['trial_cycle'] . "', `trial_status` = '" . (int)$data['trial_status'] . "', `frequency` = '" . $this->db->escape((string)$data['frequency']) . "', `duration` = '" . (int)$data['duration'] . "', `cycle` = '" . (int)$data['cycle'] . "', `status` = '" . (bool)$data['status'] . "', `sort_order` = '" . (int)$data['sort_order'] . "' WHERE `subscription_plan_id` = '" . (int)$subscription_plan_id . "'");

		$this->model_catalog_subscription_plan->deleteDescriptions($subscription_plan_id);

		foreach ($data['subscription_plan_description'] as $language_id => $subscription_plan_description) {
			$this->model_catalog_subscription_plan->addDescription($subscription_plan_id, $language_id, $subscription_plan_description);
		}
	}

	/**
	 * Copy Subscription Plan
	 *
	 * @param int $subscription_plan_id primary key of the subscription plan record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_subscription_plan->copySubscriptionPlan($subscription_plan_id);
	 */
	public function copySubscriptionPlan(int $subscription_plan_id): void {
		$this->model_catalog_subscription_plan->addSubscriptionPlan($this->model_catalog_subscription_plan->getSubscriptionPlan($subscription_plan_id) + ['subscription_plan_description' => $this->model_catalog_subscription_plan->getDescription($subscription_plan_id)]);
	}

	/**
	 * Delete Subscription Plan
	 *
	 * @param int $subscription_plan_id primary key of the subscription plan record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_subscription_plan->deleteSubscriptionPlan($subscription_plan_id);
	 */
	public function deleteSubscriptionPlan(int $subscription_plan_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "subscription_plan` WHERE `subscription_plan_id` = '" . (int)$subscription_plan_id . "'");

		$this->model_catalog_subscription_plan->deleteDescriptions($subscription_plan_id);

		// Product
		$this->load->model('catalog/product');

		$this->model_catalog_product->deleteSubscriptionsBySubscriptionPlanId($subscription_plan_id);
	}

	/**
	 * Get Subscription Plan
	 *
	 * @param int $subscription_plan_id primary key of the subscription plan record
	 *
	 * @return array<string, mixed> subscription plan record that has subscription plan ID
	 *
	 * @example
	 *
	 * $subscription_info = $this->model_catalog_subscription_plan->getSubscriptionPlan($subscription_plan_id);
	 */
	public function getSubscriptionPlan(int $subscription_plan_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "subscription_plan` `sp` LEFT JOIN `" . DB_PREFIX . "subscription_plan_description` `spd` ON (`sp`.`subscription_plan_id` = `spd`.`subscription_plan_id`) WHERE `sp`.`subscription_plan_id` = '" . (int)$subscription_plan_id . "' AND `spd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row;
	}

	/**
	 * Get Subscription Plans
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return array<int, array<string, mixed>> subscription plan records
	 *
	 * @example
	 *
	 * $subscription_plans = $this->model_catalog_subscription_plan->getSubscriptionPlans();
	 */
	public function getSubscriptionPlans(array $data = []): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "subscription_plan` `sp` LEFT JOIN `" . DB_PREFIX . "subscription_plan_description` `spd` ON (`sp`.`subscription_plan_id` = `spd`.`subscription_plan_id`) WHERE `spd`.`language_id` = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_name'])) {
			$sql .= " AND LCASE(`spd`.`name`) LIKE '" . $this->db->escape(oc_strtolower($data['filter_name']) . '%') . "'";
		}

		$sort_data = [
			'spd.name',
			'sp.sort_order'
		];

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY `spd`.`name`";
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
	 * Add Description
	 *
	 * @param int                  $subscription_plan_id primary key of the subscription plan record
	 * @param int                  $language_id          primary key of the language record
	 * @param array<string, mixed> $data                 array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_subscription_plan->addDescription($subscription_plan_id, $language_id, $subscription_plan_description);
	 */
	public function addDescription(int $subscription_plan_id, int $language_id, array $data): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "subscription_plan_description` SET `subscription_plan_id` = '" . (int)$subscription_plan_id . "', `language_id` = '" . (int)$language_id . "', `name` = '" . $this->db->escape($data['name']) . "'");
	}

	/**
	 * Delete Descriptions
	 *
	 * @param int $subscription_plan_id primary key of the subscription plan record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_catalog_subscription_plan->deleteDescriptions($subscription_plan_id);
	 */
	public function deleteDescriptions(int $subscription_plan_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "subscription_plan_description` WHERE `subscription_plan_id` = '" . (int)$subscription_plan_id . "'");
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
	 * $this->model_catalog_subscription_plan->deleteDescriptionsByLanguageId($language_id);
	 */
	public function deleteDescriptionsByLanguageId(int $language_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "subscription_plan_description` WHERE `language_id` = '" . (int)$language_id . "'");
	}

	/**
	 * Get Descriptions
	 *
	 * @param int $subscription_plan_id primary key of the subscription plan record
	 *
	 * @return array<int, array<string, string>> description records that have subscription plan ID
	 *
	 * @example
	 *
	 * $subscription_plan_description = $this->model_catalog_subscription_plan->getDescriptions($subscription_plan_id);
	 */
	public function getDescriptions(int $subscription_plan_id): array {
		$subscription_plan_description_data = [];

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "subscription_plan_description` WHERE `subscription_plan_id` = '" . (int)$subscription_plan_id . "'");

		foreach ($query->rows as $result) {
			$subscription_plan_description_data[$result['language_id']] = $result;
		}

		return $subscription_plan_description_data;
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
	 * $results = $this->model_catalog_subscription_plan->getDescriptionsByLanguageId($language_id);
	 */
	public function getDescriptionsByLanguageId(int $language_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "subscription_plan_description` WHERE `language_id` = '" . (int)$language_id . "'");

		return $query->rows;
	}

	/**
	 * Get Total Subscription Plans
	 *
	 * @return int total number of subscription plan records
	 *
	 * @example
	 *
	 * $subscription_plan_total = $this->model_catalog_subscription_plan->getTotalSubscriptionPlans();
	 */
	public function getTotalSubscriptionPlans(): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "subscription_plan`");

		return (int)$query->row['total'];
	}
}
