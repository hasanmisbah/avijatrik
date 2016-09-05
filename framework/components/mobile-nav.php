    <!--Mobile navigation-->
    
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
