<?php
    class Con_data_dev_mandiri extends CI_Controller{
        
        function __construct() {
            parent::__construct();
            $this->load->model('model_data_pegawai');
            $this->load->model('model_data_pribadi');
            $this->load->model('model_data_dev_mandiri');
        }
        
        function index(){
            //$this->list_all();
            redirect('admin/con_data_pegawai');
        }
        
        function list_all($nip){
            $all_mandiri = $this->model_data_dev_mandiri->selectByNIP($nip);
            if($all_mandiri->num_rows()==0){
                $display['content'] = 'Masih kosong';
            }else{
                $this->load->library('table');
                $this->table->set_template(array('table_open' => '<table align="center" width="80%" border="1" cellpadding="2" cellspacing="2">'));
                $this->table->set_heading('No', 'Nama Kursus', 'Jenis Kursus', 'Penyelenggara', 'Alamat','Tanggal Mulai', 'Tanggal Selesai', 'No Sertifikat', 'Predikat', 'Aksi');
                $i=1;
                foreach($all_mandiri->result() as $mandiri){
                    $this->table->add_row(
                            $i,
                            $mandiri->nama_kursus,
                            $mandiri->jenis_kursus,
                            $mandiri->penyelenggara,
                            $mandiri->alamat,
                            $mandiri->tgl_mulai,
                            $mandiri->tgl_selesai,
                            $mandiri->no_sertifikat,
                            $mandiri->predikat,
                            anchor(base_url() . 'admin/con_data_dev_mandiri/edit/'.$mandiri->nip.'/'.$mandiri->id,'Edit').
                            ' | '.
                            anchor(base_url() . 'admin/con_data_dev_mandiri/warning_delete/'.$mandiri->nip.'/'.$mandiri->id,'Delete')
                        );
                    $i++;
                }
                $display['content']=$this->table->generate();
            }
            $display['nip']=$nip;
            $data['title']='Daftar Pengembangan Mandiri NIP '.$nip;
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/list_mandiri',$display);
            $this->load->view('admin/admin_footer_view');
        }
        
        function warning_delete($nip,$id){
            $data['title']='WARNING!!';
            $display['nip']=$nip;
            $display['id']=$id;
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/warning_delete_mandiri',$display);
            $this->load->view('admin/admin_footer_view');
        }
        
        function delete($nip,$id){
            $this->model_data_dev_mandiri->deleteByID($id);
            redirect(base_url().'admin/con_data_dev_mandiri/list_all/'.$nip);
        }
        
        function edit($nip='',$id=''){
            
            if($id!=''){
                $array_data = $this->model_data_dev_mandiri->selectByID($id)->row();
                
                $display['mode']='edit';
                $display['id']=$array_data->id;
                $display['nip']=$array_data->nip;
                $display['nama_kursus']=$array_data->nama_kursus;
                $display['jenis_kursus']=$array_data->jenis_kursus;
                $display['penyelenggara']=$array_data->penyelenggara;
                $display['alamat']=$array_data->alamat;
                $display['tgl_mulai']=$array_data->tgl_mulai;
                $display['tgl_selesai']=$array_data->tgl_selesai;
                $display['no_sertifikat']=$array_data->no_sertifikat;  
                $display['predikat']=$array_data->predikat;
                
                $data['title'] = 'Edit data organisasi';
            }else{
                $display['mode']='tambah';
                $display['nip']=$nip;
                $display['nama_kursus']='';
                $display['jenis_kursus']='';
                $display['penyelenggara']='';
                $display['alamat']='';
                $display['tgl_mulai']='';
                $display['tgl_selesai']='';
                $display['no_sertifikat']='';  
                $display['predikat']='';
                
                $data['title'] = 'Tambah data organisasi';
            }
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/form_data_mandiri',$display);
            $this->load->view('admin/admin_footer_view');
        }
        
        function op_edit($mode){
            if($mode=='edit'){
                $id = $_POST['id'];
                $this->model_data_dev_mandiri->updateData($id,$_POST);
            }else if($mode=='tambah'){
                $this->model_data_dev_mandiri->insert($_POST);
            }
            redirect(base_url().'admin/con_data_dev_mandiri/list_all/'.$_POST['nip']);
        }
    }
?>
