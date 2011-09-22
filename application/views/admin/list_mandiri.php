<h1 align="center">
    List Data Pengembangan Diri Pegawai dengan NIP <?php echo $nip?>
</h1>
<center>
    <?php echo anchor(base_url() . 'admin/con_data_dev_mandiri/edit/'.$nip,'Tambah Data Pengembangan Mandiri')?>
    <br />
    <?php echo anchor(base_url() . 'admin/con_data_pegawai/view/'.$nip,'Kembali')?>
</center>
<br/>
<?php
    echo $content;
?>
