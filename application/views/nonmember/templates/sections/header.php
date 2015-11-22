<div class="row paddin_over_top_20px">
    <div class="col-md-6 form-group">
        <?php foreach($logo_list as $logo_info){
            if($logo_info['type_id'] == LOGO_TYPE_ID_HEADER){
        ?>
                <img class="img-responsive" src="<?php echo base_url()?>resources/images/<?php echo $logo_info['img']?>" alt="Real State Logo" height="68" width="380"> 
        <?php 
           } 
        } 
        ?>
    </div>
    <div class="col-md-6">
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
                <div class="float_phone"><?php echo $address_info['telephone']?></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <ul id="menu-main-menu" class="menu list-unstyled">
            <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-16"><a href="<?php echo base_url()?>">Home</a></li>
            <?php foreach($menu_list as $menu_info) { ?>
            <li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17"><a href="<?php echo base_url().'user/menu/'.$menu_info['menu_id']?>"><?php echo $menu_info['title']?></a></li>
            <?php } ?>
            <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="<?php echo base_url().'user/contact_us'?>">Contact Us</a></li>
        </ul>
    </div>
</div>