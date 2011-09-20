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
                $display['content'] = 'Masih kosong';
            }else{
                $this->load->library('table');
                $this->table->set_template(array('table_open' => '<table align="center" width="80%" border="1" cellpadding="2" cellspacing="2">'));
                $this->table->set_heading('No', 'Nama', 'Status', 'Golongan','Aksi');
                $i=1;
                foreach($all_pegawai->result() as $pegawai){
                    $this->table->add_row(
                            $i,
                            anchor(base_url() . 'admin/con_data_pegawai/view/'.$pegawai->nip,$pegawai->nama),
                            $pegawai->status,
                            $pegawai->golongan,
                            anchor(base_url() . 'admin/con_data_pegawai/edit/'.$pegawai->nip,'Edit').
                            ' | '.
                            anchor(base_url() . 'admin/con_data_pegawai/delete/'.$pegawai->nip,'Delete')
                        );
                    $i++;
                }
                $display['content']=$this->table->generate();
            }
            $data['title']='Daftar Pegawai';
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/list_pegawai',$display);
            $this->load->view('admin/admin_footer_view');
        }
    }
?>
