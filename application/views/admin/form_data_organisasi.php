<center>
    <script>
        $(function() {
                $( ".date_picker" ).datepicker({dateFormat:'yy-mm-dd'});
        });
    </script>
    <form method="post" action="<?php echo base_url()?>admin/con_data_organisasi/op_edit/<?php echo $mode?>">
        <table width="366" border="1">
            <tr>
                <td width="150">
                    NIP
                </td>
                <td width="200">
                    <?php echo $nip?>
                    <?php echo '<input type="hidden" name="nip" id="nip" value="'.$nip.'" />'?>
                    <?php if($mode=='edit') {?>
                        <?php echo '<input type="hidden" name="id" id="id" value="'.$id.'" />'?>  
                    <?php }?> 
                </td>
            </tr>
            <tr>
                <td>
                    Nama Organisasi
                </td>
                <td>
                    <input type="text" name="nama_org" id="nama_org" value="<?php echo $nama_org?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Jenis
                </td>
                <td>
                    <input type="text" name="jenis" id="jenis" value="<?php echo $jenis?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td>
                    <input type="text" name="alamat" id="alamat" value="<?php echo $alamat?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Tahun Masuk
                </td>
                <td>
                    <input type="text" name="thn_masuk" id="thn_masuk" value="<?php echo $thn_masuk?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Tahun Keluar
                </td>
                <td>
                    <input type="text" name="thn_keluar" id="thn_keluar" value="<?php echo $thn_keluar?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Honor
                </td>
                <td>
                    <input type="text" name="honor" id="honor" value="<?php echo $honor?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Jabatan
                </td>
                <td>
                    <input type="text" name="jabatan" id="jabatan" value="<?php echo $jabatan?>"/>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div align="center">
                        <input type="submit" value="Submit" />
                        &nbsp;
                        <input type="reset"  value="Reset" />
                    </div>
                </td>
            </tr>
        </table>
    </form>
</center>