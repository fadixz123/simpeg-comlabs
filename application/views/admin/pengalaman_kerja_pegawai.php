<h1 align="center">
    List Data Pengalaman Kerja Pegawai dengan NIP <?php echo $nip?>
</h1>
<center>
    <?php echo anchor(base_url() . 'admin/con_data_pengalaman_kerja/edit/'.$nip,'Tambah Data Pengalaman Kerja')?>
    <br />
    <?php echo anchor(base_url() . 'admin/con_data_pegawai/view/'.$nip,'Kembali')?>
</center>
<br/>
<?php
    echo $content;
?>
