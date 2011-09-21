<h2>
    <?php if($stat_data) echo  $title ?>
</h2>
<?php
$mode="edit";
if(!$stat_data) $mode="insert";
?>
Jenjang Pendidikan : <?php if($stat_data) echo $jenjang?>
<br/>
Nama Sekolah/Perguruan Tinggi: <?php if($stat_data) echo $nama_tempat?>
<br/>
Angkatan Masuk: <?php if($stat_data) echo $tahun_masuk?>
<br/>
Angkatan Lulus: <?php if($stat_data) echo $tahun_lulus?>
<br/>
Gelar : <?php if($stat_data) echo $gelar?>
<br/>
Nomor Ijazah : <?php if($stat_data) echo $no_ijasah?>
<br/>
<a href="<?php echo base_url() ?>admin/con_data_pendidikan_terakhir/edit/<?php echo $nip."/".$mode ?>">edit</a>
<a href="<?php echo base_url() ?>admin/con_data_pendidikan_terakhir/warning_delete/<?php echo $nip?>">delete</a>
<a href="<?php echo base_url() ?>admin/con_data_pegawai/view/<?php echo $nip ?>">profile</a>