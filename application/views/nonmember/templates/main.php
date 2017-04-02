<!DOCTYPE html>
<html lang="en" class="js no-flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Dedicated for selling textile product">
        <meta name="author" content="Nazmul Hasan, Alamgir Kabir">
        <meta name="og:site_name" content="apurbobrand" />
        <meta name="og:title" content="buy and sales" />
        <meta name="og:description" content="soport website" />	
        <meta name="keywords" content=""/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>resources/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>resources/css/styles.css">
        <script type="text/javascript" src="<?php echo base_url() ?>resources/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>resources/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>resources/js/jquery.lavalamp.min.js"></script>
        <title><?php echo SITE_TITLE ?></title>
        <script type="text/javascript">
            $(document).ready(function() {
                $('li.current-menu-item').first().addClass('current');
            });
            $(function() {
                $("ul#menu-main-menu").lavaLamp({
                    speed: 500
                });
            });
            $(document).ready(function() {
                $('.carousel').carousel({interval: 7000});
            });
        </script>
    </head>
    <body class="home">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <?php $this->load->view('nonmember/templates/sections/header'); ?>
                    <?php echo $contents; ?>
                </div>
            </div>
        </div>        
        <?php $this->load->view('nonmember/templates/sections/footer'); ?>
    </body>

</html>