<?php
    class Model_data_pribadi extends CI_Model{
        public $nip;
        public $tempat_lahir;
        public $tgl_lahir;
        public $agama;
        public $status_nikah;
        public $jum_tanggungan;
        public $alamat;
        public $nama_bapak;
        public $nama_ibu;
        public $jenis_kelamin;
        
        function __construct() {
            parent::__construct();
        }
        
        function insert($array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->nip,
                  'tempat_lahir'=>$this->tempat_lahir,
                  'tgl_lahir'=>$this->tgl_lahir,
                  'agama'=>$this->agama,
                  'status_nikah'=>$this->status_nikah,
                  'jum_tanggungan'=>$this->jum_tanggungan,
                  'alamat'=>$this->alamat,
                  'nama_bapak'=>$this->nama_bapak,
                  'nama_ibu'=>$this->nama_ibu,
                  'jenis_kelamin'=>$this->jenis_kelamin,
                );
            }
            $this->db->insert('data_pribadi',$array_data);
        }
        
        function selectAll(){
            $query_all = $this->db->get('data_pribadi');
            return $query_all;
        }
        
        function selectByNIP($nip){
            $query_by_nip = $this->db->get_where('data_pribadi',array('nip'=>$nip));
            return $query_by_nip;
        }
        
        function selectByStatus($status){
            $query_by_status = $this->db->get_where('data_pribadi',array('status'=>$status));
            return $query_by_status;
        }
        
        function selectByGol($golongan){
            $query_by_golongan = $this->db->get_where('data_pribadi',array('golongan'=>$golongan));
            return $query_by_golongan;
        }
        
        function deleteByNIP($nip){
            $this->db->where('nip',$nip);
            $this->db->delete('data_pribadi');
        }
        
        function updateData($nip,$array_data=''){
            if($array_data ==''){
                $array_data = array(
                  'nip'=>$this->$nip,
                  'tempat_lahir'=>$this->tempat_lahir,
                  'tgl_lahir'=>$this->tgl_lahir,
                  'agama'=>$this->agama,
                  'status_nikah'=>$this->status_nikah,
                  'jum_tanggungan'=>$this->jum_tanggungan,
                  'alamat'=>$this->alamat,
                  'nama_bapak'=>$this->nama_bapak,
                  'nama_ibu'=>$this->nama_ibu,
                  'jenis_kelamin'=>$this->jenis_kelamin,
                );
            }
            $this->db->where('nip',$nip);
            $this->db->update('data_pribadi',$array_data);
        }
        
    }
?>