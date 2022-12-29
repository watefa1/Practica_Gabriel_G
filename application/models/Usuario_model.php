<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Usuario_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
	public function getPassword($password){
		$this->db->select("*");
		$this->db->from("users u");
		$this->db->where("u.password",$password);
		$results=$this->db->get();
		return $results->row();
	}
}
