<?php
/**
 * The template part for displaying the dark CTA section on the front page (static)
 *
 * @package vega
 */
?>
<?php 
$vega_wp_frontpage_cta_dark = vega_wp_get_option('vega_wp_frontpage_cta_dark'); 

if($vega_wp_frontpage_cta_dark == 'Y') { 

global $post; //SiteOrign Page Builder fix
$cta_page = get_post(vega_wp_get_option('vega_wp_frontpage_cta_dark_content')); 
$post = $cta_page ;
$vega_wp_frontpage_cta_dark_content = apply_filters( 'the_content', $cta_page->post_content );

$vega_wp_frontpage_cta_dark_parallax = vega_wp_get_option('vega_wp_frontpage_cta_dark_parallax'); 
$vega_wp_frontpage_cta_dark_bg_image = vega_wp_get_option('vega_wp_frontpage_cta_dark_bg_image'); 
$vega_wp_frontpage_cta_dark_bg_color = vega_wp_get_option('vega_wp_frontpage_cta_dark_bg_color'); 
$vega_wp_frontpage_cta_dark_section_id = vega_wp_get_option('vega_wp_frontpage_cta_dark_section_id'); 

if($vega_wp_frontpage_cta_dark_bg_image != ''){
    if($vega_wp_frontpage_cta_dark_parallax == 'Y'){ 
        $class = 'parallax-bg';  
        $parallax_str = 'data-parallax="scroll" data-image-src="' . esc_url($vega_wp_frontpage_cta_dark_bg_image) . '"'; 
    }
    else {
        $class = 'image-bg';
        $parallax_str = '';
    }
} else if ($vega_wp_frontpage_cta_dark_bg_color != '') {
    $class = 'color-bg'; 
    $parallax_str = '';
}


?>
<!-- ========== Call to Action ========== -->
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
<!-- ========== /Call to Action ========== -->
<?php 
wp_reset_postdata();
} ?>
