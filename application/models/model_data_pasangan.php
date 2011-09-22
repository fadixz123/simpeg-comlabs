<?php
    class Model_data_pasangan extends CI_Model{
        public $nip;
        public $nama_pasangan;
        public $tempat_lahir;
        public $tgl_lahir;
        public $agama;
        public $status_nikah;
        public $jum_tanggungan;
        public $alamat;
        public $nama_bapak;
        public $nama_ibu;
        public $pendidikan_terakhir;
        public $tgl_nikah;
        public $tgl_cerai;
        
        function __construct() {
            parent::__construct();
        }
        
        function insert($array_data=''){
            if($array_data ==''){
                $array_data = array(
                    'nip'=>$this->nip,
                    'nama_pasangan'=>$this->nama_pasangan,
                    'tempat_lahir'=>$this->tempat_lahir,
                    'tgl_lahir'=>$this->tgl_lahir,
                    'agama'=>$this->agama,
                    'status_nikah'=>$this->status_nikah,
                    'jum_tanggungan'=>$this->jum_tanggungan,
                    'alamat'=>$this->alamat,
                    'nama_bapak'=>$this->nama_bapak,
                    'nama_ibu'=>$this->nama_ibu,
                    'pendidikan_terakhir'=>$this->pendidikan_terakhir,
                    'tgl_nikah'=>$this->tgl_nikah,
                    'tgl_cerai'=>$this->tgl_cerai
                );
            }
            $this->db->insert('data_pasangan',$array_data);
        }
        
        function selectAll(){
            $query_all = $this->db->get('data_pasangan');
            return $query_all;
        }
        
        function selectByNIP($nip){
            $query_by_nip = $this->db->get_where('data_pasangan',array('nip'=>$nip));
            return $query_by_nip;
        }
        
        function deleteByNIP($nip){
            $this->db->where('nip',$nip);
            $this->db->delete('data_pasangan');
        }
        
        function updateData($nip,$array_data=''){
            if($array_data ==''){
                $array_data = array(
                    'nip'=>$this->nip,
                    'nama_pasangan'=>$this->nama_pasangan,
                    'tempat_lahir'=>$this->tempat_lahir,
                    'tgl_lahir'=>$this->tgl_lahir,
                    'agama'=>$this->agama,
                    'status_nikah'=>$this->status_nikah,
                    'jum_tanggungan'=>$this->jum_tanggungan,
                    'alamat'=>$this->alamat,
                    'nama_bapak'=>$this->nama_bapak,
                    'nama_ibu'=>$this->nama_ibu,
                    'pendidikan_terakhir'=>$this->pendidikan_terakhir,
                    'tgl_nikah'=>$this->tgl_nikah,
                    'tgl_cerai'=>$this->tgl_cerai  
                );
            }
            $this->db->where('nip',$nip);
            $this->db->update('data_pasangan',$array_data);
        }
        
    }
?>
