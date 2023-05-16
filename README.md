# Testimonial ACF Blocks

This repository contains a Twenty Twenty-Three [child theme](https://developer.wordpress.org/themes/advanced-topics/child-themes/) and was used to demonstrate four different approaches to writing a testimonial [ACF Block](https://www.advancedcustomfields.com/resources/blocks/).

👉 [Check out the playback recording from this workshop](https://youtu.be/x93CeSgBl8U) 👈

## Requirements

In order to use the `tt3child` theme:

1. You have to have the default [Twenty Twenty-Three theme](https://wordpress.org/themes/twentytwentythree/) installed and activated.
2. You have to have [ACF PRO plugin](https://www.advancedcustomfields.com/pro/) installed and activated.

Once those requirements are met then just be sure to activate the `tt3child` theme.

## What the `tt3child` child theme contains

There are four different versions of a testimonial ACF Block. Each one is a different take on how one might approach creating a testimonial block.

| Block name | Description |
|---------|------------|
| Testimonial Example 1 `blocks/testimonial-example-1/` | Utilizes ACF fields, which are registered and assigned to our ACF Block to assign and output data. ACF field data is stored in `acf-json/group_645ba67ec387b.json` |
| Testimonial Example 2 `blocks/testimonial-example-2/` | Utilizes WordPress core's [InnerBlocks component](https://developer.wordpress.org/block-editor/how-to-guides/block-tutorial/nested-blocks-inner-blocks/). We pass an array of core blocks to pre-populate the nested block data with `<InnerBlocks template="">`. We also use `templateLock="all"` on `InnerBlocks` to lock down all the blocks. We do this in order to try and set up our editorial team for success. |
| Testimonial Example 3 `blocks/testimonial-example-3/` | This largely extends Testimonial Example 2 use of `InnerBlocks`, but introduces [Block Styles](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/) to allow for the addition of a class to our final output, which we can target with specific stylistic appearances for our block, e.g. Rounded (makes the image round) and Shadow (adds a box-shadow under the image) |
| Testimonial Example 4 `blocks/testimonial-example-4/` | Demonstrates [Block Variations](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/) to show how one could allow for different testimonial layouts: Image Left and Image Right. |

__Note:__ there is also an example `theme.json` file which includes some custom per-block CSS for each block. This is solely to help debug and demonstrate how one might consider using `theme.json` to provide unique styling entries for each block.

## Resources and further reading

- [ACF PRO Blocks documentation](https://www.advancedcustomfields.com/resources/blocks/)
- [WordPress Developer Resources > __Metadata in `block.json`__](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/)
- [WordPress Developer Resources > __Nested Blocks: Using InnerBlocks__](https://developer.wordpress.org/block-editor/how-to-guides/block-tutorial/nested-blocks-inner-blocks/)
- [Gutenberg `templateLock` docs](https://github.com/WordPress/gutenberg/blob/37dc9f67575153857b59550fc964cc2954f45ce2/packages/block-editor/src/components/inner-blocks/README.md#templatelock)
- [WordPress Developer Resources > __Custom block styles__](https://developer.wordpress.org/themes/advanced-topics/custom-block-styles/)
- [WordPress Developer Resources > __Variations__](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/)
- [3 Ways to Curate the Editor Experience in WordPress](https://wpengine.com/builders/curate-editor-experience-wordpress/)