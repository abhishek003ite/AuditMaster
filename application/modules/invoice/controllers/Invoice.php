<?php

class Invoice extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Invoice_model');
        if(!$this->session->userdata('logged_in')){
            redirect('welcome', 'refresh');
        }
    }

    function addInvoice()
    {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data['totalInvoice'] = $this->Invoice_model->invoice_count();
            $this->load->view('common/header');
            $this->load->view('addInvoice', $data);
            $this->load->view('common/footer');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function addInvoiceFunc()
    {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data = $this->input->post();
                $users = array(
                    'invoiceNumber' =>  'audit / '.date('Y').' / '.$data['invoiceNumber'],
                    'invoiceDate'   =>  $data['invoiceDate'],
                    'invoiceTo'     =>  $data['invoiceTo'],
                    'address'       =>  $data['address'],
                    'item'          =>  $data['item'],
                    'description'   =>  $data['description'],
                    'amount'        =>  $data['amount'],
                    'invoiceGST'    =>  $data['amount'] * 0.1,
                    'otherExpASICSearch'    =>  $data['otherExpASICSearch'],
                    'otherExpTitleSearch'   =>  $data['otherExpTitleSearch'],
                    'otherExpOtherSpecify'  =>  $data['otherExpOtherSpecify'],
                    'invoiceTotal'          =>  $data['amount'] + ($data['amount'] * 0.1) + $data['otherExpASICSearch'] + $data['otherExpTitleSearch'] + $data['otherExpOtherSpecify']
                );
                $this->Invoice_model->insert('tbl_invoices', $users);
                $this->session->set_flashdata('msg', 'Invoice created Successfully.');
                redirect($_SERVER['HTTP_REFERER'], 'refresh');
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
    
    function viewInvoice()
    {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data['users'] = $this->Invoice_model->getInvoices();
            $this->load->view('common/header');
            $this->load->view('viewInvoices', $data);
            // $this->load->view('common/footer');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function editInvoice($id) {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data['user'] = $this->Invoice_model->getInvoiceById($id);
            $data['totalInvoice'] = $this->Invoice_model->invoice_count();
            // $data['roles'] = $this->Invoice_model->get_roles();
            $this->load->view('common/header');
            $this->load->view('editInvoice', $data);
            $this->load->view('common/footer');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function editInvoiceFunc($id) {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check){
            $data = $this->input->post();
                $users = array(
                    'invoiceDate'   =>  $data['invoiceDate'],
                    'invoiceTo'     =>  $data['invoiceTo'],
                    'address'       =>  $data['address'],
                    'item'          =>  $data['item'],
                    'description'   =>  $data['description'],
                    'amount'        =>  $data['amount'],
                    'invoiceGST'    =>  $data['amount'] * 0.1,
                    'otherExpASICSearch'    =>  $data['otherExpASICSearch'],
                    'otherExpTitleSearch'   =>  $data['otherExpTitleSearch'],
                    'otherExpOtherSpecify'  =>  $data['otherExpOtherSpecify'],
                    'invoiceTotal'          =>  $data['amount'] + ($data['amount'] * 0.1) + $data['otherExpASICSearch'] + $data['otherExpTitleSearch'] + $data['otherExpOtherSpecify']
                );
                $this->Invoice_model->update(array('id' => $id), 'tbl_invoices', $users);
                $this->session->set_flashdata('msg', 'Invoice updated Successfully.');
                redirect($_SERVER['HTTP_REFERER'], 'refresh');
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function genInvoice() {
        $this->load->view('common/header');
        $this->load->view('common/pdf/generatePdf');
        $this->load->view('common/footer');
    }
    
    function deleteInvoice($id, $red) {
        $check = $this->session->userdata('logged_in');
        $userDetail = $this->session->userdata('user_data_session');
        if($check) {
            if(!empty($id)) {
                $this->Invoice_model->delete(array('id' => $id), 'tbl_invoices');
                if($red == 'same') {
                    $this->session->set_flashdata('msg', 'Invoice deleted Successfully.');
                    redirect($_SERVER['HTTP_REFERER'], 'refresh');
                }
            }
        }
    }
}