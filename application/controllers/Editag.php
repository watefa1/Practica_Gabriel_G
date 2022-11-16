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
		
		$data=$this->User_model->getTags($id);
		$this->load->view("user/editag",$data);
	}	

	public function update($id){
		$tag = $this->input->post("tag");

		$this->form_validation->set_rules('tag', 'Tag');

		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('user/editag');
		}
		else
		{
			$data = array(
				"tag"=>$tag,
			);
			$data = array(
				"tag"=>$tag,
			);

		$this->User_model->update($data);
		$this->session->set_flashdata('sucess', '¡Se han editado los datos correctamente!');
		redirect(base_url()."tag");
	}
	}
}
