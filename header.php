<!DOCTYPE html>
<html lang="en">
<head>
<!--Dns Prefetching-->
<!-- Amazon S3 -->
<link rel="dns-prefetch" href="//s3.amazonaws.com">

<!-- Google CDN -->
<link rel="dns-prefetch" href="//ajax.googleapis.com">

<!-- Microsoft CDN -->
<link rel="dns-prefetch" href="//ajax.microsoft.com">
<link rel="dns-prefetch" href="//ajax.aspnetcdn.com">

<!-- CDN JS -->
<link rel="dns-prefetch" href="//cdnjs.cloudflare.com">

<!-- Bootstrap CDN -->
<link rel="dns-prefetch" href="//netdna.bootstrapcdn.com">

<!-- Google Tag Manager -->
<link rel="dns-prefetch" href="//www.googletagmanager.com">

<!-- Google Analytics -->
<link rel="dns-prefetch" href="//www.google-analytics.com">

<!-- Google Fonts -->
<link rel="dns-prefetch" href="//fonts.googleapis.com">

<!-- Facebook -->
<link rel="dns-prefetch" href="//connect.facebook.net">

<!-- Google+ -->
<link rel="dns-prefetch" href="//apis.google.com">

<!-- Linkedin -->
<link rel="dns-prefetch" href="//platform.linkedin.com">

<!-- Twitter -->
<link rel="dns-prefetch" href="//platform.twitter.com">
<!--/Dns Prefetching-->

    <!-- Meta data -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> <?php } ?> <?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    
<?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
<meta property="fb:app_id" content="586399311511149" />
<meta property="fb:admins" content="100001304943665 , 100004579593930" />
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
<meta property="twitter:site" content="@avijatrik1"> 
<meta property="twitter:title" content="<?php single_post_title(''); ?>"> 
<meta property="twitter:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>"> 
<meta property="twitter:creator" content="@avijatrik1"> 
<meta property="twitter:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>">
<meta property="twitter:url" content="<?php the_permalink() ?>" />
<meta property="twitter:domain" content="avijatrik' website">
 
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
<meta property="twitter:site" content="@avijatrik1"> 
<meta property="twitter:title" content="<?php bloginfo('name'); ?>"> 
<meta property="twitter:description" content="<?php bloginfo('description'); ?>"> 
<meta property="twitter:creator" content="@avijatrik1"> 
<meta property="twitter:url" content="<?php the_permalink() ?>" />
<meta property="twitter:domain" content="avijatrik' website">
    <?php } ?>
<link rel="author" href="https://plus.google.com/107006924103075519093/">
<meta property="publisher" content="https://facebook.com/monthlyavijatrik" />
<meta property="author" content="https://facebook.com/monthlyavijatrik" />
<meta name="google-site-verification" content="dsBbSLcBEZToNf8MSadi2lcIzApsfYjK-amVDw16e8c" />

<!-- Style sheet -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap-dropdownhover.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/share.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">


<!-- Header Script -->
<script src="https://apis.google.com/js/platform.js" async defer> {lang: 'bn'}</script>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1463042756,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"06387fe16b09e23fd5d698763168e1f1",petok:"3cd35901775003f69d6a50a0839b273f86c1a586-1463061744-1800",zone:"avijatrik.com",rocket:"1",apps:{"ga_key":{"ua":"UA-77447513-1","ga_bs":"2"}},sha2test:0}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=e982913d31/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<script type="text/javascript">/* CloudFlare analytics upgrade */
</script>
<script type="text/javascript">
/* <![CDATA[ */
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-77447513-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

(function(b){(function(a){"__CF"in b&&"DJS"in b.__CF?b.__CF.DJS.push(a):"addEventListener"in b?b.addEventListener("load",a,!1):b.attachEvent("onload",a)})(function(){"FB"in b&&"Event"in FB&&"subscribe"in FB.Event&&(FB.Event.subscribe("edge.create",function(a){_gaq.push(["_trackSocial","facebook","like",a])}),FB.Event.subscribe("edge.remove",function(a){_gaq.push(["_trackSocial","facebook","unlike",a])}),FB.Event.subscribe("message.send",function(a){_gaq.push(["_trackSocial","facebook","send",a])}));"twttr"in b&&"events"in twttr&&"bind"in twttr.events&&twttr.events.bind("tweet",function(a){if(a){var b;if(a.target&&a.target.nodeName=="IFRAME")a:{if(a=a.target.src){a=a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf("url")===0){b=unescape(c.split("=")[1]);break a}}b=void 0}_gaq.push(["_trackSocial","twitter","tweet",b])}})})})(window);
/* ]]> */
</script>
<!-- Header Sceipt -->
<?php wp_head(); ?>
</head>
<body class="full-bg" <?php body_class(); ?>>

<!--Facebook SDK-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6&appId=586399311511149";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--End Facebook SDK-->
    
    
    <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NZLQJF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NZLQJF');</script>
<!-- End Google Tag Manager -->
    <!-- Header -->
    <header class="container-fluid header-bg">
        <div class="container" id= "header">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 hidden-sm hidden-xs">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Avijatrik logo" />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="/"><img alt="avijatrik-header" class="logo-img img-responsive" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" /></a>
                    <div style="clear:both"></div>
                    <p class="slogan" style="color: #fff; font-size:18px; text-align:right;"><?php bloginfo('description'); ?></p>
                </div>
                <?php if ( is_active_sidebar( 'top-right-sidebar' ) ) : ?>
                    <div>
                        <?php dynamic_sidebar( 'top-right-sidebar' ); ?>
                    </div>
                    <?php endif; ?>
            </div>
        </div>
    </header>
    <!-- /Header -->
    <!-- navigation -->
    <div class="conatiner-fluid nav-bg">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span style="color:#000;">মেনু </span>
        <span style="color:#000;" class="fa fa-navicon"></span>
        <!--<span class="icon-bar"></span>-->
        <!--<span class="icon-bar"></span>-->
        <!--<span class="icon-bar"></span>-->
      </button>
    </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 4,
                'container'         => 'nav',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
</nav>
</div>
</div>
</div>
                
    <!-- /navigation -->
    <!--Mobile navigation-->
    <!-- navigation -->
    <div class="hidden-md hidden-sm hidden-lg conatiner-fluid nav-bg">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span style="color:#000;">সূচী </span>
        <span style="color:#000;" class="fa fa-navicon"></span>
        <!--<span class="icon-bar"></span>-->
        <!--<span class="icon-bar"></span>-->
        <!--<span class="icon-bar"></span>-->
      </button>
    </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'mobile_nav',
                'theme_location'    => 'mobile_nav',
                'depth'             => 1,
                'container'         => 'nav',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-2',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
</nav>
</div>
</div>
</div>
                
    <!-- /navigation -->
    <!--/Mobile navigation-->
    <div class="container-fluid full-bg">
        <div class="container">
            <div class="row">
<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=73806ac11c/apps1.min.js"></script><script type="text/javascript">__CF.AJS.init1();</script>