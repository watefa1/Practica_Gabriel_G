<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function save($data1){
		$this->db->query("ALTER TABLE cosas AUTO_INCREMENT 1");
		$this->db->INSERT('cosas', $data1);
		return ($this->db->affected_rows() != 1) ? false : true;
		}

	public function sav($data2){
		$this->db->query("ALTER TABLE tag AUTO_INCREMENT 1");
		$this->db->INSERT('tag', $data2);
		return ($this->db->affected_rows() != 1) ? false : true;
		}
	
		public function save3($data3){
			$this->db->query("ALTER TABLE users AUTO_INCREMENT 1");
			$this->db->INSERT('users', $data3);
			return ($this->db->affected_rows() != 1) ? false : true;
			}
	public function getCosas(){
		$this->db->select("*");
		$this->db->from("cosas");
		$results=$this->db->get();
		return $results->result();
	}
	
	public function getTags(){
		$this->db->select("*");
		$this->db->from("tag");
		$results=$this->db->get();
		return $results->result();
	}

	public function getCosa($id_cosa){
		$this->db->select("c.*");
		$this->db->from("cosas c");
		$this->db->where("c.id_cosa",$id_cosa);
		$results=$this->db->get();
		return $results->row();
	}
}
