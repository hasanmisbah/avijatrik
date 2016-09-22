<?php get_header(); ?>
<?php get_sidebar(); ?>


				<!-- main content -->
				<div class="col-lg-6 col-md-6 col-sm-6">	
					
					<!-- Editor Note -->
						<content class="content-bg">
							<article class="editor-note">
								<h3 class="list-header">সম্পাদকীয়</h3>
								<p>     <?php // The Query 
                                            $args = array('post_type' => 'Editor Note', 'posts_per_page' => 1 );
                                            query_posts( $args );
                                            // The Loop
                                            while ( have_posts() ) : the_post();
                                        ?> 
                                        <?php the_content(); ?> 
                                </p>
                                <?php endwhile; ?>
							</article>
						</content>
						<!-- /editor note -->	
					<!-- 2x2 Post -->
						<article class="main-content content-bg">
							<h3 class="list-header">প্রবন্ধ</h3>
							<ul class="">
							    <?php query_posts('cat=9&showposts=4'); while (have_posts()) : the_post(); ?>
								<li class="content-bg">
									<p><strong><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></strong></p>
									<div style="clear:both"></div>
									<h5 class="author-info pull-left">বিভাগঃ <?php the_category(', ') ?></h5>
					                <h5 class="author-info pull-right"><?php the_meta(); ?></h5>
					                <div style="clear:both"></div>
					                <?php get_template_part('framework/top-social'); ?>
					                
                                     <div style="clear:both"></div>
                                     <div class="posty-thumb col-sm-3 pull-left">
					  <?php if ( has_post_thumbnail() ) {
					      
              the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive', 'pull-left','posty-img' ) );
        } else { ?>
          <img class="img-responsive pull-left" style="width: 220px; height:150px;"src="<?php bloginfo('template_directory'); ?>/img/cover.jpg" alt="<?php the_title(); ?>" />
        <?php } ?>
					  
					</div>
                                     <?php the_excerpt(); ?>
								</li>
								<?php endwhile; ?>
							</ul>
						</article>
					<!-- /2x2 Post -->
					<!-- 1x1 post -->
						<article class="main-content content-bg">
							<h3 class="list-header">ধারাবাহিক উপন্যাস</h3>
							<ul class="">
							    <?php query_posts('cat=6&showposts=2'); while (have_posts()) : the_post(); ?>
								<li class="content-bg">
									<p><strong><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></strong></p>
									<h5 class="author-info pull-left">বিভাগঃ <?php the_category(', ') ?></h5>
					                <h5 class="author-info pull-right"><?php the_meta(); ?></h5>
					                <div style="clear:both"></div>
					                <?php get_template_part('framework/top-social'); ?>
					                
					                <div style="clear:both"></div>
					                <div class="posty-thumb col-sm-3 pull-left">
					  <?php if ( has_post_thumbnail() ) {
					      
              the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive', 'pull-left','posty-img' ) );
        } else { ?>
          <img class="img-responsive pull-left" style="width: 220px; height:150px;"src="<?php bloginfo('template_directory'); ?>/img/cover.jpg" alt="<?php the_title(); ?>" />
        <?php } ?>
					  
					</div>
									<?php the_excerpt(); ?>
								</li>
								<?php endwhile; ?>
								<?php wp_reset_query(); ?>
							</ul>
						</article>
					<!-- /1x1 Post -->
					<!-- 1x1 post -->
						<article class="main-content content-bg">
							<h3 class="list-header">গল্প</h3>
							<ul class="">
							    <?php query_posts('cat=4&showposts=2'); while (have_posts()) : the_post(); ?>
								<li class="content-bg">
									<p><strong><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></strong></p>
									<h5 class="author-info pull-left">বিভাগঃ <?php the_category(', ') ?></h5>
					                <h5 class="author-info pull-right"><?php the_meta(); ?></h5>
					                <div style="clear:both"></div>
					                <?php get_template_part('framework/top-social'); ?>
                                     <div style="clear:both"></div>
                                     <div class="posty-thumb col-sm-3 pull-left">
					  <?php if ( has_post_thumbnail() ) {
					      
              the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive', 'pull-left','posty-img' ) );
        } else { ?>
          <img class="img-responsive pull-left" style="width: 220px; height:150px;"src="<?php bloginfo('template_directory'); ?>/img/cover.jpg" alt="<?php the_title(); ?>" />
        <?php } ?>
					  
					</div>
									<?php the_excerpt(); ?>
								</li>
								<?php endwhile; ?>
								<?php wp_reset_query(); ?>
							</ul>
						</article>
					<!-- /1x1 Post -->
				</div>
				<!-- /Main Content -->
				<?php get_template_part( 'right-sidebar' ); ?>
				<?php get_footer(); ?>
