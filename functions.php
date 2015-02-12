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
      'primary' => __( 'Primary Menu', 'bear' ),
      'social'  => __( 'Footer Menu', 'bear' ),
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
  wp_enqueue_style( 'bear-style', get_template_directory_uri() . "/css/main.css");

  wp_enqueue_style( 'bear-reset', get_template_directory_uri() . "/css/reset.css");
}

/** Set navigation defaults */
function bear_nav_args( $args ) {
  require get_template_directory() . '/lib/nav-walker.php';

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

/** Actions (in order) */
add_action( 'after_setup_theme', 'bear_setup' );
add_action( 'wp_enqueue_scripts', 'bear_scripts' );
add_filter( 'wp_nav_menu_args', 'bear_nav_args' );
add_filter( 'body_class', 'bear_body_class', 10, 2);
