<?php

/**
 * Main class for the Bulk QR Theme.
 *
 * @package iwpdev/bulk-qr-theme
 */

namespace Iwpdev\BulkQrTheme;

use Iwpdev\BulkQrTheme\Blocks\RegisterCarbonFields;

/**
 * Main class for the theme.
 *
 * This class serves as the primary entry point for the theme functionality.
 * It defines constants and facilitates organization and structure for
 * the overall theme.
 */
class Main {
	const THEME_VERSION = '1.0';

	/**
	 * Constructor method.
	 *
	 * Initializes the class instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * Initializes Actions and Filters.
	 *
	 * Prepares the class for use by setting up necessary properties
	 * or configurations.
	 *
	 * @return void
	 */
	private function init(): void {

		add_action( 'wp_enqueue_scripts', [ $this, 'add_scripts_and_styles' ] );
		add_action( 'after_setup_theme', [ $this, 'add_theme_supports' ] );
		add_filter( 'upload_mimes', [ $this, 'svg_upload_allow' ] );

		new RegisterCarbonFields();

	}

	/**
	 * Enqueues theme scripts and styles.
	 *
	 * This method registers and enqueues the JavaScript and CSS files required by the theme.
	 * It ensures proper dependency management, versioning, and script loading in the footer.
	 *
	 * @return void
	 */
	public function add_scripts_and_styles(): void {

		wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/app.js', [ 'jquery' ], self::THEME_VERSION, true );

		wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/app.css', '', self::THEME_VERSION );
	}

	/**
	 * Adds theme support features.
	 *
	 * Registers the necessary theme support options to enhance
	 * the theme's functionality and compatibility with WordPress core.
	 *
	 * @return void
	 */
	public function add_theme_supports(): void {
		register_nav_menus(
			[
				'header_menu'      => __( 'Header Menu', 'bulkqr' ),
				'footer_menu'      => __( 'Footer Menu', 'bulkqr' ),
				'footer_term_menu' => __( 'Footer Term Menu', 'bulkqr' ),
			]
		);

		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo' );
		add_theme_support( 'menus' );
	}

	/**
	 * Allows SVG file uploads by adding the SVG MIME type to the list of allowed file types.
	 *
	 * This method extends the list of MIME types permitted for upload in WordPress
	 * by adding support for SVG files.
	 *
	 * @param array $mimes  An associative array of currently allowed MIME types.
	 *                      Keys are file extensions, and values are MIME types.
	 *
	 * @return array Modified array of allowed MIME types including SVG support.
	 */
	public function svg_upload_allow( $mimes ): array {
		$mimes['svg'] = 'image/svg+xml';

		return $mimes;
	}
}
