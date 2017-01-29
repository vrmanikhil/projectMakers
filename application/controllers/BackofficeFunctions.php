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

	public function updateAboutParagraph1(){
		$content = '';
		if($x = $this->input->post('paragraph1')){
			$content = $x;
		}
		$paragraph = "paragraph1";
		$result = $this->data_lib->updateAboutParagraph($content, $paragraph);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Paragraph successfully Updated','color'=>'green'));
			redirect(base_url('/backoffice/aboutContent'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/aboutContent'));
		}
	}

	public function updateMenuMobile(){
		$mobile = '';
		if($x = $this->input->post('mobile')){
			$mobile = $x;
		}
		$id = 1;
		$result = $this->data_lib->updateMenuMobile($mobile, $id);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Mobile Number successfully Updated','color'=>'green'));
			redirect(base_url('/backoffice/menuCategories'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/menuCategories'));
		}
	}

	public function updateMenuItem(){
		$itemID = '';
		$name = '';
		$description = '';
		$categoryID = '';
		$startsFrom = '';

		if($x = $this->input->post('itemID')){
			$itemID = $x;
		}
		if($x = $this->input->post('name')){
			$name = $x;
		}
		if($x = $this->input->post('description')){
			$description = $x;
		}
		if($x = $this->input->post('categoryID')){
			$categoryID = $x;
		}
		if($x = $this->input->post('startsFrom')){
			$startsFrom = $x;
		}
		$data = array(
			'name' => $name,
			'description' => $description,
			'categoryID' => $categoryID,
			'startsFrom' => $startsFrom
		);
		$result = $this->data_lib->updateMenuItem($data, $itemID);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Menu Item successfully Updated','color'=>'green'));
			redirect(base_url('/backoffice/menuItems'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/menuItems'));
		}
	}

	public function updateTeamMember(){
		$teamMemberID = '';
		$name = '';
		$role = '';
		$description = '';

		if($x = $this->input->post('teamMemberID')){
			$teamMemberID = $x;
		}
		if($x = $this->input->post('name')){
			$name = $x;
		}
		if($x = $this->input->post('description')){
			$description = $x;
		}
		if($x = $this->input->post('role')){
			$role = $x;
		}

		$data = array(
			'name' => $name,
			'description' => $description,
			'role' => $role
		);
		$result = $this->data_lib->updateTeamMember($data, $teamMemberID);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Team Member successfully Updated','color'=>'green'));
			redirect(base_url('/backoffice/manageTeam'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/manageTeam'));
		}
	}

	public function updateTeamMemberImage(){
		$teamMemberID = '';
		$imageURL = '';

		if($x = $this->input->post('teamMemberID')){
			$teamMemberID = $x;
		}

		$this->load->library('upload');
	 	 $config['upload_path'] = 'assets/images/team';
	 	 $config['allowed_types'] = 'gif|jpg|jpeg|png|JPG';
	 	 $config['max_size']	= '1000';
	 	 $config['max_width'] = '300';
	 	 $config['min_width'] = '270';
	 	 $config['max_height'] = '300';
	 	 $config['min_height'] = '270';
	 	 $this->upload->initialize($config);
	 	 $this->upload->do_upload('image');
	 	 $x = $this->upload->data();
	 	 $x['file_name'] = $x['file_name'];
	 	 $imageURL = 'assets/images/team/'.$x['file_name'];

		$data = array(
			'imageURL' => $imageURL
		);
		$result = $this->data_lib->updateTeamMemberImage($data, $teamMemberID);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Team Member Image successfully Updated','color'=>'green'));
			redirect(base_url('/backoffice/manageTeam'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/manageTeam'));
		}
	}

	public function updateAboutParagraph2(){
		$content = '';
		if($x = $this->input->post('paragraph2')){
			$content = $x;
		}
		$paragraph = "paragraph2";
		$result = $this->data_lib->updateAboutParagraph($content, $paragraph);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Paragraph successfully Updated','color'=>'green'));
			redirect(base_url('/backoffice/aboutContent'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/aboutContent'));
		}
	}

	public function updateHomeContent(){
		$title1 = '';
		$title2 = '';
		$content1 = '';
		$content2 = '';
		if($x = $this->input->post('title1')){
			$title1 = $x;
		}
		if($x = $this->input->post('title2')){
			$title2 = $x;
		}
		if($x = $this->input->post('content1')){
			$content1 = $x;
		}
		if($x = $this->input->post('content2')){
			$content2 = $x;
		}
		$title1 = addslashes($title1);
		$title2 = addslashes($title2);
		$data = array(
			'title1' => $title1,
			'title2' => $title2,
			'content1' => $content1,
			'content2' => $content2
		);
		$result = $this->data_lib->updateHomeContent($data);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Home Content successfully Updated','color'=>'green'));
			redirect(base_url('/backoffice/homeContent'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/homeContent'));
		}
	}

	public function updateHeaderContent(){
		$headline = '';
		$email = '';
		$mobile = '';
		if($x = $this->input->post('headline')){
			$headline = $x;
		}
		if($x = $this->input->post('email')){
			$email = $x;
		}
		if($x = $this->input->post('mobile')){
			$mobile = $x;
		}
		$headline = addslashes($headline);
		$data = array(
			'headline' => $headline,
			'email' => $email,
			'mobile' => $mobile
		);
		$result = $this->data_lib->updateHeaderContent($data);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Header Content successfully Updated','color'=>'green'));
			redirect(base_url('/backoffice/hfContent'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/hfContent'));
		}
	}

	public function updateFooterContent(){
		$facebook = '';
		$twitter = '';
		$instagram = '';
		$about = '';

		if($x = $this->input->post('facebook')){
			$facebook = $x;
		}
		if($x = $this->input->post('twitter')){
			$twitter = $x;
		}
		if($x = $this->input->post('instagram')){
			$instagram = $x;
		}
		if($x = $this->input->post('about')){
			$about = $x;
		}
		$data = array(
			'about' => $about,
			'facebook' => $facebook,
			'twitter' => $twitter,
			'instagram' => $instagram
		);
		$result = $this->data_lib->updateFooterContent($data);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Footer Content successfully Updated','color'=>'green'));
			redirect(base_url('/backoffice/hfContent'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/hfContent'));
		}
	}

	public function addMenuCategory(){
		$name = '';
		$description = '';

		if($x = $this->input->post('name')){
			$name = $x;
		}
		if($x = $this->input->post('description')){
			$description = $x;
		}
		$data = array(
			'name' => $name,
			'description' => $description
		);
		$result = $this->data_lib->addMenuCategory($data);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Menu Category successfully Added','color'=>'green'));
			redirect(base_url('/backoffice/menuCategories'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/menuCategories'));
		}
	}

	public function addMenuItem(){
		$name = '';
		$description = '';
		$categoryID = '';
		$startsFrom = '';
		$imageURL = '';

		if($x = $this->input->post('name')){
			$name = $x;
		}
		if($x = $this->input->post('description')){
			$description = $x;
		}
		if($x = $this->input->post('startsFrom')){
			$startsFrom = $x;
		}
		if($x = $this->input->post('categoryID')){
			$categoryID = $x;
		}
		$this->load->library('upload');
		$config['upload_path'] = 'assets/images/menu';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|JPG';
		$config['max_size']	= '1000';
		$config['max_width'] = '300';
		$config['min_width'] = '250';
		$config['max_height'] = '200';
		$config['min_height'] = '175';
		$this->upload->initialize($config);
		$this->upload->do_upload('image');
		$x = $this->upload->data();
		$x['file_name'] = $x['file_name'];
		$imageURL = 'assets/images/menu/'.$x['file_name'];

		$data = array(
			'name' => $name,
			'description' => $description,
			'categoryID' => $categoryID,
			'startsFrom' => $startsFrom,
			'imageURL' => $imageURL
		);
		$result = $this->data_lib->addMenuItem($data);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Menu Item successfully Added','color'=>'green'));
			redirect(base_url('/backoffice/menuItems'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/menuItems'));
		}
	}

	public function updateMenuItemImage(){
		$imageURL = '';
		$itemID = '';
		if($x = $this->input->post('itemID')){
			$itemID = $x;
		}

		$this->load->library('upload');
		$config['upload_path'] = 'assets/images/menu';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|JPG';
		$config['max_size']	= '1000';
		$config['max_width'] = '300';
		$config['min_width'] = '250';
		$config['max_height'] = '200';
		$config['min_height'] = '175';
		$this->upload->initialize($config);
		$this->upload->do_upload('image');
		$x = $this->upload->data();
		$x['file_name'] = $x['file_name'];
		$imageURL = 'assets/images/menu/'.$x['file_name'];

		$data = array(
			'imageURL' => $imageURL
		);
		$result = $this->data_lib->addMenuItem($data, $itemID);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Menu Item Image successfully Updated','color'=>'green'));
			redirect(base_url('/backoffice/menuItems'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/menuItems'));
		}
	}

	public function addTestimonial(){
		$name = '';
		$testimonial = '';

		if($x = $this->input->post('name')){
			$name = $x;
		}
		if($x = $this->input->post('testimonial')){
			$testimonial = $x;
		}
		$testimonial = addslashes($testimonial);
		$data = array(
			'name' => $name,
			'testimonial' => $testimonial
		);
		$result = $this->data_lib->addTestimonial($data);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Testimonial successfully Added','color'=>'green'));
			redirect(base_url('/backoffice/testimonials'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/testimonials'));
		}
	}

	public function updateTestimonial(){
		$name = '';
		$testimonial = '';
		$id = '';

		if($x = $this->input->post('testimonialID')){
			$id = $x;
		}
		if($x = $this->input->post('name')){
			$name = $x;
		}
		if($x = $this->input->post('testimonial')){
			$testimonial = $x;
		}
		$data = array(
			'name' => $name,
			'testimonial' => $testimonial
		);
		$result = $this->data_lib->updateTestimonial($data, $id);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Testimonial successfully Updated','color'=>'green'));
			redirect(base_url('/backoffice/testimonials'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/testimonials'));
		}
	}

	public function updateMenuCategory(){
		$name = '';
		$description = '';
		$id = '';

		if($x = $this->input->post('name')){
			$name = $x;
		}
		if($x = $this->input->post('categoryID')){
			$id = $x;
		}
		if($x = $this->input->post('description')){
			$description = $x;
		}
		$data = array(
			'name' => $name,
			'description' => $description
		);
		$result = $this->data_lib->updateMenuCategory($data, $id);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Menu Category successfully Updated','color'=>'green'));
			redirect(base_url('/backoffice/menuCategories'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/menuCategories'));
		}
	}

	public function deleteTestimonial($id=''){
		$result = $this->data_lib->deleteTestimonial($id);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Testimonial successfully Deleted','color'=>'green'));
			redirect(base_url('/backoffice/testimonials'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/testimonials'));
		}
	}

	public function deleteItem($id=''){
		$result = $this->data_lib->deleteItem($id);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Menu Item successfully Deleted','color'=>'green'));
			redirect(base_url('/backoffice/menuItems'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/menuItems'));
		}
	}

	public function deleteCategory($id=''){
		$result = $this->data_lib->deleteCategory($id);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Menu Category successfully Deleted','color'=>'green'));
			redirect(base_url('/backoffice/menuCategories'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/menuCategories'));
		}
	}

	public function deleteTeamMember($id=''){
		$result = $this->data_lib->deleteTeamMember($id);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Team Member successfully Deleted','color'=>'green'));
			redirect(base_url('/backoffice/manageTeam'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/manageTeam'));
		}
	}

	public function updateTeamDescription(){
		$description = '';

		if($x = $this->input->post('description')){
			$description = $x;
		}
		$description = addslashes($description);
		$result = $this->data_lib->updateTeamDescription($description);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Team description successfully Updated','color'=>'green'));
			redirect(base_url('/backoffice/manageTeam'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/manageTeam'));
		}
	}

	public function addTeamMember(){
		$name = '';
		$role = '';
		$description = '';
		if($x = $this->input->post('name')){
			$name = $x;
		}
		if($x = $this->input->post('role')){
			$role = $x;
		}
		if($x = $this->input->post('description')){
			$description = $x;
		}
		$role = stripslashes($role);
		$this->load->library('upload');
	 	 $config['upload_path'] = 'assets/images/team';
	 	 $config['allowed_types'] = 'gif|jpg|jpeg|png|JPG';
	 	 $config['max_size']	= '1000';
	 	 $config['max_width'] = '300';
	 	 $config['min_width'] = '270';
	 	 $config['max_height'] = '300';
	 	 $config['min_height'] = '270';
	 	 $this->upload->initialize($config);
	 	 $this->upload->do_upload('image');
	 	 $x = $this->upload->data();
	 	 $x['file_name'] = $x['file_name'];
	 	 $imageURL = 'assets/images/team/'.$x['file_name'];
		 $data = array(
			 'name' => $name,
			 'role' => $role,
			 'description' => $description,
			 'imageURL' => $imageURL
		 );
		 $result = $this->data_lib->addTeamMember($data);
		 if($result){
			 $this->session->set_flashdata('message', array('content'=>'Team Member successfully Added','color'=>'green'));
			 redirect(base_url('/backoffice/manageTeam'));
		 }
		 else{
			 $this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			 redirect(base_url('/backoffice/manageTeam'));
		 }
	}

	public function updateImage(){
	 $id = $this->input->post('imageID');
	 $minHeight = $this->input->post('minHeight');
	 $maxHeight = $this->input->post('maxHeight');
	 $minWidth = $this->input->post('minWidth');
	 $maxWidth = $this->input->post('maxWidth');
	 $this->load->library('upload');
	 $config['upload_path'] = 'assets/images/web';
	 $config['allowed_types'] = 'gif|jpg|jpeg|png|JPG';
	 $config['max_size']	= '1000';
	 $config['max_width'] = $maxWidth;
	 $config['min_width'] = $minWidth;
	 $config['max_height'] = $maxHeight;
	 $config['min_height'] = $minHeight;
	 $this->upload->initialize($config);
	 $this->upload->do_upload('image');
	 $x = $this->upload->data();
	 $x['file_name'] = $x['file_name'];
	 $imageURL = 'assets/images/web/'.$x['file_name'];
	 $result = $this->data_lib->updateImage($imageURL, $id);
	 if($result){
		 $this->session->set_flashdata('message', array('content'=>'Image successfully Updated','color'=>'green'));
		 redirect(base_url('/backoffice/manageImages'));
	 }
	 else{
		 $this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
		 redirect(base_url('/backoffice/manageImages'));
	 }
	}

	public function logout(){
		$this->session->set_userdata('user_data', false);
		$this->session->set_userdata('user_data', []);
		$this->session->sess_destroy();
		redirect(base_url('backoffice'));
	}

	public function markRead($id = ''){
		$result = $this->data_lib->markRead($id);
		if($result){
			$this->session->set_flashdata('message', array('content'=>'Contact Request Marked as Read','color'=>'green'));
			redirect(base_url('/backoffice/contactUs'));
		}
		else{
			$this->session->set_flashdata('message', array('content'=>'Something Went Wrong, Please Try Again','color'=>'red'));
			redirect(base_url('/backoffice/contactUs'));
		}
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
