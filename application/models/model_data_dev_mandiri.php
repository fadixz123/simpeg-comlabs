<?php
    class Model_data_dev_mandiri extends CI_Model{
        public $nip;
        public $nama_kursus;
        public $jenis_kursus;
        public $penyelenggara;
        public $alamat;
        public $tgl_mulai;
        public $tgl_selesai;
        public $no_sertifikat;
        public $predikat;
        
        function __construct() {
            parent::__construct();
        }
        
        function insert($array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->nip,
                  'nama_kursus'=>$this->nama_kursus,
                  'jenis_kursus'=>$this->jenis_kursus,
                  'penyelenggara'=>$this->penyelenggara,
                  'alamat'=>$this->alamat,
                  'tgl_mulai'=>$this->tgl_mulai,
                  'tgl_selesai'=>$this->tgl_selesai,
                  'no_sertifikat'=>$this->no_sertifikat,  
                  'predikat'=>$this->predikat  
                );
            }
            $this->db->insert('data_dev_mandiri',$array_data);
        }
        
        function selectAll(){
            $query_all = $this->db->get('data_dev_mandiri');
            return $query_all;
        }
        
        function selectByID($id){
            $query_by_id = $this->db->get_where('data_dev_mandiri',array('id'=>$id));
            return $query_by_id;
        }
        
        function selectByNIP($nip){
            $query_by_nip = $this->db->get_where('data_dev_mandiri',array('nip'=>$nip));
            return $query_by_nip;
        }
        
        function deleteByID($id){
            $this->db->where('id',$id);
            $this->db->delete('data_dev_mandiri');
        }
        
        function updateData($id,$array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->nip,
                  'nama_kursus'=>$this->nama_kursus,
                  'jenis_kursus'=>$this->jenis_kursus,
                  'penyelenggara'=>$this->penyelenggara,
                  'alamat'=>$this->alamat,
                  'tgl_mulai'=>$this->tgl_mulai,
                  'tgl_selesai'=>$this->tgl_selesai,
                  'no_sertifikat'=>$this->no_sertifikat,  
                  'predikat'=>$this->predikat 
                );
            }
            $this->db->where('id',$id);
            $this->db->update('data_dev_mandiri',$array_data);
        }
        
    }
?>
