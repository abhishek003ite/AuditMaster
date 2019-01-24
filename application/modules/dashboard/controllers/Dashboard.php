<?php

class Dashboard extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('Login_auth_db');
        if(!$this->session->userdata('logged_in')){
            redirect('welcome', 'refresh');
        }
    }

    function index()
    {
        $this->load->view('common/header');
        $this->load->view('dashboard');
        $this->load->view('common/footer');
    }
    
    
}