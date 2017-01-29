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
			$this->data['contactUs'] = $this->data_lib->getContactUs();
			$this->load->view('backoffice/contactUs', $this->data);
		}
	}

	public function viewContactMessage($id = ''){
		if(!$this->data_lib->auth()){
			$this->load->view('backoffice/login', $this->data);}
		else{
			$this->data['contactMessage'] = $this->data_lib->getContactMessage($id);
			$this->data['contactMessage'] = $this->data['contactMessage'][0];
			$this->load->view('backoffice/viewContactMessage', $this->data);
		}
	}

	public function changePassword(){
		if(!$this->data_lib->auth()){
			$this->load->view('backoffice/login', $this->data);}
		else{
			$this->load->view('backoffice/changePassword', $this->data);
		}
	}

	public function menuCategories(){
		if(!$this->data_lib->auth()){
			$this->load->view('backoffice/login', $this->data);}
		else{
			$this->data['menuCategories'] = $this->data_lib->getMenuCategories();
			$this->data['mobileNumber'] = $this->data_lib->getMenuMobile();
			$this->data['mobileNumber'] = $this->data['mobileNumber'][0]['contact'];
			$this->load->view('backoffice/menuCategories', $this->data);
		}
	}

	public function menuItems(){
		if(!$this->data_lib->auth()){
			$this->load->view('backoffice/login', $this->data);}
		else{
			$this->data['menuCategories'] = $this->data_lib->getMenuCategories();
			$this->data['menuItems'] = $this->data_lib->getMenuItems();
			// var_dump($this->data['menuItems']);die;
			$this->load->view('backoffice/menuItems', $this->data);
		}
	}

	public function editMenuCategory($id=''){
		if(!$this->data_lib->auth()){
			$this->load->view('backoffice/login', $this->data);}
		else{
			$this->data['categoryData'] = $this->data_lib->getCategoryData($id);
			$this->data['categoryData'] = $this->data['categoryData'][0];
			$this->load->view('backoffice/editMenuCategory', $this->data);
		}
	}

	public function editMenuItem($id=''){
		if(!$this->data_lib->auth()){
			$this->load->view('backoffice/login', $this->data);}
		else{
			$this->data['itemData'] = $this->data_lib->getItemData($id);
			$this->data['itemData'] = $this->data['itemData'][0];
			$this->data['menuCategories'] = $this->data_lib->getMenuCategories();
			$this->load->view('backoffice/editMenuItem', $this->data);
		}
	}

	public function editTestimonial($id=''){
		if(!$this->data_lib->auth()){
			$this->load->view('backoffice/login', $this->data);}
		else{
			$this->data['testimonial'] = $this->data_lib->getTestimonial($id);
			$this->data['testimonial'] = $this->data['testimonial'][0];
			$this->load->view('backoffice/editTestimonial', $this->data);
		}
	}

	public function editTeamMember($id=''){
		if(!$this->data_lib->auth()){
			$this->load->view('backoffice/login', $this->data);}
		else{
			$this->data['teamMember'] = $this->data_lib->getTeamMember($id);
			$this->data['teamMember'] = $this->data['teamMember'][0];
			$this->load->view('backoffice/editTeamMember', $this->data);
		}
	}

	public function manageTeam(){
		if(!$this->data_lib->auth()){
			$this->load->view('backoffice/login', $this->data);}
		else{
			$this->data['teamContent'] = $this->data_lib->getTeamContent();
			$this->data['teamContent'] = $this->data['teamContent'][0]['content'];
			$this->data['team'] = $this->data_lib->getTeam();
			$this->load->view('backoffice/manageTeam', $this->data);
		}
	}

	public function manageImages(){
		if(!$this->data_lib->auth()){
			$this->load->view('backoffice/login', $this->data);}
		else{
			$this->data['images'] = $this->data_lib->getImages();
			$this->load->view('backoffice/manageImages', $this->data);
		}
	}

	public function hfContent(){
		if(!$this->data_lib->auth()){
			$this->load->view('backoffice/login', $this->data);}
		else{
			$this->data['headerContent'] = $this->data_lib->getHeaderContent();
			$this->data['headerContent'] = $this->data['headerContent'][0];
			$this->data['footerContent'] = $this->data_lib->getFooterContent();
			$this->data['footerContent'] = $this->data['footerContent'][0];
			$this->load->view('backoffice/hfContent', $this->data);
		}
	}

	public function aboutContent(){
		if(!$this->data_lib->auth()){
			$this->load->view('backoffice/login', $this->data);}
		else{
			$this->data['about'] = $this->data_lib->getAboutContent();
			$this->load->view('backoffice/aboutContent', $this->data);
		}
	}

	public function homeContent(){
		if(!$this->data_lib->auth()){
			$this->load->view('backoffice/login', $this->data);}
		else{
			$this->data['home'] = $this->data_lib->getHomeContent();
			$this->data['home'] = $this->data['home'][0];
			$this->load->view('backoffice/homeContent', $this->data);
		}
	}

	public function testimonials(){
		if(!$this->data_lib->auth()){
			$this->load->view('backoffice/login', $this->data);}
		else{
			$this->data['testimonials'] = $this->data_lib->getTestimonials();
			$this->load->view('backoffice/testimonials', $this->data);
		}
	}

	public function newsletterSubscribers(){
		if(!$this->data_lib->auth()){
			$this->load->view('backoffice/login', $this->data);}
		else{
			$this->data['subscribers'] = $this->data_lib->getSubscribers();
			$this->load->view('backoffice/newsletterSubscribers', $this->data);
		}
	}

	}
