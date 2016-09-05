<!DOCTYPE html>
<html lang="en">
<head>
    
<?php
    get_template_part('framework/components/prefetch'); // external option to fetch some dns
    get_template_part('framework/components/wp-meta'); // adding meta data bootstrap meta data and title content
    get_template_part('framework/components/avimeta'); // meta data and social metadata optimized for avijatrik site
?>


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
<?php
    get_template_part('framework/components/top-nav');      // adding top navigation
    get_template_part('framework/components/mobile-nav');   // adding navigation for mobile user
?>

    <div class="container-fluid full-bg">
        <div class="container">
            <div class="row">
<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=73806ac11c/apps1.min.js"></script><script type="text/javascript">__CF.AJS.init1();</script>