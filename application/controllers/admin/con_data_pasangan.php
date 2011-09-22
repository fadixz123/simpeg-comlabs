<?php
    class Con_data_pasangan extends CI_Controller{
        
        function __construct() {
            parent::__construct();
            $this->load->model('model_data_pasangan');
        }
        
        function index(){
            redirect('admin/con_data_pegawai');
        }
        
        function list_all(){
            $all_pasangan = $this->model_data_pasangan->selectAll();
            if($all_pasangan->num_rows()==0){
                $display['content'] = 'Masih kosong';
            }else{
                $this->load->library('table');
                $this->table->set_template(array('table_open' => '<table align="center" width="80%" border="1" cellpadding="2" cellspacing="2">'));
                $this->table->set_heading(
                        'No', 
                        'NIP', 
                        'Nama Pasangan', 
                        'Tempat Lahir',
                        'Tangal Lahir',
                        'Agama',
                        'Status Nikah',
                        'Jumlah Tanggungan',
                        'Alamat',
                        'Nama Bapak',
                        'Nama Ibu',
                        'Pendidikan Terakhir',
                        'Tangal Nikah',
                        'Tangal Cerai');
                $i=1;
                foreach($all_pasangan->result() as $pasangan){
                    $this->table->add_row(
                            $i,
                            anchor(base_url() . 'admin/con_data_pegawai/view/'.$pasangan->nip,$pasangan->nim),
                            $pasangan->nama_pasangan,
                            $pasangan->tempat_lahir,
                            $pasangan->tgl_lahir,
                            $pasangan->agama,
                            $pasangan->status_nikah,
                            $pasangan->jum_tangungan,
                            $pasangan->alamat,
                            $pasangan->nama_bapak,
                            $pasangan->nama_ibu,
                            $pasangan->pendidikan_terakhir,
                            $pasangan->tgl_nikah,
                            $pasangan->tgl_cerai,
                            anchor(base_url() . 'admin/con_data_pasangan/edit/'.$pasangan->nip,'Edit').
                            ' | '.
                            anchor(base_url() . 'admin/con_data_pasangan/warning_delete/'.$pasangan->nip,'Delete')
                        );
                    $i++;
                }
                $display['content']=$this->table->generate();
            }
            $data['title']='Daftar Pasangan';
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/list_pasangan',$display);
            $this->load->view('admin/admin_footer_view');
        }
        
        function warning_delete($nip){
            $data['title']='WARNING!!';
            $display['content']=$nip;
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/warning_delete_pasangan',$display);
            $this->load->view('admin/admin_footer_view');
        }
        
        function delete($nip){
            $this->model_data_pasangan->deleteByNIP($nip);
            redirect('admin/con_data_pegawai/view/'.$nip);
        }
        
        function edit($nip='',$mode=''){
            
            if($mode==''){
                $array_data = $this->model_data_pasangan->selectByNIP($nip)->row();
                
                $display['mode']='edit';
                $display['nip']=$array_data->nip;
                $display['nama_pasangan']=$array_data->nama_pasangan;
                $display['tempat_lahir']=$array_data->tempat_lahir;
                $display['tgl_lahir']=$array_data->tgl_lahir;
                $display['agama']=$array_data->agama;
                $display['status_nikah']=$array_data->status_nikah;
                $display['jum_tanggungan']=$array_data->jum_tanggungan;
                $display['alamat']=$array_data->alamat;
                $display['nama_bapak']=$array_data->nama_bapak;
                $display['nama_ibu']=$array_data->nama_ibu;
                $display['pendidikan_terakhir']=$array_data->pendidikan_terakhir;
                $display['tgl_nikah']=$array_data->tgl_nikah;
                $display['tgl_cerai']=$array_data->tgl_cerai;
                
                $data['title'] = 'Edit data pasangan';
            }else{
                $display['mode']='tambah';
                $display['nip']=$nip;
                $display['nama_pasangan']='';
                $display['tempat_lahir']='';
                $display['tgl_lahir']='';
                $display['agama']='';
                $display['status_nikah']='';
                $display['jum_tanggungan']='';
                $display['alamat']='';
                $display['nama_bapak']='';
                $display['nama_ibu']='';
                $display['pendidikan_terakhir']='';
                $display['tgl_nikah']='';
                $display['tgl_cerai']='';
                
                $data['title'] = 'Tambah data pasangan';
            }
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/form_data_pasangan',$display);
            $this->load->view('admin/admin_footer_view');
        }
        
        function op_edit($mode){
            if($mode=='edit'){
                $nip = $_POST['nip'];
                $this->model_data_pasangan->updateData($nip,$_POST);
            }else if($mode=='tambah'){
                $this->model_data_pasangan->insert($_POST);
            }
            redirect(base_url().'admin/con_data_pasangan/view/'.$_POST['nip']);
        }
        
        function view($nip){
            $array_data = $this->model_data_pasangan->selectByNIP($nip)->row();
                
            $display['nip']=$array_data->nip;
            $display['nama_pasangan']=$array_data->nama_pasangan;
            $display['tempat_lahir']=$array_data->tempat_lahir;
            $display['tgl_lahir']=$array_data->tgl_lahir;
            $display['agama']=$array_data->agama;
            $display['status_nikah']=$array_data->status_nikah;
            $display['jum_tanggungan']=$array_data->jum_tanggungan;
            $display['alamat']=$array_data->alamat;
            $display['nama_bapak']=$array_data->nama_bapak;
            $display['nama_ibu']=$array_data->nama_ibu;
            $display['pendidikan_terakhir']=$array_data->pendidikan_terakhir;
            $display['tgl_nikah']=$array_data->tgl_nikah;
            $display['tgl_cerai']=$array_data->tgl_cerai;
            
            $data['title'] = 'Profil Pasangan '.$display['nip'];
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/profil_pasangan',$display);
            $this->load->view('admin/admin_footer_view');
        }
    }
?>
