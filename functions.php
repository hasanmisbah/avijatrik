<?php 

/*Navigations*/
// Register Custom Navigation Walker

require_once('wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'avimag' ),
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
		'name' => __( 'left sidebar', 'wpb' ),
		'id' => 'left-sidebar',
		'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
		'before_widget' => '<div class="side-index content-bg">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="list-header">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' =>__( 'right sidebar', 'wpb'),
		'id' => 'right-sidebar',
		'description' => __( 'Appears on the static front page template', 'wpb' ),
		'before_widget' => '<div class="side-index content-bg">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="list-header">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'top right sidebar', 'wpb' ),
		'id' => 'top-right-sidebar',
		'description' => __( 'This selectdet Widget only for monthly magazine info', 'wpb' ),
		'before_widget' => '<div class="col-lg-4 col-md-4 col-sm-4 header-slag">',
		'after_widget' => '</div>',
		'before_title' => '<p class="header-text">',
		'after_title' => '</p>',
	) );
	}

add_action( 'widgets_init', 'wpb_widgets_init' );


/* Modify the read more link on the_excerpt() */
 
function et_excerpt_length($length) {
    return 60;
}
add_filter('excerpt_length', 'et_excerpt_length');
 
/* Add a link  to the end of our excerpt contained in a div for styling purposes and to break to a new line on the page.*/
 
function et_excerpt_more($more) {
    global $post;
    return '...... <a href="'. get_permalink($post->ID) . '" class="btn btn-success read">বিস্তারিত</a>';
}
add_filter('excerpt_more', 'et_excerpt_more');



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
/*Custom Taxonomy*/

// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_book_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_book_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'mag-name', 'taxonomy general name' ),
		'singular_name'     => _x( 'mag-name', 'taxonomy singular name' ),
		'search_items'      => __( 'Search mag-name' ),
		'all_items'         => __( 'All mag-name' ),
		'parent_item'       => __( 'Parent mag-name' ),
		'parent_item_colon' => __( 'Parent mag-name:' ),
		'edit_item'         => __( 'Edit mag-name' ),
		'update_item'       => __( 'Update mag-name' ),
		'add_new_item'      => __( 'Add New mag-name' ),
		'new_item_name'     => __( 'New mag-name Name' ),
		'menu_name'         => __( 'mag-name' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'mag-name' ),
	);

	register_taxonomy( 'genre', array( 'book' ), $args );
}
/*Custom Taxonomy*/

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


?>