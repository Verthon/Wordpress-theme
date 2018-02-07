<?php

get_header();


if (have_posts()) :
  while (have_posts()) : the_post(); ?>

      wp_get_archives('type=daily');

  <?php endwhile;

  else :
  echo '<p>No content found</p>';
endif;


get_footer();
?>

