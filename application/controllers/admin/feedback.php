<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feedback extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('org/admin/admin_feedback_library');
    }
    
    public function index()
    {
        $this->data['feedback_list'] = $this->admin_feedback_model->get_all_feedbacks()->result_array();
        $this->template->load(NULL, "admin/feedback/index", $this->data);
    }
    
    public function delete_feedback()
    {
        $result = array();
        $feedback_id = $this->input->post('feedback_id');
        if($this->admin_feedback_model->delete_feedback($feedback_id))
        {
            $result['message'] = "Feedback is deleted successfully.";
        }
        else
        {
            $result['message'] = "Error while deleting feedback.";
        }
        echo json_encode($result);
    }
    
    public function show_replies($feedback_id)
    {
        
    }
    
    public function create_reply($feedback_id)
    {
        
    }
}