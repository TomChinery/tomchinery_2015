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

  <!-- Don't steal my sourcecode, I worked on it night and day for 3 weeks to get it to this state -->

<header>
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

  <div class="line-bg">
    <span class="line-nav"></span>
    <span class="line-nav"></span>
    <span class="line-nav"></span>
    <span class="line-nav"></span>

    <div class="warning">
      <span class="icon-warning"></span>
      <a href="#">Open Beta V.0.8.1</a>
    </div>

    <div class="for-hire">
      <span class="icon-office"></span>
      <a href="#">Hire me!</a>
    </div>

    <div class="pag-dots">
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
    </div>

    <span class="icon-menu7"></span>
  </div>
</header>
