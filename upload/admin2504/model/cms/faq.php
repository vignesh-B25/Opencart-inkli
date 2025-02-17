<?php
namespace Opencart\Admin\Model\Cms;

class Faq extends \Opencart\System\Engine\Model {
    
    // Add a new FAQ
    public function addFaq(array $data): int {
        $sort_order = isset($data['sort_order']) ? (int)$data['sort_order'] : 0;
        $status = isset($data['status']) ? (int)$data['status'] : 1; // Default: active (1)

        $this->db->query("INSERT INTO `" . DB_PREFIX . "faq` SET 
            question = '" . $this->db->escape($data['question']) . "', 
            answer = '" . $this->db->escape($data['answer']) . "', 
            sort_order = '" . $sort_order . "', 
            status = '" . $status . "'");

        return $this->db->getLastId();
    }

    // Edit an existing FAQ
    public function editFaq($faq_id, array $data): void {
        $faq_id = (int)$faq_id;
        $sort_order = isset($data['sort_order']) ? (int)$data['sort_order'] : 0;
        $status = isset($data['status']) ? (int)$data['status'] : 1; // Default: active (1)

        $this->db->query("UPDATE `" . DB_PREFIX . "faq` SET 
            question = '" . $this->db->escape($data['question']) . "', 
            answer = '" . $this->db->escape($data['answer']) . "', 
            sort_order = '" . $sort_order . "', 
            status = '" . $status . "' 
            WHERE faq_id = '" . $faq_id . "'");
    }

    // Delete an FAQ
    public function deleteFaq(int $faq_id): void {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "faq` WHERE faq_id = '" . (int)$faq_id . "'");
    }

    // Get a single FAQ by ID
    public function getFaq(int $faq_id): array {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "faq` WHERE faq_id = '" . (int)$faq_id . "'");
        return $query->row;
    }

    // Get all FAQs
    public function getFaqs(): array {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "faq` ORDER BY sort_order ASC");
        return $query->rows;
    }

    // Get total FAQs
    public function getTotalFaqs(): int {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "faq`");
        return (int)$query->row['total'];
    }
}
?>
