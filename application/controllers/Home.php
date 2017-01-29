<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library(array('data_lib','session'));
	}

	public function index()
	{
		$vm['assets'] = [
			'css' => [
				'/web-assets/css/bootstrap.min.css',
				'/web-assets/css/swiper.min.css',
				'/web-assets/css/base.css',
				'/web-assets/css/home.css'
			],
			'js' => [
				'/web-assets/js/jquery.min.js',
				'/web-assets/js/swiper.jquery.min.js',
				'/web-assets/js/bootstrap.min.js',
				'/web-assets/js/home.js'
			]
		];
		$vm['title'] = 'Home | Makers';
		$vm['activePage'] = 'home';
		$home['home'] = $this->data_lib->getHomeContent();
		$home['home'] = $home['home'][0];
		$home['images'] = $this->data_lib->getImages();
		$home['csrf_token_name'] = $this->security->get_csrf_token_name();
		$home['csrf_token'] = $this->security->get_csrf_hash();
		$home['testimonials'] = $this->data_lib->getTestimonials();
		$vm['body'] = $this->load->view('pages/home', $home, TRUE);
		$vm['headerContent'] = $this->data_lib->getHeaderContent();
		$vm['headerContent'] = $vm['headerContent'][0];
		$vm['footerContent'] = $this->data_lib->getFooterContent();
		$vm['footerContent'] = $vm['footerContent'][0];
		$this->load->view('template', $vm);
	}

	public function about()
	{
		$vm['assets'] = [
			'css' => [
				'/web-assets/css/bootstrap.min.css',
				'/web-assets/css/base.css',
				'/web-assets/css/about.css'
			],
			'js' => [
				'/web-assets/js/jquery.min.js',
				'/web-assets/js/bootstrap.min.js'
			]
		];
		$vm['title'] = 'About | Makers';
		$vm['activePage'] = 'about';
		$about['images'] = $this->data_lib->getImages();
		$about['about'] = $this->data_lib->getAboutContent();
		$about['csrf_token_name'] = $this->security->get_csrf_token_name();
		$about['csrf_token'] = $this->security->get_csrf_hash();
		$vm['body'] = $this->load->view('pages/about', $about, TRUE);
		$vm['headerContent'] = $this->data_lib->getHeaderContent();
		$vm['headerContent'] = $vm['headerContent'][0];
		$vm['footerContent'] = $this->data_lib->getFooterContent();
		$vm['footerContent'] = $vm['footerContent'][0];
		$this->load->view('template', $vm);
	}

	public function team()
	{
		$vm['assets'] = [
			'css' => [
				'/web-assets/css/bootstrap.min.css',
				'/web-assets/css/base.css',
				'/web-assets/css/team.css'
			],
			'js' => [
				'/web-assets/js/jquery.min.js',
				'/web-assets/js/bootstrap.min.js'
			]
		];
		$vm['title'] = 'Team | Makers';
		$vm['activePage'] = 'team';
		$team['images'] = $this->data_lib->getImages();
		$team['teamContent'] = $this->data_lib->getTeamContent();
		$team['teamContent'] = $team['teamContent'][0]['content'];
		$team['team'] = $this->data_lib->getTeam();
		$team['csrf_token_name'] = $this->security->get_csrf_token_name();
		$team['csrf_token'] = $this->security->get_csrf_hash();
		$vm['body'] = $this->load->view('pages/team', $team, TRUE);
		$vm['headerContent'] = $this->data_lib->getHeaderContent();
		$vm['headerContent'] = $vm['headerContent'][0];
		$vm['footerContent'] = $this->data_lib->getFooterContent();
		$vm['footerContent'] = $vm['footerContent'][0];
		$this->load->view('template', $vm);
	}

	public function contact()
	{
		$vm['assets'] = [
			'css' => [
				'/web-assets/css/bootstrap.min.css',
				'/web-assets/css/base.css',
				'/web-assets/css/contact.css'
			],
			'js' => [
				'/web-assets/js/jquery.min.js',
				'/web-assets/js/bootstrap.min.js'
			]
		];
		$vm['title'] = 'Contact Us | Makers';
		$vm['activePage'] = 'contact';
		$contact['images'] = $this->data_lib->getImages();
		$contact['csrf_token_name'] = $this->security->get_csrf_token_name();
		$contact['csrf_token'] = $this->security->get_csrf_hash();
		$vm['body'] = $this->load->view('pages/contact', $contact, TRUE);
		$vm['headerContent'] = $this->data_lib->getHeaderContent();
		$vm['headerContent'] = $vm['headerContent'][0];
		$vm['footerContent'] = $this->data_lib->getFooterContent();
		$vm['footerContent'] = $vm['footerContent'][0];
		$this->load->view('template', $vm);
	}


	public function contactUs(){
		$name = '';
		$email = '';
		$mobile = '';
		$message = '';
		if($x = $this->input->post('name')){
			$name = $x;
		}
		if($x = $this->input->post('email')){
			$email = $x;
		}
		if($x = $this->input->post('mobile')){
			$mobile = $x;
		}
		if($x = $this->input->post('message')){
			$message = $x;
		}
		if($name == '' || $email == '' || $mobile == '' || $message == ''){
			$this->session->set_flashdata('message', array('content'=>'Incomplete Data','color'=>'red'));
			redirect(base_url('/contact'));
		}
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$this->session->set_flashdata('message', array('content'=>'There is some error with your E-Mail Address Format','color'=>'red'));
			redirect(base_url('/contact'));
		}
		if (strlen($mobile)!=10 && !ctype_digit($mobile)) {
			$this->session->set_flashdata('message', array('content'=>'There is some error with your Mobile Number Format','color'=>'red'));
			redirect(base_url('/contact'));
		}
		$data = array(
			'name' => $name,
			'email' => $email,
			'mobile' => $mobile,
			'message' => $message
		);
		$result = $this->data_lib->contactUs($data);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Message Received','color'=>'green'));
			redirect(base_url('/contact'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong','color'=>'red'));
			redirect(base_url('/contact'));
		}
	}

public function menu()
{
	$vm['assets'] = [
		'css' => [
			'/web-assets/css/bootstrap.min.css',
			'/web-assets/css/base.css',
			'/web-assets/css/menu.css'
		],
		'js' => [
			'/web-assets/js/jquery.min.js',
			'/web-assets/js/bootstrap.min.js',
			'/web-assets/js/menu.js'
		]
	];
	$vm['title'] = 'Menu For Order | Makers';
	$vm['activePage'] = 'menu';
	$menu['csrf_token_name'] = $this->security->get_csrf_token_name();
	$menu['csrf_token'] = $this->security->get_csrf_hash();
	$menu['menuCategories'] = $this->data_lib->getMenuCategories();
	$menu['menuItems'] = $this->data_lib->getMenuItems();
	$menu['products'] = array();
	foreach ($menu['menuCategories'] as $key => $value) {
		$menu['products'][$value['name']] = array('name' => $value['name'], 'description'=> $value['description'], 'items' => array());
	}
	foreach ($menu['menuItems'] as $key => $value) {
		array_push($menu['products'][$value['category']]['items'], $value);
	}
	$menu['mobileNumber'] = $this->data_lib->getMenuMobile();
	$menu['mobileNumber'] = $menu['mobileNumber'][0]['contact'];
	$vm['body'] = $this->load->view('pages/menu', $menu, TRUE);
	$vm['headerContent'] = $this->data_lib->getHeaderContent();
	$vm['headerContent'] = $vm['headerContent'][0];
	$vm['footerContent'] = $this->data_lib->getFooterContent();
	$vm['footerContent'] = $vm['footerContent'][0];
	$this->load->view('template', $vm);
}

public function subscribeNewsletter(){
	$email = '';
	if($x = $this->input->post('email')){
		$email = $x;
	}
	if($email == ''){
		$this->session->set_flashdata('message', array('content'=>'Incomplete Data','color'=>'red'));
		redirect(base_url());
	}
	if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		$this->session->set_flashdata('message', array('content'=>'There is some error with your E-Mail Address Format','color'=>'red'));
		redirect(base_url());
	}
	$data = array(
		'email' => $email
	);
	$check = $this->data_lib->emailExist($email);
	if(!empty($check)){
		$this->session->set_flashdata('message', array('content'=>'You are already subscribed to our newsletters','color'=>'red'));
		redirect(base_url());
	}
	$result = $this->data_lib->subscribeNewsletter($data);
	if($result){
		$this->session->set_flashdata('message', array('content'=>'Newsletter Subscribtion Successful','color'=>'green'));
		redirect(base_url());
	}
	else{
		$this->session->set_flashdata('message', array('content'=>'Something Went Wrong','color'=>'red'));
		redirect(base_url());
	}
}


}
