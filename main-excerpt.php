
<?php the_post_thumbnail(); ?>

<h2><?php the_title(); ?></h2>

<?php the_excerpt(); ?>

<a href="<?php echo get_permalink(); ?>" class="read-more"> Read More...</a>
