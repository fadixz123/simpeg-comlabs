<h1 align="center">
    List Data Diklat Pegawai dengan NIP <?php echo $nip?>
</h1>
<center>
    <?php echo anchor(base_url() . 'admin/con_data_diklat/edit/'.$nip,'Tambah Data Diklat')?>
    <br />
    <?php echo anchor(base_url() . 'admin/con_data_pegawai/view/'.$nip,'Kembali')?>
</center>
<br/>
<?php
    echo $content;
?>
