<?php

class WorkStatus extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Status_model');
        if(!$this->session->userdata('logged_in')){
            redirect('welcome', 'refresh');
        }
    }

    function addWorkStatus()
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
    
    function addWorkStatusFunc()
    {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data = $this->input->post();
                $users = array(
                    'workStatus'  =>  $data['name'],
                );
                $this->Status_model->insert('tbl_workStatus', $users);
                $this->session->set_flashdata('msg', 'Status created Successfully.');
                redirect('workStatus/viewWorkStatus', 'refresh');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function viewWorkStatus()
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
    
    function editWorkStatus($id) {
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
    
    function editWorkStatusFunc($id) {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data = $this->input->post();
                $users = array(
                    'workStatus'  =>  $data['name']
                );
                $this->Status_model->update(array('id' => $id), 'tbl_workStatus', $users);
                $this->session->set_flashdata('msg', 'Status updated Successfully.');
                redirect('workStatus/viewWorkStatus', 'refresh');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function deleteWorkStatus($id, $red) {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check) {
            if(!empty($id)) {
                $this->Status_model->delete(array('id' => $id), 'tbl_workStatus');
                if($red == 'same') {
                    $this->session->set_flashdata('msg', 'Status deleted Successfully.');
                    redirect($_SERVER['HTTP_REFERER'], 'refresh');
                }
            }
        }
    }
}