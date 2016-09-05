<?php
02
/**
* Category Template
*/
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
				</aside>
								<!-- main content -->
				<div class="col-md-6 content-bg">
					<?php 
                        // Check if there are any posts to display
                        if ( have_posts() ) : ?>
                        
                        
                        <h2 class="list-header cat-title"><?php echo str_replace('name: ','',get_the_archive_title()); ?></h2>
                        
                        
                        <?php
                        // Display optional category description
                         if ( category_description() ) : ?>
                        <!--<div class="archive-meta"><?php echo category_description(); ?></div>-->
                        <?php endif; ?>
                        <article>
                        <ul>
                        <?php $the_query = new WP_Query('posts_per_page = 2 & paged = ' . get_query_var('paged'));
                        
                        // The Loop
                        
                        while ( have_posts() ) : the_post(); ?>
                        <li class="content-bg">
                        <p><strong><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></strong></p>
						<h5 class="author-info pull-left">বিভাগঃ <?php the_category(', ') ?></h5>
					    <h5 class="author-info pull-right"><?php the_meta(); ?></h5>
					    <div style="clear:both"></div>
					    <?php get_template_part('framework/top-social')?>
                        <div style="clear:both"></div>
                        
                        <div class="entry">
                        <p><?php the_excerpt(); ?></p>
                        </div>
                        <?php endwhile; ?>
                        </li>
                        
                        <!-- Pagnigation-->
                            <div class="col-md-offset-4">
							<?php wpbeginner_numeric_posts_nav(); ?>
							</div>
							<!-- Pagnigation-->
                        
                        
                        <?php else: ?>
                        <h2>Error! no post Found</h2>
                        <p>Sorry, no posts matched your criteria.</p>
                        
                        
                        
                        
                        <?php endif; ?>
                        </ul>
                        
                        
                        
                        </article>
                        
				</div>
				<!-- /Main Content -->
				<?php get_template_part( 'right-sidebar' ); ?>
				<?php get_footer(); ?>