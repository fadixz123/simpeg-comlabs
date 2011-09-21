<center>
    <script>
        $(function() {
                $( ".date_picker" ).datepicker({dateFormat:'yy-mm-dd'});
        });
    </script>
    <form method="post" action="<?php echo base_url()?>admin/con_data_pendidikan_terakhir/op_edit/<?php echo $mode?>">
        <table width="366" border="1">
            <tr>
                <td width="150">
                    NIP
                </td>
                <td width="200">
                    <?php if($mode=='insert') {?>
                    <input name="nip" type="text" id="nip" value="<?php echo $nip?>" disabled/>
                    <input type="hidden" name="nip" id="nip" value="<?php echo $nip?>"/>
                    <?php } else if($mode=='edit') {?>
                        <?php echo $nip?>
                        <?php echo '<input type="hidden" name="nip" id="nip" value="'.$nip.'" disabled />'?>
                    <?php }?>
                </td>
            </tr>
            <tr>
                <td>
                   Jenjang
                </td>
                <td>
                    <input type="text" name="jenjang" id="jenjang" value="<?php echo $jenjang?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Nama Tempat
                </td>
                <td>
                    <input  type="text" name="nama_tempat" id="nama_tempat" value="<?php echo $nama_tempat?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Tahun Masuk
                </td>
                <td>
                    <input type="text" name="tahun_masuk" id="tahun_masuk" value="<?php echo $tahun_masuk?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Tahun Lulus
                </td>
                <td>
                    <input type="text" name="tahun_lulus" id="tahun_lulus" value="<?php echo $tahun_lulus?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Gelar
                </td>
                <td>
                    <input type="text" name="gelar" id="gelar" value="<?php echo $gelar?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Nomor Ijazah
                </td>
                <td>
                    <input type="text" name="no_ijasah" id="no_ijasah" value="<?php echo $no_ijasah?>"/>
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