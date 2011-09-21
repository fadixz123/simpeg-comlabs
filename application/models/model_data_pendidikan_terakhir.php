<?php
    class Model_data_pendidikan_terakhir extends CI_Model{
        public $nip;
        public $jenjang;
        public $nama_tempat;
        public $tahun_masuk;
        public $tahun_lulus;
        public $gelar;
        public $no_ijasah;
        
        function __construct() {
            parent::__construct();
        }
        
        function insert($array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->nip,
                  'jenjang'=>$this->jenjang,
                  'nama_tempat'=>$this->nama_tempat,
                  'tahun_masuk'=>$this->tahun_masuk,
                  'tahun_lulus'=>$this->tahun_lulus,
                  'gelar'=>$this->gelar,
                  'no_ijasah'=>$this->no_ijasah
                );
            }
            $this->db->insert('data_pendidikan',$array_data);
        }
        
        function selectAll(){
            $query_all = $this->db->get('data_pendidikan');
            return $query_all;
        }
        
        function selectByNIP($nip){
            $query_by_nip = $this->db->get_where('data_pendidikan',array('nip'=>$nip));
            return $query_by_nip;
        }
        
        function deleteByNIP($nip){
            $this->db->where('nip',$nip);
            $this->db->delete('data_pendidikan');
        }
        
        function updateData($nip,$array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->nip,
                  'jenjang'=>$this->jenjang,
                  'nama_tempat'=>$this->nama_tempat,
                  'tahun_masuk'=>$this->tahun_masuk,
                  'tahun_lulus'=>$this->tahun_lulus,
                  'gelar'=>$this->gelar,
                  'no_ijasah'=>$this->no_ijasah
                );
            }
            $this->db->where('nip',$nip);
            $this->db->update('data_pendidikan',$array_data);
        }
        
    }
?>
