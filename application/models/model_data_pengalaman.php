<?php
    class Model_data_pengalaman extends CI_Model{
        public $nip;
        public $pengalaman;
        public $tahun;

        function __construct() {
            parent::__construct();
        }

        function insert($array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->nip,
                  'pengalaman'=>$this->pengalaman,
                  'tahun'=>$this->tahun
                );
            }
            $this->db->insert('data_pengalaman',$array_data);
        }

        function selectAll(){
            $query_all = $this->db->get('data_pengalaman');
            return $query_all;
        }

        function selectByID($id){
            $query_by_id = $this->db->get_where('data_pengalaman',array('id'=>$id));
            return $query_by_id;
        }

        function selectByNIP($nip){
            $query_by_nip = $this->db->get_where('data_pengalaman',array('nip'=>$nip));
            return $query_by_nip;
        }

        function deleteByID($id){
            $this->db->where('id',$id);
            $this->db->delete('data_pengalaman');
        }

        function updateData($id,$array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->nip,
                  'pengalaman'=>$this->pengalaman,
                  'tahun'=>$this->tahun
                );
            }
            $this->db->where('id',$id);
            $this->db->update('data_pengalaman',$array_data);
        }

    }
?>
