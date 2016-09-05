<?php
    //Bootstrap Navigation

    require_once('wp_bootstrap_navwalker.php'); // for adding bootstrap default menu as wordpress menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'avimag' ), // main top menu
        'mobile_nav' => __( 'ex mobile menu', 'avimag' ), // mobile menu
        'footer' => __( 'footer Menu', 'avimag' ), // footer menu
    ) );

?>