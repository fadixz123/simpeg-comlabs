<?php
    class Con_data_pegawai extends CI_Controller{
        
        function __construct() {
            parent::__construct();
            $this->load->model('model_data_pegawai');
        }
        
        function index(){
            $this->list_all();
        }
        
        function list_all(){
            $all_pegawai = $this->model_data_pegawai->selectAll();
            if($all_pegawai->num_rows()==0){
                echo 'Masih kosong';
            }else{
                foreach($all_pegawai->result() as $pegawai){
                    echo $pegawai->nama;
                }
            }
        }
    }
?>
