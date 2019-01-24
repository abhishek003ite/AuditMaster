<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Status_model extends CI_Model {
    
    public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	public function get_roles()
	{
	    $this->db->select('*');
		$this->db->from('tbl_roles');
		$query = $this->db->get();
		
		$roles_data = $query->result_array();
		return $roles_data;
	}
	
	function insert($table,$data){
        $this->db->insert($table,$data);
    }
    
    function update($w,$table,$data){
        if(!empty($w)){
            foreach($w as $k => $val){
                $this->db->where($k, $val);
            }
        }
        //var_dump($data);
        $this->db->update($table,$data);
    }
    
    public function delete($w,$table){
        foreach($w as $key=>$val)
        {
            $this->db->where($key, $val);
        }
        $this->db->delete($table);
    }
    
    function checkEmail($email) {
        $this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('email', $email);	
		$query = $this->db->get();
		if($query->num_rows() > 0){
		    return true;
		}else{
		    return false;
		}
    }
    
    function getStatus() {
        $this->db->select('*');
        $this->db->from('tbl_workStatus');
        $query = $this->db->get();
        $users = $query->result_array();
        return $users;
    }
    
    function getStatusById($id) {
        $this->db->select('*');
        $this->db->from('tbl_workStatus');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if($query->num_rows() > 0) {
            return $query->result_array();
        }else{
            return false;
        }
    }
}
