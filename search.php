<?php get_header(); ?>
<?php get_sidebar(); ?>
				</aside>
								<!-- main content -->
				<div class="col-md-6 content-bg">
					<?php
                        $s=get_search_query();
                        $args = array(
                                        's' =>$s
                                    );
                            // The Query
                        $the_query = new WP_Query( $args );
                        if ( $the_query->have_posts() ) {
                                _e("<h2 class='list-header post-title'>Search Results for: ".get_query_var('s')."</h2> ");
                                while ( $the_query->have_posts() ) {
                                   $the_query->the_post(); ?>
                                            <li class="content-bg">
                                                <a href="<?php the_permalink() ?>"><h4><strong><?php the_title(); ?></strong></h4></a>
                                                <h6 class="author-info pull-left">বিভাগঃ <?php the_category(', ') ?></h6>
                        					    <h6 class="author-info pull-right"><?php the_meta(); ?></h6>
                        					    <div style="clear:both"></div>
                                                <p><?php the_excerpt(); ?></p>
                                            </li>
                                         <?php
                                }
                            }else{
                        ?>
                                <h2 class='list-header post-title'>Nothing Found</h2>
                                <div class="alert alert-info">
                                  <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                                </div>
                        <?php } ?>
                        <?php wp_reset_postdata(); ?>
				</div>
				<!-- /Main Content -->
				<!-- Right Sidebar -->
				<aside class="col-md-3 right-sidebar" id="right_sidebar">
					
					<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
					<div>
					    <?php dynamic_sidebar( 'right-sidebar' ); ?>
					</div>
					<?php endif; ?>
				</aside>
				<!-- Right Sidebar -->
				<?php get_footer(); ?>
