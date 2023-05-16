<?php
/**
 * Testimonial Block Template (Example 2).
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

/**
 * @link https://developer.wordpress.org/block-editor/reference-guides/block-api/block-templates/
 */
$inner_blocks_template = array(
	array(
		'core/columns',
		array(
			'style'             => array(
				'spacing' => array(
					'padding' => '0',
				),
			),
			'verticalAlignment' => 'center',
		),
		array(
			array(
				'core/column',
				array(
					'verticalAlignment' => 'center',
					'width'             => '66.66%',
				),
				array(
					array(
						'core/quote',
						array(
							'citation' => '<strong>Famous Person</strong> <br><span>Head of Finance</span>',
							'style'    => array(
								'typography' => array(
									'fontSize' => 'var(--wp--preset--font-size--small)',
								),
							),
						),
						array(
							array(
								'core/paragraph',
								array(
									'content' => 'Quote goes here...',
									'style'   => array(
										'spacing'    => array(
											'margin' => array(
												'top' => '0',
											),
										),
										'typography' => array(
											'fontSize'   => 'var(--wp--preset--font-size--large)',
											'lineHeight' => '1.1',
										),
									),
								),
							),
						),
					),
				),
			),
			array(
				'core/column',
				array(
					'verticalAlignment' => 'center',
					'width'             => '33.33%',
				),
				array(
					array(
						'core/image',
						array(),
					),
				),
			),
		),
	),
);

$allowed_blocks = array( 'core/quote', 'core/paragraph', 'core/image' );

?>
<div
	<?php
	echo wp_kses_data(
		get_block_wrapper_attributes(
			array(
				'id'    => $block_id, // Allow for id to pass-through
				'class' => 'example-2 ' . $block['className'], // (Optional) custom CSS class. Merged with editor.
			)
		)
	);
	?>
>

	<InnerBlocks
		class="example-2__innerblocks"
		template="<?php echo esc_attr( wp_json_encode( $inner_blocks_template ) ); ?>"
		templateLock="all"
		allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks ) ); ?>"
	/>

</div>
