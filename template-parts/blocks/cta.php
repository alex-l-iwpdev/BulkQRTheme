<?php
/**
 * CTA Block.
 *
 * @package ipwpdev/bulk-qr-theme
 */

$fields = $args['fields'] ?? [];
$title    = $fields['title'] ?? '';
$subtitle = $fields['subtitle'] ?? '';

$primary_btn_text = $fields['primary_btn_text'] ?? '';
$primary_btn_link = $fields['primary_btn_link'] ?? '';

$secondary_btn_text = $fields['secondary_btn_text'] ?? '';
$secondary_btn_link = $fields['secondary_btn_link'] ?? '';

$trust_items = $fields['trust_items'] ?? [];
?>

<section class="cta">
	<!-- Noise/grain texture overlay -->
	<div class="cta__noise" aria-hidden="true"></div>
	<!-- Glow blobs -->
	<div class="cta__blob cta__blob--left" aria-hidden="true"></div>
	<div class="cta__blob cta__blob--right" aria-hidden="true"></div>

	<div class="cta__container">
		<?php if ( $title ) : ?>
			<h2 class="cta__title"><?php echo wp_kses_post( nl2br( $title ) ); ?></h2>
		<?php endif; ?>

		<?php if ( $subtitle ) : ?>
			<p class="cta__subtitle">
				<?php echo wp_kses_post( nl2br( $subtitle ) ); ?>
			</p>
		<?php endif; ?>

		<?php if ( $primary_btn_text || $secondary_btn_text ) : ?>
			<div class="cta__actions">
				<?php if ( $primary_btn_text ) : ?>
					<a href="<?php echo esc_url( $primary_btn_link ); ?>" class="cta__btn cta__btn--primary">
						<?php echo esc_html( $primary_btn_text ); ?>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none">
							<path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
					</a>
				<?php endif; ?>

				<?php if ( $secondary_btn_text ) : ?>
					<a href="<?php echo esc_url( $secondary_btn_link ); ?>" class="cta__btn cta__btn--outline">
						<?php echo esc_html( $secondary_btn_text ); ?>
					</a>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<?php if ( ! empty( $trust_items ) ) : ?>
			<div class="cta__trust">
				<?php foreach ( $trust_items as $index => $item ) : ?>
					<?php if ( $index > 0 ) : ?>
						<span class="cta__dot" aria-hidden="true">·</span>
					<?php endif; ?>
					<span><?php echo esc_html( $item['text'] ); ?></span>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
