<?php
    class Model_data_organisasi extends CI_Model{
        public $nip;
        public $nama_org;
        public $jenis;
        public $alamat;
        public $thn_masuk;
        public $thn_keluar;
        public $honor;
        public $jabatan;
        
        function __construct() {
            parent::__construct();
        }
        
        function insert($array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->nip,
                  'nama_org'=>$this->nama_org,
                  'jenis'=>$this->jenis,
                  'alamat'=>$this->alamat,
                  'thn_masuk'=>$this->thn_masuk,
                  'thn_keluar'=>$this->thn_keluar,
                  'honor'=>$this->honor,  
                  'jabatan'=>$this->jabatan  
                );
            }
            $this->db->insert('data_organisasi',$array_data);
        }
        
        function selectAll(){
            $query_all = $this->db->get('data_organisasi');
            return $query_all;
        }
        
        function selectByID($id){
            $query_by_id = $this->db->get_where('data_organisasi',array('id'=>$id));
            return $query_by_id;
        }
        
        function selectByNIP($nip){
            $query_by_nip = $this->db->get_where('data_organisasi',array('nip'=>$nip));
            return $query_by_nip;
        }
        
        function deleteByID($id){
            $this->db->where('id',$id);
            $this->db->delete('data_organisasi');
        }
        
        function updateData($id,$array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->nip,
                  'nama_org'=>$this->nama_org,
                  'jenis'=>$this->jenis,
                  'alamat'=>$this->alamat,
                  'thn_masuk'=>$this->thn_masuk,
                  'thn_keluar'=>$this->thn_keluar,
                  'honor'=>$this->honor,  
                  'jabatan'=>$this->jabatan
                );
            }
            $this->db->where('id',$id);
            $this->db->update('data_organisasi',$array_data);
        }
        
    }
?>
