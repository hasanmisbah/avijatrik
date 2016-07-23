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
				<?php get_template_part( 'right-sidebar' ); ?>
				<?php get_footer(); ?>
