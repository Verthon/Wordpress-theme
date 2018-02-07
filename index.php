<?php

get_header();


if (have_posts()) :
  while (have_posts()) : the_post(); ?>


<figure class="col-md-6 images">
      <a href="<?php the_permalink(); ?>"> <img class="img-responsive"<?php the_post_thumbnail('800, 400'); ?> </a>
</figure>

  <?php endwhile;

  else :
  echo '<p>Sorry, no post were found</p>';
endif;


get_footer();
?>
