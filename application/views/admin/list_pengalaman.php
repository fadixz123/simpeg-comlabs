<h1 align="center">
    List Data pengalaman Pegawai dengan NIP <?php echo $nip?>
</h1>
<center>
    <?php echo anchor(base_url() . 'admin/con_data_pengalaman/edit/'.$nip,'Tambah Data pengalaman')?>
    <br />
    <?php echo anchor(base_url() . 'admin/con_data_pegawai/view/'.$nip,'Kembali')?>
</center>
<br/>
<?php
    echo $content;
?>
