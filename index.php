<?php

/**
* The main template file
*/

  get_header();

    // Start the loop.
    while ( have_posts() ) : the_post();

      if ( is_front_page() ) :

        echo("we are on the front page, woo!");

      else :

        the_content();

      endif;

    // End the loop.
    endwhile;

  get_footer();
