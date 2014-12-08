<?php
/**
 * ambica functions and definitions
 *
 * @package ambica
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'ycs_ambica_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ycs_ambica_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ambica, use a find and replace
	 * to change 'ycs_ambica' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'ycs_ambica', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ycs_ambica' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ycs_ambica_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // ycs_ambica_setup
add_action( 'after_setup_theme', 'ycs_ambica_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function ycs_ambica_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ycs_ambica' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name' => 'Footer left',
		'id' => 'footer_left',
		'before_widget' => '<div class="three columns push_one">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Footer Middle',
		'id' => 'footer_middle',
		'before_widget' => '<div class="three columns push_one">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Footer right',
		'id' => 'footer_right',
		'before_widget' => '<div class="three columns push_one">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'ycs_ambica_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ycs_ambica_scripts() {
	wp_enqueue_style( 'ycs_ambica-style', get_stylesheet_uri() );

	wp_enqueue_style( 'ycs_gumby-style', get_template_directory_uri() . '/gumby.css' );

	wp_enqueue_style( 'ycs_flexslider', get_template_directory_uri() . '/css/flexslider.css' );

	wp_enqueue_style( 'ycs_custom-style', get_template_directory_uri() . '/custom.css' );

	wp_enqueue_script( 'ycs_ambica-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'ycs_ambica-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	//wp_enqueue_script( 'ycs_ambica-jquery.flexslider-min', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), '2.2.2', true );

	//wp_enqueue_script( 'ycs_ambica-jquery.flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array(), '2.2.2', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ycs_ambica_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


// Replaces the excerpt "more" text by a link
function ycs_ambica_excerpt_more($more) {
	global $post;
	return '<a class="read-more" href="'. get_permalink($post->ID) . '"> Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


/**
 * woocommerce_sidebar hook
 *
 * remove single product sidebar
 * @hooked woocommerce_get_sidebar - 10
 */
function woocommerce_remove_sidebar_shop() {
    if( is_product() || 'product' == get_post_type() )
       remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
}
add_action( 'template_redirect', 'woocommerce_remove_sidebar_shop' );





