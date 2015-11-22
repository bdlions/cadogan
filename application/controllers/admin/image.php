<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library('org/admin/Admin_image_library');
        $this->load->library('org/utility/Image_utils');
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
                $result = $this->image_utils->upload_image($file_info, IMAGE_UPLOAD_PATH);
                $path = IMAGE_UPLOAD_PATH.$result['upload_data']['file_name'];
                $this->image_utils->resize_image($path, $path, GALLERY_IMAGE_HEIGHT, GALLERY_IMAGE_WIDTH);
                 $additional_data = array(
                        'img' => $result['upload_data']['file_name']
                    );
                $id = $this->admin_image_library->create_gallery_image($additional_data);
                if($id !== FALSE)
                {               
                    $result['message'] = 'Image is stored successfully.';
                }
                else
                {
                    $result['message'] = 'Error while uploading image.';
                }                
            }
            else
            {
                $result['message'] = 'Please select an image.';
            }
            echo json_encode($result);
            return;
        }
        $this->template->load(NULL, "admin/image/gallery/create_image");
    }
    
    public function delete_gallery_image()
    {
        $image_id = $this->input->post('image_id');
        $this->admin_image_library->delete_gallery_image($image_id);
        $response = array(
            'message' => 'Image is deleted successfully.'
        );
        echo json_encode($response);
    }
}