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
    
    public function delete_feedback()
    {
        
    }
    
    public function show_replies($feedback_id)
    {
        
    }
    
    public function create_reply($feedback_id)
    {
        
    }
}