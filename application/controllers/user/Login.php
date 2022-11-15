<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()	
	{
		if(isset($_POST['password'])){
		$this->load->model('Usuario_model');
		if($this->usuario_model->login($_POST['username'],$_POST['password'])){
			redirect('user/cosas');
		} else {
			redirect('user/login');
		}
		}
		$this->load->view("user/login");
	}	
}
