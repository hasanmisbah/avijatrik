</div>
</div>
</div>


<!--Publications-->
<?php if ( is_home() ) { ?>
  <?php require( 'framework/components/external.php' ); ?>
  <?php get_template_part( 'framework/components/publication' ); ?>
<?php } ?>
<!--Publications-->


<!-- Footer -->
    <?php
      get_template_part('framework/components/footermenu'); // load Footer menu and text
    ?>
<!-- /Footer -->


<!-- Scripting -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap-dropdownhover.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
<script type="text/javascript" async defer src="https://apis.google.com/js/platform.js?publisherid=107006924103075519093"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script type="text/javascript" src="https:////cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/justinforce/jquery-sameheight/master/jquery.sameheight.js"></script>
<?php wp_footer(); ?>

<!--analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77447513-1', 'auto');
  ga('send', 'pageview');

</script>
<!--/analytics-->
</body>
</html>
