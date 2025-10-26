<?php
/**
 * Thanks, Page Template
 *
 * @package iwpdev/bulk-qr-theme
 */

get_header();
?>
	<section>
		<div class="container">
			<div class="row align-items-center">
				<div class="col">
					<div class="description">
						<h2>Thank You for Your Payment!</h2>
						<p>Your order has been successfully processed.</p>
						<p>Access to your account is sent to you by <b>Email</b></p>
						<p>If you have any questions, feel free to <br>contact our support team at <a href="#">support@qr-bulk.com</a>
						</p><a class="btn bi bi-house-door-fill" href="/">Return to Home Page</a>
					</div>
				</div>
				<div class="col-auto">
					<img
							src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/thank-you.svg' ); ?>"
							alt="Thanks, Page image">
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
