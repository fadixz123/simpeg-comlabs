<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link type="text/css" href="<?php echo base_url(); ?>assets/css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="Stylesheet" />	
        <link type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" rel="Stylesheet" />	
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.6.4.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-1.8.16.custom.min.js"></script>
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