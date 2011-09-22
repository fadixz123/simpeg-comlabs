<h2>
    Data Pasangan <?php echo $nip?>
</h2>
<br/>
Nama : <?php echo $nama_pasangan?>
<br/>
Tempat Lahir : <?php echo $tempat_lahir?>
<br/>
Tanggal Lahir : <?php echo $tgl_lahir?>
<br/>
Agama : <?php echo $agama?>
<br/>
Status Nikah : <?php echo $status_nikah?>
<br/>
Jumlah Tanggungan : <?php echo $jum_tanggungan?>
<br/>
Alamat : <?php echo $alamat?>
<br/>
Nama Bapak : <?php echo $nama_bapak?>
<br/>
Nama Ibu : <?php echo $nama_ibu?>
<br/>
Pendidikan Terakhir : <?php echo $pendidikan_terakhir?>
<br/>
Tanggal Cerai : <?php echo $tgl_cerai?>
<br/>
Tanggal Nikah : <?php echo $tgl_nikah?>
<br/>
<a href="<?php echo base_url() ?>admin/con_data_pasangan/edit/<?php echo $nip ?>">edit</a>
<br/>
<a href="<?php echo base_url() ?>admin/con_data_pasangan/warning_delete/<?php echo $nip ?>">delete</a>
<br/>
<a href="<?php echo base_url() ?>admin/con_data_pegawai">kembali</a>
<br/>