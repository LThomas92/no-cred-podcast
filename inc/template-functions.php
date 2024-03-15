<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package No_Cred_Podcast
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function no_cred_podcast_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'no_cred_podcast_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function no_cred_podcast_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'no_cred_podcast_pingback_header' );


//Episodes -- CPT 

function custom_post_type() {
	$labels = array(
		'name'                => _x( 'Episodes', 'Post Type General Name' ),
		'singular_name'       => _x( 'Episode', 'Post Type Singular Name'),
		'menu_name'           => __( 'Episodes'),
		'parent_item_colon'   => __( 'Parent Episode'),
		'all_items'           => __( 'All Episodes' ),
		'view_item'           => __( 'View Episode' ),
		'add_new_item'        => __( 'Add New Episode' ),
		'add_new'             => __( 'Add New' ),
		'edit_item'           => __( 'Edit Episode' ),
		'update_item'         => __( 'Update Episode' ),
		'search_items'        => __( 'Search Episodes' ),
		'not_found'           => __( 'Not Found' ),
		'not_found_in_trash'  => __( 'Not found in Trash' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'episode'),
		'description'         => __( 'episode'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_icon'           => 'dashicons-microphone',
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,

	);

	// Registering your Custom Post Type
	register_post_type( 'episodes', $args );
}
add_action( 'init', 'custom_post_type', 0 );
