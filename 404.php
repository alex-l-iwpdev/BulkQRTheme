<?php
/**
 * 404 Template
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
						<h2><?php esc_html_e( 'Oops. Something wrong', 'bulkqr' ); ?></h2>
						<p><?php esc_html_e( 'Oops! We can’t seem to find the page you’re looking for.', 'bulkqr' ); ?>
							<br><?php esc_html_e( 'Don’t worry, we will take you home.', 'bulkqr' ); ?>
							<a href="mailto:support@qr-bulk.com"></a></p>
						<a class="btn bi bi-house-door-fill" href="/">
							<?php esc_html_e( 'Return to Home Page', 'bulkqr' ); ?>
						</a>
					</div>
				</div>
				<div class="col-auto">
					<img
							src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/404.svg' ); ?>"
							alt="404 image">
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
