<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Room extends CI_Controller {

	public function index()
	{

	}

    public function room_list(){

        $this->load->model("contact_model");
        $this->load->model("room_model");
        $this->load->model("roomproperties_model");
        $this->load->model("roomimage_model");
        $this->load->model("roomcategory_model");

        $viewData = new stdClass();

        $contact = $this->contact_model->get(
            array(
                "isActive" => 1
            )
        );

        $rooms = $this->room_model->get_all(
            array(
                "isActive"   => 1
            ), "rank ASC"
        );

        $room_properties = $this->roomproperties_model->get_all(
            array(
                "isActive"   => 1
            )
        );

        $room_images = $this->roomimage_model->get_all(
            array(
                "isActive"  => 1,
                "isCover"   => 1
            )
        );

        $room_categories = $this->roomcategory_model->get_all(
            array(
                "isActive"  => 1,
            )
        );


        $property_list = array();
        foreach($room_properties as $property){
            $property_list[$property->id] = $property->title;
        }

        $cover_image_list = array();
        foreach($room_images as $image){
            $cover_image_list[$image->room_id] = $image->img_id;
        }

        $room_category_list = array();
        foreach($room_categories as $room_category){
            $room_category_list[$room_category->id] = $room_category->title;
        }

        $viewData->contact       = $contact;
        $viewData->rooms         = $rooms;
        $viewData->room_images   = $room_images;
        $viewData->property_list   = $property_list;
        $viewData->cover_image_list   = $cover_image_list;
        $viewData->room_category_list   = $room_category_list;
        $viewData->room_categories   = $room_categories;

        $this->load->view('room_list', $viewData);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */