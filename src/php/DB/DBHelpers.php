<?php
/**
 * DB Helpers class.
 *
 * @package iwpdev/bulk-qr-theme
 */

namespace Iwpdev\BulkQrTheme\DB;

/**
 * DB Helpers class.
 */
class DBHelpers {

	/**
	 * Adds a new user to the subscription list in the database.
	 *
	 * Inserts the user email and, optionally, the user ID into the "subscribe_news_users" table,
	 * marking the user as subscribed.
	 *
	 * @param string $user_email The email address of the user to subscribe. Must be a valid email.
	 * @param int    $user_id    Optional. The ID of the user. Default empty string.
	 *
	 * @return bool True on successful insertion, false on failure.
	 * @global wpdb  $wpdb       WordPress database object.
	 */
	public static function add_subscribe_user( $user_email, $user_id = 0 ) {
		global $wpdb;

		$table_name = $wpdb->prefix . "subscribe_news_users";

		$result = $wpdb->insert(
			$table_name,
			[
				'email'     => $user_email,
				'user_id'   => $user_id,
				'subscribe' => 1,
			],
			[
				'%s',
				'%d',
				'%d',
			]
		);

		if ( ! $result ) {
			return false;
		}

		return true;
	}
}
