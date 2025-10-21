<?php
/**
 * CaterCustomTables class file.
 *
 * @package iwpdev/bulk-qr-theme
 */

namespace Iwpdev\BulkQrTheme\DB;

/**
 * Custom database tables for catering-related data.
 */
class CreateCustomTables {

	/**
	 * Constructor for CaterCustomTables.
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * Init Actions and Filters.
	 *
	 * @return void
	 */
	private function init() {
		add_action( 'admin_init', [ $this, 'create_subscribe_user_table' ] );
	}

	/**
	 * Creates a custom database table to store user subscription information
	 * if it does not already exist.
	 *
	 * The table includes fields for user ID, email, subscription status, and
	 * subscription date. Ensures the table is only created once by using a
	 * stored WordPress option.
	 *
	 * Security:
	 * - Table name is escaped using $wpdb->prefix.
	 * - Performed within the WordPress database abstraction layer to prevent SQL injection.
	 *
	 * @return void
	 */
	public function create_subscribe_user_table(): void {
		global $wpdb;

		$table_name = $wpdb->prefix . "subscribe_news_users";

		$user_subscribe_table_created = get_option( 'user_subscribe_table_created', false );

		if ( ! $user_subscribe_table_created ) {
			$sql = "CREATE TABLE IF NOT EXISTS $table_name (
    			`id` BIGINT NOT NULL AUTO_INCREMENT , 
    			`user_id` BIGINT NULL , 
    			`email` VARCHAR(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL , 
    			`subscribe` BOOLEAN NOT NULL DEFAULT FALSE , 
    			`date_sucribe` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    			PRIMARY KEY (`id`)) ;";

			$result = $wpdb->query( $sql );
			if ( $result ) {
				update_option( 'user_subscribe_table_created', true );
			}
		}
	}

}
