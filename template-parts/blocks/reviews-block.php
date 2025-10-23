<?php
/**
 * Reviews block template.
 *
 * @package iwpdev/bulk-qr-theme
 */

$fields = $args['fields'];
?>
<section class="reviews-section">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php if ( ! empty( $fields['block_title'] ) ) { ?>
					<h2><?php echo esc_html( $fields['block_title'] ); ?></h2>
				<?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<?php if ( ! empty( $fields['reviews'] ) ) { ?>
					<div class="reviews-items">
						<?php foreach ( $fields['reviews'] as $review ) { ?>
							<div class="reviews-item">
								<?php
								$image = wp_get_attachment_image_url( $review['image'], 'full' );

								if ( ! empty( $image ) ) {
									?>
									<img
											class="reviews-image"
											src="<?php echo esc_url( $image ); ?>"
											alt="<?php echo esc_attr( $review['review_title'] ?? '' ) ?>">
								<?php } ?>
								<?php if ( ! empty( $review['review_title'] ) ) { ?>
									<h3><?php echo esc_html( $review['review_title'] ); ?></h3>
								<?php } ?>
								<?php if ( ! empty( $review['reviewer_position'] ) ) { ?>
									<p><b><?php echo esc_html( $review['reviewer_position'] ); ?></b></p>
								<?php } ?>
								<?php if ( ! empty( $review['reviewer_description'] ) ) { ?>
									<div class="reviews-description">
										<?php echo wp_kses_post( $review['reviewer_description'] ); ?>
									</div>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
		<?php if ( ! empty( $fields['cta_button_text'] ) ) { ?>
			<div class="row">
				<div class="col">
					<a
							href="<?php echo esc_url( $fields['cta_button_link'] ?? '#' ); ?>"
							class="btn primary-cta">
						<?php echo esc_html( $fields['cta_button_text'] ); ?>
					</a>
				</div>
			</div>
		<?php } ?>
	</div>
</section>

