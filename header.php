<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta data -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="Avijatrik- is an islamic magazine,Whice is publishing from Avijatrik foundation Bishwanath Sylhet bangladesh">
	<meta name="author" content="avijatrik">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	
	<meta property="og:title" content="avijatrik" />
	<meta property="og:description" content="Avijatrik- is an islamic magazine,Whice is publishing from Avijatrik foundation Bishwanath Sylhet Bangladesh." />
	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/logo.png" />
	
	<!-- Style sheet -->
	<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap-dropdownhover.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/css/animate.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/css/share.css" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<link href="https://plus.google.com/107006924103075519093" rel="publisher" />
	<script src="https://apis.google.com/js/platform.js" async defer> {lang: 'bn'}</script>
	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> <?php } ?> <?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body class="full-bg" <?php body_class(); ?>>
    
    <!--Facebook Plugin-->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <!--Facebook Plugin-->
    
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
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
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
	<div class="container-fluid full-bg">
		<div class="container">
			<div class="row">
