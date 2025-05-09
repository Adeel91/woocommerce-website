<?php

/**
 * grocefycart: Block Patterns
 *
 * @since grocefycart 1.0.0
 */

/**
 * Registers pattern categories for grocefycart
 *
 * @since grocefycart 1.0.0
 *
 * @return void
 */
function grocefycart_register_pattern_category() {
	$block_pattern_categories = array(
		'grocefycart'             => array( 'label' => __( 'GrocefyCart : All Patterns', 'grocefycart' ) ),
		'grocefycart-woocommerce' => array( 'label' => __( 'GrocefyCart : WooCommerce Patterns', 'grocefycart' ) ),
	);

	$block_pattern_categories = apply_filters( 'grocefycart_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action( 'init', 'grocefycart_register_pattern_category', 9 );
