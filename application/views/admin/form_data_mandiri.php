<center>
    <script>
        $(function() {
                $( ".date_picker" ).datepicker({dateFormat:'yy-mm-dd'});
        });
    </script>
    <form method="post" action="<?php echo base_url()?>admin/con_data_dev_mandiri/op_edit/<?php echo $mode?>">
        <table width="366" border="1">
            <tr>
                <td width="150">
                    NIP
                </td>
                <td width="200">
                    <?php echo $nip?>
                    <?php echo '<input type="hidden" name="id" id="id" value="'.$id.'" />'?>  
                    <?php echo '<input type="hidden" name="nip" id="nip" value="'.$nip.'" />'?>  
                </td>
            </tr>
            <tr>
                <td>
                    Nama Kursus
                </td>
                <td>
                    <input type="text" name="nama_kursus" id="nama_kursus" value="<?php echo $nama_kursus?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Jenis Kursus
                </td>
                <td>
                    <input type="text" name="jenis_kursus" id="jenis_kursus" value="<?php echo $jenis_kursus?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    Penyelenggara
                </td>
                <td>
                    <input type="text" name="penyelenggara" id="penyelenggara" value="<?php echo $penyelenggara?>"/>
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
                    No Sertifikat
                </td>
                <td>
                    <input type="text" name="no_sertifikat" id="no_sertifikat" value="<?php echo $no_sertifikat?>"/>
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