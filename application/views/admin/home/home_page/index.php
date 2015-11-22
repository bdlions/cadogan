<h3>Update Home Page Info</h3>
<div class ="form-horizontal form-background top-bottom-padding">
    <?php echo form_open("admin/home/index/".$home_page_info['home_page_info_id'], array('id' => 'form_update_home_page_info', 'class' => 'form-horizontal')); ?>
    <div class="row">
        <div class ="col-md-8 margin-top-bottom">
            <div class ="row">
                <div class="col-md-4"></div>
                <div class="col-md-8"><?php echo $message; ?></div>
            </div>
            <div class="form-group">
                <label for="gallery_image_text" class="col-md-4 control-label requiredField">
                    Gallery Image Text *
                </label>
                <div class ="col-md-8">
                    <?php echo form_input($gallery_image_text+array('class'=>'form-control')); ?>
                </div> 
            </div>
            <div class="form-group">
                <label for="title" class="col-md-4 control-label requiredField">
                    Title *
                </label>
                <div class ="col-md-8">
                    <?php echo form_input($title+array('class'=>'form-control')); ?>
                </div> 
            </div>
            <div class="form-group">
                <label for="description" class="col-md-4 control-label requiredField">
                    Description *
                </label>
                <div class ="col-md-8">
                    <?php echo form_textarea($description+array('class'=>'form-control')); ?>
                </div> 
            </div>
            <div class="form-group">
                <label for="links_title" class="col-md-4 control-label requiredField">
                    Links Title *
                </label>
                <div class ="col-md-8">
                    <?php echo form_input($links_title+array('class'=>'form-control')); ?>
                </div> 
            </div>
            <div class="form-group">
                <label for="submit_update_home_page_info" class="col-md-6 control-label requiredField">

                </label>
                <div class ="col-md-3 col-md-offset-3">
                    <?php echo form_input($submit_update_home_page_info+array('class'=>'form-control btn-success')); ?>
                </div> 
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>