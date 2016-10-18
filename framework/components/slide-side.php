<div class="accordion-container">

  <?php query_posts('post_type=post &  post_status=publish & posts_per_page=8 & paged='. get_query_var('paged'));  ?>
    <?php if(have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

  <div class="set">
    <a href="#">
      <i class="fa fa-plus"></i>
      <?php the_title();?>
    </a>
    <div class="content">
      <p><?php the_excerpt();?></p>
    </div>
  </div>
<?php
endwhile;
endif;
?>
</div>