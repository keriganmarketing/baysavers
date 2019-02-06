<?php ?>
<div class="section">
    <div class="container">
        <?php if(is_front_page()){ ?><h2 class="block-title">Join Us</h2><?php } ?>
        <div class="row">
            <div class="recent-entry col-md-6">
                <h3>Email</h3>
                <?php echo do_shortcode('[contact-form-7 id="24" title="Contact"]'); ?>
            </div>
            <div class="col-md-6">
                <h3>Donations</h3>
                <p>Paypal section will go here</p>
            </div>
        </div>
    </div>
</div>
