<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_feedback_model extends Ion_auth_model
{
    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_feedbacks()
    {
        return $this->db->select($this->tables['feedbacks'].'.id as feedback_id,'.$this->tables['feedbacks'].'.*')
                ->from($this->tables['feedbacks'])
                ->get();
    }
    
    public function delete_feedback($feedback_id)
    {
        $this->db->where('id',$feedback_id);
        $this->db->delete($this->tables['feedbacks']);
    }
    
    public function get_all_replies($feedback_id)
    {
        
    }
    
    public function create_reply()
    {
        
    }
}