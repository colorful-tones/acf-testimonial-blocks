<?php

add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
	register_block_type( __DIR__ . '/blocks/testimonial-example-1' );
	register_block_type( __DIR__ . '/blocks/testimonial-example-2' );
	register_block_type( __DIR__ . '/blocks/testimonial-example-3' );
	register_block_type( __DIR__ . '/blocks/testimonial-example-4' );
}
