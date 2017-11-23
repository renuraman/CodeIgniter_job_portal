<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	
	public function index()
	{

		$data["main_view"] = "login_view";
		$this->load->view("layouts/main", $data);
		
	}
	
	
	public function user_type()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == FALSE){
			$data = array(
			'error' => validation_errors()
			);
			//print_r($data);
			$this->session->set_flashdata($data);
			redirect('login');
			
		} else { 
		
			$username = $this->input->post('username');
			$password = $this->input->post('password');



			$this->load->model('user_model');
			$user_id=$this->user_model->login_user($username);
			if($user_id){
				
				$user_data=array(
				'user_id' => $user_id->user_id,
				'username' => $username,
				'user_type' => $user_id->user_type,
				'loggedin' => true);

				if((md5($password)) == $user_id->password){
					$this->session->set_userdata($user_data);
					$this->session->set_flashdata('login_success', 'you are now logged in');
					
				/* 	if($user_id->user_type == 1){
						
						redirect('admin/');
						
					}else{
						
						redirect('dailylogs/');
						
					} */
					
						if($user_id->user_type == 1){
	
	redirect('admin/');
	
	} 
	
	else if($user_id->user_type == 0){	
	redirect('users/');
	}
	
	else {	
	redirect('employer/');
	}
					
				}else{
					
					$this->session->set_flashdata('wrong_password', 'password or username not matching');
					redirect('login');
					
				}


			} else {
				
				$this->session->set_flashdata('login_failed', 'you are not a registered user... contact the Administrator');
				redirect('login');
			
			}


		}
	}
	
	 
}
