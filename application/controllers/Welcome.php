<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function construct(){
		parent:: construct();

		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function insert(){
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('name', 'name', 'required');
			$this->form_validation->set_rules('email', 'Emails', 'required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$data = array('responce' => 'error', 'message' => validation_errors());
			}
			else
			{
				$ajax_data = $this->input->post();
				$data = array('responce' => 'successss', 'message' => $ajax_data);
			}
		}else{
			echo "No direct script access alloweds";
		}
		
		echo json_encode($data);
	}
}
