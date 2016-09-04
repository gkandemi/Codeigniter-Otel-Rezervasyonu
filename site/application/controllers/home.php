<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{

	    $this->load->model("contact_model");
	    $this->load->model("room_model");
	    $this->load->model("roomproperties_model");
	    $this->load->model("roomimage_model");
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

        $property_list = array();
        foreach($room_properties as $property){
            $property_list[$property->id] = $property->title;
        }

        $cover_image_list = array();
        foreach($room_images as $image){
            $cover_image_list[$image->room_id] = $image->img_id;
        }

        $viewData->contact       = $contact;
        $viewData->rooms         = $rooms;
        $viewData->room_images   = $room_images;
        $viewData->property_list   = $property_list;
        $viewData->cover_image_list   = $cover_image_list;

		$this->load->view('home', $viewData);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */