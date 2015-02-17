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
</main>
