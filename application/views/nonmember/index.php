<div class="row">
    <div class="col-md-12">
        <div class="welcomemsg">
            <span class="black">Welcome to</span> <span class="blueish bold">Real</span> <span class="redish bold">State</span> <span class="blueish">Limited</span>
        </div>
        <div id="carousel_slider" class="carousel slide slider_border" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel_slider" data-slide-to="0" class="active"></li>
                <li data-target="#carousel_slider" data-slide-to="1"></li>
                <li data-target="#carousel_slider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="resources/images/slide1.jpg" >
                    <!--<div class="carousel-caption"></div>-->
                </div>
                <div class="item">
                    <img src="resources/images/slide2.jpg" >
                    <!--  <div class="carousel-caption"></div>-->
                </div>
                <div class="item">
                    <img src="resources/images/slide3.jpg" >
                    <!--<div class="carousel-caption"></div>-->
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel_slider" role="button" data-slide="prev">
                <span class="tp-leftarrow " aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="right carousel-control" href="#carousel_slider" role="button" data-slide="next">
                <span class="tp-rightarrow" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div>
    </div>
</div>	
<div class="row">
    <div class="col-md-9">
        <article>
            <h1><?php echo $home_page_info['title'] ?></h1>
            <p>
                <?php echo $home_page_info['description'] ?>
            </p>

        </article>
    </div>
    <div class="col-md-3">
        <aside>
            <div class="contact">
                <h5>Contact Us</h5>
                <p><?php echo $address_info['telephone'] ?></p>
                <p><a class="cursor_pointer"><?php echo $address_info['email'] ?></a></p>
            </div>				
        </aside>
    </div>
</div>
<div class="row col-md-12">
    <p><?php echo $home_page_info['links_title'] ?></p>
</div>
<div class="row form-group">
    <?php foreach ($link_list as $link_info) { ?>
        <div class="col-md-3">
            <div class="row building_servey">
                <div class="col-md-4">
                    <img class="img-responsive" src="<?php echo base_url(); ?>resources/images/building_servey.png">
                </div>
                <div class="col-md-8">
                    <a href="<?php echo base_url() . 'user/page/' . $link_info['link']; ?>" class="cursor_pointer">
                        <h5><?php echo $link_info['title']; ?></h5>
                        <p><?php echo $link_info['summary']; ?></p>
                    </a>
                </div>
            </div>
        </div>
    <?php } ?>
    <!--    <div class="col-md-3">
            <div class="development_legis">
                <a class="cursor_pointer">
                    <h5>Development &amp; Legislation</h5>
                    <p>Party walls and building legislation</p>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="design_construc">
                <a class="cursor_pointer">
                    <h5>Design &amp; Construction</h5>
                    <p>Refurbishment, planning &amp; extensions</p>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="professional_consult">
                <a class="cursor_pointer">
                    <h5>Professional Consultancy</h5>
                    <p>Dilapidations and Expert Witness</p>
                </a>
            </div>
        </div>-->
</div>
