<?php

class Admin extends CI_controller{

	public function __construct(){

		parent::__construct();
		
		if(!$this->session->userdata('loggedin')){
		$this->session->set_flashdata('access_denied','sorry you are not allowed');		
		redirect('login');
		}
	
	}
	
	public function index(){
	
	$data['main_view'] = 'admin_view';
	$this->load->view('layouts/main', $data);
	
	
	}
	
	
	
}

?>