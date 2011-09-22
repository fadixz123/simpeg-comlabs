<?php
    class Model_data_diklat extends CI_Model{
        public $nip;
        public $nama_pelatihan;
        public $jenis_pelatihan;
        public $status_lulus;
        public $tgl_mulai;
        public $tgl_selesai;
        public $rangking;
        public $predikat;
        
        function __construct() {
            parent::__construct();
        }
        
        function insert($array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->nip,
                  'nama_pelatihan'=>$this->nama_pelatihan,
                  'jenis_pelatihan'=>$this->jenis_pelatihan,
                  'status_lulus'=>$this->status_lulus,
                  'tgl_mulai'=>$this->tgl_mulai,
                  'tgl_selesai'=>$this->tgl_selesai,
                  'rangking'=>$this->rangking,  
                  'predikat'=>$this->predikat  
                );
            }
            $this->db->insert('data_diklat',$array_data);
        }
        
        function selectAll(){
            $query_all = $this->db->get('data_diklat');
            return $query_all;
        }
        
        function selectByID($id){
            $query_by_id = $this->db->get_where('data_diklat',array('id'=>$id));
            return $query_by_id;
        }
        
        function selectByNIP($nip){
            $query_by_nip = $this->db->get_where('data_diklat',array('nip'=>$nip));
            return $query_by_nip;
        }
        
        function deleteByID($id){
            $this->db->where('id',$id);
            $this->db->delete('data_diklat');
        }
        
        function updateData($id,$array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->nip,
                  'nama_pelatihan'=>$this->nama_pelatihan,
                  'jenis_pelatihan'=>$this->jenis_pelatihan,
                  'status_lulus'=>$this->status_lulus,
                  'tgl_mulai'=>$this->tgl_mulai,
                  'tgl_selesai'=>$this->tgl_selesai,
                  'rangking'=>$this->rangking,  
                  'predikat'=>$this->predikat  
                );
            }
            $this->db->where('id',$id);
            $this->db->update('data_diklat',$array_data);
        }
        
    }
?>
