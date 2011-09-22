<?php
    class Con_data_pengalaman_kerja extends CI_Controller{

        function __construct() {
            parent::__construct();
            $this->load->model('model_data_pengalaman_kerja');
            $this->load->model('model_data_pegawai');
        }

        function index(){
        }



        function warning_delete($nip){
            $data['title']='WARNING!!';
            $display['content']=$nip;
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/warning_delete_pengalaman_kerja',$display);
            $this->load->view('admin/admin_footer_view');
        }

        function delete($nip){
            $this->model_data_pengalaman_kerja->deleteByNIP($nip);
            redirect(base_url() . 'admin/con_data_pegawai/view/'.$nip);
        }

        function view($nip){
            $array_pegawai = $this->model_data_pegawai->selectByNIP($nip)->row();
            $display['nama']=$array_pegawai->nama;
            $display['nip']=$nip;
            $array = $this->model_data_pengalaman_kerja->selectByNIP($nip)->row();
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
            $data['title'] = 'Pengalaman Kerja '.$display['nama'];
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/pengalaman_kerja_pegawai',$display);
            $this->load->view('admin/admin_footer_view');
        }

        function edit($nip,$mode){
            if($mode=='edit'){
                $array = $this->model_data_pengalaman_kerja->selectByNIP($nip)->row();

                $display['mode']=$mode;
                $display['nip']=$nip;
                $display['jenjang']=$array->jenjang;
                $display['nama_tempat']=$array->nama_tempat;
                $display['tahun_masuk']=$array->tahun_masuk;
                $display['tahun_lulus']=$array->tahun_lulus;
                $display['gelar']=$array->gelar;
                $display['no_ijasah']=$array->no_ijasah;

                $data['title'] = 'Edit data pengalaman kerja pegawai';
            }else{
                $display['mode']=$mode;
                $display['nip']=$nip;
                $display['jenjang']='';
                $display['nama_tempat']='';
                $display['tahun_masuk']='';
                $display['tahun_lulus']='';
                $display['gelar']='';
                $display['no_ijasah']='';

                $data['title'] = 'Tambah data pengalaman kerja pegawai';
            }
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/form_data_pengalaman_kerja',$display);
            $this->load->view('admin/admin_footer_view');
        }

        function op_edit($mode){
            if($mode=='edit'){
                $nip = $_POST['nip'];
                $this->model_data_pengalaman_kerja->updateData($nip,$_POST);
            }else if($mode=='insert'){
                $this->model_data_pengalaman_kerja->insert($_POST);
            }
            redirect(base_url().'admin/con_data_pengalaman_kerja/view/'.$_POST['nip']);
        }
    }
?>
