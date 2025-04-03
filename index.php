<?php
get_header();
if (have_posts()) :
  while (have_posts()) : the_post();
    the_content(); // Affiche le contenu de WordPress
  endwhile;
endif;
get_footer();
