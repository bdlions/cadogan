<h3>Update Address Info</h3>
<div class ="form-horizontal form-background top-bottom-padding">
    <?php echo form_open("admin/home/address/".$address['address_id'], array('id' => 'form_update_address', 'class' => 'form-horizontal')); ?>
    <div class="row">
        <div class ="col-md-8 margin-top-bottom">
            <div class ="row">
                <div class="col-md-4"></div>
                <div class="col-md-8"><?php echo $message; ?></div>
            </div>
            <div class="form-group">
                <label for="title" class="col-md-4 control-label requiredField">
                    Title*
                </label>
                <div class ="col-md-8">
                    <?php echo form_input($title+array('class'=>'form-control')); ?>
                </div> 
            </div>
            <div class="form-group">
                <label for="street" class="col-md-4 control-label requiredField">
                    Street *
                </label>
                <div class ="col-md-8">
                    <?php echo form_input($street+array('class'=>'form-control')); ?>
                </div> 
            </div>
            <div class="form-group">
                <label for="city" class="col-md-4 control-label requiredField">
                    City *
                </label>
                <div class ="col-md-8">
                    <?php echo form_input($city+array('class'=>'form-control')); ?>
                </div> 
            </div>
            <div class="form-group">
                <label for="postcode" class="col-md-4 control-label requiredField">
                    Post_code *
                </label>
                <div class ="col-md-8">
                    <?php echo form_input($post_code+array('class'=>'form-control')); ?>
                </div> 
            </div>
            <div class="form-group">
                <label for="location1" class="col-md-4 control-label requiredField">
                   Location1
                </label>
                <div class ="col-md-8">
                    <?php echo form_input($location1+array('class'=>'form-control')); ?>
                </div> 
            </div>
            <div class="form-group">
                <label for="telephone1" class="col-md-4 control-label requiredField">
                   Telephone1
                </label>
                <div class ="col-md-8">
                    <?php echo form_input($telephone1+array('class'=>'form-control')); ?>
                </div> 
            </div>
            <div class="form-group">
                <label for="location2" class="col-md-4 control-label requiredField">
                   Location2
                </label>
                <div class ="col-md-8">
                    <?php echo form_input($location2+array('class'=>'form-control')); ?>
                </div> 
            </div>
            <div class="form-group">
                <label for="telephone2" class="col-md-4 control-label requiredField">
                   Telephone2
                </label>
                <div class ="col-md-8">
                    <?php echo form_input($telephone2+array('class'=>'form-control')); ?>
                </div> 
            </div>
            <div class="form-group">
                <label for="location3" class="col-md-4 control-label requiredField">
                   Location3
                </label>
                <div class ="col-md-8">
                    <?php echo form_input($location3+array('class'=>'form-control')); ?>
                </div> 
            </div>
            <div class="form-group">
                <label for="telephone3" class="col-md-4 control-label requiredField">
                   Telephone3
                </label>
                <div class ="col-md-8">
                    <?php echo form_input($telephone3+array('class'=>'form-control')); ?>
                </div> 
            </div>
            <div class="form-group">
                <label for="fax" class="col-md-4 control-label requiredField">
                   Fax
                </label>
                <div class ="col-md-8">
                    <?php echo form_input($fax+array('class'=>'form-control')); ?>
                </div> 
            </div>
            <div class="form-group">
                <label for="email" class="col-md-4 control-label requiredField">
                 Email*
                </label>
                <div class ="col-md-8">
                    <?php echo form_input($email+array('class'=>'form-control')); ?>
                </div> 
            </div>
            
            <div class="form-group">
                <label for="submit_update_address" class="col-md-6 control-label requiredField">

                </label>
                <div class ="col-md-3 col-md-offset-3">
                    <?php echo form_input($submit_update_address+array('class'=>'form-control btn-success')); ?>
                </div> 
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>