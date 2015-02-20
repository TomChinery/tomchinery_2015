<?php
/** Header file */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <meta name="description" content="Tom Chinery, a Web Developer available for freelance work.">
  <meta property="og:image" content="http://www.gravatar.com/avatar/3a04b762a5e1a27b0a9d440a8382b417?size=200px">
  <meta property="og:title" content="Tom Chinery: An Independent Web Developer">
  <meta property="og:url" content="http://tomchinery.com/">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- Easter Egg: Pink Fluffy Unicorns Dancing on Rainbows :D -->

<header>
  <nav>
    <span class="color-nav">
      <h2>Work</h2>
      <span class="coming"> Coming Soon</span>
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
      <a href="#">Available for work</a>
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
