<!--Footer Widget-->
<div class="container-fluid media-bg">
  <div class="container">
    
    <div class="col-sm-4">
      <h2 class="widget-title">Audio</h2>
     <?php query_posts('post_type=post & category_name=audio & post_status=publish & posts_per_page=8 & paged='. get_query_var('paged'));  ?>
     <?php if(have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    
    <div class="widget-post">
        <a href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail() ) {?>
	          <?php the_post_thumbnail( 'post-thumbnail', array(
    'class' => 'pull-left img-responsive'
) );} 
?>
          <h3 class="pub-tit"><?php the_title(); ?></h3>
        </a>
        <div class="fix"></div>
      </div>
        <?php endwhile; ?>  
        <?php endif; ?>
    </div>
    
    <div class="col-sm-4">
      <h2 class="widget-title">Video</h2>
     <?php query_posts('post_type=post & category_name=video & post_status=publish & posts_per_page=4 & paged='. get_query_var('paged'));  ?>
     <?php if(have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    
    <div class="widget-post">
        <a href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail() ) {?>
	          <?php the_post_thumbnail( 'post-thumbnail', array(
    'class' => 'pull-left img-responsive'
) );} 
?>
          <h3 class="pub-tit"><?php the_title(); ?></h3>
        </a>
        <div class="fix"></div>
      </div>
        <?php endwhile; ?>  
        <?php endif; ?>
    </div>
    
    <div class="col-sm-4">
      <h2 class="widget-title">Book</h2>
     <?php query_posts('post_type=post & category_name=book & post_status=publish & posts_per_page=4 & paged='. get_query_var('paged'));  ?>
     <?php if(have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    
    <div class="widget-post">
        <a href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail() ) {?>
	          <?php the_post_thumbnail( 'post-thumbnail', array(
    'class' => 'pull-left img-responsive'
) );} 
?>
          <h3 class="pub-tit"><?php the_title(); ?></h3>
        </a>
        <div class="fix"></div>
      </div>
        <?php endwhile; ?>  
        <?php endif; ?>
    </div>

  </div>
</div>
<!--Footer Widget-->
