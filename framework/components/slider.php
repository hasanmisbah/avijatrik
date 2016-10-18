<div id="slider-container">			
			<div id="next" alt="Next" title="Next">
				<div class="arrow-right"></div>
			</div>
			<div id="prev" alt="Prev" title="Prev">				
				<div class="arrow-left"></div>
			</div>
			
			<div id="slider">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="slide">
					<div class="slide-copy">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
						<p><?php the_excerpt(); ?></p>
					</div>
					<div class="img1"></div>
				</div>
			<?php
      endwhile;
   endif ; 
?>
			</div>
		</div>