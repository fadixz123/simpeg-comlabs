<center>
    <script>
        $(function() {
                $( ".date_picker" ).datepicker({dateFormat:'yy-mm-dd'});
        });
    </script>
    <form method="post" action="<?php echo base_url()?>admin/con_data_diklat/op_edit/<?php echo $mode?>">
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
                    Nama Pelatihan
                </td>
                <td>
                    <input type="text" name="nama_pelatihan" id="nama_pelatihan" value="<?php echo $nama_pelatihan?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Jenis Pelatihan
                </td>
                <td>
                    <input type="text" name="jenis_pelatihan" id="jenis_pelatihan" value="<?php echo $jenis_pelatihan?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Status Lulus
                </td>
                <td>
                    <input type="text" name="status_lulus" id="status_lulus" value="<?php echo $status_lulus?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Tanggal Mulai
                </td>
                <td>
                    <input class="date_picker" type="text" name="tgl_mulai" id="tgl_mulai" value="<?php echo $tgl_mulai?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Tanggal Selesai
                </td>
                <td>
                    <input class="date_picker" type="text" name="tgl_selesai" id="tgl_selesai" value="<?php echo $tgl_selesai?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Rangking
                </td>
                <td>
                    <input type="text" name="rangking" id="rangking" value="<?php echo $rangking?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Predikat
                </td>
                <td>
                    <input type="text" name="predikat" id="predikat" value="<?php echo $predikat?>"/>
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