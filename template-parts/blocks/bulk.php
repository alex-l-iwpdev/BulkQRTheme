<?php
/**
 * Bulk QR Description Section
 *
 * @package iwpdev/bulk-qr-theme
 */

$fields = $args['fields'] ?? [];

$eyebrow  = ! empty( $fields['eyebrow'] ) ? $fields['eyebrow'] : __( 'BULK GENERATION', 'bulk-qr-theme' );
$title    = ! empty( $fields['title'] ) ? $fields['title'] : __( 'Generate Up to 10,000 QR<br>Codes from CSV', 'bulk-qr-theme' );
$subtitle = ! empty( $fields['subtitle'] ) ? $fields['subtitle'] : __( 'Upload a CSV file, map your columns, and download a ZIP with<br>all your QR codes in seconds.', 'bulk-qr-theme' );
$steps    = ! empty( $fields['steps'] ) ? $fields['steps'] : [];

?>
<section class="bulk">
	<div class="bulk__container">

		<!-- Header -->
		<div class="bulk__header">
			<span class="bulk__eyebrow"><?php echo esc_html( $eyebrow ); ?></span>
			<h2 class="bulk__title"><?php echo wp_kses_post( $title ); ?></h2>
			<?php if ( $subtitle ) : ?>
				<p class="bulk__subtitle">
					<?php echo wp_kses_post( $subtitle ); ?>
				</p>
			<?php endif; ?>
		</div>

		<!-- Steps -->
		<div class="bulk__steps">

			<?php if ( ! empty( $steps ) ) : ?>
				<?php foreach ( $steps as $index => $step ) :
					$icon_id    = $step['icon'] ?? '';
					$icon_color = $step['icon_color'] ?? 'orange';
					$step_title = $step['step_title'] ?? '';
					$step_desc  = $step['step_description'] ?? '';

					$icon_wrap_class = 'bulk__icon-wrap bulk__icon-wrap--' . $icon_color;
					if ( in_array( $icon_color, [ 'blue', 'green' ] ) && ( false === strpos( $icon_wrap_class, '-solid' ) ) ) {
						$icon_wrap_class .= '-solid';
					}

					$step_class     = 'bulk__step';
					$num_class      = 'bulk__step-num';
					$desc_class     = 'bulk__step-desc';
					$is_active      = ( $index === 2 ); // Just mirroring original logic if needed, or based on some field
					$is_final       = ( $index === count( $steps ) - 1 );

					if ( $is_active ) {
						$step_class .= ' bulk__step--active';
						$num_class  .= ' bulk__step-num--active';
						$desc_class .= ' bulk__step-desc--active';
					}
					if ( $is_final ) {
						$step_class .= ' bulk__step--final';
						$num_class  .= ' bulk__step-num--final';
						$desc_class .= ' bulk__step-desc--final';
					}
					?>
					<div class="<?php echo esc_attr( $step_class ); ?>">
						<div class="<?php echo esc_attr( $icon_wrap_class ); ?>">
							<?php if ( $icon_id ) : ?>
								<?php echo wp_get_attachment_image( $icon_id, 'full' ); ?>
							<?php endif; ?>
						</div>
						<h3 class="<?php echo esc_attr( $num_class ); ?>"><?php echo esc_html( ( $index + 1 ) . '. ' . $step_title ); ?></h3>
						<p class="<?php echo esc_attr( $desc_class ); ?>"><?php echo esc_html( $step_desc ); ?></p>
					</div>

					<?php if ( ! $is_final ) : ?>
					<div class="bulk__arrow" aria-hidden="true">
						<svg width="10" height="18" viewBox="0 0 10 18" fill="none">
							<path d="M1 1l8 8-8 8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
					</div>
				<?php endif; ?>

				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
