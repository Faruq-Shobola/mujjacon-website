<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package mujjacon
 */

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function mujjacon_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'mujjacon_pingback_header' );


//Facilities custom post

function testimony_post_type() {
	$args = array(
		'labels'      => array(
		  'name'          => 'Testimony',
		  'singular_name' => 'Testimony',
		),
		'public'      => true,
		'hierarchical' => true,
		'has_archive' => true,
		'rewrite'     => array( 'slug' => 'testimony' ),
		'supports' =>  array('title', 'editor', 'tag', 'thumbnail', 'custom-fields'),
		
	  );
	  register_post_type('testimony', $args );
	}
	add_action('init', 'testimony_post_type');


//Facilities custom post

 function facilities_post_type() {
	$args = array(
		'labels'      => array(
		  'name'          => 'Facilities',
		  'singular_name' => 'Facility',
		),
		'public'      => true,
		'hierarchical' => true,
		'has_archive' => true,
		'rewrite'     => array( 'slug' => 'facilities' ),
		'supports' =>  array('title', 'editor', 'tag', 'thumbnail', 'custom-fields'),
		
	  );
	  register_post_type('facilities', $args );
	}
	add_action('init', 'facilities_post_type');
  
  //Facilities taxonomies
  function facilities_taxonomy() {
	$labels = array(
		'name'              => 'Facilities Category', 
		'singular_name'     => 'category',
		'search_items'      => __( 'Search facilities' ),
		'all_items'         => __( 'All Facilities' ),
		'parent_item'       => __( 'Parent Facility' ),
		'parent_item_colon' => __( 'Parent Faacility:' ),
		'edit_item'         => __( 'Edit facility' ),
		'update_item'       => __( 'Update facility' ),
		'add_new_item'      => __( 'Add New category' ),
		'new_item_name'     => __( 'New facility Name' ),
		'menu_name'         => __( 'Categories' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'facilities' ],
	);
	register_taxonomy( 'facilities', [ 'facilities' ], $args );
  }
  add_action( 'init', 'facilities_taxonomy' );



//Register Sidebars 
function my_sidebars() {

	register_sidebar(
		array(
		  'name' => 'Newsletter',
		  'id' => 'newsletter',
		)
	);

	register_sidebar(
		array(
		  'name' => 'Footer sidebar 1',
		  'id' => 'footer-sidebar-1',
		  'before_title' => '<h1 class="text-2xl font-medium uppercase py-2">',
		  'after_title' => '</h1><div class="h-1 rounded w-14 bg-secondary mb-2"></div>',
		)
	);

   register_sidebar(
		array(
		  'name' => 'Footer sidebar 2',
		  'id' => 'footer-sidebar-2',
		  'before_title' => '<h5 class="capitalize font-bold pb-2">',
		  'after_title' => '</h5>',
		)
	);
  
	register_sidebar(
	  array(
		'name' => 'Footer sidebar 3',
		'id' => 'footer-sidebar-3',
		'before_title' => '<h5 class="capitalize font-bold pb-2">',
		'after_title' => '</h5>',
	  )
	);

	register_sidebar(
		array(
		  'name' => 'Address',
		  'id' => 'address',
		)
	);
  
	register_sidebar(
	  array(
		'name' => 'Copyright',
		'id' => 'copyright',
	  )
	);
  
  }
  add_action('widgets_init','my_sidebars');

