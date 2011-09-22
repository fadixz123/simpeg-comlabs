<center>
    <script>
        $(function() {
                $( ".date_picker" ).datepicker({dateFormat:'yy-mm-dd'});
        });
    </script>
    <form method="post" action="<?php echo base_url()?>admin/con_data_pasangan/op_edit/<?php echo $mode?>">
        <table width="366" border="1">
            <tr>
                <td width="150">
                    NIP
                </td>
                <td width="200">
                    <?php echo $nip?>
                    <?php echo '<input type="hidden" name="nip" id="nip" value="'.$nip.'" />'?>    
                </td>
            </tr>
            <tr>
                <td>
                    Nama Pasangan
                </td>
                <td>
                    <input type="text" name="nama_pasangan" id="nama_pasangan" value="<?php echo $nama_pasangan?>"/>
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
                    Tgl Lahir
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
                    <input type="text" name="status_nikah" id="status_nikah" value="<?php echo $status_nikah?>"/>
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
                    Pendidikan Terakhir
                </td>
                <td>
                    <input type="text" name="pendidikan_terakhir" id="pendidikan_terakhir" value="<?php echo $pendidikan_terakhir?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Tanggal Nikah
                </td>
                <td>
                    <input class="date_picker" type="text" name="tgl_nikah" id="tgl_nikah" value="<?php echo $tgl_nikah?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Tanggal Cerai
                </td>
                <td>
                    <input class="date_picker" type="text" name="tgl_cerai" id="tgl_cerai" value="<?php echo $tgl_cerai?>"/>
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