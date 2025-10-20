<?php
/**
 * Custom navigation menu walker class for the BulkQRTheme.
 *
 * @package iwpdev/bulk-qr-theme
 */

namespace Iwpdev\BulkQrTheme\Nav;

use Walker_Nav_Menu;

/**
 * Custom navigation menu walker class.
 *
 * Extends the Walker_Nav_Menu class to provide custom output for navigation menus.
 * Useful for modifying the structure, classes, or attributes of menu items.
 *
 * Ensure to use appropriate filters and hooks for extensibility and follow
 * WordPress best practices for security and performance.
 */
class NavMenu extends Walker_Nav_Menu {

	/**
	 * Generates the opening HTML for a menu element and appends it to the output.
	 *
	 * This method dynamically builds the menu items based on the user's login state.
	 * Adds "Login" and "Sign up" buttons for non-logged-in users, or "Logout"
	 * and "Account" buttons for logged-in users.
	 *
	 * @param string   &$output Reference to the output string to append the generated HTML.
	 * @param object    $item   The current menu item object.
	 * @param int       $depth  Optional. Depth of the menu item. Default is 0.
	 * @param stdClass  $args   Optional. An object of arguments. Typically passed from wp_nav_menu(). Default is null.
	 * @param int       $id     Optional. ID of the current menu item. Default is 0.
	 *
	 * @return void
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$args->menu_item = $item;

		if ( ! is_login() ) {
			$output .= '<li class="btn"><a href="#" data-modal="sign-in">Login</a></li><li class="btn"><a href="#" data-modal="sign-up">Sign up</a></li>';
		} else {
			$output .= '<li class="btn"><a href="#">Logout</a></li><li class="btn"><a href="#">Account</a></li>';
		}
	}
}
