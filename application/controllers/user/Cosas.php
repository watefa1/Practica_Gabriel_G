<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cosas extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
		
	}
	
	public function index()
	{
		$data5 = array ("data5"=>$this->User_model->getCosas());

		$this->load->view('user/cosas',$data5);
	}
	
		}
