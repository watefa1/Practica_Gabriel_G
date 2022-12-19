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
		
		$data8=$this->User_model->getTag($id);
		$this->load->view("user/editag",$data8);
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
			$data2 = array(
				"tag"=>$tag,
			);
			

		$this->User_model->update($data2);
		$this->session->set_flashdata('sucess', '¡Se han editado los datos correctamente!');
		redirect(base_url()."tag");
	}
	}
}
