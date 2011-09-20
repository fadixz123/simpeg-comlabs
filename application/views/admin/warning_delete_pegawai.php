<h1 align="center">
    Apakah anda yakin untuk menghapus pegawai dengan NIP <?php echo $content?> ?
</h1>
<br/>
<h2 align="center">
    <?php
        echo 
        anchor(base_url() . 'admin/con_data_pegawai/delete/'.$content,'Ya').
        '&nbsp;&nbsp;&nbsp;'.
        anchor(base_url() . 'admin/con_data_pegawai','Tidak')        
    ?>
</h2>
