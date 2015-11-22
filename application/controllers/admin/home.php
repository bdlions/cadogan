<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('org/admin/admin_home_library');
    }
    // --------------------- Home page Info Module -------------------//
    public function index($home_page_info_id = 0)
    {
        $this->data['message'] = '';
        $this->form_validation->set_rules('gallery_image_text', 'Gallery Image Text', 'xss_clean|required');
        $this->form_validation->set_rules('title', 'Title', 'xss_clean|required');
        $this->form_validation->set_rules('description', 'Description', 'xss_clean|required');
        $this->form_validation->set_rules('links_title', 'Links Title', 'xss_clean|required');
        
        if ($this->input->post('submit_update_home_page_info')) {
            if($this->form_validation->run() == true)
            {
                $additional_data = array(
                    'gallery_image_text' => $this->input->post('gallery_image_text'),
                    'title' => $this->input->post('title'),
                    'description' => $this->input->post('description'),
                    'links_title' => $this->input->post('links_title')    
                );
                if($this->admin_home_model->update_home_page_info($home_page_info_id, $additional_data))
                {
                    $this->data['message'] = "Home page info is updated successfully.";
                }
                else
                {
                    $this->data['message'] = 'Error while updating home page info.';
                }
            }
            else
            {
                $this->data['message'] = validation_errors();
            }            
        }
        
        $home_page_info = array();
        $home_page_info_array = $this->admin_home_model->get_home_page_info()->result_array();
        if(!empty($home_page_info_array))
        {
            $home_page_info = $home_page_info_array[0];
        }
        $this->data['home_page_info'] = $home_page_info;
        
        $this->data['gallery_image_text'] = array(
            'id' => 'gallery_image_text',
            'name' => 'gallery_image_text',
            'type' => 'text',
            'value' => $home_page_info['gallery_image_text']
        );
        $this->data['title'] = array(
            'id' => 'title',
            'name' => 'title',
            'type' => 'text',
            'value' => $home_page_info['title']
        );
        $this->data['description'] = array(
            'id' => 'description',
            'name' => 'description',
            'type' => 'textarea',
            'rows' => 5,
            'value' => $home_page_info['description']
        );
        $this->data['links_title'] = array(
            'id' => 'links_title',
            'name' => 'links_title',
            'type' => 'text',
            'value' => $home_page_info['links_title']
        );
        $this->data['submit_update_home_page_info'] = array(
            'id' => 'submit_update_home_page_info',
            'name' => 'submit_update_home_page_info',
            'type' => 'submit',
            'value' => 'Update',
        );
        $this->template->load(NULL, "admin/home/home_page/index", $this->data);
    }
    
    // ---------------------- Link Module -------------------------//
    public function link()
    {
        $this->data['link_list'] = array();
        $this->template->load(NULL, "admin/home/link/index", $this->data);
    }
    
    public function create_link()
    {
        
    }
    
    public function update_link()
    {
        
    }
    
    public function delete_link()
    {
        
    }
    
    // --------------------- Address Module ------------------------//
    
    public function address($address_id = 0)
    {
        $this->data['address_list'] = array();
        $this->template->load(NULL, "admin/home/address/index", $this->data);
    }
    
}