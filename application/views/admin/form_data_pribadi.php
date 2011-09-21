<center>
    <script>
        $(function() {
                $( ".date_picker" ).datepicker({dateFormat:'yy-mm-dd'});
        });
    </script>
    <form method="post" action="<?php echo base_url()?>admin/con_data_pegawai/op_edit_pribadi/<?php echo $mode?>">
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
                   Tempat Lahir
                </td>
                <td>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" value="<?php echo $tempat_lahir?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Tanggal Lahir
                </td>
                <td>
                    <input class="date_picker" type="text" name="tgl_lahir" id="tgl_lahir" value="<?php echo $tgl_lahir?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Agama
                </td>
                <td>
                    <input type="text" name="agama" id="agama" value="<?php echo $agama?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Status Nikah
                </td>
                <td>
                    <select name="status_nikah" id="status_nikah">
                        <option value="MENIKAH" <?php if($status_nikah=="MENIKAH") echo "selected" ?>>MENIKAH</option>
                        <option value="TIDAK MENIKAH" <?php if($status_nikah=="TIDAK MENIKAH") echo "selected" ?>>TIDAK MENIKAH</option>
                        <option value="DUDA/JANDA" <?php if($status_nikah=="DUDA/JANDA") echo "selected" ?>>DUDA/JANDA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Jumlah Tanggungan
                </td>
                <td>
                    <input type="text" name="jum_tanggungan" id="jum_tanggungan" value="<?php echo $jum_tanggungan?>"/>
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
                    Nama Bapak
                </td>
                <td>
                    <input type="text" name="nama_bapak" id="nama_bapak" value="<?php echo $nama_bapak?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Nama Ibu
                </td>
                <td>
                    <input type="text" name="nama_ibu" id="nama_ibu" value="<?php echo $nama_ibu?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Jenis Kelamin
                </td>
                <td>
                    <select name="jenis_kelamin" id="jenis_kelamin">
                        <option value="PRIA" <?php if($status_nikah=="PRIA") echo "selected" ?>>PRIA</option>
                        <option value="WANITA" <?php if($status_nikah=="WANITA") echo "selected" ?>>WANITA</option>
                    </select>
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