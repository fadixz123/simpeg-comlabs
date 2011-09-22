<h1 align="center">
    List Data Organisasi Pegawai dengan NIP <?php echo $nip?>
</h1>
<center>
    <?php echo anchor(base_url() . 'admin/con_data_organisasi/edit/'.$nip,'Tambah Data Organisasi')?>
    <br />
    <?php echo anchor(base_url() . 'admin/con_data_pegawai/view/'.$nip,'Kembali')?>
</center>
<br/>
<?php
    echo $content;
?>
