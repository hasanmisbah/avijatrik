<?php get_header(); ?>
<?php get_sidebar(); ?>
				</aside>
								<!-- main content -->
				<div class="col-md-6 content-bg">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2 class="list-header post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<h5 class="author-info pull-left">বিভাগঃ <?php the_category(', ') ?></h5>
					<h5 class="author-info pull-right"><?php the_meta(); ?></h5>
					<div style="clear:both;"></div>
					<h5><div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div></h5>
					<h5><div class="twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-via="avijatrik1" data-size="large">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div></h5>
					<div style="clear:both"></div>
					<?php the_content(); ?>
					<div class="single-line"></div>
					<div style="clear:both"></div>
					<h5 class="author-info pull-left"><?php previous_post_link('%link') ?></h5>
					<h5 class="author-info pull-right"><?php next_post_link(' %link ') ?></h5>
					<div class="single-line"></div>
					<div class="sharer">
					
					
	                    <ul class="rrssb-buttons">
		<!-- FaceBook -->
		<li class="rrssb-facebook">
        <!--  Replace with your URL. For best results, make sure you page has the proper FB Open Graph tags in header:
              https://developers.facebook.com/docs/opengraph/howtos/maximizing-distribution-media-content/ -->
        <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="<?php _e('Share this post on Facebook!', 'cryst4l')?>" class="popup">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29"><path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"/></svg>
          </span>
          <span class="rrssb-text">facebook</span>
        </a>
      </li>


      <!-- twitter -->
      <li class="rrssb-twitter">
        <!-- Replace href with your Meta and URL information  -->
        <a target="_blank" href="http://twitter.com/home?status=<?php echo urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>: <?php the_permalink(); ?>" title="<?php _e('Share this post on Twitter!', 'cryst4l')?>" class="popup">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z"/></svg>
          </span>
          <span class="rrssb-text">twitter</span>
        </a>
      </li>


      <!-- Google+ -->
      <li class="rrssb-googleplus">
        <!-- Replace href with your meta and URL information.  -->
        <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="<?php _e('Share this post on Google Plus!', 'cryst4l')?>" class="popup">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 8.29h-1.95v2.6h-2.6v1.82h2.6v2.6H21v-2.6h2.6v-1.885H21V8.29zM7.614 10.306v2.925h3.9c-.26 1.69-1.755 2.925-3.9 2.925-2.34 0-4.29-2.016-4.29-4.354s1.885-4.353 4.29-4.353c1.104 0 2.014.326 2.794 1.105l2.08-2.08c-1.3-1.17-2.924-1.883-4.874-1.883C3.65 4.586.4 7.835.4 11.8s3.25 7.212 7.214 7.212c4.224 0 6.953-2.988 6.953-7.082 0-.52-.065-1.104-.13-1.624H7.614z"/></svg>            </span>
          <span class="rrssb-text">google+</span>
        </a>
      </li>

      <!-- Email -->
      <li class="rrssb-email">
        <!-- Replace subject with your message using URL Endocding: http://meyerweb.com/eric/tools/dencoder/ -->
        <a title="<?php _e('Share by email','cryst4l') ?>" href="/cdn-cgi/l/email-protection#cef1bdbbaca4abadbaf38da6abada5eebaa6a7bdeebea1bdbaeee3eef2f1bea6beeebaa6ab91baa7baa2abe6e7f5f1f0eee8aca1aab7f3eef2f1bea6beeebaa6ab91Xpermalink()?>&title="<?php the_title()?>" email"=""><span><?php _e(' ', 'cryst4l')?></span>
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"><path d="M20.11 26.147c-2.335 1.05-4.36 1.4-7.124 1.4C6.524 27.548.84 22.916.84 15.284.84 7.343 6.602.45 15.4.45c6.854 0 11.8 4.7 11.8 11.252 0 5.684-3.193 9.265-7.398 9.3-1.83 0-3.153-.934-3.347-2.997h-.077c-1.208 1.986-2.96 2.997-5.023 2.997-2.532 0-4.36-1.868-4.36-5.062 0-4.75 3.503-9.07 9.11-9.07 1.713 0 3.7.4 4.6.972l-1.17 7.203c-.387 2.298-.115 3.3 1 3.4 1.674 0 3.774-2.102 3.774-6.58 0-5.06-3.27-8.994-9.304-8.994C9.05 2.87 3.83 7.545 3.83 14.97c0 6.5 4.2 10.2 10 10.202 1.987 0 4.09-.43 5.647-1.245l.634 2.22zM16.647 10.1c-.31-.078-.7-.155-1.207-.155-2.572 0-4.596 2.53-4.596 5.53 0 1.5.7 2.4 1.9 2.4 1.44 0 2.96-1.83 3.31-4.088l.592-3.72z"/></svg>
          </span>
          <span class="rrssb-text">email</span>
        </a>
      </li>
	</ul>
	</div>
	
                	<content clas="related">
                	    <?php $orig_post = $post;
                            global $post;
                            $categories = get_the_category($post->ID);
                            if ($categories) {
                            $category_ids = array();
                            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                            $args=array(
                            'category__in' => $category_ids,
                            'post__not_in' => array($post->ID),
                            'posts_per_page'=> 5, // Number of related posts that will be displayed.
                            'caller_get_posts'=>1,
                            'orderby'=>'rand' // Randomize the posts
                            );
                            $my_query = new wp_query( $args );
                            if( $my_query->have_posts() ) {
                            echo '<div id="perfect-related_by-category" class="clear"><h3>Related Posts</h3><ul>';
                            while( $my_query->have_posts() ) {
                            $my_query->the_post(); ?>
                            <li>
                             <a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
                             </a>
                             <div class="perfect-related_by-category">
                             <a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                             </div>
                            </li>
                            <? }
                            echo '</ul></div>';
                            } }
                            $post = $orig_post;
                            wp_reset_query(); ?>
                	</content>
	                
	                
					<!--Facebook comment--> 
					 <div class="fb-comments" data-href="<?php the_permalink() ?>" data-num-posts="10" data-width="400"></div>
					<!--End facebook Comment-->

	                <?php endwhile;?>
	                
	                <?php else: ?>
		            <p><?php _e('Sorry, this post does not exist.'); ?></p>
	                <?php endif; ?>
				</div>
				<!-- /Main Content -->
				<!-- Right Sidebar -->
				<aside class="col-lg-3 col-md-3 col-sm-3 right-sidebar" id="right_sidebar">
					
					<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
					<div>
					    <?php dynamic_sidebar( 'right-sidebar' ); ?>
					</div>
					<?php endif; ?>
				</aside>
				<!-- Right Sidebar -->
				<?php get_footer(); ?>
