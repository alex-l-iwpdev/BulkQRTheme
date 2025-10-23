<?php
/**
 * Hero Slider Block Template.
 *
 * @package iwpdev/bulk-qr-theme
 */

$fields = $args['fields'];
?>
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<?php if ( ! empty( $fields['hero_slider'] ) ) { ?>
					<div class="banner-slider">
						<?php foreach ( $fields['hero_slider'] as $slide ) { ?>
							<div class="item">
								<div class="description">
									<?php if ( ! empty( $slide['slide_title'] ) ) { ?>
										<h2><?php echo esc_html( $slide['slide_title'] ); ?></h2>
									<?php } ?>
									<?php if ( ! empty( $slide['slide_description'] ) ) { ?>
										<p><?php echo esc_html( $slide['slide_description'] ); ?></p>
									<?php } ?>
									<?php if ( ! empty( $slide['primary_cta_text'] ) ) { ?>
										<a
												href="<?php echo esc_url( $slide['primary_cta_link'] ?? '#' ); ?>"
												class="primary-cta">
											<?php echo esc_html( $slide['primary_cta_text'] ); ?>
										</a>
									<?php } ?>
									<?php if ( ! empty( $slide['secondary_cta_text'] ) ) { ?>
										<a
												href="<?php echo esc_url( $slide['secondary_cta_link'] ?? '#' ); ?>"
												class="secondary-cta">
											<?php echo esc_html( $slide['secondary_cta_text'] ); ?>
										</a>
									<?php } ?>
								</div>
								<?php
								if ( ! empty( $slide['slide_image'] ) ) {
									$image = wp_get_attachment_image_url( $slide['slide_image'], 'full' );
									?>
									<img
											src="<?php echo esc_url( $image ); ?>"
											alt="<?php echo esc_attr( get_the_title( $slide['slide_image'] ) ); ?>">
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
