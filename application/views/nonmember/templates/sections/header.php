<div class="row paddin_over_top_20px small-and-extra-small-device-display">
    <div class="col-sm-6 col-md-6 form-group">
        <?php
        foreach ($logo_list as $logo_info) {
            if ($logo_info['type_id'] == LOGO_TYPE_ID_HEADER) {
                ?>
                <a href="http://cadoganmcqueen.co.uk/">
                    <img style="max-height:90px!important; max-width:380px!important;" class="img-responsive" src="<?php echo base_url() ?>resources/images/<?php echo $logo_info['img'] ?>" alt="Cadogan Mcqueen Logo"> 
                </a>        
                <?php
            }
        }
        ?>
    </div>
    <div class="col-sm-6 col-md-6">
        <!--                            <div class="row">
                    <div class="col-md-12">
                        <ul class="list-unstyled list-inline custom">
                            <li> <a href="" target="_blank"><img class="img-responsive img-circle" src="resources/images/pinterest.png"></a></li>
                            <li><a href="" target="_blank"><img class="img-responsive img-circle" src="resources/images/facebook.png" ></a> </li>
                            <li><a href="" target="_blank"><img class="img-responsive img-circle" src="resources/images/twitter.png" ></a> </li>
                            <li><a href="" target="_blank"><img class="img-responsive img-circle" src="resources/images/linkedin.png" ></a> </li>
                        </ul>
                    </div>
                </div>-->
        <div class="row">
            <div class="col-md-12">
                <div class="float_phone">London - 02033978425</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="float_phone">Luton - 01582227280</div> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="float_phone">Coventry - 02477220191</div>
            </div>
        </div>
    </div>
</div>
<div class="row small-and-extra-small-device-display">
    <div class="col-md-12">
        <ul id="menu-main-menu" class="menu list-unstyled">
            <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page <?php if ($menu_id == MENU_ID_HOME) echo "current-menu-item page_item page-item-2 current_page_item" ?> menu-item-16"><a href="<?php echo base_url() ?>">Home</a></li>
            <?php foreach ($menu_list as $menu_info) { ?>
                <li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page <?php if ($menu_id == $menu_info['menu_id']) echo "current-menu-item page_item page-item-2 current_page_item" ?> menu-item-17"><a href="<?php echo base_url() . 'user/menu/' . $menu_info['menu_id'] ?>"><?php echo $menu_info['title'] ?></a></li>
            <?php } ?>
            <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page <?php if ($menu_id == MENU_ID_CONTACT_US) echo "current-menu-item page_item page-item-2 current_page_item" ?> menu-item-21"><a href="<?php echo base_url() . 'user/contact_us' ?>">Contact Us</a></li>
        </ul>
    </div>
</div>
<div class="row medium-and-large-device-display">
    <div class="col-md-12">
        <nav class="navbar navbar-default navbar-default-custom">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle-custom" data-toggle="collapse" data-target="#concierge-navbar-menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<div class="brand-text"> <a class="brand-text-anchor" href="http://cadoganmcqueen.co.uk/">Cadogan Mcqueen</a></div>-->
                     <a href=""><img class="logo-img" src="<?php echo base_url() ?>resources/images/CADOGAN_transparent_logo.png"></a>
                </div>

                <div class="collapse navbar-collapse navbar-collapse-custom" id="concierge-navbar-menu">
                    <ul id="menu-main-menu" class="menu list-unstyled nav navbar-nav">
                        <li id="menu-item-16" class="width menu-item menu-item-type-post_type menu-item-object-page <?php if ($menu_id == MENU_ID_HOME) echo "current-menu-item page_item page-item-2 current_page_item" ?> menu-item-16"><a href="<?php echo base_url() ?>">Home</a></li>
                        <?php foreach ($menu_list as $menu_info) { ?>
                            <li id="menu-item-17" class="width menu-item menu-item-type-post_type menu-item-object-page <?php if ($menu_id == $menu_info['menu_id']) echo "current-menu-item page_item page-item-2 current_page_item" ?> menu-item-17"><a href="<?php echo base_url() . 'user/menu/' . $menu_info['menu_id'] ?>"><?php echo $menu_info['title'] ?></a></li>
                        <?php } ?>
                        <li id="menu-item-21" class="width menu-item menu-item-type-post_type menu-item-object-page <?php if ($menu_id == MENU_ID_CONTACT_US) echo "current-menu-item page_item page-item-2 current_page_item" ?> menu-item-21"><a href="<?php echo base_url() . 'user/contact_us' ?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>