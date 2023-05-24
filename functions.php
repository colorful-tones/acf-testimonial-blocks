<?php
/**
 * We use WordPress's init hook to make sure
 * our blocks are registered early in the loading
 * process.
 *
 * @link https://developer.wordpress.org/reference/hooks/init/
 */
function register_acf_blocks() {
	/**
	 * We register our block's with WordPress's handy
	 * register_block_type();
	 *
	 * @link https://developer.wordpress.org/reference/functions/register_block_type/
	 */
	register_block_type( __DIR__ . '/blocks/testimonial-example-1' );
	register_block_type( __DIR__ . '/blocks/testimonial-example-2' );
	register_block_type( __DIR__ . '/blocks/testimonial-example-3' );
	register_block_type( __DIR__ . '/blocks/testimonial-example-4' );
}

add_action( 'init', 'register_acf_blocks' );
