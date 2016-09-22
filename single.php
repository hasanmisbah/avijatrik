<?php get_header(); ?>
<?php get_sidebar(); ?>
				</aside>
								<!-- main content -->
				<div class="col-md-6 content-bg">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2 class="list-header post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
					
					
					<?php
					
					if(has_post_format('standard')){
					    get_template_part('framework/components/post-meta');
					}
					
					
					?>
					<div style="clear:both;"></div>
					<?php get_template_part('framework/top-social'); ?>
					<div style="clear:both"></div>
					
					<?php
					
					if(has_post_format('standard')){
					    
					    get_template_part('framework/components/thumbnail');
					} 
					elseif (has_post_format('audio')) {
					    
					    get_template_part('framework/components/thumbnail');
					}
					elseif (has_post_format('book')) {
					    
					    get_template_part('framework/components/thumbnail');
					}
					
					?>
					<?php the_content(); ?>
					<?php 
					
					get_template_part('framework/navigation/post-nav');
					get_template_part('framework/bottom-social');
					
					
					?>
	
                	<content clas="related">
                	    <?php
                	        get_template_part('framework/components/related');
                            wp_reset_query();
                            ?>
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
