<?php
/**
 * Thanks, Page Template
 *
 * @package iwpdev/bulk-qr-theme
 */

get_header();
?>
	<section class="thanks-page">
		<div class="container">
			<div class="row align-items-center">
				<div class="col">
					<div class="description">
						<h1>Your order has been successfully processed.</h1>
						<p>We’ve sent your account <b>details and login link</b> to your email — please check your inbox
							or
							spam folder.</p>
						<p>You can now access <b>your dashboard</b> to start generating and downloading your bulk QR
							codes
							instantly.</p>
						<p>If you have any questions, feel free to contact our support team at <a href="#">support@qr-bulk.com</a>
							— we’re always here to help.
						</p><a class="btn bi bi-house-door-fill" href="/">Return to Home Page</a>
					</div>
				</div>
				<div class="col-auto">
					<img
							src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/thank-you.svg' ); ?>"
							loading="lazy"
							alt="Thanks, Page image">
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
