<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackofficeFunctions extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->helper(array('url'));
			$this->load->library(array('data_lib', 'session'));
	}

	public function login(){
		$username = '';
		$password = '';
		if($x = $this->input->post('username')){
			$username = $x;
		}
		if($x = $this->input->post('password')){
			$password = $x;
		}
		$password = md5($password);
		$result = $this->data_lib->login($username, $password);
		if($result){
			redirect(base_url('/backoffice'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Check Username and/or Password','color'=>'red'));
			redirect(base_url('/backoffice'));
		}
	}

	public function logout(){
		$this->session->set_userdata('user_data', false);
		$this->session->set_userdata('user_data', []);
		$this->session->sess_destroy();
		redirect(base_url('backoffice'));
	}

	public function changePassword(){
		$current_password = '';
		$new_password = '';
		$confirm_new_password = '';
		$username = $this->session->userdata['user_data']['username'];
		$userdata = $this->data_lib->getUserPassword($username);
		$password = $userdata[0]['password'];
		if($x = $this->input->post('current_password')){
			$current_password = $x;
		}
		if($x = $this->input->post('new_password')){
			$new_password = $x;
		}
		if($x = $this->input->post('confirm_new_password')){
			$confirm_new_password = $x;
		}
		$current_password = md5($current_password);
		if($current_password === $password){
			if($new_password === $confirm_new_password){
				$new_password = md5($new_password);
				$result = $this->data_lib->changePassword($new_password, $username);
				if($result){
					$this->session->set_flashdata('message', array('content'=>'Your Password has successfully changed.','color'=>'green'));
					redirect(base_url('backoffice/changePassword'));
				}
				else{
					$this->session->set_flashdata('message', array('content'=>'Something Went Wrong.','color'=>'red'));
					redirect(base_url('backoffice/changePassword'));
				}
			}
			else{
				$this->session->set_flashdata('message', array('content'=>'Your Entered New Password does not match with the entered confirm password, please try again.','color'=>'red'));
				redirect(base_url('backoffice/changePassword'));
			}
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Your Entered Password does not match with the one in database, please try again.','color'=>'red'));
			redirect(base_url('backoffice/changePassword'));
		}
	}



}
