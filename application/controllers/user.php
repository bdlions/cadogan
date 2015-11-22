<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('org/user/Home_library');
        $this->load->library('org/user/Page_library');
        
        $menu_list = $this->page_model->get_all_menus()->result_array();
        $this->data['menu_list'] = $menu_list;
        
        $address_info = array();
        $address_list = $this->page_model->get_all_addrsses()->result_array();
        if(!empty($address_list))
        {
            $address_info = $address_list[0];
        }
        $this->data['address_info'] = $address_info;   
        
        $logo_list = $this->page_model->get_all_logos()->result_array();
        $this->data['logo_list'] = $logo_list;
    }

    public function index()
    {
        $gallery_images = $this->home_model->get_gallery_images()->result_array();
        $this->data['gallery_images'] = $gallery_images;
        
        $home_page_info = array();
        $home_page_info_array = $this->home_model->get_home_page_info()->result_array();
        if(!empty($home_page_info_array))
        {
            $home_page_info = $home_page_info_array[0];
        }
        $this->data['home_page_info'] = $home_page_info;
        
        $link_list = $this->home_model->get_all_links()->result_array();
        $this->data['link_list'] = $link_list;
        $this->template->load(NULL, "nonmember/index", $this->data);
    }   
    
    public function page($submenu_id = 0)
    {
        $this->data['submenu_list'] = array();
        $page_info = array();
        $page_info_array = $this->page_model->get_page_info($submenu_id)->result_array();
        if(!empty($page_info_array))
        {
            $page_info = $page_info_array[0];
            $page_info['description'] = html_entity_decode(html_entity_decode($page_info['description']));
            $this->data['page_info'] = $page_info;
            $submenu_list = $this->page_model->get_all_submenus($page_info['menu_id'])->result_array();
            $this->data['submenu_list'] = $submenu_list;
            $this->template->load(NULL, "nonmember/page", $this->data);
        }
        else
        {
            $this->template->load(NULL, "nonmember/empty_page", $this->data);
        }
    }
    
    public function menu($menu_id)
    {
        $submenu_list = $this->page_model->get_all_submenus($menu_id)->result_array();
        $this->data['submenu_list'] = $submenu_list;
        if(!empty($submenu_list))
        {
            $page_info = array();
            $page_info_array = $this->page_model->get_page_info($submenu_list[0]['submenu_id'])->result_array();
            if(!empty($page_info_array))
            {
                $page_info = $page_info_array[0];
                $page_info['description'] = html_entity_decode(html_entity_decode($page_info['description']));
                $this->data['page_info'] = $page_info;
                $this->template->load(NULL, "nonmember/page", $this->data);
            }  
            $this->template->load(NULL, "nonmember/empty_page", $this->data);
        }
        else
        {
            $this->template->load(NULL, "nonmember/empty_page", $this->data);
        }
        
    }
    
    public function contact_us()
    {
        $this->template->load(NULL, "nonmember/contact_us", $this->data);
    }
}