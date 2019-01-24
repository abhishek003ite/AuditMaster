<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Login_auth_db extends CI_Model {
	
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	function login($username, $password) {
		
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('email', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get()->row();
		
		if (!empty($query)) {
			
			return true;
			
		} else {
			
			return false;
			
		}
		
	}
	
	function get_user_data($username) {
		
		//$this->load->library('session');
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('email', $username);	
		$query = $this->db->get();
		
		$user_data = array(
		    'id'    =>  $query->row('userId'),
			'name'	=> $query->row('name'),
			'email' => $query->row('email'),
			'roleId'	=> $query->row('roleId'),
			'createdBy'	=> $query->row('createdBy')
			);
		
		return $user_data;
		
	}
	
}