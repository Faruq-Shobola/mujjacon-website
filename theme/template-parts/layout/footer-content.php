<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mujjacon
 */

?>

<footer id="colophon">
	<div>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mujjacon' ) ); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'mujjacon' ), 'WordPress' );
			?>
		</a>
	</div>
</footer><!-- #colophon -->
