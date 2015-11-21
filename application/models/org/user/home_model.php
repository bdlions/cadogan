<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_model extends Ion_auth_model
{
    public function __construct() {
        parent::__construct();
    }
            
    public function get_home_page_info()
    {
        return $this->db->select($this->tables['home_page_info'].'.*')
                ->from($this->tables['home_page_info'])
                ->get();
    }
    
    public function get_gallery_images()
    {
        
    }
    
    public function get_all_links()
    {
        $this->db->order_by('order', 'asc');
        return $this->db->select($this->tables['links'].'.id as link_id,'.$this->tables['links'].'.*')
                ->from($this->tables['links'])
                ->get();
    }
}