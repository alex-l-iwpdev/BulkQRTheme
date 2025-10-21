<?php
/**
 * SubscribeMailNews class file.
 *
 * @package iwpdev/bulk-qr-theme
 */

namespace Iwpdev\BulkQrTheme\Subscribe;

use Iwpdev\BulkQrTheme\DB\DBHelpers;

/**
 * Class for handling email subscription functionality.
 */
class SubscribeMailNews {

	/**
	 * Subscribe action and nonce.
	 */
	const BQS_SUBSCRIBE_ACTION_NAME = 'bqs_subscribe_action';

	/**
	 * Constructor for SubscribeMailNews class.
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * Init Actions and filters for email subscription.
	 *
	 * @return void
	 */
	private function init(): void {

		add_action( 'wp_ajax_' . self::BQS_SUBSCRIBE_ACTION_NAME, [ $this, 'handleSubscribe' ] );
		add_action( 'wp_ajax_nopriv_' . self::BQS_SUBSCRIBE_ACTION_NAME, [ $this, 'handleSubscribe' ] );
	}

	/**
	 * Handles the subscription process for a user.
	 *
	 * Validates and sanitizes the input data, verifies the nonce for security,
	 * checks if the email already exists, and adds the user to the subscription list.
	 * Provides a JSON response indicating success or failure of the operation.
	 *
	 * @return void
	 */
	public function handleSubscribe(): void {
		$nonce = ! empty( $_POST['nonce'] ) ? filter_var( wp_unslash( $_POST['nonce'] ), FILTER_SANITIZE_FULL_SPECIAL_CHARS ) : '';

		if ( ! wp_verify_nonce( $nonce, self::BQS_SUBSCRIBE_ACTION_NAME ) ) {
			wp_send_json_error(
				[
					'message' => __( 'Invalid nonce.', 'bulkqr' ),
				]
			);
		}

		$user_email = ! empty( $_POST['email'] ) ? filter_var( wp_unslash( $_POST['email'] ), FILTER_SANITIZE_EMAIL ) : '';

		if ( empty( $user_email ) ) {
			wp_send_json_error(
				[
					'message' => __( 'Invalid email.', 'bulkqr' ),
				]
			);
		}

		$isset_user = get_user_by( 'email', $user_email );
		$user_id    = 0;
		if ( ! empty( $isset_user ) ) {
			$user_id = $isset_user->ID;
		}

		$result = DBHelpers::add_subscribe_user( $user_email, $user_id );

		if ( ! $result ) {
			wp_send_json_error(
				[
					'message' => __( 'Something went wrong.', 'bulkqr' ),
				]
			);
		}

		wp_send_json_success(
			[
				'title'   => __( 'Thank you for subscribing', 'bulkqr' ),
				'message' => __( 'Now you will always be aware of our updates.', 'bulkqr' ),
				'user_id' => $user_id,
			]
		);

	}
}
