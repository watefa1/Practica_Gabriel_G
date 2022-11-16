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

		$this->form_validation->set_rules('cosas', 'Cosas');
		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('user/edit');
		}
		else
		{
			$data1 = array(
			"cosas"=>$cosas,
			);

	$this->User_model->update($data1);
	$this->session->set_flashdata('sucess', '¡Se han editado los datos correctamente!');
		redirect(base_url()."cosas");
	}
	}
}
