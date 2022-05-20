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
		<section class="flex flex-col lg:flex-row lg:justify-between justify-center items-between max-w-6xl gap-2 md:gap-6 mx-auto md:p-4">
			<div class="flex justify-between items-center p-4 h-20">
				<div class="h-auto w-24">
					<a href="<?php $uploads = wp_upload_dir();?>">
						<?php 
						if ( function_exists( 'the_custom_logo' ) ) {
							the_custom_logo();
						}
						?>
					</a>	
				</div>
		
				<div class="flex md:hidden hamburger-menu">
					<span class="flex justify-center items-center h-10 w-10 rounded-sm bg-white">
						<i class="fas fa-bars text-light-green hamburger-menu text-2xl"></i>
					</span>
				</div>
			</div>
		<!-- <button aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'duromedia' ); ?></button> -->
		<?php
		wp_nav_menu(
			array(
			'theme_location' => 'menu-1',
			'menu'              => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
			'menu_class'        => "flex flex-col lg:flex-row px-4 md:px-0 py-5 lg:py-0 lg:items-center gap-4 lg:gap-5 lg:text-white text-center md:max-w-lg lg:max-w-full mx-auto", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
			'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
			'container_class'   => "menu-container menu hidden bg-white md:bg-transparent lg:flex",	
			'link_before'       => '<li class="font-semibold capitalize cursor-pointer">', // (string) Text before the link text.
			'link_after'        => '</li>', // (string) Text after the link text.
			'depth'             => "2", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
			'item_spacing'      => "discard", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.
			)
		);
		?><!-- #site-navigation -->
		</section>

		
	</header><!-- #masthead -->
