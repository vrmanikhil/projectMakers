<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_lib {

	public function login($username,$password)
	{
		$CI =& get_instance();
		$CI->load->model('data_model','home');
		$result = $CI->home->login($username,$password);
		if ($result) {
			$data = array(
				'loggedIn' => true,
				'username' => $username
				);
			$CI->session->set_userdata('user_data', $data);
			return 1;
		}
		return 0;
	}

	public function auth(){
		$CI = & get_instance();
		$CI->load->library('session');
		$data = $CI->session->userdata('user_data');
		if (isset($data['loggedIn']) && $data['loggedIn']) {
			return 1;
		}
		return 0;
	}

	public function changePassword($password, $username){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->changePassword($password, $username);
	}

	public function updateAboutParagraph($content, $paragraph){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->updateAboutParagraph($content, $paragraph);
	}

	public function updateMenuMobile($mobile, $id){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->updateMenuMobile($mobile, $id);
	}

	public function updateHeaderContent($data){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->updateHeaderContent($data);
	}

	public function updateFooterContent($data){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->updateFooterContent($data);
	}

	public function updateMenuItem($data, $itemID){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->updateMenuItem($data, $itemID);
	}

	public function updateTeamMember($data, $id){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->updateTeamMember($data, $id);
	}

	public function updateTeamMemberImage($data, $id){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->updateTeamMemberImage($data, $id);
	}

	public function updateTeamDescription($description){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->updateTeamDescription($description);
	}

	public function deleteTestimonial($id){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->deleteTestimonial($id);
	}

	public function deleteItem($id){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->deleteItem($id);
	}

	public function deleteCategory($id){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->deleteCategory($id);
	}

	public function deleteTeamMember($id){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->deleteTeamMember($id);
	}

	public function updateMenuCategory($data, $id){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->updateMenuCategory($data, $id);
	}

	public function updateTestimonial($data, $id){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->updateTestimonial($data, $id);
	}

	public function updateHomeContent($data){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->updateHomeContent($data);
	}

	public function updateImage($imageURL, $id){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->updateImage($imageURL, $id);
	}

	public function getUserPassword($username){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getUserPassword($username);
	}

	public function getTestimonials(){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getTestimonials();
	}

	public function getTestimonial($id){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getTestimonial($id);
	}

	public function getTeamMember($id){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getTeamMember($id);
	}

	public function getMenuMobile(){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getMenuMobile();
	}

	public function getImages(){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getImages();
	}

	public function getSubscribers(){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getSubscribers();
	}

	public function getContactUs(){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getContactUs();
	}

	public function getAboutContent(){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getAboutContent();
	}

	public function getHomeContent(){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getHomeContent();
	}

	public function getTeamContent(){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getTeamContent();
	}

	public function getTeam(){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getTeam();
	}

	public function getContactMessage($id){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getContactMessage($id);
	}

	public function getCategoryData($id){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getCategoryData($id);
	}

	public function getItemData($id){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getItemData($id);
	}

	public function markRead($id){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->markRead($id);
	}

	public function addMenuCategory($data){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->addMenuCategory($data);
	}

	public function addMenuItem($data){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->addMenuItem($data);
	}

	public function addTeamMember($data){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->addTeamMember($data);
	}

	public function addTestimonial($data){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->addTestimonial($data);
	}

	public function getMenuCategories(){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getMenuCategories();
	}

	public function getMenuItems(){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getMenuItems();
	}

	public function getHeaderContent(){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getHeaderContent();
	}

	public function getFooterContent(){
		$CI = &get_instance();
		$CI->load->model('data_model','dataModel');
		return $CI->dataModel->getFooterContent();
	}

}
