<?php
    class Model_data_pengalaman_kerja extends CI_Model{
        public $nip;
        public $tempat_kerja;
        public $alamat;
        public $tahun_masuk;
        public $tahun_keluar;
        public $gaji_terakhir;
        public $jabatan_terakhir;

        function __construct() {
            parent::__construct();
        }

        function insert($array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->nip,
                  'tempat_kerja'=>$this->tempat_kerja,
                  'alamat'=>$this->alamat,
                  'tahun_masuk'=>$this->tahun_masuk,
                  'tahun_keluar'=>$this->tahun_keluar,
                  'gaji_terakhir'=>$this->gaji_terakhir,
                  'jabatan_terakhir'=>$this->jabatan_terakhir
                );
            }
            $this->db->insert('data_pengalaman_kerja',$array_data);
        }

        function selectAll(){
            $query_all = $this->db->get('data_pengalaman_kerja');
            return $query_all;
        }

        function selectByNIP($nip){
            $query_by_nip = $this->db->get_where('data_pengalaman_kerja',array('nip'=>$nip));
            return $query_by_nip;
        }

        function selectByID($id){
            $query_by_id = $this->db->get_where('data_pengalaman_kerja',array('id'=>$id));
            return $query_by_id;
        }

        function deleteByNIP($nip){
            $this->db->where('nip',$nip);
            $this->db->delete('data_pengalaman_kerja');
        }

        function deleteByID($id){
            $this->db->where('ID',$id);
            $this->db->delete('data_pengalaman_kerja');
        }

        function updateData($ID,$array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->nip,
                  'tempat_kerja'=>$this->tempat_kerja,
                  'alamat'=>$this->alamat,
                  'tahun_masuk'=>$this->tahun_masuk,
                  'tahun_keluar'=>$this->tahun_keluar,
                  'gaji_terakhir'=>$this->gaji_terakhir,
                  'jabatan_terakhir'=>$this->jabatan_terakhir
                );
            }
            $this->db->where('ID',$ID);
            $this->db->update('data_pengalaman_kerja',$array_data);
        }

    }
?>
