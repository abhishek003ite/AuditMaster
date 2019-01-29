<?php

class AuditMaster extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('AuditMaster_model');
        if(!$this->session->userdata('logged_in')){
            redirect('welcome', 'refresh');
        }
    }

    function addAudit()
    {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data['accountants'] = $this->AuditMaster_model->get_accountants();
            $data['status'] = $this->AuditMaster_model->get_status();
            $data['workStatus'] = $this->AuditMaster_model->get_work_status();
            $this->load->view('common/header');
            $this->load->view('addAuditMaster', $data);
            $this->load->view('common/footer');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function addAuditFormView()
    {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data['accountants'] = $this->AuditMaster_model->get_accountants();
            $data['status'] = $this->AuditMaster_model->get_status();
            $data['workStatus'] = $this->AuditMaster_model->get_work_status();
            $this->load->view('common/header');
            $this->load->view('addAuditMaster1', $data);
            $this->load->view('common/footer');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function addAuditMasterFunc()
    {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data = $this->input->post();
                $users = array(
                    'statusId'                  =>  $data['status'],
                    'workStatusId'              =>  $data['workStatus'],
                    'engagementDate'            =>  date('Y-m-d', strtotime($data['engagementDate'])),
                    'nameOfSMSF'                =>  $data['nameOfSMSF'],
                    'ABN'                       =>  $data['ABN'],
                    'ATTN'                      =>  $data['attn'],
                    'nameOfTrustee1'            =>  $data['nameOfTrustee1'],
                    'nameOfTrustee2'            =>  $data['nameOfTrustee2'],
                    'nameOfTrustee3'            =>  $data['nameOfTrustee3'],
                    'nameOfTrustee4'            =>  $data['nameOfTrustee4'],
                    'nameOfTrustee5'            =>  $data['nameOfTrustee5'],
                    'nameOfTrustee6'            =>  $data['nameOfTrustee6'],
                    'nameOfTrCo'                =>  $data['nameOfTRCo'],
                    'ACN'                       =>  $data['ACN'],
                    'forTheYearEnded'           =>  $data['forTheYearEnded'],
                    'accountantId'              =>  $data['nameOfAccountant'],
                    'accountantAddress'         =>  $data['addressAccountant'],
                    'invoiceAmountGross'        =>  $data['invoiceAmountGross'],
                    'invoiceGST'                =>  $data['invoiceAmountGross']*0.1,
                    'otherExpASICSearch'        =>  $data['otherASICSearch'],
                    'otherExpTitleSearch'       =>  $data['otherExpTitleSearch'],
                    'otherExpOtherSpecify'      =>  $data['otherExpOtherSpecify'],
                    'invoiceTotal'              =>  $data['invoiceAmountGross'] + ($data['invoiceAmountGross'] *0.1)+$data['otherASICSearch']+$data['otherExpTitleSearch']+$data['otherExpOtherSpecify'],
                    'previousAuditorName'       =>  $data['previousAuditorName'],
                    'previousAuditorCompany'    =>  $data['peviousAuditorCompany'],
                    'previousAuditorEmail'      =>  $data['previousAuditorEmail'],
                    'auditorNotes'               =>  $data['auditorNote']
                );
                $this->AuditMaster_model->insert('tbl_audit_master', $users);
                $this->session->set_flashdata('msg', 'Audit Master registered Successfully.');
                redirect('auditMaster/viewAudit', 'refresh');
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
    
    function viewAudit()
    {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data['users'] = $this->AuditMaster_model->getAudits();
            $this->load->view('common/header');
            $this->load->view('viewAuditMaster', $data);
            // $this->load->view('common/footer');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function editAudit($id) {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data['auditMaster'] = $this->AuditMaster_model->getAuditById($id);
            $data['accountants'] = $this->AuditMaster_model->get_accountants();
            $data['status'] = $this->AuditMaster_model->get_status();
            $data['workStatus'] = $this->AuditMaster_model->get_work_status();
            $this->load->view('common/header');
            $this->load->view('editAuditMaster', $data);
            $this->load->view('common/footer');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function editAuditMasterFunc($id) {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data = $this->input->post();
            $data = $this->input->post();
                $users = array(
                    'statusId'                  =>  $data['status'],
                    'workStatusId'              =>  $data['workStatus'],
                    'engagementDate'            =>  date('Y-m-d', strtotime($data['engagementDate'])),
                    'nameOfSMSF'                =>  $data['nameOfSMSF'],
                    'ABN'                       =>  $data['ABN'],
                    'ATTN'                      =>  $data['attn'],
                    'nameOfTrustee1'            =>  $data['nameOfTrustee1'],
                    'nameOfTrustee2'            =>  $data['nameOfTrustee2'],
                    'nameOfTrustee3'            =>  $data['nameOfTrustee3'],
                    'nameOfTrustee4'            =>  $data['nameOfTrustee4'],
                    'nameOfTrustee5'            =>  $data['nameOfTrustee5'],
                    'nameOfTrustee6'            =>  $data['nameOfTrustee6'],
                    'nameOfTrCo'                =>  $data['nameOfTRCo'],
                    'ACN'                       =>  $data['ACN'],
                    'forTheYearEnded'           =>  $data['forTheYearEnded'],
                    'accountantId'              =>  $data['nameOfAccountant'],
                    'accountantAddress'         =>  $data['addressAccountant'],
                    'invoiceAmountGross'        =>  $data['invoiceAmountGross'],
                    'invoiceGST'                =>  $data['invoiceAmountGross']*0.1,
                    'otherExpASICSearch'        =>  $data['otherASICSearch'],
                    'otherExpTitleSearch'       =>  $data['otherExpTitleSearch'],
                    'otherExpOtherSpecify'      =>  $data['otherExpOtherSpecify'],
                    'invoiceTotal'              =>  $data['invoiceAmountGross'] + ($data['invoiceAmountGross'] *0.1)+$data['otherASICSearch']+$data['otherExpTitleSearch']+$data['otherExpOtherSpecify'],
                    'previousAuditorName'       =>  $data['previousAuditorName'],
                    'previousAuditorCompany'    =>  $data['peviousAuditorCompany'],
                    'previousAuditorEmail'      =>  $data['previousAuditorEmail'],
                    'auditorNotes'               =>  $data['auditorNote']
                );
            $this->AuditMaster_model->update(array('id' => $id), 'tbl_audit_master', $users);
            $this->session->set_flashdata('msg', 'Audit Master updated Successfully.');
            redirect('auditMaster/viewAudit', 'refresh');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function deleteAudit($id, $red) {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check) {
            if(!empty($id)) {
                $this->AuditMaster_model->delete(array('id' => $id), 'tbl_audit_master');
                if($red == 'same') {
                    $this->session->set_flashdata('msg', 'Audit Master deleted Successfully.');
                    redirect($_SERVER['HTTP_REFERER'], 'refresh');
                }
            }
        }
    }
}