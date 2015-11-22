<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_image_model extends Ion_auth_model
{
    public function __construct() {
        parent::__construct();
    }
    
    //------------------- Home Page Gallery Images Module ----------------------//
    public function get_all_gallery_images()
    {
        return $this->db->select($this->tables['gallery_images'].'.id as gallery_image_id,'.$this->tables['gallery_images'].'.*')
                ->from($this->tables['gallery_images'])
                ->get();
    }
    
    public function create_gallery_image($additional_data)
    {
        $data = $this->_filter_data($this->tables['gallery_images'], $additional_data);
        $this->db->insert($this->tables['gallery_images'], $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    
    public function delete_gallery_image($image_id)
    {
        $this->db->where('id',$image_id);
        $this->db->delete($this->tables['gallery_images']);
    }
    
    // ------------------- Icons Module ------------------------------//
    public function get_all_icons()
    {
        
    }
    
    public function create_icon()
    {
        
    }
    
    public function delete_icon()
    {
        
    }
}