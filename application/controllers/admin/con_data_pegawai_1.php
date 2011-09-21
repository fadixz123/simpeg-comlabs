<?php
    class Con_data_pegawai extends CI_Controller{
        
        function __construct() {
            parent::__construct();
            $this->load->model('model_data_pegawai');
            $this->load->model('model_data_pribadi');
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
                            anchor(base_url() . 'admin/con_data_pegawai/warning_delete/'.$pegawai->nip,'Delete')
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
        
        function warning_delete($nip){
            $data['title']='WARNING!!';
            $display['content']=$nip;
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/warning_delete_pegawai',$display);
            $this->load->view('admin/admin_footer_view');
        }
        
        function delete($nip){
            $this->model_data_pegawai->deleteByNIP($nip);
        }
        
        function edit($nip=''){
            
            if($nip!=''){
                $array_data = $this->model_data_pegawai->selectByNIP($nip)->row();
                
                $display['mode']='edit';
                $display['nip']=$array_data->nip;
                $display['nama']=$array_data->nama;
                $display['tgl_capeg']=$array_data->tgl_angkat_capeg;
                $display['tgl_peg']=$array_data->tgl_angkat_peg;
                $display['tgl_jabat']=$array_data->tgl_menjabat;
                $display['status']=$array_data->status;
                $display['golongan']=$array_data->golongan;
                
                $data['title'] = 'Edit data pegawai';
            }else{
                $display['mode']='tambah';
                $display['nip']='';
                $display['nama']='';
                $display['tgl_capeg']='';
                $display['tgl_peg']='';
                $display['tgl_jabat']='';
                $display['status']='';
                $display['golongan']='';
                
                $data['title'] = 'Tambah data pegawai';
            }
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/form_data_pegawai',$display);
            $this->load->view('admin/admin_footer_view');
        }
        
        function op_edit($mode){
            if($mode=='edit'){
                $nip = $_POST['nip'];
                $this->model_data_pegawai->updateData($nip,$_POST);
            }else if($mode=='tambah'){
                $this->model_data_pegawai->insert($_POST);
            }
            redirect(base_url().'admin/con_data_pegawai');
        }
        
        function view($nip){
            $array_data = $this->model_data_pegawai->selectByNIP($nip)->row();
                
            $display['nip']=$array_data->nip;
            $display['nama']=$array_data->nama;
            $display['tgl_capeg']=$array_data->tgl_angkat_capeg;
            $display['tgl_peg']=$array_data->tgl_angkat_peg;
            $display['tgl_jabat']=$array_data->tgl_menjabat;
            $display['status']=$array_data->status;
            $display['golongan']=$array_data->golongan;
            $array_pribadi = $this->model_data_pribadi->selectByNIP($nip)->row();
            if($array_pribadi){
                $display['stat_data']=TRUE;
                $display['tempat_lahir']=$array_pribadi->tempat_lahir;
                $display['tgl_lahir']=$array_pribadi->tgl_lahir;
                $display['agama']=$array_pribadi->agama;
                $display['status_nikah']=$array_pribadi->status_nikah;
                $display['jum_tanggungan']=$array_pribadi->jum_tanggungan;
                $display['alamat']=$array_pribadi->alamat;
                $display['nama_bapak']=$array_pribadi->nama_bapak;
                $display['nama_ibu']=$array_pribadi->nama_ibu;
                $display['jenis_kelamin']=$array_pribadi->jenis_kelamin;
            }else{
                $display['stat_data']=FALSE;
            }
            $data['title'] = 'Profil '.$display['nama'];
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/profil_pegawai',$display);
            $this->load->view('admin/admin_footer_view');
        }

        function edit_pribadi($nip,$mode){

            if($mode=='edit'){
                $array_data = $this->model_data_pribadi->selectByNIP($nip)->row();

                $display['mode']=$mode;
                $display['nip']=$array_data->nip;
                $display['tempat_lahir']=$array_data->tempat_lahir;
                $display['tgl_lahir']=$array_data->tgl_lahir;
                $display['agama']=$array_data->agama;
                $display['status_nikah']=$array_data->status_nikah;
                $display['jum_tanggungan']=$array_data->jum_tanggungan;
                $display['alamat']=$array_data->alamat;
                $display['nama_bapak']=$array_data->nama_bapak;
                $display['nama_ibu']=$array_data->nama_ibu;
                $display['jenis_kelamin']=$array_data->jenis_kelamin;

                $data['title'] = 'Edit data pribadi pegawai';
            }else{
                $display['mode']=$mode;
                $display['nip']=$nip;
                $display['tempat_lahir']='';
                $display['tgl_lahir']='';
                $display['agama']='';
                $display['status_nikah']='';
                $display['jum_tanggungan']='';
                $display['alamat']='';
                $display['nama_bapak']='';
                $display['nama_ibu']='';
                $display['jenis_kelamin']='';

                $data['title'] = 'Tambah data pribadi pegawai';
            }
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/form_data_pribadi',$display);
            $this->load->view('admin/admin_footer_view');
        }

        function op_edit_pribadi($mode){
            if($mode=='edit'){
                $nip = $_POST['nip'];
                $this->model_data_pribadi->updateData($nip,$_POST);
            }else if($mode=='insert'){
                $this->model_data_pribadi->insert($_POST);
            }
            redirect(base_url().'admin/con_data_pegawai/view/'.$_POST['nip']);
        }
    }
?>
