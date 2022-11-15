<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addt extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
		
	}
	
	public function index()	
	{
		$this->load->view("user/addt");
	}	

	public function save(){
		$tag = $this->input->post("tag");

		$data2 = array(
			"tag"=>$tag,
		);

		$this->User_model->sav($data2);
		$this->session->set_flashdata('sucess', '¡Se han cargado los datos correctamente!');
		redirect(base_url()."tags");
	}
}
