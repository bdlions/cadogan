<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feedback extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index()
    {
        $this->data['feedback_list'] = array();
        $this->template->load(NULL, "admin/feedback/index", $this->data);
    }
}