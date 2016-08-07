<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Roomproperties extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model("roomproperties_model");
	}

	public function index()
	{

		$viewData = new stdClass();
		$viewData->rows = $this->roomproperties_model->get_all(array(),"rank ASC");

		$this->load->view('roomproperties', $viewData);
	}

	public function newPage(){

		$this->load->view("new_roomproperties");
	}

	public function editPage($id){

		$viewData = new stdClass();

		$viewData->row = $this->roomproperties_model->get(array("id" => $id));

		$this->load->view("edit_roomproperties", $viewData);


	}

	public function add(){

		$data = array(
			"title" 	=> $this->input->post("title"),
			"isActive"	=> 0
		);

		$insert = $this->roomproperties_model->add($data);

		if($insert){

			redirect(base_url("roomproperties"));
		}else{
			redirect(base_url("roomproperties/newPage"));
		}
	}

	public function edit($id){

		$data = array(
			"title" => $this->input->post("title")
		);

		$update = $this->roomproperties_model->update(
			array("id"	=> $id),
			$data
		);

		if($update){
			redirect(base_url("roomproperties"));
		}else{
			redirect(base_url("roomproperties/editPage/$id"));
		}
	}


	public function isActiveSetter(){

		$id 	  = $this->input->post("id");
		$isActive = ($this->input->post("isActive") == "true") ? 1 : 0;

		$update = $this->roomproperties_model->update(
			array("id" => $id),
			array("isActive" => $isActive)
		);

	}

	public function delete($id){

		$delete = $this->roomproperties_model->delete(array("id" => $id));

		redirect(base_url("roomproperties"));

	}

	public function rankUpdate(){

		parse_str($this->input->post("data"), $data);

		$items = $data["sortId"];

		foreach($items as $rank => $id){

			$this->roomproperties_model->update(
				array(
					"id"      => $id,
					"rank !=" => $rank
				),
				array("rank" => $rank)
			);

		}

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */