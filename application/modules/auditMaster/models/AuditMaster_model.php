<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class AuditMaster_model extends CI_Model {
    
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
	
	public function get_accountants()
	{
	    $this->db->select('*');
	    $this->db->from('tbl_accountant');
	    $query = $this->db->get();
	    
	    $accountant = $query->result_array();
	    return $accountant;
	}
	
	public function get_status()
	{
	    $this->db->select('*');
	    $this->db->from('tbl_status_master');
	    $query = $this->db->get();
	    
	    $status = $query->result_array();
	    return $status;
	}
	
	public function get_work_status()
	{
	    $this->db->select('*');
	    $this->db->from('tbl_workStatus');
	    $query = $this->db->get();
	    
	    $workStatus = $query->result_array();
	    return $workStatus;
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
    
    function getAudits() {
        $this->db->select('*');
        $this->db->from('tbl_audit_master');
        $this->db->join('tbl_status_master', 'tbl_status_master.id = tbl_audit_master.statusId');
        $this->db->join('tbl_workStatus', 'tbl_workStatus.id = tbl_audit_master.workStatusId');
        $this->db->join('tbl_accountant', 'tbl_accountant.id = tbl_audit_master.accountantId');
        $query = $this->db->get();
        $users = $query->result_array();
        return $users;
    }
    
    function getAuditById($id) {
        $this->db->select('*');
        $this->db->from('tbl_audit_master');
        $this->db->join('tbl_status_master', 'tbl_status_master.id = tbl_audit_master.statusId');
        $this->db->join('tbl_workStatus', 'tbl_workStatus.id = tbl_audit_master.workStatusId');
        $this->db->join('tbl_accountant', 'tbl_accountant.id = tbl_audit_master.accountantId');
        $this->db->where('tbl_audit_master.id', $id);
        $query = $this->db->get();
        if($query->num_rows() > 0) {
            return $query->result_array();
        }else{
            return false;
        }
    }
}
