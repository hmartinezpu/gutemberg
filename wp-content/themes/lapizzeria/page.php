<?php 
get_header();
    while(have_posts()): the_post(); ?>
      <h1><?php the_title() ?><h1>
      <h1><?php the_content() ?><h1>
      <?php   endwhile; ?>