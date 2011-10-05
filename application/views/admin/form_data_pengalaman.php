<center>
    <script>
        $(function() {
                $( ".date_picker" ).datepicker({dateFormat:'yy-mm-dd'});
        });
    </script>
    <form method="post" action="<?php echo base_url()?>admin/con_data_pengalaman/op_edit/<?php echo $mode?>">
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
                    Pengalaman
                </td>
                <td>
                    <input type="text" name="pengalaman" id="pengalaman" value="<?php echo $pengalaman?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Tahun
                </td>
                <td>
                    <input type="text" name="tahun" id="tahun" value="<?php echo $tahun?>"/>
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