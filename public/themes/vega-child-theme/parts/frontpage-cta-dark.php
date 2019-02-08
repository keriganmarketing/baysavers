<?php ?>
<div class="section">
    <div class="container">
        <?php if(is_front_page()){ ?><h2 class="block-title">Join Us</h2><?php } ?>
        <div class="row">
            <div class="recent-entry col">
                <h3>Email</h3>
                <?php echo do_shortcode('[contact-form-7 id="24" title="Contact"]'); ?>
            </div>
        </div>
    </div>
</div>
