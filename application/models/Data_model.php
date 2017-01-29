<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function login($username,$password){
		$result = $this->db->get_where('admin', array('username' => $username,'password' => $password), 1, 0);
		if ($result->num_rows()>0) {
			return true;
		}
		return false;
	}

	public function changePassword($password, $username){
		$query = "UPDATE admin SET password='$password' WHERE username='$username'";
		return $this->db->query($query);
	}

	public function updateAboutParagraph($content, $paragraph){
		$query = "UPDATE aboutContent SET content='$content' WHERE type='$paragraph'";
		return $this->db->query($query);
	}

	public function updateTeamDescription($description){
		$id = 1;
		$query = "UPDATE teamContent SET content='$description' WHERE id='$id'";
		return $this->db->query($query);
	}

	public function markRead($id){
		$acknowledge = 1;
		$query = "UPDATE contactUs SET acknowledge='$acknowledge' WHERE id='$id'";
		return $this->db->query($query);
	}

	public function updateMenuMobile($mobile, $id){
		$query = "UPDATE menuContact SET contact='$mobile' WHERE id='$id'";
		return $this->db->query($query);
	}

	public function updateHeaderContent($data){
		$id = '1';
		$this->db->where('id', $id);
		return $this->db->update('headerContent', $data);
	}

	public function getMenuMobile(){
		$id = '1';
		$result = $this->db->get_where('menuContact', array('id' => $id));
		return $result->result_array();
	}

	public function updateFooterContent($data){
		$id = '1';
		$this->db->where('id', $id);
		return $this->db->update('footerContent', $data);
	}

	public function updateMenuItem($data, $itemID){
		$this->db->where('itemID', $itemID);
		return $this->db->update('menuItems', $data);
	}

	public function updateTeamMember($data, $id){
		$this->db->where('id', $id);
		return $this->db->update('team', $data);
	}

	public function updateTeamMemberImage($data, $id){
		$this->db->where('id', $id);
		return $this->db->update('team', $data);
	}

	public function updateMenuCategory($data, $id){
		$this->db->where('id', $id);
		return $this->db->update('menuCategories', $data);
	}

	public function updateTestimonial($data, $id){
		$this->db->where('id', $id);
		return $this->db->update('testimonials', $data);
	}

	public function updateHomeContent($data){
		$id = 1;
		$this->db->where('id', $id);
		return $this->db->update('homeContent', $data);
	}

	public function updateMenuItemImage($data, $id){
		$this->db->where('itemID', $id);
		return $this->db->update('menuItems', $data);
	}

	public function updateImage($imageURL, $id){
		$query = "UPDATE images SET imageURL='$imageURL' WHERE id='$id'";
		return $this->db->query($query);
	}

	public function getUserPassword($username){
		$result = $this->db->get_where('admin', array('username' => $username));
		return $result->result_array();
	}

	public function getContactMessage($id){
		$result = $this->db->get_where('contactUs', array('id' => $id));
		return $result->result_array();
	}

	public function deleteTestimonial($id){
		$this->db->where('id', $id);
		return $this->db->delete('testimonials');
	}

	public function deleteItem($id){
		$this->db->where('itemID', $id);
		return $this->db->delete('menuItems');
	}

	public function deleteCategory($id){
		$this->db->where('id', $id);
		return $this->db->delete('menuCategories');
	}

	public function deleteTeamMember($id){
		$this->db->where('id', $id);
		return $this->db->delete('team');
	}

	public function getTeamContent(){
		$id = 1;
		$result = $this->db->get_where('teamContent', array('id' => $id));
		return $result->result_array();
	}

	public function getTeam(){
		$result = $this->db->get('team');
		return $result->result_array();
	}

	public function getCategoryData($id){
		$result = $this->db->get_where('menuCategories', array('id' => $id));
		return $result->result_array();
	}

	public function emailExist($email){
		$result = $this->db->get_where('newsletters', array('email' => $email));
		return $result->result_array();
	}

	public function getItemData($id){
		$result = $this->db->get_where('menuItems', array('itemID' => $id));
		return $result->result_array();
	}

	public function getTestimonial($id){
		$result = $this->db->get_where('testimonials', array('id' => $id));
		return $result->result_array();
	}

	public function getTeamMember($id){
		$result = $this->db->get_where('team', array('id' => $id));
		return $result->result_array();
	}

	public function getTestimonials(){
		$this->db->from('testimonials');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getContactUs(){
		$this->db->from('contactUs');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getImages(){
		$this->db->from('images');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getSubscribers(){
		$this->db->from('newsletters');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getAboutContent(){
		$this->db->from('aboutContent');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getHomeContent(){
		$this->db->from('homeContent');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getHeaderContent(){
		$this->db->from('headerContent');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getFooterContent(){
		$this->db->from('footerContent');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function addMenuCategory($data){
		return $this->db->insert('menuCategories',$data);
	}

	public function contactUs($data){
		return $this->db->insert('contactUs',$data);
	}

	public function subscribeNewsletter($data){
		return $this->db->insert('newsletters',$data);
	}

	public function addMenuItem($data){
		return $this->db->insert('menuItems',$data);
	}

	public function addTestimonial($data){
		return $this->db->insert('testimonials',$data);
	}

	public function addTeamMember($data){
		return $this->db->insert('team',$data);
	}

	public function getMenuCategories(){
		$this->db->from('menuCategories');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getMenuItems(){
		$query = "SELECT menuItems.itemID, menuItems.description AS itemDescription, menuItems.name AS itemName, menuItems.imageURL, menuCategories.name AS category, menuCategories.id AS categoryID, menuItems.startsFrom FROM menuItems JOIN menuCategories ON menuItems.categoryID=menuCategories.id";
		$result = $this->db->query($query);
		return $result->result_array();
	}

}
