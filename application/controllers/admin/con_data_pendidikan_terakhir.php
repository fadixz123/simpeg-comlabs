<?php
    class Con_data_pendidikan_terakhir extends CI_Controller{

        function __construct() {
            parent::__construct();
            $this->load->model('model_data_pendidikan_terakhir');
            $this->load->model('model_data_pegawai');
        }

        function index(){
        }

        

        function warning_delete($nip){
            $data['title']='WARNING!!';
            $display['content']=$nip;
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/warning_delete_pendidikan_terakhir',$display);
            $this->load->view('admin/admin_footer_view');
        }

        function delete($nip){
            $this->model_data_pendidikan_terakhir->deleteByNIP($nip);
            redirect(base_url() . 'admin/con_data_pegawai/view/'.$nip);
        }

        function view($nip){
            $array_pegawai = $this->model_data_pegawai->selectByNIP($nip)->row();
            $display['nama']=$array_pegawai->nama;
            $display['nip']=$nip;
            $array = $this->model_data_pendidikan_terakhir->selectByNIP($nip)->row();
            if($array){
                $display['stat_data']=TRUE;
                $display['jenjang']=$array->jenjang;
                $display['nama_tempat']=$array->nama_tempat;
                $display['tahun_masuk']=$array->tahun_masuk;
                $display['tahun_lulus']=$array->tahun_lulus;
                $display['gelar']=$array->gelar;
                $display['no_ijasah']=$array->no_ijasah;
            }else{
                $display['stat_data']=FALSE;
            }
            $data['title'] = 'Pendidikan Terakhir '.$display['nama'];
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/pendidikan_terakhir_pegawai',$display);
            $this->load->view('admin/admin_footer_view');
        }

        function edit($nip,$mode){
            if($mode=='edit'){
                $array = $this->model_data_pendidikan_terakhir->selectByNIP($nip)->row();

                $display['mode']=$mode;
                $display['nip']=$nip;
                $display['jenjang']=$array->jenjang;
                $display['nama_tempat']=$array->nama_tempat;
                $display['tahun_masuk']=$array->tahun_masuk;
                $display['tahun_lulus']=$array->tahun_lulus;
                $display['gelar']=$array->gelar;
                $display['no_ijasah']=$array->no_ijasah;

                $data['title'] = 'Edit data pendidikan terakhir pegawai';
            }else{
                $display['mode']=$mode;
                $display['nip']=$nip;
                $display['jenjang']='';
                $display['nama_tempat']='';
                $display['tahun_masuk']='';
                $display['tahun_lulus']='';
                $display['gelar']='';
                $display['no_ijasah']='';

                $data['title'] = 'Tambah data pendidikan terakhir pegawai';
            }
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/form_data_pendidikan_terakhir',$display);
            $this->load->view('admin/admin_footer_view');
        }

        function op_edit($mode){
            if($mode=='edit'){
                $nip = $_POST['nip'];
                $this->model_data_pendidikan_terakhir->updateData($nip,$_POST);
            }else if($mode=='insert'){
                $this->model_data_pendidikan_terakhir->insert($_POST);
            }
            redirect(base_url().'admin/con_data_pendidikan_terakhir/view/'.$_POST['nip']);
        }
    }
?>
