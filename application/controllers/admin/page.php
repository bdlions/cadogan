<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('org/admin/admin_page_library');
    }
    /*
     * This method will show all submenu items
     */
    public function index()
    {
        $this->data['page_list'] = array();
        $this->template->load(NULL, "admin/page/index", $this->data);
    }
    
    /*
     * This method will create page
     */
    public function create_page()
    {
        
    }
    
    /*
     * This method will update page
     */
    public function update_page($page_id)
    {
        
    }
    
    /*
     * Ajax call to delete page
     * This method will delete a page
     */
    public function delete_page()
    {
        
    }
    
}