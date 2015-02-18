<?php
/**
 * Bear back compatability functionality
 *
 * Prevents Bear from running on WordPress versions prior to 4.1,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.1.
 */

/**
 * Prevent switching to Bear on old versions of WordPress.
 *
 * Switches to the default theme.
 * */
function bear_switch_theme() {
  switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
  unset( $_GET['activated'] );
  add_action( 'admin_notices', 'bear_upgrade_notice' );
}
add_action( 'after_switch_theme', 'bear_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Bear on WordPress versions prior to 4.1.
 * */
function bear_upgrade_notice() {
  $message = sprintf( __( 'Bear requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'bear' ), $GLOBALS['wp_version'] );
  printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 4.1.
 * */
function bear_preview() {
  if ( isset( $_GET['preview'] ) ) {
    wp_die( sprintf( __( 'Bear requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'bear' ), $GLOBALS['wp_version'] ) );
  }
}
add_action( 'template_redirect', 'bear_preview' );
