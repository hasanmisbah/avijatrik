<div class="container-fluid desktop-slider content-bg external-area">
  <div class="container">
    <div class="row">
      <div class="container ">
        <div class="row">
          
          <h2 class="list-header" style="text-align:center; color:#008080;">সমসাময়ীক প্রবন্ধ</h2>
          
           <?php query_posts('post_type=post &  post_status=publish & posts_per_page=9 & paged='. get_query_var('paged'));  ?>
           <?php if(have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
        
          <div class="col-sm-4 content-bg card-area">
            <div class="post-card">
              <div class="image img-responsive">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="post">
                <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="cat-name"><?php foreach((get_the_category()) as $category) { echo " ".$category->cat_name; } ?></p>
              </div>
            </div
            
          </div>

        </div>
        
        <?php endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
</div>
</div>