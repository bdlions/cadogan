<!DOCTYPE html>
<html lang="en" class="js no-flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Nazmul Hasan, Alamgir Kabir">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content=""/>
        <title><?php echo SITE_TITLE?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>resources/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>resources/css/styles.css">
        <script type="text/javascript" src="<?php echo base_url() ?>resources/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>resources/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php //$this->load->view("admin/templates/sections/admin_header");?>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="left-nav">
                        <ul id="left-nav">
                            <li id="home">
                                <a href="#">Home</a>
                                <ul>
                                    <li id="info"><a href="<?php echo base_url()?>admin/home">Info</a></li>
                                    <li id="links"><a href="<?php echo base_url()?>admin/home/link">Link</a></li>
                                    <li id="address"><a href="<?php echo base_url()?>admin/home/address">Address</a></li>
                                </ul>
                            </li>
                            <li id="items">
                                <a href="#">Items</a>
                                <ul>
                                    <li id="menu"><a href="<?php echo base_url()?>admin/menu">Menu</a></li>
                                    <li id="submenu"><a href="<?php echo base_url()?>admin/submenu">Sub Menu</a></li>
                                    <li id="page"><a href="<?php echo base_url()?>admin/page">Page</a></li>
                                </ul>
                            </li>
                            <li id="images">
                                <a href="#">Images</a>
                                <ul>
                                    <li id="icon"><a href="<?php echo base_url()?>admin/image/icons">Icon</a></li>
                                    <li id="submenu"><a href="<?php echo base_url()?>admin/image/show_all_gallery_images">Gallery Image</a></li>
                                </ul>
                            </li>
                            <li id="feedback">
                                <a href="<?php echo base_url()?>admin/feedback">Feedback</a>                                
                            </li>
                            <li id="logout">
                                <a href="<?php echo base_url()?>admin/auth/logout">Log out</a>                                
                            </li>                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-10 column">
                    <div class="row">
                        <?php echo $contents; ?>
                    </div>
                </div>
         
            </div>
        </div>
    </body>
</html>