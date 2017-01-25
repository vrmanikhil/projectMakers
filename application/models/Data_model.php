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

	public function markRead($id){
		$acknowledge = 1;
		$query = "UPDATE contactUs SET acknowledge='$acknowledge' WHERE id='$id'";
		return $this->db->query($query);
	}

	public function updateHeaderContent($data){
		$id = '1';
		$this->db->where('id', $id);
		return $this->db->update('headerContent', $data);
	}

	public function updateFooterContent($data){
		$id = '1';
		$this->db->where('id', $id);
		return $this->db->update('footerContent', $data);
	}

	public function getUserPassword($username){
		$result = $this->db->get_where('admin', array('username' => $username));
		return $result->result_array();
	}

	public function getContactMessage($id){
		$result = $this->db->get_where('contactUs', array('id' => $id));
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

	public function getAboutContent(){
		$this->db->from('aboutContent');
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

}
