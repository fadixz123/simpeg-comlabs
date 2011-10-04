<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link type="text/css" href="<?php echo base_url(); ?>assets/css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="Stylesheet" />	
        <link type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" rel="Stylesheet" />	
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.6.4.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.8.16.custom.min.js"></script>



        <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/favicon.png" />
        <link href="<?php echo base_url(); ?>assets/css/header.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/footer.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/mainPage.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/miniGallery.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/ticker-style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/font/stylesheet.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.6.4.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.cycle.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/menu.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/hoverIntent.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.ticker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/newsTicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jqclock_201.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/login.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/scretcher.js"></script>   

        <title>
            <?php
            if (isset($title) && $title != '')
                echo $title;
            else
                echo 'Simpeg';
            ?>
        </title>
    </head>
    <body>
        <div class="header">
            <div class="topbar">
                <div class="loginBar">
                    <form>
                        <span class="message">Selamat datang,silakan login!</span>
                    </form>
                </div>
                <div class="menu"><!-- menu utama -->
                    <div id="highligt">
                        <img src="<?php echo base_url(); ?>assets/img/miniGalerry/highlights.png" width="215" height="33" />
                    </div><!-- senter di belakang menu kalo di hover, di control sama menu.js -->
                    <ul class="mainMenu">
                        <li class="mainNav"><a href="#">Beranda</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="headContent">
            <div class="logoPlace">
                <img src="<?php echo base_url()?>assets/img/logo.png" width="150" height="147" />
                <div class="textLogo">
                    <h1>Sistem Informasi</h1>
                    <h2>Manajemen</h2>
                    <h2>Kepegawaian</h2>
                    <br/>
                    <h3>PT. Agronesia</h3>
                </div>
            </div>
        </div>