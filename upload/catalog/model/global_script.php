<?php
namespace Opencart\Catalog\Model;

class GlobalScript extends \Opencart\System\Engine\Model {
    public function getGlobalScript(): string {
        $query = $this->db->query("SELECT `script` FROM `" . DB_PREFIX . "global_script` LIMIT 1");
        return $query->num_rows ? $query->row['script'] : '';
    }
}
