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
					<?php get_template_part('framework/top-social'); ?>
					<div style="clear:both"></div>
					<div class="posty-thumb col-sm-3 pull-left">
					  <?php if ( has_post_thumbnail() ) {
					      
              the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive', 'pull-left','posty-img' ) );
        } else { ?>
          <img class="img-responsive pull-left" style="width: 220px; height:150px;"src="<?php bloginfo('template_directory'); ?>/img/cover.jpg" alt="<?php the_title(); ?>" />
        <?php } ?>
					  
					</div>
					<?php the_content(); ?>
					<div class="single-line"></div>
					<div style="clear:both"></div>
					<h5 class="author-info pull-left"><?php previous_post_link('%link') ?></h5>
					<h5 class="author-info pull-right"><?php next_post_link(' %link ') ?></h5>
					<div class="single-line"></div>
					<?php get_template_part('framework/bottom-social'); ?>
	
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
				<?php get_template_part( 'right-sidebar' ); ?>
				<?php get_footer(); ?>
