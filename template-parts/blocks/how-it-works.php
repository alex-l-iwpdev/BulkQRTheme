<?php
/**
 * How it works block.
 *
 * @package iwpdev/bulk-qr-theme
 */

$fields   = $args['fields'] ?? [];
$eyebrow  = $fields['eyebrow'] ?? 'HOW IT WORKS';
$title    = $fields['title'] ?? 'From Zero to Tracking in<br>Minutes';
$subtitle = $fields['subtitle'] ?? 'Set up your first campaign and start tracking offline<br>results in 4 simple steps.';
$steps    = $fields['steps'] ?? [];

?>
<section class="how-it-works">
	<div class="how-it-works__container">

		<!-- Header -->
		<div class="how-it-works__header">
			<?php if ( $eyebrow ) : ?>
				<span class="how-it-works__eyebrow"><?php echo esc_html( $eyebrow ); ?></span>
			<?php endif; ?>
			<?php if ( $title ) : ?>
				<h2 class="how-it-works__title"><?php echo wp_kses_post( $title ); ?></h2>
			<?php endif; ?>
			<?php if ( $subtitle ) : ?>
				<p class="how-it-works__subtitle">
					<?php echo wp_kses_post( nl2br( $subtitle ) ); ?>
				</p>
			<?php endif; ?>
		</div>

		<!-- Steps -->
		<div class="how-it-works__steps">

			<!-- Connector line -->
			<div class="how-it-works__line" aria-hidden="true"></div>

			<?php if ( $steps ) : ?>
				<?php foreach ( $steps as $index => $step ) :
					$step_num  = $index + 1;
					$icon_id   = $step['icon'] ?? 0;
					$s_title   = $step['step_title'] ?? '';
					$s_desc    = $step['step_description'] ?? '';
					?>
					<!-- Step <?php echo $step_num; ?> -->
					<div class="how-it-works__step">
						<div class="how-it-works__badge"><?php echo $step_num; ?></div>
						<?php if ( $icon_id ) : ?>
							<div class="how-it-works__icon" aria-hidden="true">
								<?php echo wp_get_attachment_image( $icon_id, 'full', false, [ 'loading' => 'lazy' ] ); ?>
							</div>
						<?php endif; ?>
						<?php if ( $s_title ) : ?>
							<h3 class="how-it-works__step-title"><?php echo esc_html( $s_title ); ?></h3>
						<?php endif; ?>
						<?php if ( $s_desc ) : ?>
							<p class="how-it-works__step-desc">
								<?php echo wp_kses_post( $s_desc ); ?>
							</p>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>

		</div>
	</div>
</section>
