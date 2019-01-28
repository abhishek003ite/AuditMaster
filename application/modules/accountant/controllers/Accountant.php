<?php

class Accountant extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Accountant_model');
        if(!$this->session->userdata('logged_in')){
            redirect('welcome', 'refresh');
        }
    }

    function addAccountant()
    {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data['roles'] = $this->Accountant_model->get_roles();
            $this->load->view('common/header');
            $this->load->view('addAccountant', $data);
            $this->load->view('common/footer');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function addAccountantFunc()
    {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data = $this->input->post();
            $x = $this->do_upload1($_FILES);
            if(isset($x['upload_data'])){
                $image = $x['upload_data'][0]['file_name'];
            }
                if($this->Accountant_model->checkEmail($data['email'])){
                $this->session->set_flashdata('msg', 'Email Already Exist.');
                redirect($_SERVER['HTTP_REFERER'], 'refresh');
            }else{
                $users = array(
                    'name'  =>  $data['name'],
                    'email' =>  $data['email'],
                    'password'  =>  md5($data['password']),
                    'mobile'    =>  $data['mobile'],
                    'roleId'    =>  $data['roleId'],
                    'profilePic'    =>  $image,
                    'createdBy' =>  $userDetail['id']
                );
                $this->Accountant_model->insert('tbl_users', $users);
                $userId = $this->db->insert_id();
                
                $accountant = array(
                    'accountantName'    =>  $data['name'],
                    'address'           =>  $data['address'],
                    'email'             =>  $data['email'],
                    'phone'             =>  $data['mobile'],
                    'userId'            =>  $userId
                );
                $this->Accountant_model->insert('tbl_accountant', $accountant);
                
                $this->session->set_flashdata('msg', 'Accountant registered Successfully.');
                redirect('accountant/viewAccountant', 'refresh');
            }
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    public function do_upload1($files){
        $config['upload_path'] = 'assets/app/media/img/users';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|jpeg|GIF|JPG|PNG|PDF|DOC|DOCX|JPEG';
        $config['encrypt_name'] = TRUE;
        //$config['max_size'] = '100000';
        $this->load->library('upload', $config);
        foreach ($files as $key => $val) {
            if (!$this->upload->do_upload($key)) {
                $data = $this->upload->display_errors();
                var_dump($data);die;
            } else {
                $data['upload_data'][] = $this->upload->data();
            }
        }
        return $data;
    }
    
    function viewAccountant()
    {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data['status'] = $this->Accountant_model->getAccountant();
            $this->load->view('common/header');
            $this->load->view('viewAccountant', $data);
            // $this->load->view('common/footer');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function editAccountant($id) {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data['user'] = $this->Accountant_model->getStatusById($id);
            $this->load->view('common/header');
            $this->load->view('editAccountant', $data);
            $this->load->view('common/footer');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function editAccountantFunc($id) {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data = $this->input->post();
                $users = array(
                    'status'  =>  $data['name']
                );
                $this->Accountant_model->update(array('id' => $id), 'tbl_accountant', $users);
                $this->session->set_flashdata('msg', 'Status updated Successfully.');
                redirect('accountant/viewAccountant', 'refresh');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function deleteAccountant($id, $red) {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check) {
            if(!empty($id)) {
                $this->Accountant_model->delete(array('id' => $id), 'tbl_accountant');
                if($red == 'same') {
                    $this->session->set_flashdata('msg', 'Status deleted Successfully.');
                    redirect($_SERVER['HTTP_REFERER'], 'refresh');
                }
            }
        }
    }
}