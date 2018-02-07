
</main>
<?php wp_footer('content'); ?>

<footer class="photo-footer">  
      <div class="info">
        <a title="info" href="#"><i class="fa fa-info-circle fa-2x" aria-hidden="true"></i></a>
      </div>
      <div class="fb-heart">
       <a title="Share on FB" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"> <i class="fa fa-heart fa-2x" aria-hidden="true"></i></a>
      </div>
      <div class="buy-poster">
       <a title="Buy Poster" href="contact-us" class="myButton">Buy poster</a>
      </div> 
        <!-- <div class="fb-share">
         <a href="get_permalink();" class="btn btn-facebook" title="Share on Facebook" target="_blank">
          <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i> Share</a> 
      </div> -->   
</footer>

</body>
</html>