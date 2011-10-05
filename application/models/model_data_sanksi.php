<?php
    class Model_data_sanksi extends CI_Model{
        public $nip;
        public $jenis_sanksi;
        public $no_sk;
        public $tanggal_surat;
        public $gambar;

        function __construct() {
            parent::__construct();
        }

        function insert($array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->nip,
                  'jenis_sanksi'=>$this->jenis_sanksi,
                  'no_sk'=>$this->no_sk,
                  'tanggal_surat'=>$this->tanggal_surat,
                  'gambar'=>$this->gambar
                );
            }
            $this->db->insert('data_sanksi',$array_data);
        }

        function selectAll(){
            $query_all = $this->db->get('data_sanksi');
            return $query_all;
        }

        function selectByID($id){
            $query_by_id = $this->db->get_where('data_sanksi',array('id'=>$id));
            return $query_by_id;
        }

        function selectByNIP($nip){
            $query_by_nip = $this->db->get_where('data_sanksi',array('nip'=>$nip));
            return $query_by_nip;
        }

        function deleteByID($id){
            $this->db->where('id',$id);
            $this->db->delete('data_sanksi');
        }

        function updateData($id,$array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->nip,
                  'jenis_sanksi'=>$this->jenis_sanksi,
                  'no_sk'=>$this->no_sk,
                  'tanggal_surat'=>$this->tanggal_surat,
                  'gambar'=>$this->gambar
                );
            }
            $this->db->where('id',$id);
            $this->db->update('data_sanksi',$array_data);
        }

    }
?>
