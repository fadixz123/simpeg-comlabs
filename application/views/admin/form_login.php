<center>
    <div class="contentIsi">
        <?php $this->load->view('admin/panel_kiri')?>
        <div class="isi">
            <div class="news">
                <br/>
                <br/>
                <br/>

                <form action="<?php echo base_url()?>admin/con_login_admin" method="post">
                    <br/>
                    <h1 align="center">LOGIN</h1>
                    <br/>
                    <table align="center" width="500">
                        <tr>
                            <td>Username : </td>
                            <td><input type="text" name="username" class="text" size="40" /></td>
                        </tr>
                        <tr>
                            <td>Password : </td>
                            <td><input type="password" name="password" class="text" size="40" /></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" class="button" value="Login" />
                                &nbsp;
                                <input type="reset" class="button" value="Reset" />
                            </td>
                        </tr>
                    </table>
                </form>
            </div>   
            <div class="news">
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
            </div>
        </div>
        <?php //$this->load->view('admin/panel_kanan')?>
    </div>
</center>