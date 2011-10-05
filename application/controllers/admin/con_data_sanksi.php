<?php
    class Con_data_sanksi extends CI_Controller{

        function __construct() {
            parent::__construct();
            $this->load->model('model_data_pegawai');
            $this->load->model('model_data_pribadi');
            $this->load->model('model_data_sanksi');
        }

        function index(){
            //$this->list_all();
            redirect('admin/con_data_pegawai');
        }

        function list_all($nip){
            $all_sanksi = $this->model_data_sanksi->selectByNIP($nip);
            if($all_sanksi->num_rows()==0){
                $display['content'] = 'Masih kosong';
            }else{
                $this->load->library('table');
                $this->table->set_template(array('table_open' => '<table align="center" width="80%" border="1" cellpadding="2" cellspacing="2">'));
                $this->table->set_heading('No', 'Jenis Sanksi', 'Nomor SK', 'Tanggal Surat','Gambar', 'Aksi');
                $i=1;
                foreach($all_sanksi->result() as $sank){
                    $this->table->add_row(
                            $i,
                            $sank->jenis_sanksi,
                            $sank->no_sk,
                            $sank->tanggal_surat,
                            "<img src='".$sank->gambar."' height='50px'/>",
                            anchor(base_url() . 'admin/con_data_sanksi/edit/'.$sank->nip.'/'.$sank->id,'Edit').
                            ' | '.
                            anchor(base_url() . 'admin/con_data_sanksi/warning_delete/'.$sank->nip.'/'.$sank->id,'Delete')
                        );
                    $i++;
                }
                $display['content']=$this->table->generate();
            }
            $display['nip']=$nip;
            $data['title']='Daftar Sanksi NIP '.$nip;
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/list_sanksi',$display);
            $this->load->view('admin/admin_footer_view');
        }

        function warning_delete($nip,$id){
            $data['title']='WARNING!!';
            $display['nip']=$nip;
            $display['id']=$id;
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/warning_delete_sanksi',$display);
            $this->load->view('admin/admin_footer_view');
        }

        function delete($nip,$id){
            $this->model_data_sanksi->deleteByID($id);
            redirect(base_url().'admin/con_data_sanksi/list_all/'.$nip);
        }

        function edit($nip='',$id=''){

            if($id!=''){
                $array_data = $this->model_data_sanksi->selectByID($id)->row();

                $display['mode']='edit';
                $display['id']=$array_data->id;
                $display['nip']=$array_data->nip;
                $display['jenis_sanksi']=$array_data->jenis_sanksi;
                $display['no_sk']=$array_data->no_sk;
                $display['tanggal_surat']=$array_data->tanggal_surat;
                $display['gambar']=$array_data->gambar;

                $data['title'] = 'Edit data sanksi';
            }else{
                $display['mode']='tambah';
                $display['nip']=$nip;
                $display['jenis_sanksi']='';
                $display['no_sk']='';
                $display['tanggal_surat']='';
                $display['gambar']='';

                $data['title'] = 'Tambah data sanksi';
            }
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/form_data_sanksi',$display);
            $this->load->view('admin/admin_footer_view');
        }

        function op_edit($mode){
            if($mode=='edit'){
                $id = $_POST['id'];
                $this->model_data_sanksi->updateData($id,$_POST);
            }else if($mode=='tambah'){
                $this->model_data_sanksi->insert($_POST);
            }
            redirect(base_url().'admin/con_data_sanksi/list_all/'.$_POST['nip']);
        }
    }
?>
