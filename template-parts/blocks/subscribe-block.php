<?php
/**
 * Subscribe block template file.
 *
 * @package iwpdev/bulk-qr-theme
 */

$fields = $args['fields'];
?>
<section>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="subscribe"><i class="bi bi-scissors"></i>
					<?php
					if ( ! empty( $fields['image'] ) ) {
						$image = wp_get_attachment_image_url( $fields['image'], 'full' );
						?>
						<img
								src="<?php echo esc_url( $image ); ?>"
								alt="<?php echo esc_attr( get_the_title( $fields['image'] ) ); ?>">
					<?php } ?>
					<div class="subscribe-desc">
						<?php if ( ! empty( $fields['title'] ) ) { ?>
							<h2><?php echo wp_kses_post( $fields['title'] ); ?></h2>
						<?php } ?>
						<?php
						if ( ! empty( $fields['description'] ) ) {
							echo wp_kses_post( wpautop( $fields['description'] ) );
						}
						?>
						<form class="subscribe-form" action="#" method="post">
							<div class="input">
								<label for="subs_email"><?php esc_html_e( 'Enter your email address', 'bulk-qr-theme' ); ?></label>
								<input
										id="subs_email"
										class="subscribe-input"
										type="email"
										name="subscribe_email"
										required>
							</div>
							<button class="bi bi-envelope btn" type="submit">
								<?php esc_html_e( 'Subscribe', 'bulk-qr-theme' ); ?>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
