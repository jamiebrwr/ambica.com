<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ambica
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer row twelve" role="contentinfo">
		<div class="site-info">
			<!-- <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'ycs_ambica' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'ycs_ambica' ), 'WordPress' ); ?></a> -->
			<span class="sep"> | </span>
			<?php// printf( __( 'Theme: %1$s by %2$s.', 'ycs_ambica' ), 'ambica', '<a href="http://ycsmarketing.com" rel="designer">Jamie Brewer</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- FlexSlider -->
<script defer src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('#main-slider').flexslider({
	    animation: 'slide',
	    controlsContainer: '.flex-container',
	    slideshow: false,
	    controlsContainer: 'flexslider',
    });
    
    jQuery('#secondary-slider').flexslider({
	    animation: "slide",
	    animationLoop: false,
	    itemWidth: 210,
	    itemMargin: 5
    });

});
</script>
<!-- End FlexSlider -->
</body>
</html>
