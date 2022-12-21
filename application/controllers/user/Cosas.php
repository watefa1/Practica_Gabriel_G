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
		$data = array ("data"=>$this->User_model->getTag());
		$this->load->view('user/cosas',$data5);
	}

	public function delete($id_cosa){
		$this->User_model->delete($id_cosa);
		$this->session->set_flashdata('sucess', '¡La cosa fue eliminada correctamente!');
		redirect(base_url()."cosas");
	}
	public function getTags($data2){
		$this->db->select("*");
		$this->db->from("tag t");
		$this->db->where("t.tag",$data2);
		$results=$this->db->get();
		return $results->row();
	}
}
