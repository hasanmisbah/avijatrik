<div class="posty-thumb col-sm-3 pull-left">
					  <?php if ( has_post_thumbnail() ) {
					      
              the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive', 'pull-left','posty-img' ) );
        } else { ?>
          <img class="img-responsive pull-left" style="width: 220px; height:150px;"src="<?php bloginfo('template_directory'); ?>/img/cover.jpg" alt="<?php the_title(); ?>" />
        <?php } ?>
					  
</div>