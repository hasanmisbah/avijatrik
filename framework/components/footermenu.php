<footer class="container-fluid footer-bg">
<div class="container">
<div class="row">
  <div class="col-lg-2 col-md-2 col-sm-2"></div>
  <div class="col-md-12">
    <nav class="centered-pills">
        
                <?php   
                $args = array(
                'menu'              => 'footer',
                'theme_location'    => 'footer',
                'menu_class'        => 'nav nav-pills'
            );
            
            wp_nav_menu( $args );
            ?>
        
    </nav>
  </div>
  <div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">
    <p class="foot-note text-center">Avijatrik is an islamic magazine,Whice is publishing from Avijatrik foundation Bishwanath Sylhet as an extra-ordinary Islamic research magazine of Bangladesh.Avijatrik is directed to sahee path, based on the belief of ahlee-sunnah-wal-zamah.</p>
    <div style="clear:both"></div>
    <p class="copy-right text-center">Copyright &copy; Avijatrik Foundation allright reserved || Design and Developed by: <a target="_new" href="<?php global $dev_url; echo $dev_url; ?>"><?php global $dev_name; echo $dev_name; ?></a></p>
  </div>
</div>
</div>
</div>
</footer>