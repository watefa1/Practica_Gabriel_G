<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editag extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
	}
	
	public function index($id)	
	{
		$data2=$this->User_model->getTags($id);
		$this->load->view("user/editag",$data2);
	}	

	public function updatetag($id){
		$tag = $this->input->post("tag");

		$data2=$this->User_model->getTags($id);

		
			$data2 = array(
			"tag"=>$tag);

	$this->User_model->updatetag($data2,$id);
	$this->session->set_flashdata('sucess', '¡Se ha editado el tag correctamente!');
		redirect(base_url()."tags");
	}
	}
