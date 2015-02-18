<?php

/**
* The main template file
*/

  get_header();

    // Start the loop.
    while ( have_posts() ) : the_post();

      if ( is_front_page() ) :

        get_template_part('templates/main', 'intro');

        get_template_part('templates/page', 'office');
        
      else :

        the_content();

      endif;

    // End the loop.
    endwhile;

  get_footer();
