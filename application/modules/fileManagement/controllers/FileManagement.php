<?php

class FileManagement extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        require_once APPPATH.'libraries/php_file_tree.php';
    }

    function index()
    {
        // echo $_SERVER['DOCUMENT_ROOT'];
        // echo php_file_tree($_SERVER['DOCUMENT_ROOT']."/fileManager", "http://example.com/?file=[link]/");
        $this->load->view('common/header');
        $this->load->view('fileview');
        $this->load->view('common/footer');
    }
    
    function viewFiles() 
    {
        
    }
}