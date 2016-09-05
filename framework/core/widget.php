<?php

 //Register our sidebars and widgetized areas.


function wpb_widgets_init() {
    
    

	register_sidebar( array(
		'name' => __( 'left sidebar', 'avi' ),
		'id' => 'left-sidebar',
		'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'avi' ),
		'before_widget' => '<div class="side-index content-bg">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="list-header">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' =>__( 'right sidebar', 'avi'),
		'id' => 'right-sidebar',
		'description' => __( 'Appears on the static front page template', 'avi' ),
		'before_widget' => '<div class="side-index content-bg">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="list-header">',
		'after_title' => '</h3>',
	) );
	
	
	register_sidebar( array(
		'name' => __( 'top right sidebar', 'avi' ),
		'id' => 'top-right-sidebar',
		'description' => __( 'This selectdet Widget only for monthly magazine info', 'avi' ),
		'before_widget' => '<div class="col-lg-4 col-md-4 col-sm-4 header-slag">',
		'after_widget' => '</div>',
		'before_title' => '<p class="header-text">',
		'after_title' => '</p>',
	) );
	

	}

add_action( 'widgets_init', 'wpb_widgets_init' );

?>