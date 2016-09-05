<?php

// For Setup Post type

add_theme_support( 'post-formats', array(
		'image', 'video', 'audio',
	) );
	
function mytheme_setup() {
	// Enable Theme support for Post Formats
	add_theme_support( 'post-formats', array( 'image', 'video', 'audio', ) );
}
add_action( 'after_setup_theme', 'mytheme_setup' );



?>