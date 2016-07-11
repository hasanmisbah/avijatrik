<?php 

//conditional html5 shim to header
function add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');


//Featured Image Support
add_theme_support( 'post-thumbnails' );

/*Navigations*/
// Register Custom Navigation Walker

require_once('wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'avimag' ),
    'mobile_nav' => __( 'ex mobile menu', 'avimag' ),
    'footer' => __( 'footer Menu', 'avimag' ),
) );

/*/navigations*/


/*Editor note*/

function create_posttype() {
     
    
        register_post_type( 'Editor Note',
     
        array(
            'labels' => array(
                'name' => __( 'Editor Note' ),
                'singular_name' => __( 'Editor Note' )
            ),
            'public' => true,
            'supports' => array( 'title', 'editor' ),
            'taxonomies' => array('series'),
            'rewrite' => array('slug' => 'Editor Note'),
        )
    );
}
add_action( 'init', 'create_posttype' );


/**
 * Register our sidebars and widgetized areas.
 *
 */

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


/*Pagination--*/
function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}

/*pagination*/

/*custom header*/
$defaults = array(
	'default-image'          => '',
	'random-default'         => false,
	'width'                  => 600,
	'height'                 => 100,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => false,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );
/*Custom Header*/

/*Custom Trimming*/
function wpse_allowedtags() {
    // Add custom tags to this string
        return '<script>,<style>,<br>,<em>,<i>,<ul>,<ol>,<li>,<a>,<p>,<img>,<video>,<audio>';
    }

if ( ! function_exists( 'wpse_custom_wp_trim_excerpt' ) ) : 

    function wpse_custom_wp_trim_excerpt($wpse_excerpt) {
    global $post;
    $raw_excerpt = $wpse_excerpt;
        if ( '' == $wpse_excerpt ) {

            $wpse_excerpt = get_the_content('');
            $wpse_excerpt = strip_shortcodes( $wpse_excerpt );
            $wpse_excerpt = apply_filters('the_content', $wpse_excerpt);
            $wpse_excerpt = str_replace(']]>', ']]>', $wpse_excerpt);
            $wpse_excerpt = strip_tags($wpse_excerpt, wpse_allowedtags()); /*IF you need to allow just certain tags. Delete if all tags are allowed */

            //Set the excerpt word count and only break after sentence is complete.
                $excerpt_word_count = 50;
                $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count);
                $tokens = array();
                $excerptOutput = '';
                $count = 0;

                // Divide the string into tokens; HTML tags, or words, followed by any whitespace
                preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $wpse_excerpt, $tokens);

                foreach ($tokens[0] as $token) { 

                    if ($count >= $excerpt_word_count && preg_match_all('/[\,\;\।\!]\s*$/uS', $token)) {
                    // Limit reached, continue until , ; ? . or ! occur at the end
                        $excerptOutput .= trim($token);
                        break;
                    }

                    // Add words to complete sentence
                    $count++;

                    // Append what's left of the token
                    $excerptOutput .= $token;
                }

            $wpse_excerpt = trim(force_balance_tags($excerptOutput));

                $excerpt_end = ' <a href="'. get_permalink($post->ID) . '" class="btn btn-success read">বিস্তারিত</a>';
                $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end); 

                //$pos = strrpos($wpse_excerpt, '</');
                //if ($pos !== false)
                // Inside last HTML tag
                //$wpse_excerpt = substr_replace($wpse_excerpt, $excerpt_end, $pos, 0); /* Add read more next to last word */
                //else
                // After the content
                $wpse_excerpt .= $excerpt_end; /*Add read more in new paragraph */

            return $wpse_excerpt;   

        }
        return apply_filters('wpse_custom_wp_trim_excerpt', $wpse_excerpt, $raw_excerpt);
    }

endif; 

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wpse_custom_wp_trim_excerpt');
/*/Custom Trimming*/

// new update

// For Setup Post type

add_theme_support( 'post-formats', array(
		'image', 'video', 'audio',
	) );


// For Setup Thumbnail
function autoset_featured() {
 global $post;
 $already_has_thumb = has_post_thumbnail($post->ID);
 if (!$already_has_thumb) {
 $attached_image = get_children( "post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );
 if ($attached_image) {
 foreach ($attached_image as $attachment_id => $attachment) {
 set_post_thumbnail($post->ID, $attachment_id);
 }
 }
 }
 }
add_action('the_post', 'autoset_featured');
add_action('save_post', 'autoset_featured');
add_action('draft_to_publish', 'autoset_featured');
add_action('new_to_publish', 'autoset_featured');
add_action('pending_to_publish', 'autoset_featured');
add_action('future_to_publish', 'autoset_featured');

?>