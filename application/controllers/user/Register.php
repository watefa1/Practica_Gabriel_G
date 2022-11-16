<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
		
	}
	
	public function index()	
	{
		$this->load->view("user/register");
	}	

	
	public function save3(){
		$password = $this->input->post("password");
		$username = $this->input->post("username");

		$passwordenc = password_hash($password,PASSWORD_DEFAULT);

		$this->form_validation->set_rules(
			'username', 'Username',
			'required|min_length[3]|max_length[12]|is_unique[users.username]',
			array(
					'required'      => ' %s.',
					'is_unique'     => 'Usuario ya existente.'
			)
	);
		$this->form_validation->set_rules('password', 'Password', 'required');


		if ($this->form_validation->run() == FALSE)
		{
				echo form_error('username');
		}
		else
		{
			$data3 = array(
				"username"=>$username,
				"password"=>$passwordenc,
			);
	
			$this->User_model->save3($data3);
			$this->session->set_flashdata('sucess', '¡Nuevo usuario creado correctamente!');
			redirect(base_url()."login");
		}

	}
}
