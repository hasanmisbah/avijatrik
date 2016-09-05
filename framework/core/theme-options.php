<?php


    // Loading Custom Module
    
    include('html-shim.php');            // html5-shim
    require('navigation.php');           // navigation
    require('editor-note.php');          // adding editor note
    require('widget.php');               // adding widget
    require('pagination.php');           // pagination support
    require('custom-header.php');        // adding header image to theme
    require('excerpt.php');              // adding post excerpt
    require('auto-featured.php');        // adding auto featured thumbnail
    require('post-type.php');            // adding post type support
    
    
    // Theme Support
    add_theme_support( 'post-thumbnails' ); // post thumbnail
    
    
    /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	 
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
	
	
	require('theme-config.php'); // some pre configuration

?>