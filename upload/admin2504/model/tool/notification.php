<?php
namespace Opencart\Admin\Model\Tool;
/**
 * Class Notification
 *
 * Can be called from $this->load->model('tool/notification');
 *
 * @package Opencart\Admin\Model\Tool
 */
class Notification extends \Opencart\System\Engine\Model {
	/**
	 * Add Notification
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return int
	 *
	 * @example
	 *
	 * $notification_id = $this->model_tool_notification->addNotification($data);
	 */
	public function addNotification(array $data): int {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "notification` SET `title` = '" . $this->db->escape((string)$data['title']) . "', `text` = '" . $this->db->escape((string)$data['text']) . "', `status` = '" . (bool)$data['status'] . "', `date_added` = NOW()");

		return $this->db->getLastId();
	}

	/**
	 * Edit Status
	 *
	 * @param int  $notification_id primary key of the notification record
	 * @param bool $status
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_tool_notification->editStatus($notification_id, $status);
	 */
	public function editStatus(int $notification_id, bool $status): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "notification` SET `status` = '" . (bool)$status . "' WHERE `notification_id` = '" . (int)$notification_id . "'");
	}

	/**
	 * Delete Notification
	 *
	 * @param int $notification_id primary key of the notification record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_tool_notification->deleteNotification($notification_id);
	 */
	public function deleteNotification(int $notification_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "notification` WHERE `notification_id` = '" . (int)$notification_id . "'");
	}

	/**
	 * Get Notification
	 *
	 * @param int $notification_id primary key of the notification record
	 *
	 * @return array<string, mixed> notification record that has notification ID
	 *
	 * @example
	 *
	 * $notification_info = $this->model_tool_notification->getNotification($notification_id);
	 */
	public function getNotification(int $notification_id): array {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "notification` WHERE `notification_id` = '" . (int)$notification_id . "'");

		return $query->row;
	}

	/**
	 * Get Notifications
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return array<int, array<string, mixed>> notification records
	 *
	 * @example
	 *
	 * $results = $this->model_tool_notification->getNotifications();
	 */
	public function getNotifications(array $data = []): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "notification`";

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$sql .= " WHERE `status` = '" . (bool)$data['filter_status'] . "'";
		}

		$sql .= " ORDER BY `date_added` DESC";

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
	 * Get Total Notifications
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return int total number of notification records
	 *
	 * @example
	 *
	 * $notification_total = $this->model_tool_notification->getTotalNotifications();
	 */
	public function getTotalNotifications(array $data = []): int {
		$sql = "SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "notification`";

		if (isset($data['filter_status']) && $data['filter_status'] !== '') {
			$sql .= " WHERE `status` = '" . (bool)$data['filter_status'] . "'";
		}

		$query = $this->db->query($sql);

		return (int)$query->row['total'];
	}
}
