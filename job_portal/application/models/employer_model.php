<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employer_model extends CI_Model {


	public function getEmployers(){
	
	$query = $this->db->query('select * from employer');
	return $query->result();

	}

	public function eraseEmployer($id){
	
	$query = $this->db->query('delete from employer where empr_id = '.$id);
	return $query;
	
	}
	
	
	public function addEmployer($empr_name){
	
	$query = $this->db->query("insert into employer(empr_name) values('".$empr_name."')");
	return $query;
	}
	
	public function editEmployer($empr_id){
	
	$query = $this->db->query("select * from employer where empr_id=".$empr_id);
	return $query->row();
	
	
	}
	
	public function editEmployer1($empr_id1, $empr_name){
	$query = $this->db->query("update employer set empr_name = '".$empr_name."'  where empr_id = $empr_id1");
	return $query;
	
	}
	
}

?>