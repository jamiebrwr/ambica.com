<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function ycs_ambica_widgets_init() {

	register_sidebar( array(
		'name' => 'Footer left',
		'id' => 'footer_left',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded four">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Footer Middle',
		'id' => 'footer_middle',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded four">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Footer right',
		'id' => 'footer_right',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded four">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'ycs_ambica_widgets_init' );