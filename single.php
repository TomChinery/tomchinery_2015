<?php
/*  Single Post Template
*/
get_header();

// Start the loop.
while ( have_posts() ) : the_post(); ?>

<main class="post-container">
  <article class="post-archive">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
  </article>
</main>

<?php
// End the loop.
endwhile; ?>

<?php get_footer(); ?>
