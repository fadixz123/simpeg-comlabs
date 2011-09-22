<h1 align="center">
    Apakah anda yakin untuk menghapus data diklat pegawai dengan NIP <?php echo $nip?> ?
</h1>
<br/>
<h2 align="center">
    <?php
        echo 
        anchor(base_url() . 'admin/con_data_diklat/delete/'.$nip.'/'.$id,'Ya').
        '&nbsp;&nbsp;&nbsp;'.
        anchor(base_url() . 'admin/con_data_diklat/list_all/'.$nip,'Tidak')        
    ?>
</h2>
