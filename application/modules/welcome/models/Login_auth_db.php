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
	
	function ForgotPassword($email)
	{
	    $this->db->select('email');
        $this->db->from('tbl_users');
        $this->db->where('email', $email);
        $query=$this->db->get();
        return $query->row_array();
	}
	
	public function sendpassword($data1)
    {
        $data = new stdClass();
        $email = $data1['email'];
        $query1=$this->db->query("SELECT *  from tbl_users where email = '".$email."' ");
        $row=$query1->result_array();
        if ($query1->num_rows()>0)
    {
            $passwordplain = "";
            $passwordplain  = rand(999999999,9999999999);
            $newpass['password'] = md5($passwordplain);
            $this->db->where('email', $email);
            $this->db->update('tbl_users', $newpass);
            $mail_message='Dear '.$row[0]['name'].','. "\r\n";
            $mail_message.='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
            $mail_message.='<br>Please Update your password.';
            $mail_message.='<br>Thanks & Regards';
            $mail_message.='<br>Development Team';
            $mail_message.='<br>Audit System';
            $this->load->library('email');
            $this->email->from('info@auditsystem.com', 'Audit System');
            $this->email->to($email);
            // $this->email->cc('another@another-example.com');
            // $this->email->bcc('them@their-example.com');
            
            $this->email->subject('Forgot Password');
            $this->email->message($mail_message);
            
            // $this->email->send();
            if (!$this->email->send()) {
    
                // echo "<script>alert('msg','Failed to send password, please try again!')</script>";
                // $this->session->set_flashdata('msg', 'Failed to send password, please try again!');
                $data->error = 'Failed to send password, please try again!';
            } else {
    
                // echo "<script>alert('msg','Password sent to your email!')</script>";
                // $this->session->set_flashdata('msg', 'Password sent to your email!');
                $data->error = 'Password sent to your email!';
            }
            $this->load->view('login', $data);
        }
        else
        {
    
            // echo "<script>alert('msg','Email not found try again!')</script>";
            // $this->session->set_flashdata('msg', 'Email not found try again!');
            $data->error = 'Email not found try again!';
            $this->load->view('login', $data);
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
			'profilePic'    => $query->row('profilePic'),
			'createdBy'	=> $query->row('createdBy')
			);
		
		return $user_data;
		
	}
	
}