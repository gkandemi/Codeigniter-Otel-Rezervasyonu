<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$this->load->view('dashboard');
	}

	public function setActiveMenu(){

		$parent 	= $this->input->post("parent");
		$activeItem = $this->input->post("activeItem");

		$this->session->set_userdata(
			array(
				"parent" 		=> $parent,
				"activeItem"	=> $activeItem
			)
		);

	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */