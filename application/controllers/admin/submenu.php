<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Submenu extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('org/admin/admin_submenu_library');
    }
    /*
     * This method will show all submenu items
     */
    public function index()
    {
        $this->data['submenu_list'] = array();
        $this->template->load(NULL, "admin/submenu/index", $this->data);
    }
    
    /*
     * This method will create submenu item
     */
    public function create_submenu()
    {
        
    }
    
    /*
     * This method will update submenu item
     */
    public function update_submenu($submenu_id)
    {
        
    }
    
    /*
     * Ajax call to delete submenu item
     * This method will delete a submenu item
     */
    public function delete_submenu()
    {
        
    }
    
}