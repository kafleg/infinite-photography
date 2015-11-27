<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Infinite_Photography
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function infinite_photography_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'infinite_photography_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function infinite_photography_jetpack_setup
add_action( 'after_setup_theme', 'infinite_photography_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function infinite_photography_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function infinite_photography_infinite_scroll_render
