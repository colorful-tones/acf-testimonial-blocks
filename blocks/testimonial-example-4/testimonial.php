<?php
/**
 * Testimonial Block Template (Example 4).
 *
 * @param array  $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool   $is_preview True during backend preview render.
 * @param int    $post_id The post ID the block is rendering content against.
 *                     This is either the post ID currently being displayed inside a query loop,
 *                     or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */

// Support custom id values.
$block_id = '';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = esc_attr( $block['anchor'] );
}
?>

<div
	<?php
	echo wp_kses_data(
		get_block_wrapper_attributes(
			array(
				'id'    => $block_id, // Allow for id to pass-through
				'class' => 'example-4 ' . $block['className'], // (Optional) custom CSS class. Merged with editor.
			)
		)
	);
	?>
>

	<InnerBlocks class="example-4__innerblocks"/>

</div>
