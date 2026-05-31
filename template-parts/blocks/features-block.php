<?php
/**
 * Features Block
 *
 * @package iwpdev/bulk-qr-theme
 */

$fields   = $args['fields'] ?? [];
$eyebrow  = $fields['eyebrow'] ?? '';
$title    = $fields['title'] ?? '';
$subtitle = $fields['subtitle'] ?? '';
$features = $fields['features'] ?? [];

?>
<section class="features">
	<div class="features__container">

		<!-- Header -->
		<div class="features__header">
			<?php if ( $eyebrow ) : ?>
				<span class="features__eyebrow"><?php echo esc_html( $eyebrow ); ?></span>
			<?php endif; ?>
			<?php if ( $title ) : ?>
				<h2 class="features__title"><?php echo wp_kses_post( nl2br( $title ) ); ?></h2>
			<?php endif; ?>
			<?php if ( $subtitle ) : ?>
				<p class="features__subtitle">
					<?php echo wp_kses_post( nl2br( $subtitle ) ); ?>
				</p>
			<?php endif; ?>
		</div>

		<!-- Cards grid -->
		<?php if ( ! empty( $features ) ) : ?>
			<div class="features__grid">
				<?php foreach ( $features as $feature ) : ?>
					<div class="features__card">
						<?php
						$icon_id    = $feature['icon_image'] ?? 0;
						$icon_color = $feature['icon_color'] ?? 'blue';
						$f_title    = $feature['feature_title'] ?? '';
						$f_desc     = $feature['feature_description'] ?? '';
						?>
						<div class="features__icon features__icon--<?php echo esc_attr( $icon_color ); ?>">
							<?php echo wp_get_attachment_image( $icon_id, 'full' ); ?>
						</div>
						<?php if ( $f_title ) : ?>
							<h3 class="features__card-title"><?php echo esc_html( $f_title ); ?></h3>
						<?php endif; ?>
						<?php if ( $f_desc ) : ?>
							<p class="features__card-desc"><?php echo esc_html( $f_desc ); ?></p>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
