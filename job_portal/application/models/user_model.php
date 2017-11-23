<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function login_user($username){
	
	$this->db->where('username', $username);
	$query = $this->db->get('users');
	
	return $query->row();


	}

}

?>