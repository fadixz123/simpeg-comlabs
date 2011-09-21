<center>
    <script>
        $(function() {
                $( ".date_picker" ).datepicker({dateFormat:'yy-mm-dd'});
        });
    </script>
    <form method="post" action="<?php echo base_url()?>admin/con_data_pegawai/op_edit/<?php echo $mode?>">
        <table width="366" border="1">
            <tr>
                <td width="150">
                    NIP
                </td>
                <td width="200">
                    <?php if($mode=='tambah') {?>
                        <input name="nip" type="text" id="nip" value="<?php echo $nip?>" />
                    <?php } else if($mode=='edit') {?>
                        <?php echo $nip?>
                        <?php echo '<input type="hidden" name="nip" id="nip" value="'.$nip.'" />'?>
                    <?php }?>    
                </td>
            </tr>
            <tr>
                <td>
                    Nama
                </td>
                <td>
                    <input type="text" name="nama" id="nama" value="<?php echo $nama?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Tgl Angkat Capeg
                </td>
                <td>
                    <input class="date_picker" type="text" name="tgl_angkat_capeg" id="tgl_angkat_capeg" value="<?php echo $tgl_capeg?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Tgl Angkat Peg
                </td>
                <td>
                    <input class="date_picker" type="text" name="tgl_angkat_peg" id="tgl_angkat_peg" value="<?php echo $tgl_peg?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Tgl Menjabat
                </td>
                <td>
                    <input class="date_picker" type="text" name="tgl_menjabat" id="tgl_menjabat" value="<?php echo $tgl_jabat?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Status
                </td>
                <td>
                    <input type="text" name="status" id="status" value="<?php echo $status?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Golongan
                </td>
                <td>
                    <input type="text" name="golongan" id="golongan" value="<?php echo $golongan?>"/>
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