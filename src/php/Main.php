<?php

/**
 * Main class for the Bulk QR Theme.
 *
 * @package iwpdev/bulk-qr-theme
 */

namespace Iwpdev\BulkQrTheme;

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
}
