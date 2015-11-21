<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('org/admin/admin_page_library');
    }

    /*
     * This method will show all submenu items
     */

    public function index() {
        $this->data['page_list'] = $this->admin_page_library->get_all_pages()->result_array();
        $this->template->load(NULL, "admin/page/index", $this->data);
    }

    /*
     * This method will create page
     */

    public function create_page() {

        $this->data['message'] = '';
        $this->form_validation->set_error_delimiters("<div style='color:red'>", '</div>');
        $this->form_validation->set_rules('title', 'Title', 'xss_clean|required');

        if ($this->input->post('submit_create_page')) {
            if ($this->form_validation->run() == true) {
                $additional_data = array(
                    'title' => $this->input->post('title'),
                    'submenu_id' => $this->input->post('submenu_id'),
                    'description' => $this->input->post('description'),
                );
                $page_id = $this->admin_page_library->create_page($additional_data);
                if ($page_id !== FALSE) {
                    $this->data['message'] = "Page is created successfully.";
                } else {
                    $this->data['message'] = 'Error while creating a page.';
                }
            } else {
                $this->data['message'] = validation_errors();
            }
        }

        $this->data['title'] = array(
            'id' => 'title',
            'name' => 'title',
            'type' => 'text',
        );
        $this->data['submenu_id'] = array(
            'id' => 'submenu_id',
            'name' => 'submenu_id',
            'type' => 'int',
        );
        $this->data['description'] = array(
            'id' => 'description',
            'name' => 'description',
            'type' => 'text',
            'value' => $this->form_validation->set_value('description'),
            'rows' => '4',
            'cols' => '10'
        );

        $this->data['submit_create_page'] = array(
            'id' => 'submit_create_page',
            'name' => 'submit_create_page',
            'type' => 'submit',
            'value' => 'create',
        );
        $this->template->load(NULL, "admin/page/create_page", $this->data);
    }

    /*
     * This method will update page
     */

    public function update_page($id = 0) {
        $this->data['message'] = '';
        $this->form_validation->set_error_delimiters("<div style='color:red'>", '</div>');
        $this->form_validation->set_rules('title', 'Title', 'xss_clean|required');
        if ($this->input->post('submit_update_page')) {
            if($this->form_validation->run() == true)
            {
                $additional_data = array(
                    'title' => $this->input->post('title'),
                    'submenu_id' => $this->input->post('submenu_id'),
                    'description' => $this->input->post('description'),
                );
                
                if($this->admin_page_library->update_page($id, $additional_data))
                {
                    $this->data['message'] = "Page is updated successfully.";
                }
                else
                {
                    $this->data['message'] = 'Error while updating a page.';
                }
            }
            else
            {
                $this->data['message'] = validation_errors();
            }            
        }
        $page_info = array();
        $page_info_array = $this->admin_page_library->get_page($id)->result_array();
        if (!empty($page_info_array)) {
            $page = $page_info_array[0];
        }
        $this->data['page'] = $page ;
        $this->data['title'] = array(
            'name' => 'title',
            'id' => 'title',
            'type' => 'text',
            'value' => $page['title'],
        );
        $this->data['submenu_id'] = array(
            'name' => 'submenu_id',
            'id' => 'submenu_id',
            'type' => 'int',
            'value' => $page['submenu_id'],
        );
        $this->data['description'] = array(
            'id' => 'description',
            'name' => 'description',
            'type' => 'text',
            'value' => $page['description'],
            'rows' => '4',
            'cols' => '10'
        );


        $this->data['submit_update_page'] = array(
            'id' => 'submit_update_page',
            'name' => 'submit_update_page',
            'type' => 'submit',
            'value' => 'Update',
        );
        $this->template->load(NULL, "admin/page/update_page", $this->data);
    }

    /*
     * Ajax call to delete page
     * This method will delete a page
     */

    public function delete_page() {
     $result = array();
//        $id = $this->input->post('page_id');
        $id = $this->input->post('id');
     
        if($this->admin_page_library->delete_page($id))
        {
            $result['message'] = "Page is deleted successfully.";
        }
        else
        {
            $result['message'] = "Error while deleting page.";
        }
        echo json_encode($result);   
    }

}
