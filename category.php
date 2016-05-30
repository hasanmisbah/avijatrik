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
                        
                        
                        <h2 class="list-header cat-title"><?php single_cat_title( '', true ); ?></h2>
                        
                        
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
					    <div class="social pull-left">
                	<span class="twitter">
                		<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>">Tweet</a>
                	</span>
                	<span class="google">
                		<g:plusone size="large" href="<?php the_permalink(); ?>"></g:plusone>
                	</span>
                	<span class="Facebook">
                		<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                	</span>
                </div>
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