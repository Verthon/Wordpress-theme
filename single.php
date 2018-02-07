<?php

get_header('content');

if (have_posts()) :
  while (have_posts()) : the_post(); ?>

     <script>

       $(document).ready(function() {
         $(".info").click(function() {
           $(".col-md-2, .description").slideToggle("slow");
         });
       });

     </script>
      
       <article class="col-md-2 description">
       <?php the_content(); ?>
       </article>
      <img class="img-full-absolute" src="<?php the_post_thumbnail('big-photo'); ?>
  
  <?php endwhile;

  else :
  echo '<p>No content found</p>';
endif; ?>


<?php get_footer('content');?>