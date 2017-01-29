<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library(array('data_lib','session'));
		$this->data = array();
		$this->data['csrf_token_name'] = $this->security->get_csrf_token_name();
		$this->data['csrf_token'] = $this->security->get_csrf_hash();
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
		$vm['body'] = $this->load->view('pages/contact', $contact, TRUE);
		$vm['headerContent'] = $this->data_lib->getHeaderContent();
		$vm['headerContent'] = $vm['headerContent'][0];
		$vm['footerContent'] = $this->data_lib->getFooterContent();
		$vm['footerContent'] = $vm['footerContent'][0];
		$this->load->view('template', $vm);
	}

}
