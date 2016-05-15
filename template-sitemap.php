<?php get_header(); ?>
				</aside>
								<!-- main content -->
				<div class="row content-bg">
				    <div class="col-md-3">
    <h3>পেইজ</h3> 
    <ul><?php wp_list_pages("title_li=" ); ?></ul>
    </div>    
<div class="col-md-3">
<h3>ক্যাটাগরি</h3>  
    <ul><?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0&feed=RSS'); ?></ul>  
</div>
<div class="col-md-3">
<h3>সকল পোষ্ট</h3>  
    <ul><?php $archive_query = new WP_Query('showposts=1000&cat=-8');  
            while ($archive_query->have_posts()) : $archive_query->the_post(); ?>  
                <li>  
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>  
                 (<?php comments_number('0', '1', '%'); ?>)  
                </li>  
            <?php endwhile; ?>  
    </ul>
</div>  
   
<div class="col-md-3">
<h3>আর্কাইভ</h3>  
    <ul>  
        <?php wp_get_archives('type=monthly&show_post_count=true'); ?>  
    </ul> 
</div> 
				</div>
				<!-- /Main Content -->
				<?php get_footer(); ?>
