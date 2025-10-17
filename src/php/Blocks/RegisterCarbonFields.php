<?php
/**
 * Handles the registration of Carbon Fields for the theme.
 *
 * @package iwpdev/bulk-qr-theme
 */

namespace Iwpdev\BulkQrTheme\Blocks;


use Carbon_Fields\Block;
use Carbon_Fields\Carbon_Fields;
use Carbon_Fields\Field;

class RegisterCarbonFields {
	/**
	 * Constructor method for initializing the class.
	 *
	 * Sets up the necessary hooks, properties, or functionalities to prepare
	 * the class for usage immediately after instantiation.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * Initializes the necessary actions for the class.
	 *
	 * Adds the required hooks to set up features or configurations,
	 * ensuring proper integration and functionality within the theme or plugin.
	 *
	 * @return void
	 */
	private function init(): void {
		add_action( 'after_setup_theme', 'boot_carbon_fields' );
		add_action( 'carbon_fields_register_fields', 'register_carbon_fields_gutenberg_blocks' );
	}

	/**
	 * Boots the Carbon Fields framework.
	 *
	 * This method initializes the Carbon Fields plugin, ensuring
	 * all fields and associated functionality are properly loaded.
	 *
	 * @return void
	 */
	public function boot_carbon_fields(): void {
		Carbon_Fields::boot();
	}


	public function register_carbon_fields_gutenberg_blocks(): void {
		Block::make( __( 'Steps Block', 'bulk-qr-theme' ) )
			->add_fields(
				[
					Field::make( 'text', 'block_title', __( 'Block Title', 'bulk-qr-theme' ) ),
					Field::make( 'complex', 'block_steps', __( 'Steps', 'bulk-qr-theme' ) )
						->add_fields(
							[
								Field::make( 'image', 'image', __( 'Image steps', 'bulk-qr-theme' ) ),
								Field::make( 'text', 'step_title', __( 'Step Title', 'bulk-qr-theme' ) ),
							]
						),
				]
			)
			->set_category( 'bulk-qr-theme', 'Blocks', 'admin-appearance' )
			->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
				get_template_part(
					'template-parts/blocks/steps',
					'block',
					[
						'attributes'   => $attributes,
						'inner_blocks' => $inner_blocks,
						'fields'       => $fields,
					]
				);
			} );
	}

}
