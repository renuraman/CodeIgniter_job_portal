<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	public function __construct(){
	parent::__construct();
	if(!$this->session->userdata('loggedin')){
	$this->session->set_flashdata('access_denied','sorry you are not allowed');
	redirect('login');	
	}
	
	}
	
	
	 public function index()
	{
		
		$data['main_view'] = 'users/index';
		$this->load->view('layouts/main', $data);  
	}  
	


	




}
?>