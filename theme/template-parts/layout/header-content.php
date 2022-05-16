<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mujjacon
 */

?>

<header class="header topbar absolute w-full top-0 z-50">
		<section class="flex flex-col lg:flex-row lg:justify-between justify-center items-between max-w-6xl gap-6 mx-auto p-4">
			<div class="flex justify-between items-center">
				<div class="h-auto w-24">
          <a href="<?php $uploads = wp_upload_dir();?>">
            <?php 
              if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
              }
            ?>
          </a>	
				</div>
		
        <div class="md:hidden">
          <button type="button" class="open_link-toggle bg-white rounded-md p-2 text-gray-400 hover:text-gray-500 hover:bg-gray-100">
            <span class="sr-only">Open menu</span>
            <!-- Heroicon name: menu -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
			</div>
		<!-- <button aria-controls="primary-menu" aria-expanded="false"><?//php esc_html_e( 'Primary Menu', 'duromedia' ); ?></button> -->
		<?php
		wp_nav_menu(
			array(
			'theme_location' => 'menu-1',
			'menu'              => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
			'menu_class'        => "flex flex-col lg:flex-row py-5 lg:py-0 lg:items-center gap-4 lg:gap-5 lg:text-white text-center md:max-w-lg lg:max-w-full mx-auto", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
			'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
			'container_class'   => "menu-container menu hidden lg:flex",	
			'link_before'       => '<li class="font-semibold capitalize cursor-pointer">', // (string) Text before the link text.
			'link_after'        => '</li>', // (string) Text after the link text.
			'depth'             => "2", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
			'item_spacing'      => "discard", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
			)
		);
		?><!-- #site-navigation -->
		</section>

		
	</header><!-- #masthead -->
