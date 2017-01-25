<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backoffice extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->helper(array('url'));
			$this->load->library(array('data_lib','session'));
			$this->data = array();
			$this->data['csrf_token_name'] = $this->security->get_csrf_token_name();
			$this->data['csrf_token'] = $this->security->get_csrf_hash();
			$this->data['header'] = $this->load->view('backoffice/commonCode/header', $this->data, true);
			$this->data['navigation'] = $this->load->view('backoffice/commonCode/navigation', $this->data, true);
			$this->data['footer'] = $this->load->view('backoffice/commonCode/footer', $this->data, true);
			$this->data['message'] = ($v = $this->session->flashdata('message'))?$v:array('content'=>'','color'=>'');
	}

	public function index(){
		if($this->data_lib->auth()){
			redirect(base_url('backoffice/contactUs'));
		}
		else{
		$this->load->view('backoffice/login', $this->data);}
	}

	public function contactUs(){
		if(!$this->data_lib->auth()){
			$this->load->view('backoffice/login', $this->data);}
		else{
			$this->load->view('backoffice/contactUs', $this->data);
		}
	}

	public function changePassword(){
		if(!$this->data_lib->auth()){
			$this->load->view('backoffice/login', $this->data);}
		else{
			$this->load->view('backoffice/changePassword', $this->data);
		}
	}

	}
