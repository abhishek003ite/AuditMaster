<?php

class Welcome extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_auth_db');
        // if(!$this->session->userdata('logged_in')){
        //     redirect('welcome', 'refresh');
        // }
    }

    function index()
    {
        $this->load->view('login');
    }
    
    public function logout() {
        $this->session->unset_userdata('user_data_session');
		$this->session->set_userdata('logged_in', false);
		redirect(base_url().'welcome/index');
    }
    
    public function forgotPassword()
    {
        $data = new stdClass();
        $email = $this->input->post('email');
        $findEmail = $this->Login_auth_db->ForgotPassword($email);
        if ($findEmail) {
            $this->Login_auth_db->sendpassword($findEmail);
        } else {
            // echo "<script>alert(' $email not found, please enter correct email id')</script>";
            $data->error = $email.' not found, please enter correct email id';
            $this->load->view('login', $data);
        }
    }
    
    public function auth_login() 
    {
        $data = new stdClass();
        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() == false) {
            $this->load->view('login');
        }else{
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            
            if($this->Login_auth_db->login($email, $password)) {
                $user_data = $this->Login_auth_db->get_user_data($email);
                
                $user_detail = array(
                    'id'    =>  $user_data['id'],
					'name'	=> $user_data['name'],
					'email'	=> $user_data['email'],
					'roleId'	=> $user_data['roleId'],
					'profilePic'    => $user_data['profilePic'],
					'createdBy'	=> $user_data['createdBy']
				);
				$this->session->set_userdata('user_data_session', $user_detail);
				$this->session->set_userdata('logged_in', true);
				
				$data_to_view['selected'] = 'dashboard';
				$data_to_view['content'] = 'dashboard';
				redirect('dashboard/index');
            }else{
                // login failed
				$data->error = 'Wrong username or password.';
				
				// send error to the view
				$this->load->view('login', $data);
            }
        }
    }
}