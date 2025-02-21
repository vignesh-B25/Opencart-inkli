<?php
namespace Opencart\Admin\Controller\Cms;

class Faq extends \Opencart\System\Engine\Controller {
    
    public function index(): void {
        $this->load->language('cms/faq');
        $this->document->setTitle($this->language->get('heading_title'));
         
        $this->load->model('cms/faq');
      
        // Fetch FAQs from the model
        $data['faqs'] = $this->model_cms_faq->getFaqs();
        




       



        // Debugging - Log data to error log
        error_log('FAQs data from model in index: ' . print_r($data['faqs'], true));
    
        $data['add'] = $this->url->link('cms/faq.form', 'user_token=' . $this->session->data['user_token']);
        $data['delete'] = $this->url->link('cms/faq.delete', 'user_token=' . $this->session->data['user_token']);
       
        $data['edit'] = $this->url->link('cms/faq.form',   'user_token=' . $this->session->data['user_token']);
        $data['user_token'] = $this->session->data['user_token'];
        
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        
    
        // Pass data to view
        $this->response->setOutput($this->load->view('cms/faq', $data));
    }
    
    

    public function getList(): string {
        if (!$this->user->hasPermission('access', 'cms/faq')) {
            return '<p class="text-danger">' . $this->language->get('error_permission') . '</p>';
        }
    
        $this->load->model('cms/faq');
        
        // Fetch FAQs
        $faqs = $this->model_cms_faq->getFaqs();
    
        // Debugging - Log data to error log
        error_log('FAQs data from model: ' . print_r($faqs, true));
    
        $data['faqs'] = $faqs;
    
        return $this->load->view('cms/faq_list', $data);
    }
    

    public function form(): void {
        $this->load->language('cms/faq');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('cms/faq');
        

        // Load the FAQ data if editing
        if (isset($this->request->get['faq_id']) && !empty($this->request->get['faq_id'])) {
            $faq_id = (int)$this->request->get['faq_id'];
         
            $data['faq'] = $this->model_cms_faq->getFaq($faq_id);
            
            
        } else {
            $data['faq'] = [
                'faq_id'     => 0,
                'question'   => '',
                'answer'     => '',
                'sort_order' => 0,
                'status'     => 1
            ];
        }

        $data['save'] = $this->url->link('cms/faq.save', 'user_token=' . $this->session->data['user_token']);
        $data['back'] = $this->url->link('cms/faq', 'user_token=' . $this->session->data['user_token']);
    
        $data['user_token'] = $this->session->data['user_token'];

        $this->response->setOutput($this->load->view('cms/faq_form', $data));
        
    }

    public function save(): void {
        $json = [];

        if (!$this->user->hasPermission('modify', 'cms/faq')) {
            $json['error'] = $this->language->get('error_permission');
            echo "you don't have permission";
        }

        // Debug the POST data
        error_log(print_r($this->request->post, true));

        if (!$json) {
            $this->load->model('cms/faq');

            if (empty($this->request->post['faq_id'])) {
                // Add new FAQ
                $this->model_cms_faq->addFaq($this->request->post);
            
            } else {
                // Edit existing FAQ
                $this->model_cms_faq->editFaq($this->request->post['faq_id'], $this->request->post);
               
            }

            $json['success'] = $this->language->get('text_success');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function delete(): void {
        $json = [];

        if (!$this->user->hasPermission('modify', 'cms/faq')) {
            $json['error'] = $this->language->get('error_permission');
        }

        if (!$json) {
            $this->load->model('cms/faq');

            if (isset($this->request->post['selected']) && is_array($this->request->post['selected'])) {
                foreach ($this->request->post['selected'] as $faq_id) {
                    $this->model_cms_faq->deleteFaq($faq_id);
                }
                $json['success'] = $this->language->get('text_success');
            } else {
                $json['error'] = $this->language->get('error_selection');
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
?>
