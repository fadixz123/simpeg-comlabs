<?php
    class Con_data_diklat extends CI_Controller{
        
        function __construct() {
            parent::__construct();
            $this->load->model('model_data_pegawai');
            $this->load->model('model_data_pribadi');
            $this->load->model('model_data_diklat');
        }
        
        function index(){
            //$this->list_all();
            redirect('admin/con_data_pegawai');
        }
        
        function list_all($nip){
            $all_diklat = $this->model_data_diklat->selectByNIP($nip);
            if($all_diklat->num_rows()==0){
                $display['content'] = 'Masih kosong';
            }else{
                $this->load->library('table');
                $this->table->set_template(array('table_open' => '<table align="center" width="80%" border="1" cellpadding="2" cellspacing="2">'));
                $this->table->set_heading('No', 'Nama Pelatihan', 'Jenis Pelatihan', 'Status Lulus','Tanggal Mulai', 'Tanggal Selesai', 'Rangking', 'Predikat', 'Aksi');
                $i=1;
                foreach($all_diklat->result() as $diklat){
                    $this->table->add_row(
                            $i,
                            $diklat->nama_pelatihan,
                            $diklat->jenis_pelatihan,
                            $diklat->status_lulus,
                            $diklat->tgl_mulai,
                            $diklat->tgl_selesai,
                            $diklat->rangking,
                            $diklat->predikat,
                            anchor(base_url() . 'admin/con_data_diklat/edit/'.$diklat->nip.'/'.$diklat->id,'Edit').
                            ' | '.
                            anchor(base_url() . 'admin/con_data_diklat/warning_delete/'.$diklat->nip.'/'.$diklat->id,'Delete')
                        );
                    $i++;
                }
                $display['content']=$this->table->generate();
            }
            $display['nip']=$nip;
            $data['title']='Daftar Diklat NIP '.$nip;
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/list_diklat',$display);
            $this->load->view('admin/admin_footer_view');
        }
        
        function warning_delete($nip,$id){
            $data['title']='WARNING!!';
            $display['nip']=$nip;
            $display['id']=$id;
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/warning_delete_diklat',$display);
            $this->load->view('admin/admin_footer_view');
        }
        
        function delete($nip,$id){
            $this->model_data_diklat->deleteByID($id);
            redirect(base_url().'admin/con_data_diklat/list_all/'.$nip);
        }
        
        function edit($nip='',$id=''){
            
            if($id!=''){
                $array_data = $this->model_data_diklat->selectByID($id)->row();
                
                $display['mode']='edit';
                $display['id']=$array_data->id;
                $display['nip']=$array_data->nip;
                $display['nama_pelatihan']=$array_data->nama_pelatihan;
                $display['jenis_pelatihan']=$array_data->jenis_pelatihan;
                $display['status_lulus']=$array_data->status_lulus;
                $display['tgl_mulai']=$array_data->tgl_mulai;
                $display['tgl_selesai']=$array_data->tgl_selesai;
                $display['rangking']=$array_data->rangking;  
                $display['predikat']=$array_data->predikat;
                
                $data['title'] = 'Edit data diklat';
            }else{
                $display['mode']='tambah';
                $display['nip']=$nip;
                $display['nama_pelatihan']='';
                $display['jenis_pelatihan']='';
                $display['status_lulus']='';
                $display['tgl_mulai']='';
                $display['tgl_selesai']='';
                $display['rangking']='';  
                $display['predikat']='';
                
                $data['title'] = 'Tambah data diklat';
            }
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/form_data_diklat',$display);
            $this->load->view('admin/admin_footer_view');
        }
        
        function op_edit($mode){
            if($mode=='edit'){
                $id = $_POST['id'];
                $this->model_data_diklat->updateData($id,$_POST);
            }else if($mode=='tambah'){
                $this->model_data_diklat->insert($_POST);
            }
            redirect(base_url().'admin/con_data_diklat/list_all/'.$_POST['nip']);
        }
    }
?>
