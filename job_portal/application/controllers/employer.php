<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employer extends CI_Controller {


	public function __construct(){
	parent::__construct();
	if(!$this->session->userdata('loggedin')){
	$this->session->set_flashdata('access_denied','sorry you are not allowed');
	redirect('login');	
	}
	
	}
	
	
	 public function index()
	{
	    $this->load->model('employer_model');
		$data['employers']=$this->employer_model->getEmployers();
		$data['main_view'] = 'employers/index';
		$this->load->view('layouts/main', $data);  
	} 

	public function delEmployer($empr_id){
	$this->load->model('employer_model');
	$user_id = $this->employer_model->eraseEmployer($empr_id);
	if($user_id){
	redirect('Employer');
	}
	}
	
	public function add(){
	/* $this->load->model('employer_model');
	$this->employer_model->addEmployer(); */
	
	
	
	$data['main_view'] = 'employers/addEmployers';
	$this->load->view('layouts/main',$data);
	

	}
	
	public function add1(){
	$empr_name = $this->input->post('empr_name');	
	$this->load->model('employer_model');
	$insert = $this->employer_model->addEmployer($empr_name);	
		if($insert){
		redirect('Employer');
		
		}
	}
	
	public function edit($empr_id){
	
	$this->load->model('employer_model');
	$data['edit'] = $this->employer_model->editEmployer($empr_id);
	
	$data['main_view'] = 'employers/editEmployer';
	$this->load->view('layouts/main', $data);
	}
	
	
	public function edit1($empr_id1){
	$empr_name = $this->input->post('empr_name');
		$this->load->model('employer_model');
	$edit1 = $this->employer_model->editEmployer1($empr_id1, $empr_name);

	if($edit1){
		redirect('Employer');		
		}	
	}
	
	
	
/* 	$this->load->model('employer_model');
	$edit = $this->employer_model->editEmployer($empr_id);
	
		if($edit){
		redirect('Employer');		
		} */

	




}
?>