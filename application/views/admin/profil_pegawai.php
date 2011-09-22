<h2>
    Data Pegawai
</h2>
NIP : <?php echo $nip?>
<br/>
Nama : <?php echo $nama?>
<br/>
Tanggal Pengangkatan Calon Pegawai : <?php echo $tgl_capeg?>
<br/>
Tanggal Pengangkatan Pegawai: <?php echo $tgl_peg?>
<br/>
Tanggal Menjabat: <?php echo $tgl_jabat?>
<br/>
Status : <?php echo $status?>
<br/>
Golongan : <?php echo $golongan?>
<br/>
<a href="<?php echo base_url() ?>admin/con_data_pegawai/edit/<?php echo $nip ?>">edit</a>

<h2>
    Profil Pegawai
</h2>
<?php
$mode="edit";
if(!$stat_data) $mode="insert";
?>
<br/>
Tempat Lahir : <?php if($stat_data) echo $tempat_lahir?>
<br/>
Tanggal Lahir : <?php if($stat_data) echo $tgl_lahir?>
<br/>
Agama : <?php if($stat_data) echo $agama?>
<br/>
Jumlah Tanggungan : <?php if($stat_data) echo $jum_tanggungan?>
<br/>
Alamat : <?php if($stat_data) echo $alamat?>
<br/>
Nama_Bapak : <?php if($stat_data) echo $nama_bapak?>
<br/>
Nama Ibu : <?php if($stat_data) echo $nama_ibu?>
<br/>
Jenis Kelamin : <?php if($stat_data) echo $jenis_kelamin?>
<br/>
<a href="<?php echo base_url() ?>admin/con_data_pegawai/edit_pribadi/<?php echo $nip."/".$mode ?>">edit</a>
<br />
<?php echo $pasangan ?>
<a href="<?php echo base_url() ?>admin/con_data_pendidikan_terakhir/view/<?php echo $nip ?>">Pendidikan Terakhir</a>
<br />
<a href="<?php echo base_url() ?>admin/con_data_pegawai">Lihat Semua Pegawai</a>
<br />
<a href="<?php echo base_url() ?>admin/con_data_organisasi/list_all/<?php echo $nip ?>">Lihat Data Organisasi</a>
<br />
<a href="<?php echo base_url() ?>admin/con_data_dev_mandiri/list_all/<?php echo $nip ?>">Lihat Data Pengembangan Mandiri</a>