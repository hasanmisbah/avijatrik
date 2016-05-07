<?php get_header(); ?>
<?php get_sidebar(); ?>
				</aside>
								<!-- main content -->
				<div class="col-md-6 content-bg">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2 class="list-header post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>

	                <?php endwhile; else: ?>
		            <p><?php _e('Sorry, this page does not exist.'); ?></p>
	                <?php endif; ?>
	                <?php comments_template(); ?>
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
