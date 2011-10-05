<center>
    <script>
        $(function() {
                $( ".date_picker" ).datepicker({dateFormat:'yy-mm-dd'});
        });
    </script>
    <form method="post" action="<?php echo base_url()?>admin/con_data_sanksi/op_edit/<?php echo $mode?>">
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
                    Jenis Sanksi
                </td>
                <td>
                    <select name="jenis_sanksi">
                        <option value="SANKSI RINGAN" <?php if($jenis_sanksi=="SANKSI RINGAN") echo "selected" ?>>Sanksi Ringan</option>
                        <option value="SANKSI SEDANG" <?php if($jenis_sanksi=="SANKSI SEDANG") echo "selected" ?>>Sanksi Sedang</option>
                        <option value="SANKSI BERAT" <?php if($jenis_sanksi=="SANKSI BERAT") echo "selected" ?>>Sanksi Berat</option>
                    </select>
                        
                </td>
            </tr>
            <tr>
                <td>
                    Nomor SK
                </td>
                <td>
                    <input type="text" name="no_sk" id="no_sk" value="<?php echo $no_sk?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Tanggal Surat
                </td>
                <td>
                    <input class="date_picker" type="text" name="tanggal_surat" id="tanggal_surat" value="<?php echo $tanggal_surat?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Gambar
                </td>
                <td>
                    <input type="text" name="gambar" id="gambar" value="<?php echo $gambar?>"/>
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