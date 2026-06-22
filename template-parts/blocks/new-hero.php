<?php
/**
 * Template Part: New Hero
 */

$fields = $args['fields'] ?? [];

$eyebrow            = $fields['eyebrow'] ?? '';
$title              = $fields['title'] ?? '';
$subtitle           = $fields['subtitle'] ?? '';
$primary_btn_text   = $fields['primary_btn_text'] ?? '';
$primary_btn_link   = $fields['primary_btn_link'] ?? '';
$secondary_btn_text = $fields['secondary_btn_text'] ?? '';
$secondary_btn_link = $fields['secondary_btn_link'] ?? '';
$trust_items        = $fields['trust_items'] ?? [];
$dashboard_image    = $fields['dashboard_image'] ?? '';

?>
<section class="hero">
	<div class="hero__container">

		<!-- Eyebrow -->
		<?php if ( $eyebrow ) : ?>
			<div class="hero__eyebrow">
				<span class="hero__eyebrow-dot"></span>
				<?php echo esc_html( $eyebrow ); ?>
			</div>
		<?php endif; ?>

		<!-- Heading -->
		<?php if ( $title ) : ?>
			<h1 class="hero__title"><?php echo esc_html( $title ); ?></h1>
		<?php endif; ?>

		<!-- Subtitle -->
		<?php if ( $subtitle ) : ?>
			<p class="hero__subtitle">
				<?php echo nl2br( esc_html( $subtitle ) ); ?>
			</p>
		<?php endif; ?>

		<!-- Buttons -->
		<div class="hero__actions">
			<?php if ( $primary_btn_text && $primary_btn_link ) : ?>
				<a href="#" data-modal="sign-up" class="hero__btn hero__btn--primary">
					<?php echo esc_html( $primary_btn_text ); ?>
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none">
						<path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
						      stroke-linejoin="round"></path>
					</svg>
				</a>
			<?php endif; ?>

			<?php if ( $secondary_btn_text && $secondary_btn_link ) : ?>
				<a href="<?php echo esc_url( $secondary_btn_link ); ?>" class="hero__btn hero__btn--outline">
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none">
						<circle cx="8" cy="8" r="6.5" stroke="currentColor" stroke-width="1.4"></circle>
						<path d="M6.5 5.5l4 2.5-4 2.5V5.5z" fill="currentColor"></path>
					</svg>
					<?php echo esc_html( $secondary_btn_text ); ?>
				</a>
			<?php endif; ?>
		</div>

		<!-- Trust badges -->
		<?php if ( ! empty( $trust_items ) ) : ?>
			<div class="hero__trust">
				<?php foreach ( $trust_items as $item ) : ?>
					<span class="hero__trust-item">
			        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="6"
			                                                                            stroke="#22c55e"
			                                                                            stroke-width="1.4"></circle><path
								d="M4.5 7l2 2 3-3" stroke="#22c55e" stroke-width="1.4" stroke-linecap="round"
						        stroke-linejoin="round"></path></svg>
						<?php echo esc_html( $item['text'] ); ?>
			      </span>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<!-- Dashboard mockup -->
		<?php if ( $dashboard_image ) : ?>
			<div class="hero__dashboard">
				<?php echo wp_get_attachment_image( $dashboard_image, 'full' ); ?>
			</div><!-- /.hero__dashboard -->
		<?php endif; ?>

	</div><!-- /.hero__container -->
</section>
