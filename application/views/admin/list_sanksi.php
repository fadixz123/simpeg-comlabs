<h1 align="center">
    List Data sanksi Pegawai dengan NIP <?php echo $nip?>
</h1>
<center>
    <?php echo anchor(base_url() . 'admin/con_data_sanksi/edit/'.$nip,'Tambah Data sanksi')?>
    <br />
    <?php echo anchor(base_url() . 'admin/con_data_pegawai/view/'.$nip,'Kembali')?>
</center>
<br/>
<?php
    echo $content;
?>
