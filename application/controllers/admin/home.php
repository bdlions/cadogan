<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index()
    {
        $this->data['home_page_info'] = array();
        $this->template->load(NULL, "admin/home/home_page/index", $this->data);
    }
    
    public function link()
    {
        $this->data['link_list'] = array();
        $this->template->load(NULL, "admin/home/home_page/index", $this->data);
    }
    
    public function address()
    {
        $this->data['address_list'] = array();
        $this->template->load(NULL, "admin/home/address/index", $this->data);
    }
}