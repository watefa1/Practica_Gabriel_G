<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tag extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
		
	}
	
	public function index()
	{
		$data = array ("data"=>$this->User_model->getTag());

		$this->load->view('user/tag',$data);
	}

	public function deletag($id){
		$this->User_model->deletag($id);
		$this->session->set_flashdata('sucess', '¡El tag fue eliminada correctamente!');
		redirect(base_url()."tags");
	}
	
}

