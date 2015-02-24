<?php
/*
Template Name: Archives
*/
get_header(); ?>


<?php $myposts = get_posts( array('posts_per_page' => 12) ); ?>

  <main class="archive-container">
    <?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
      <article class="post-archive">

        <?php get_template_part('main', 'excerpt'); ?>

      </article>
    <?php endforeach; wp_reset_postdata(); ?>
  </main>

<?php get_footer(); ?>
