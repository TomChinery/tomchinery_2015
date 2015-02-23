<?php
/**
 * Functions and Definitions
 * Sets up the theme and provides some helper functions
 */

/** Bear only works in WordPress 4.1 or later. */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
  require get_template_directory() . '/lib/back-compat.php';
}

/** Sets up theme defaults and registers support for WP features */
if ( ! function_exists( 'bear_setup' ) ) :
  function bear_setup() {

    add_theme_support( 'title_tag' );

    add_theme_support( 'post-thumbnails');
    set_post_thumbnail_size( 825, 510, true );

    register_nav_menus( array(
      'primary-work' => __( 'Primary Work', 'bear' ),
      'primary-about'  => __( 'Primary About', 'bear' ),
      'primary-social'  => __( 'Primary Social', 'bear' ),
      'primary-contact'  => __( 'Primary Contact', 'bear' ),
    ) );

    add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption'
    ) );

    add_theme_support( 'post-formats', array(
      'aside',
      'image',
      'video',
      'quote',
      'link',
      'gallery',
      'status',
      'audio',
      'chat'
    ) );

    add_theme_support( 'custom-background', apply_filters( 'bear_custom_background_args', array(
      'default-color'      => $default_color,
      'default-attachment' => 'fixed',
    ) ) );
  }
endif;

/** Enqueue scripts and styles */
function bear_scripts() {
  wp_enqueue_style( 'bear-reset', get_template_directory_uri() . "/css/reset.css");

  wp_enqueue_style( 'bear-style', get_template_directory_uri() . "/css/main.css");

  wp_enqueue_style( 'bear-animate', get_template_directory_uri() . "/bower_components/animate.css/animate.min.css");

  wp_register_script('bear-js', get_template_directory_uri() . "/js/main.js", false, null);

  wp_enqueue_script('bear-js');
}

/** Set navigation defaults */
function bear_nav_args( $args ) {
  require_once get_template_directory() . '/lib/nav-walker.php';

  $args['container'] = false;
  $args['items_wrap'] = '%3$s';
  $args['walker'] = new Bear_Nav_Walker();

  return $args;
}

/** Whitelist body classes */
function bear_body_class( $wp_classes, $extra_classes ) {

  $whitelist = array('home', 'custom-background');

  $wp_classes = array_intersect( $wp_classes, $whitelist );

  return array_merge( $wp_classes, (array) $extra_classes );
}

/** load custom 'Google' fonts */
function bear_load_fonts() {
  wp_register_style( 'icomoon',  get_template_directory_uri() . "/fonts/style.css");
  wp_register_style( 'fonts', 'http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic|Open+Sans:300,400');
  wp_register_style( 'added_font', 'http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic');
  wp_register_style( 'monster', 'http://fonts.googleapis.com/css?family=Montserrat:400,700');
  wp_enqueue_style( 'fonts' );
  wp_enqueue_style( 'icomoon' );
  wp_enqueue_style( 'added_font' );
  wp_enqueue_style( 'monster' );
}

/** load jquery (we need it for this project) */
function bear_jquery() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', 'http://code.jquery.com/jquery-1.11.2.js', false, null);
   wp_enqueue_script('jquery');
}

/** remove width and height attributes on images */
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

/** Actions (in order) */
add_action( 'after_setup_theme', 'bear_setup' );
add_action( 'wp_enqueue_scripts', 'bear_jquery' );
add_action( 'wp_enqueue_scripts', 'bear_scripts' );
add_action( 'wp_print_styles', 'bear_load_fonts' );
add_filter( 'wp_nav_menu_args', 'bear_nav_args' );
add_filter( 'body_class', 'bear_body_class', 10, 2 );
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

/** Remove post thumbnail action */
remove_action( 'begin_fetch_post_thumbnail_html', '_wp_post_thumbnail_class_filter_add' );
