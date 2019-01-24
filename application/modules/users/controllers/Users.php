<?php

class Users extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        if(!$this->session->userdata('logged_in')){
            redirect('welcome', 'refresh');
        }
    }

    function addUser()
    {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data['roles'] = $this->User_model->get_roles();
            $this->load->view('common/header');
            $this->load->view('addUser', $data);
            $this->load->view('common/footer');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function addUserFunc()
    {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data = $this->input->post();
            $x = $this->do_upload1($_FILES);
            // print_r($x);
            if(isset($x['upload_data'])){
                $image = $x['upload_data'][0]['file_name'];
            }
            if($this->User_model->checkEmail($data['email'])){
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
                $this->User_model->insert('tbl_users', $users);
                $this->session->set_flashdata('msg', 'User registered Successfully.');
                redirect($_SERVER['HTTP_REFERER'], 'refresh');
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
    
    function viewUser()
    {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data['users'] = $this->User_model->getUsers();
            $this->load->view('common/header');
            $this->load->view('viewUser', $data);
            // $this->load->view('common/footer');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function editUser($id) {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data['user'] = $this->User_model->getUserById($id);
            $data['roles'] = $this->User_model->get_roles();
            $this->load->view('common/header');
            $this->load->view('editUser', $data);
            $this->load->view('common/footer');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function editUserFunc($id) {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data = $this->input->post();
            $x = $this->do_upload1($_FILES);
            // print_r($x);
            if(isset($x['upload_data'])){
                $image = $x['upload_data'][0]['file_name'];
            }
                $users = array(
                    'name'  =>  $data['name'],
                    'email' =>  $data['email'],
                    'mobile'    =>  $data['mobile'],
                    'roleId'    =>  $data['roleId'],
                    'profilePic'    =>  $image,
                    'createdBy' =>  $userDetail['id']
                );
                $this->User_model->update(array('userId' => $id), 'tbl_users', $users);
                $this->session->set_flashdata('msg', 'User updated Successfully.');
                redirect($_SERVER['HTTP_REFERER'], 'refresh');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function deleteUser($id, $red) {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check) {
            if(!empty($id)) {
                $this->User_model->delete(array('userId' => $id), 'tbl_users');
                if($red == 'same') {
                    $this->session->set_flashdata('msg', 'User deleted Successfully.');
                    redirect($_SERVER['HTTP_REFERER'], 'refresh');
                }
            }
        }
    }
}