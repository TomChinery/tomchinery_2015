<?php
/** Header file */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav>
  <span class="color-nav">
    <h2>Work</h2>
    <?php
      if (has_nav_menu('primary-work')) :
        wp_nav_menu(array( 'theme_location' => 'primary-work' ));
      endif;
    ?>
  </span>
  <span class="color-nav">
    <h2>About</h2>
    <?php
      if (has_nav_menu('primary-about')) :
        wp_nav_menu(array( 'theme_location' => 'primary-about' ));
      endif;
    ?>
  </span>
  <span class="color-nav">
    <h2>Social</h2>
    <?php
      if (has_nav_menu('primary-social')) :
        wp_nav_menu(array( 'theme_location' => 'primary-social' ));
      endif;
    ?>
  </span>
  <span class="color-nav">
    <span class="icon-cross2"></span>
    <h2>Contact</h2>
    <?php
      if (has_nav_menu('primary-contact')) :
        wp_nav_menu(array( 'theme_location' => 'primary-contact' ));
      endif;
    ?>
  </span>
</nav>
