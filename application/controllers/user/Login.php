<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(['form_validation','session']);
		$this->load->database();
	}
	public function index()	
	{
		$this->load->view("user/login");
	}	
}
