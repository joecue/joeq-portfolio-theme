<?php
/**
 * joeq functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package joeq
 */

if ( ! function_exists( 'joeq_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function joeq_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on joeq, use a find and replace
	 * to change 'joeq' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'joeq', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'joeq' ),
  'footer' => esc_html__( 'Footer Menu', 'joeq' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'joeq_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
 
 // Custom Image Sizes
 add_image_size( 'homepage_post_thumbnail', 300, 100, array( 'center', 'top' ) );
 
}
endif; // joeq_setup
add_action( 'after_setup_theme', 'joeq_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function joeq_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'joeq_content_width', 640 );
}
add_action( 'after_setup_theme', 'joeq_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function joeq_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'joeq' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
 
	register_sidebar( array(
		'name'          => esc_html__( 'Homepage Bottom Sidebar', 'joeq' ),
		'id'            => 'home-sidebar',
		'description'   => '',
		'before_widget' => '<div class="column">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="homepage text-center">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'joeq_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function joeq_scripts() {
/* Add Google Fonts */
 
 wp_enqueue_style( 'google-font-site-title', '//fonts.googleapis.com/css?family=Rock+Salt'); 
 
 wp_enqueue_style( 'google-font-headings', '//fonts.googleapis.com/css?family=Raleway'); 

 wp_enqueue_style( 'google-font-body', '//fonts.googleapis.com/css?family=Lato');
 
 wp_enqueue_style( 'google-font-code', '//fonts.googleapis.com/css?family=Source+Code+Pro');
 
/* End Google Fonts */
 
/* Add Foundation 6 CSS Support */
 
    wp_enqueue_style( 'foundation-styles', get_template_directory_uri() . '/foundation/css/foundation.css'); 

    wp_enqueue_style( 'foundation-app-styles', get_template_directory_uri() . '/foundation/css/app.css');

/* End Foundation 6 CSS Support */
 
	wp_enqueue_style( 'joeq-style', get_stylesheet_uri() );

/* Add Foundation 6 JS Support */ 

    wp_enqueue_script( 'foundation-what-input', get_template_directory_uri() . '/foundation/js/vendor/what-input.min.js', array('jquery','foundation-foundation'), '20151123', true ); 

    wp_enqueue_script( 'foundation-foundation', get_template_directory_uri() . '/foundation/js/foundation.min.js', array('jquery'), '20151123', true );

    wp_enqueue_script( 'foundation-foundation-init', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation-foundation'), '20151123', true ); 
 
/* End Foundation 6 JS Support */ 

    wp_enqueue_script( 'joeq-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'joeq-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'joeq_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
