<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
	}
	
	public function index($id_cosa)	
	{
		$data1=$this->User_model->getCosa($id_cosa);
		$this->load->view("user/edit",$data1);
	}	

	public function update($id_cosa){
		$cosas = $this->input->post("cosas");

		$data1=$this->User_model->getCosa($id_cosa);

		
			$data1 = array(
			"cosas"=>$cosas);

	$this->User_model->update($data1,$id_cosa);
	$this->session->set_flashdata('sucess', '¡Se ha editado la cosa correctamente!');
		redirect(base_url()."cosas");
	}
	}

