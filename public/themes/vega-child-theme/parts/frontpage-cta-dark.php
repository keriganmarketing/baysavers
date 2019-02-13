<?php

$vega_wp_frontpage_cta_dark = vega_wp_get_option('vega_wp_frontpage_cta_dark'); 

if($vega_wp_frontpage_cta_dark2 == 'Y') { 

    global $post; //SiteOrign Page Builder fix
    $cta_page = get_post(vega_wp_get_option('vega_wp_frontpage_cta_dark_content')); 
    $post = $cta_page ;
    $vega_wp_frontpage_cta_dark_content = apply_filters( 'the_content', $cta_page->post_content );

}
?>

<div class="section">
    <div class="container">
        <?php if(is_front_page()){ ?><h2 class="block-title">Join Us</h2><?php } ?>
        <div class="row">
            <div class="recent-entry col-md-6 col-md-offset-3">
                <h3>Email</h3>
                <?php echo do_shortcode('[contact-form-7 id="24" title="Contact"]'); ?>
            </div>
        </div>
    </div>
</div>
