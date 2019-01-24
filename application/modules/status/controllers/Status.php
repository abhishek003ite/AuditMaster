<?php

class Status extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Status_model');
        if(!$this->session->userdata('logged_in')){
            redirect('welcome', 'refresh');
        }
    }

    function addStatus()
    {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $this->load->view('common/header');
            $this->load->view('addStatus');
            $this->load->view('common/footer');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function addStatusFunc()
    {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data = $this->input->post();
                $users = array(
                    'status'  =>  $data['name'],
                );
                $this->Status_model->insert('tbl_status_master', $users);
                $this->session->set_flashdata('msg', 'Status created Successfully.');
                redirect('status/viewStatus', 'refresh');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function viewStatus()
    {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data['status'] = $this->Status_model->getStatus();
            $this->load->view('common/header');
            $this->load->view('viewStatus', $data);
            // $this->load->view('common/footer');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function editStatus($id) {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data['user'] = $this->Status_model->getStatusById($id);
            $this->load->view('common/header');
            $this->load->view('editStatus', $data);
            $this->load->view('common/footer');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function editStatusFunc($id) {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data = $this->input->post();
                $users = array(
                    'status'  =>  $data['name']
                );
                $this->Status_model->update(array('id' => $id), 'tbl_status_master', $users);
                $this->session->set_flashdata('msg', 'Status updated Successfully.');
                redirect('status/viewStatus', 'refresh');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function deleteStatus($id, $red) {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check) {
            if(!empty($id)) {
                $this->Status_model->delete(array('id' => $id), 'tbl_status_master');
                if($red == 'same') {
                    $this->session->set_flashdata('msg', 'Status deleted Successfully.');
                    redirect($_SERVER['HTTP_REFERER'], 'refresh');
                }
            }
        }
    }
}