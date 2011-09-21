<?php
    class Model_data_pegawai extends CI_Model{
        public $nip;
        public $nama;
        public $tglAngkatCapeg;
        public $tglAngkatPeg;
        public $tglMenjabat;
        public $status;
        public $golongan;
        
        function __construct() {
            parent::__construct();
        }
        
        function insert($array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->nip,
                  'nama'=>$this->nama,
                  'tgl_angkat_capeg'=>$this->tglAngkatCapeg,
                  'tgl_angkat_peg'=>$this->tglAngkatPeg,
                  'tgl_menjabat'=>$this->tglMenjabat,
                  'status'=>$this->status,
                  'golongan'=>$this->golongan  
                );
            }
            $this->db->insert('data_pegawai',$array_data);
        }
        
        function selectAll(){
            $query_all = $this->db->get('data_pegawai');
            return $query_all;
        }
        
        function selectByNIP($nip){
            $query_by_nip = $this->db->get_where('data_pegawai',array('nip'=>$nip));
            return $query_by_nip;
        }
        
        function selectByStatus($status){
            $query_by_status = $this->db->get_where('data_pegawai',array('status'=>$status));
            return $query_by_status;
        }
        
        function selectByGol($golongan){
            $query_by_golongan = $this->db->get_where('data_pegawai',array('golongan'=>$golongan));
            return $query_by_golongan;
        }
        
        function deleteByNIP($nip){
            $this->db->where('nip',$nip);
            $this->db->delete('data_pegawai');
        }
        
        function updateData($nip,$array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->$nip,
                  'nama'=>$this->$nama,
                  'tgl_angkat_capeg'=>$this->tglAngkatCapeg,
                  'tgl_angkat_peg'=>$this->tglAngkatPeg,
                  'tgl_menjabat'=>$this->tglMenjabat,
                  'status'=>$this->status,
                  'golongan'=>$this->golongan  
                );
            }
            $this->db->where('nip',$nip);
            $this->db->update('data_pegawai',$array_data);
        }
        
    }
?>
