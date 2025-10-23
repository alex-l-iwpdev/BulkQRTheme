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
		add_action( 'after_setup_theme', [ $this, 'boot_carbon_fields' ] );
		add_action( 'carbon_fields_register_fields', [ $this, 'register_carbon_fields_gutenberg_blocks' ] );
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
		//Steps Block.
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
			->set_category( 'bulk-qr-theme', 'BQS Blocks', 'admin-appearance' )
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

		// Hero banner.
		Block::make( __( 'Hero Banner', 'bulk-qr-theme' ) )
			->add_fields(
				[
					Field::make( 'text', 'banner_title', __( 'Banner Title', 'bulk-qr-theme' ) ),
					Field::make( 'text', 'banner_description', __( 'Banner Description', 'bulk-qr-theme' ) ),
					Field::make( 'image', 'banner_image', __( 'Banner Image', 'bulk-qr-theme' ) ),
				]
			)
			->set_category( 'bulk-qr-theme', 'BQS Blocks', 'admin-appearance' )
			->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
				get_template_part(
					'template-parts/blocks/hero',
					'banner',
					[
						'attributes'   => $attributes,
						'inner_blocks' => $inner_blocks,
						'fields'       => $fields,
					]
				);
			} );

		// Hero Slider.
		Block::make( __( 'Hero Slider', 'bulk-qr-theme' ) )
			->add_fields(
				[
					Field::make( 'complex', 'hero_slider', __( 'Hero Slider', 'bulk-qr-theme' ) )
						->add_fields(
							[
								Field::make( 'text', 'slide_title', __( 'Slide Title', 'bulk-qr-theme' ) ),
								Field::make( 'text', 'slide_description', __( 'Slide Description', 'bulk-qr-theme' ) ),
								Field::make( 'text', 'primary_cta_text', __( 'Primary CTA Text', 'bulk-qr-theme' ) )
									->set_width( 50 ),
								Field::make( 'text', 'primary_cta_link', __( 'Primary CTA Link', 'bulk-qr-theme' ) )
									->set_width( 50 ),
								Field::make( 'text', 'secondary_cta_text', __( 'Primary CTA Text', 'bulk-qr-theme' ) )
									->set_width( 50 ),
								Field::make( 'text', 'secondary_cta_link', __( 'Primary CTA Link', 'bulk-qr-theme' ) )
									->set_width( 50 ),
								Field::make( 'image', 'slide_image', __( 'Slide', 'bulk-qr-theme' ) ),
							]
						),
				]
			)
			->set_category( 'bulk-qr-theme', 'BQS Blocks', 'admin-appearance' )
			->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
				get_template_part(
					'template-parts/blocks/hero',
					'slider',
					[
						'attributes'   => $attributes,
						'inner_blocks' => $inner_blocks,
						'fields'       => $fields,
					]
				);
			} );

		// Text and Image.
		Block::make( __( 'Text and Image', 'bulk-qr-theme' ) )
			->add_fields(
				[
					Field::make( 'radio', 'image_position', __( 'Image Position', 'bulk-qr-theme' ) )
						->set_options(
							[
								'left'  => __( 'Left', 'bulk-qr-theme' ),
								'right' => __( 'Right', 'bulk-qr-theme' ),
							]
						)->set_default_value( 'left' ),
					Field::make( 'image', 'image', __( 'Image', 'bulk-qr-theme' ) ),
					Field::make( 'text', 'title', __( 'Title', 'bulk-qr-theme' ) ),
					Field::make( 'rich_text', 'description', __( 'Description', 'bulk-qr-theme' ) ),

				]
			)
			->set_category( 'bulk-qr-theme', 'BQS Blocks', 'admin-appearance' )
			->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
				get_template_part(
					'template-parts/blocks/text',
					'image',
					[
						'attributes'   => $attributes,
						'inner_blocks' => $inner_blocks,
						'fields'       => $fields,
					]
				);
			} );

		// Subscribe form
		Block::make( __( 'Subscribe Form', 'bulk-qr-theme' ) )
			->add_fields(
				[
					Field::make( 'image', 'image', __( 'Image', 'bulk-qr-theme' ) ),
					Field::make( 'text', 'title', __( 'Title', 'bulk-qr-theme' ) ),
					Field::make( 'rich_text', 'description', __( 'Description', 'bulk-qr-theme' ) ),

				]
			)
			->set_category( 'bulk-qr-theme', 'BQS Blocks', 'admin-appearance' )
			->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
				get_template_part(
					'template-parts/blocks/subscribe',
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
