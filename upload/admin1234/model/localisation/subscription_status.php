<?php
namespace Opencart\Admin\Model\Localisation;
/**
 * Class Subscription Status
 *
 * Can be called from $this->load->model('localisation/subscription_status');
 *
 * @package Opencart\Admin\Model\Localisation
 */
class SubscriptionStatus extends \Opencart\System\Engine\Model {
	/**
	 * Add Subscription Status
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return ?int
	 *
	 * @example
	 *
	 * $subscription_status_id = $this->model_localisation_subscription_status->addSubscriptionStatus($data);
	 */
	public function addSubscriptionStatus(array $data): ?int {
		$subscription_status_id = 0;

		foreach ($data['subscription_status'] as $language_id => $subscription_status) {
			if (!$subscription_status_id) {
				$this->db->query("INSERT INTO `" . DB_PREFIX . "subscription_status` SET `language_id` = '" . (int)$language_id . "', `name` = '" . $this->db->escape($subscription_status['name']) . "'");

				$subscription_status_id = $this->db->getLastId();
			} else {
				$this->model_localisation_subscription_status->addDescription($subscription_status_id, $language_id, $subscription_status);
			}
		}

		$this->cache->delete('subscription_status');

		return $subscription_status_id;
	}

	/**
	 * Edit Subscription Status
	 *
	 * @param int                  $subscription_status_id primary key of the subscription status record
	 * @param array<string, mixed> $data                   array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_subscription_status->editSubscriptionStatus($subscription_status_id, $data);
	 */
	public function editSubscriptionStatus(int $subscription_status_id, array $data): void {
		$this->deleteSubscriptionStatus($subscription_status_id);

		foreach ($data['subscription_status'] as $language_id => $subscription_status) {
			$this->model_localisation_subscription_status->addDescription($subscription_status_id, $language_id, $subscription_status);
		}

		$this->cache->delete('subscription_status');
	}

	/**
	 * Delete Subscription Status
	 *
	 * @param int $subscription_status_id primary key of the subscription status record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_subscription_status->deleteSubscriptionStatus($subscription_status_id);
	 */
	public function deleteSubscriptionStatus(int $subscription_status_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "subscription_status` WHERE `subscription_status_id` = '" . (int)$subscription_status_id . "'");

		$this->cache->delete('subscription_status');
	}

	/**
	 * Delete Subscription Statuses By Language ID
	 *
	 * @param int $language_id primary key of the language record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_subscription_status->deleteStockStatusesByLanguageId($language_id);
	 */
	public function deleteStockStatusesByLanguageId(int $language_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "subscription_status` WHERE `language_id` = '" . (int)$language_id . "'");

		$this->cache->delete('subscription_status');
	}

	/**
	 * Get Subscription Status
	 *
	 * @param int $subscription_status_id primary key of the subscription status record
	 *
	 * @return array<string, mixed> subscription status record that has subscription status ID
	 *
	 * @example
	 *
	 * $subscription_status_info = $this->model_localisation_subscription_status->getSubscriptionStatus($subscription_status_id);
	 */
	public function getSubscriptionStatus(int $subscription_status_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "subscription_status` WHERE `subscription_status_id` = '" . (int)$subscription_status_id . "' AND `language_id` = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row;
	}

	/**
	 * Get Subscription Statuses
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return array<int, array<string, mixed>> subscription status records
	 *
	 * @example
	 *
	 * $subscription_statuses = $this->model_localisation_subscription_status->getSubscriptionStatuses();
	 */
	public function getSubscriptionStatuses(array $data = []): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "subscription_status` WHERE `language_id` = '" . (int)$this->config->get('config_language_id') . "' ORDER BY `name`";

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

		$subscription_status_data = $this->cache->get('subscription_status.' . $key);

		if (!$subscription_status_data) {
			$query = $this->db->query($sql);

			$subscription_status_data = $query->rows;

			$this->cache->set('subscription_status.' . $key, $subscription_status_data);
		}

		return $subscription_status_data;
	}

	/**
	 * Add Description
	 *
	 * @param int                  $subscription_status_id primary key of the subscription status record
	 * @param int                  $language_id            primary key of the language record
	 * @param array<string, mixed> $data                   array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_subscription_status->addDescription($subscription_status_id, $language_id, $data);
	 */
	public function addDescription(int $subscription_status_id, int $language_id, array $data): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "subscription_status` SET `subscription_status_id` = '" . (int)$subscription_status_id . "', `language_id` = '" . (int)$language_id . "', `name` = '" . $this->db->escape($data['name']) . "'");
	}

	/**
	 * Get Descriptions
	 *
	 * @param int $subscription_status_id primary key of the subscription status record
	 *
	 * @return array<int, array<string, string>> description records that have subscription status ID
	 *
	 * @example
	 *
	 * $subscription_status = $this->model_localisation_subscription_status->getDescriptions($subscription_status_id);
	 */
	public function getDescriptions(int $subscription_status_id): array {
		$subscription_status_data = [];

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "subscription_status` WHERE `subscription_status_id` = '" . (int)$subscription_status_id . "'");

		foreach ($query->rows as $result) {
			$subscription_status_data[$result['language_id']] = $result;
		}

		return $subscription_status_data;
	}

	/**
	 * Get Descriptions By Language ID
	 *
	 * @param int $language_id primary key of the language record
	 *
	 * @return array<int, array<string, mixed>> description records that have language ID
	 *
	 * @example
	 *
	 * $results = $this->model_localisation_subscription_status->getDescriptionsByLanguageId($language_id);
	 */
	public function getDescriptionsByLanguageId(int $language_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "subscription_status` WHERE `language_id` = '" . (int)$language_id . "'");

		return $query->rows;
	}

	/**
	 * Get Total Subscription Statuses
	 *
	 * @return int total number of subscription status records
	 *
	 * @example
	 *
	 * $subscription_status_total = $this->model_localisation_subscription_status->getTotalSubscriptionStatuses();
	 */
	public function getTotalSubscriptionStatuses(): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "subscription_status` WHERE `language_id` = '" . (int)$this->config->get('config_language_id') . "'");

		return (int)$query->row['total'];
	}
}
