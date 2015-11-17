<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index()
    {
        
    }
    
    public function icon()
    {
        $this->data['icon_list'] = array();
        $this->template->load(NULL, "admin/image/icon/index", $this->data);
    }
    
    public function gallery()
    {
        $this->data['gallery_list'] = array();
        $this->template->load(NULL, "admin/image/icon/index", $this->data);
    }
}