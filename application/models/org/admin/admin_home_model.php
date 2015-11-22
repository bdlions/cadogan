<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_home_model extends Ion_auth_model
{
    public function __construct() {
        parent::__construct();
    }
    // -------------- Home page info module ------------------------//
    public function get_home_page_info()
    {
        return $this->db->select($this->tables['home_page_info'].'.id as home_page_info_id,'.$this->tables['home_page_info'].'.*')
                ->from($this->tables['home_page_info'])
                ->get();
    }
    
    public function update_home_page_info($home_page_info_id, $additional_data)
    {
        $data = $this->_filter_data($this->tables['home_page_info'], $additional_data);
        $this->db->where('id', $home_page_info_id);
        $this->db->update($this->tables['home_page_info'], $data);
        if ($this->db->affected_rows() == 0) {
            return FALSE;
        }
        return TRUE;
    }
    
    //--------------- Homa page links module ----------------//
    public function get_all_links()
    {
        
    }
    
    public function create_link()
    {
        
    }
    
    public function get_link_info()
    {
        
    }
    
    public function update_link()
    {
        
    }
    
    public function delete_link()
    {
        
    }
    
    // ------------------------- Address Module -----------------------//
    public function get_all_addresses()
    {
        
    }
    
    public function update_address($address_id, $additional_data)
    {
        
    }
}