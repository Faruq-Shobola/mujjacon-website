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
		  'after_title' => '</h1><div class="h-1 rounded-sm w-14 bg-secondary mb-2"></div>',
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

