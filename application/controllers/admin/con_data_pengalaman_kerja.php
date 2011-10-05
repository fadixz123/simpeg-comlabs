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
            $display['id']=$id;
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/warning_delete_pengalaman_kerja',$display);
            $this->load->view('admin/admin_footer_view');
        }

        function delete($nip,$id){
            $this->model_data_pengalaman_kerja->deleteByID($id);
            redirect(base_url() . 'admin/con_data_pegawai/list_all/'.$nip);
        }

        function list_all($nip){
            $all_pengalaman = $this->model_data_pengalaman_kerja->selectByNIP($nip);
            if($all_pengalaman->num_rows()==0){
                $display['content'] = 'Masih kosong';
            }else{
                $this->load->library('table');
                $this->table->set_template(array('table_open' => '<table align="center" width="80%" border="1" cellpadding="2" cellspacing="2">'));
                $this->table->set_heading('No', 'Tempat Kerja', 'Alamat','Tahun Masuk', 'Tahun Keluar', 'Gaji', 'Jabatan', 'Aksi');
                $i=1;
                foreach($all_pengalaman->result() as $peng){
                    $this->table->add_row(
                            $i,
                            $peng->tempat_kerja,
                            $peng->alamat,
                            $peng->tahun_masuk,
                            $peng->tahun_keluar,
                            $peng->gaji_terakhir,
                            $peng->jabatan_terakhir,
                            anchor(base_url() . 'admin/con_data_pengalaman_kerja/edit/'.$peng->nip.'/'.$peng->ID,'Edit').
                            ' | '.
                            anchor(base_url() . 'admin/con_data_organisasi/warning_delete/'.$peng->nip.'/'.$peng->ID,'Delete')
                        );
                    $i++;
                }
                $display['content']=$this->table->generate();
            }
            $display['nip']=$nip;
            $data['title']='Daftar Pengalaman Kerja NIP '.$nip;
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/pengalaman_kerja_pegawai',$display);
            $this->load->view('admin/admin_footer_view');
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

        function edit($nip='',$id=''){

            if($id!=''){
                $array_data = $this->model_data_pengalaman_kerja->selectByID($id)->row();

                $display['mode']='edit';
                $display['ID']=$array_data->ID;
                $display['nip']=$array_data->nip;
                $display['tempat_kerja']=$array_data->tempat_kerja;
                $display['alamat']=$array_data->alamat;
                $display['tahun_masuk']=$array_data->tahun_masuk;
                $display['tahun_keluar']=$array_data->tahun_keluar;
                $display['gaji_terakhir']=$array_data->gaji_terakhir;
                $display['jabatan_terakhir']=$array_data->jabatan_terakhir;

                $data['title'] = 'Edit data pengalaman kerja';
            }else{
                $display['mode']='tambah';
                $display['ID']='';
                $display['nip']=$nip;
                $display['tempat_kerja']='';
                $display['alamat']='';
                $display['tahun_masuk']='';
                $display['tahun_keluar']='';
                $display['gaji_terakhir']='';
                $display['jabatan_terakhir']='';

                $data['title'] = 'Tambah data pengalaman kerja';
            }
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/form_data_pengalaman_kerja',$display);
            $this->load->view('admin/admin_footer_view');
        }

        function op_edit($mode){
            if($mode=='edit'){
                $id = $_POST['id'];
                $this->model_data_pengalaman_kerja->updateData($id,$_POST);
            }else if($mode=='tambah'){
                $this->model_data_pengalaman_kerja->insert($_POST);
            }
            redirect(base_url().'admin/con_data_pengalaman_kerja/list_all/'.$_POST['nip']);
        }
    }
?>
