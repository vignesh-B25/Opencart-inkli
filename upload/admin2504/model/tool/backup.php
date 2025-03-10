<?php
namespace Opencart\Admin\Model\Tool;
/**
 * Class Backup
 *
 * Can be called from $this->load->model('tool/backup');
 *
 * @package Opencart\Admin\Model\Tool
 */
class Backup extends \Opencart\System\Engine\Model {
	/**
	 * Get Tables
	 *
	 * @return array<int, string>
	 *
	 * @example
	 *
	 * $tables = $this->model_tool_backup->getTables();
	 */
	public function getTables(): array {
		$table_data = [];

		$query = $this->db->query("SHOW TABLES FROM `" . DB_DATABASE . "`");

		foreach ($query->rows as $result) {
			if (isset($result['Tables_in_' . DB_DATABASE]) && substr($result['Tables_in_' . DB_DATABASE], 0, strlen(DB_PREFIX)) == DB_PREFIX) {
				$table_data[] = $result['Tables_in_' . DB_DATABASE];
			}
		}

		return $table_data;
	}

	/**
	 * Get Records
	 *
	 * @param string $table
	 * @param int    $start
	 * @param int    $limit
	 *
	 * @return array<int, array<string, mixed>>
	 *
	 * @example
	 *
	 * $records = $this->model_tool_backup->getRecords($table, $start, $limit);
	 */
	public function getRecords(string $table, int $start = 0, int $limit = 100): array {
		if ($start < 0) {
			$start = 0;
		}

		if ($limit < 1) {
			$limit = 10;
		}

		$query = $this->db->query("SELECT * FROM `" . $table . "` LIMIT " . (int)$start . "," . (int)$limit);

		if ($query->num_rows) {
			return $query->rows;
		} else {
			return [];
		}
	}

	/**
	 * Get Total Records
	 *
	 * @param string $table
	 *
	 * @return int
	 *
	 * @example
	 *
	 * $record_total = $this->model_tool_backup->getTotalRecords($table);
	 */
	public function getTotalRecords(string $table): int {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . $table . "`");

		if ($query->num_rows) {
			return (int)$query->row['total'];
		} else {
			return 0;
		}
	}
}
