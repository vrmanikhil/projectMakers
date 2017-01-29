<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
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
		$vm['body'] = $this->load->view('pages/home', '', TRUE);
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
		$vm['body'] = $this->load->view('pages/about', '', TRUE);
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
		$vm['body'] = $this->load->view('pages/team', '', TRUE);
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
		$vm['body'] = $this->load->view('pages/contact', '', TRUE);
		$this->load->view('template', $vm);
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
		$vm['body'] = $this->load->view('pages/menu', '', TRUE);
		$this->load->view('template', $vm);
	}

}
