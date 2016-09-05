
<?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
<meta property="fb:app_id" content="<?php global $fb_app_id; echo $fb_app_id; ?>" />
<meta property="fb:admins" content="<?php global $fb_admin_id; echo $fb_admin_id; ?>" />
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/cover.jpg"/>
 
    <?php if (is_single()) { ?>
    <!-- Open Graph -->
<meta property="og:url" content="<?php the_permalink() ?>"/>
<meta property="og:title" content="<?php single_post_title(''); ?>" />
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />

    <!-- Schema.org -->
<meta itemprop="name" content="<?php single_post_title(''); ?>"> 
<meta itemprop="description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>"> 
<meta itemprop="image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>">

    <!-- Twitter Cards -->
<meta property="twitter:card" content="summary"> 
<meta property="twitter:site" content="<?php global $twitter_id; echo $twitter_id; ?>"> 
<meta property="twitter:title" content="<?php single_post_title(''); ?>"> 
<meta property="twitter:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>"> 
<meta property="twitter:creator" content="<?php global $twitter_id; echo $twitter_id ?>"> 
<meta property="twitter:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>">
<meta property="twitter:url" content="<?php the_permalink(); ?>" />
<meta property="twitter:domain" content="<?php bloginfo('name'); ?>' website">
 
    <?php } else { ?>

    <!-- Open Graph -->
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/cover.jpg"/>

    <!-- Schema.org -->
<meta itemprop="name" content="<?php bloginfo('name'); ?>"> 
<meta itemprop="description" content="<?php bloginfo('description'); ?>"> 
    
    <!-- Twitter Cards -->
<meta property="twitter:card" content="summary"> 
<meta property="twitter:site" content="<?php global $twitter_id; echo $twitter_id; ?>"> 
<meta property="twitter:title" content="<?php bloginfo('name'); ?>"> 
<meta property="twitter:description" content="<?php bloginfo('description'); ?>"> 
<meta property="twitter:creator" content="<?php global $twitter_id; echo $twitter_id; ?>"> 
<meta property="twitter:url" content="<?php the_permalink(); ?>" />
<meta property="twitter:domain" content="<?php bloginfo('name'); ?>' website">
    <?php } ?>
<link rel="author" href="<?php global $google_plus; echo $google_plus ?>">
<meta property="publisher" content="<?php global $fb_page_id; echo $fb_page_id; ?>" />
<meta property="author" content="<?php global $fb_page_id; echo $fb_page_id; ?>" />
<meta name="google-site-verification" content="dsBbSLcBEZToNf8MSadi2lcIzApsfYjK-amVDw16e8c" />