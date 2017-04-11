<div class="row">
    <?php $this->load->view('nonmember/templates/sections/left_panel'); ?>
    <div class="col-xs-12 col-sm-12 col-md-9 text-justify">
        
    </div>
    <div class="col-xs-12 col-sm-12">
        <aside class="contact-card-bg contact-card-visibility-hidden-mobile-device">
            <div class="contact">
                <h5>Contact Us</h5>
                <?php
                if (!empty($address_info['telephone1'])) {
                    echo "<p>" . $address_info['location1'] . " - " . $address_info['telephone1'] . "</p>";
                }
                if (!empty($address_info['telephone2'])) {
                    echo "<p>" . $address_info['location2'] . " - " . $address_info['telephone2'] . "</p>";
                }
                if (!empty($address_info['telephone3'])) {
                    echo "<p>" . $address_info['location3'] . " - " . $address_info['telephone3'] . "</p>";
                }
                ?>
                <p><a class="cursor_pointer"><?php echo $address_info['email'] ?></a></p>
            </div>				
        </aside>
    </div>
</div>