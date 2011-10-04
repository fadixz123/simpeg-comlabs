<?php
    class Con_login_admin extends CI_Controller{
        function __construct() {
            parent::__construct();
        }
        
        function index(){
            $this->form_login();
        }
        
        function form_login(){
            $data['title']='Login Administrator';
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/form_login');
            $this->load->view('admin/admin_footer_view');
        }
        
        function proses_login(){
            $username = $_POST['username'];
            $password = md5($_POST['password']);
        }
    }
?>
