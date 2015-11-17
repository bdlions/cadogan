<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('org/admin/admin_menu_library');
    }
    /*
     * This method will show all menu items
     */
    public function index()
    {
        $this->data['menu_list'] = array();
        $this->template->load(NULL, "admin/menu/index", $this->data);
    }
    
    /*
     * This method will create menu item
     */
    public function create_menu()
    {
        
    }
    
    /*
     * This method will update menu item
     */
    public function update_menu($menu_id)
    {
        
    }
    
    /*
     * Ajax call to delete menu item
     * This method will delete a menu item
     */
    public function delete_menu()
    {
        
    }
    
}