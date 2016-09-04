<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package maxifalcone2
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function maxifalcone2_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'maxifalcone2_jetpack_setup' );
