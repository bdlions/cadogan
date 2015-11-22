<!--contact us content-->
<div class="row">
    <div class="col-md-3">
        <aside>
            <div class="lhmenu">
                <h5>Menu</h5>
                <ul class="clearfix">
                    <li class="page_item page-item-6 current_page_item">
                        <a href="<?php echo base_url().'user/contact_us'?>">Contact us</a>
                    </li>
                </ul>
            </div>				
        </aside>
    </div>
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-6">
                <ul class="contact-details">
                    <li><b><?php echo $address_info['title']?></b></li>
                    <li><?php echo $address_info['street']?></li>
                    <li><?php echo $address_info['city']?></li>
                    <li><?php echo $address_info['post_code']?></li>
                    <li>T: <?php echo $address_info['telephone']?></li>
                    <li>F: <?php echo $address_info['fax']?></li>
                    <li>E: <?php echo $address_info['email']?></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h4><b>Contact Form</b></h4>
                <form >
                    <div class="row">
                        <div class="col-md-12">
                            <label>Name*</label>
                        </div>
                    </div>
                    <div class="row  form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Email*</label>
                        </div>
                    </div>
                    <div class="row  form-group">
                        <div class="col-md-12">
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Phone</label>
                        </div>
                    </div>
                    <div class="row  form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Enquiry</label>
                        </div>
                    </div>
                    <div class="row  form-group">
                        <div class="col-md-12">
                            <textarea style="resize: none; width: 100%;"></textarea>
                        </div>
                    </div>
                    <div class="row  form-group">
                        <div class="col-md-offset-10 col-md-2">
                            <input type="submit" class="btn btn-default form-control" value="Send">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>