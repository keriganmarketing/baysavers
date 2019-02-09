<?php
/**
* The template for displaying the footer
*
* @package vega
*/
?>

<?php get_sidebar('footer'); ?>

<!-- ========== Footer Nav and Copyright ========== -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- Copyright and Credits -->
                <?php $vega_wp_footer_copyright_message = vega_wp_get_option('vega_wp_footer_copyright_message'); ?>
                <?php $vega_wp_footer_credit_message = vega_wp_get_option('vega_wp_footer_credit_message'); ?>
                <div class="copyright"><?php echo wp_kses_post($vega_wp_footer_copyright_message); ?><br /><span class="credit"><?php echo ("Site by KMA"); ?></span></div>
                <!-- /Copyright and Credits -->
            </div>
        </div>
    </div>
</div>
<!-- ========== /Footer Nav and Copyright ========== -->

<?php get_template_part('parts/footer', 'back-to-top'); ?>
<?php wp_footer(); ?>

</body>
</html>