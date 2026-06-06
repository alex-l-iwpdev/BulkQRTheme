<?php
/**
 * NewsletterAdminPage class file.
 *
 * @package iwpdev/bulk-qr-theme
 */

namespace Iwpdev\BulkQrTheme\Admin;

/**
 * Class for handling the newsletter admin page.
 */
class NewsletterAdminPage {

	/**
	 * Action name for AJAX.
	 */
	const ACTION_NAME = 'bqs_send_newsletter';

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * Initializes actions.
	 */
	private function init(): void {
		add_action( 'admin_menu', [ $this, 'register_newsletter_page' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_admin_scripts' ] );
		add_action( 'wp_ajax_' . self::ACTION_NAME, [ $this, 'handle_send_newsletter' ] );
	}

	/**
	 * Registers the newsletter admin page.
	 */
	public function register_newsletter_page(): void {
		add_menu_page(
			__( 'Newsletter', 'bulkqr' ),
			__( 'Newsletter', 'bulkqr' ),
			'manage_options',
			'bqs-newsletter',
			[ $this, 'render_newsletter_page' ],
			'dashicons-email-alt',
			65
		);
	}

	/**
	 * Enqueues admin scripts.
	 */
	public function enqueue_admin_scripts( $hook ): void {
		if ( 'toplevel_page_bqs-newsletter' !== $hook ) {
			return;
		}

		wp_enqueue_script( 'bqs-newsletter-js', get_template_directory_uri() . '/assets/js/admin-newsletter.js', [ 'jquery' ], '1.0.0', true );
		wp_localize_script(
			'bqs-newsletter-js',
			'BQSNewsletter',
			[
				'ajaxUrl' => admin_url( 'admin-ajax.php' ),
				'nonce'   => wp_create_nonce( self::ACTION_NAME ),
				'action'  => self::ACTION_NAME,
			]
		);
	}

	/**
	 * Renders the newsletter page.
	 */
	public function render_newsletter_page(): void {
		$templates = $this->get_email_templates();
		?>
		<div class="wrap">
			<h1><?php _e( 'Email Newsletter', 'bulkqr' ); ?></h1>
			<form id="bqs-newsletter-form">
				<table class="form-table">
					<tr>
						<th scope="row"><label for="newsletter_subject"><?php _e( 'Subject', 'bulkqr' ); ?></label></th>
						<td>
							<input name="subject" type="text" id="newsletter_subject" value="" class="regular-text" required>
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="newsletter_template"><?php _e( 'Template', 'bulkqr' ); ?></label></th>
						<td>
							<select name="template" id="newsletter_template" required>
								<option value=""><?php _e( 'Select a template', 'bulkqr' ); ?></option>
								<?php foreach ( $templates as $file => $name ) : ?>
									<option value="<?php echo esc_attr( $file ); ?>"><?php echo esc_html( $name ); ?></option>
								<?php endforeach; ?>
							</select>
						</td>
					</tr>
				</table>
				<p class="submit">
					<button type="submit" class="button button-primary" id="send-newsletter-btn"><?php _e( 'Send Newsletter', 'bulkqr' ); ?></button>
					<span class="spinner"></span>
				</p>
			</form>
			<div id="newsletter-response"></div>
		</div>
		<?php
	}

	/**
	 * Gets all email templates from the Updates directory.
	 */
	private function get_email_templates(): array {
		$dir       = get_template_directory() . '/template-parts/EmailTemplates/Updates';
		$templates = [];

		if ( is_dir( $dir ) ) {
			$files = scandir( $dir );
			foreach ( $files as $file ) {
				if ( str_ends_with( $file, '.php' ) ) {
					// Extract template name from file header if exists, or use filename
					$file_content = file_get_contents( $dir . '/' . $file );
					if ( preg_match( '/Template Email Template (.*)/', $file_content, $matches ) ) {
						$templates[ $file ] = trim( $matches[1] );
					} else {
						$templates[ $file ] = $file;
					}
				}
			}
		}

		return $templates;
	}

	/**
	 * Handles the AJAX request for sending newsletters.
	 */
	public function handle_send_newsletter(): void {
		check_ajax_referer( self::ACTION_NAME, 'nonce' );

		if ( ! current_user_can( 'manage_options' ) ) {
			wp_send_json_error( [ 'message' => __( 'Permission denied.', 'bulkqr' ) ] );
		}

		$subject  = isset( $_POST['subject'] ) ? sanitize_text_field( $_POST['subject'] ) : '';
		$template = isset( $_POST['template'] ) ? sanitize_text_field( $_POST['template'] ) : '';

		if ( empty( $subject ) || empty( $template ) ) {
			wp_send_json_error( [ 'message' => __( 'Subject and template are required.', 'bulkqr' ) ] );
		}

		$template_path = get_template_directory() . '/template-parts/EmailTemplates/Updates/' . $template;

		if ( ! file_exists( $template_path ) ) {
			wp_send_json_error( [ 'message' => __( 'Template not found.', 'bulkqr' ) ] );
		}

		// Get all users except admins
		$users = get_users( [
			'role__not_in' => [ 'administrator' ],
			'fields'       => [ 'user_email' ],
		] );

		if ( empty( $users ) ) {
			wp_send_json_error( [ 'message' => __( 'No users found to send emails to.', 'bulkqr' ) ] );
		}

		// Buffer template output
		ob_start();
		include $template_path;
		$message = ob_get_clean();

		$headers = [ 'Content-Type: text/html; charset=UTF-8' ];

		$success_count = 0;
		$error_count   = 0;

		foreach ( $users as $user ) {
			if ( wp_mail( $user->user_email, $subject, $message, $headers ) ) {
				$success_count++;
			} else {
				$error_count++;
			}
		}

		wp_send_json_success( [
			'message' => sprintf(
				__( 'Newsletter sent! Success: %d, Failed: %d', 'bulkqr' ),
				$success_count,
				$error_count
			)
		] );
	}
}
