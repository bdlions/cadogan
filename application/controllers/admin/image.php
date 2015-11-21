<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library('org/admin/Admin_image_library');
    }
    
    public function index()
    {
        
    }
    
    public function icons()
    {
        $this->data['icon_list'] = array();
        $this->template->load(NULL, "admin/image/icon/index", $this->data);
    }
    
    public function gallery()
    {
        $this->data['gallery_list'] = array();
        $this->template->load(NULL, "admin/image/icon/index", $this->data);
    }
    
    //--------------- Gallery Images Module -------------------//
    public function show_all_gallery_images()
    {
        $gallery_image_list = $this->admin_image_model->get_all_gallery_images()->result_array();
        $this->data['gallery_image_list'] = $gallery_image_list;
        $this->template->load(NULL, "admin/image/gallery/index", $this->data);
    }
    
    public function create_gallery_image()
    {
        if($this->input->post())
        {
            $result = array();
            if (isset($_FILES["userfile"])) {
                $file_info = $_FILES["userfile"];
                $result = $this->utils->upload_image($file_info, IMAGE_UPLOAD_PATH);
                if($result['status'] == 1)
                {
//                    $path = PHOTOGRAPHY_IMAGE_PATH.$result['upload_data']['file_name'];
//                    $this->utils->resize_image($path, $path, PHOTOGRAPHY_IMAGE_HEIGHT, PHOTOGRAPHY_IMAGE_WIDTH);
                
                    $result['message'] = 'Image is stored successfully.';
                }
            }
            else
            {
                $result['status'] = 0;
                $result['message'] = 'Please select an image.';
            }
            echo json_encode($result);
            return;
        }
        $this->template->load(NULL, "admin/image/gallery/create_image");
    }
    
    public function delete_gallery_image()
    {
        
    }
}