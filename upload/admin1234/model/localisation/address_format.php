<?php
namespace Opencart\Admin\Model\Localisation;
/**
 * Class Address Format
 *
 * Can be called from $this->load->model('localisation/address_format');
 *
 * @package Opencart\Admin\Model\Localisation
 */
class AddressFormat extends \Opencart\System\Engine\Model {
	/**
	 * Add Address Format
	 *
	 * @param array<string, mixed> $data array of data
	 *
	 * @return int
	 *
	 * @example
	 *
	 * $address_format_id = $this->model_localisation_address_format->addAddressFormat($data);
	 */
	public function addAddressFormat(array $data): int {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "address_format` SET `name` = '" . $this->db->escape((string)$data['name']) . "', `address_format` = '" . $this->db->escape((string)$data['address_format']) . "'");

		return $this->db->getLastId();
	}

	/**
	 * Edit Address Format
	 *
	 * @param int                  $address_format_id primary key of the address format record
	 * @param array<string, mixed> $data              array of data
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_address_format->editAddressFormat($address_format_id, $data);
	 */
	public function editAddressFormat(int $address_format_id, array $data): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "address_format` SET `name` = '" . $this->db->escape((string)$data['name']) . "', `address_format` = '" . $this->db->escape((string)$data['address_format']) . "' WHERE `address_format_id` = '" . (int)$address_format_id . "'");
	}

	/**
	 * Delete Address Format
	 *
	 * @param int $address_format_id primary key of the address format record
	 *
	 * @return void
	 *
	 * @example
	 *
	 * $this->model_localisation_address_format->deleteAddressFormat($address_format_id);
	 */
	public function deleteAddressFormat(int $address_format_id): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "address_format` WHERE `address_format_id` = '" . (int)$address_format_id . "'");
	}

	/**
	 * Get Address Format
	 *
	 * @param int $address_format_id primary key of the address format record
	 *
	 * @return array<string, mixed> address format record that has address format ID
	 *
	 * @example
	 *
	 * $address_format_info = $this->model_localisation_address_format->getAddressFormat($address_format_id);
	 */
	public function getAddressFormat(int $address_format_id): array {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "address_format` WHERE `address_format_id` = '" . (int)$address_format_id . "'");

		return $query->row;
	}

	/**
	 * Get Address Formats
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return array<int, array<string, mixed>> address format records
	 *
	 * @example
	 *
	 * $results = $this->model_localisation_address_format->getAddressFormats();
	 */
	public function getAddressFormats(array $data = []): array {
		$sql = "SELECT * FROM `" . DB_PREFIX . "address_format`";

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
	 * Get Total Address Formats
	 *
	 * @param array<string, mixed> $data array of filters
	 *
	 * @return int total number of address format records
	 *
	 * @example
	 *
	 * $address_format_total = $this->model_localisation_address_format->getTotalAddressFormats();
	 */
	public function getTotalAddressFormats(array $data = []): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "address_format`");

		return (int)$query->row['total'];
	}
}
