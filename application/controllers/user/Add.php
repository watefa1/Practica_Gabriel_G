<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
		
	}
	
	public function index()	
	{
		$this->load->view("user/add");
	}	

	public function save(){
		$cosas = $this->input->post("cosas");

		$data1 = array(
			"cosas"=>$cosas,
		);

		$this->User_model->save($data1);
		$this->session->set_flashdata('sucess', '¡Se han cargado los datos correctamente!');
		redirect(base_url()."cosas");
	}
}
