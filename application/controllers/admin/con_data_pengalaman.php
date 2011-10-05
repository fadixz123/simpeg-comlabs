<?php
    class Con_data_pengalaman extends CI_Controller{

        function __construct() {
            parent::__construct();
            $this->load->model('model_data_pegawai');
            $this->load->model('model_data_pribadi');
            $this->load->model('model_data_pengalaman');
        }

        function index(){
            //$this->list_all();
            redirect('admin/con_data_pegawai');
        }

        function list_all($nip){
            $all_pengalaman = $this->model_data_pengalaman->selectByNIP($nip);
            if($all_pengalaman->num_rows()==0){
                $display['content'] = 'Masih kosong';
            }else{
                $this->load->library('table');
                $this->table->set_template(array('table_open' => '<table align="center" width="80%" border="1" cellpadding="2" cellspacing="2">'));
                $this->table->set_heading('No', 'Pengalaman', 'Tahun', 'Aksi');
                $i=1;
                foreach($all_pengalaman->result() as $peng){
                    $this->table->add_row(
                            $i,
                            $peng->pengalaman,
                            $peng->tahun,
                            
                            anchor(base_url() . 'admin/con_data_pengalaman/edit/'.$peng->nip.'/'.$peng->id,'Edit').
                            ' | '.
                            anchor(base_url() . 'admin/con_data_pengalaman/warning_delete/'.$peng->nip.'/'.$peng->id,'Delete')
                        );
                    $i++;
                }
                $display['content']=$this->table->generate();
            }
            $display['nip']=$nip;
            $data['title']='Daftar pengalaman NIP '.$nip;
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/list_pengalaman',$display);
            $this->load->view('admin/admin_footer_view');
        }

        function warning_delete($nip,$id){
            $data['title']='WARNING!!';
            $display['nip']=$nip;
            $display['id']=$id;
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/warning_delete_pengalaman',$display);
            $this->load->view('admin/admin_footer_view');
        }

        function delete($nip,$id){
            $this->model_data_pengalaman->deleteByID($id);
            redirect(base_url().'admin/con_data_pengalaman/list_all/'.$nip);
        }

        function edit($nip='',$id=''){

            if($id!=''){
                $array_data = $this->model_data_pengalaman->selectByID($id)->row();

                $display['mode']='edit';
                $display['id']=$array_data->id;
                $display['nip']=$array_data->nip;
                $display['pengalaman']=$array_data->pengalaman;
                $display['tahun']=$array_data->tahun;

                $data['title'] = 'Edit data pengalaman';
            }else{
                $display['mode']='tambah';
                $display['nip']=$nip;
                $display['pengalaman']='';
                $display['tahun']='';

                $data['title'] = 'Tambah data pengalaman';
            }
            $this->load->view('admin/admin_header_view',$data);
            $this->load->view('admin/form_data_pengalaman',$display);
            $this->load->view('admin/admin_footer_view');
        }

        function op_edit($mode){
            if($mode=='edit'){
                $id = $_POST['id'];
                $this->model_data_pengalaman->updateData($id,$_POST);
            }else if($mode=='tambah'){
                $this->model_data_pengalaman->insert($_POST);
            }
            redirect(base_url().'admin/con_data_pengalaman/list_all/'.$_POST['nip']);
        }

    }
?>
