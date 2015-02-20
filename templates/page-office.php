<?php

/**
 * Template Name: The Office
 */ ?>

<?php
  if ( has_post_thumbnail() ) {  // check if the post has a Post Thumbnail assigned to it. ?>
    <div class="hero">
      <h1>
        <span class="huge-text">
          <?php echo get_the_title(); ?>
        </span>
        <?php echo get_post_meta( get_the_ID(), 'Slogan', true); ?>
      </h1>

      <div class="overlay"></div>

      <?php the_post_thumbnail( 'full' ); ?>

    </div>
    <?php } ?>

<main>
  <article>
    <?php
      the_content();
    ?>
  </article>

  <article>
    <?php the_field('article_2'); ?>
  </article>

  <article class="type">
    <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/wordpress-logo.png" alt="wordpress" /> -->
    <?php the_field('type_1'); ?>
  </article>

  <article class="type type-2">
    <?php the_field('type_2'); ?>
  </article>

  <article class="type">
    <?php the_field('type_3'); ?>
  </article>

  <article class="reasons-to-work">
    <h2>Four great reasons to work with me</h2>
    <div class="reason-block">
      <h1>01</h1>
      <img src="./wp-content/themes/tomchinery/img/costa.jpeg" alt=""/>
      <h3>I take professionalism seriously</h3>
      <hr>
      <p>
        Professionalism is a key part to successful projects, it means I can
        get the high quality and efficiency I set out to provide.
      </p>
    </div>
    <div class="reason-block">
      <h1>02</h1>
      <img src="./wp-content/themes/tomchinery/img/headphones3.jpg" alt="" />
      <h3>I make forward thinking products</h3>
      <hr>
      <p>
        The web is constantly changing. I design and develop software
        for today's users and tomorrows platforms.
        <br /> <br />
      </p>
    </div>
    <div class="reason-block">
      <h1>03</h1>
      <img src="./wp-content/themes/tomchinery/img/mba.jpg" alt="" />
      <h3>I'm passionate about the things I build</h3>
      <hr>
      <p>
        Obessing over the details while implementing the bigger picture.
        My websites make an impact, designed to delight and flawlessly executed.
      </p>
    </div>
    <div class="reason-block">
      <h1>04</h1>
      <img src="./wp-content/themes/tomchinery/img/commute.jpg" alt="" />
      <h3>I'm inspired by people</h3>
      <hr>
      <p>
        Everyone I meet, work for, or see inspires
        me further to be the best I can be and make great things.
      </p>
    </div>
  </article>

  <article>
    <?php the_field('recent_works'); ?>
  </article>
</main>
