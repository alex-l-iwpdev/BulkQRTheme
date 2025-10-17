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

	}
}
