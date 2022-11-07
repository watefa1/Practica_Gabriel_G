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
		
		$data7=$this->User_model->getCosa($id_cosa);
		$this->load->view("user/edit",$data7);
	}	

	public function update($id_cosa){
		$cosas = $this->input->post("cosas");
		$tag = $this->input->post("tag");

		$this->form_validation->set_rules('cosas', 'Cosas');
		$this->form_validation->set_rules('tag', 'Tag');

		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('user/edit');
		}
		else
		{
			$data3 = array(
				"cosas"=>$cosas,
				"tag"=>$tag,
			);

		$data1 = array(
			"cosas"=>$cosas,
		);

		$data2 = array(
			"tag"=>$tag,
		);

		$this->User_model->update($data1);

		$this->User_model->update($data2);
		$this->session->set_flashdata('sucess', '¡Se han editado los datos correctamente!');
		redirect(base_url()."cosas");
	}
	}
}
