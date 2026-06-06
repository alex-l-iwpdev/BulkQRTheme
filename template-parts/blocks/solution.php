<?php
/**
 * Template Part: Solution
 *
 * @package iwpdev/bulk-qr-theme
 */

$fields = $args['fields'] ?? [];
$eyebrow = $fields['eyebrow'] ?? '';
$title = $fields['title'] ?? '';
$subtitle = $fields['subtitle'] ?? '';
$items = $fields['solution_items'] ?? [];
?>
<section class="solution">
	<div class="solution__container">

		<!-- Header -->
		<div class="solution__header">
			<?php if ( $eyebrow ) : ?>
				<span class="solution__eyebrow"><?php echo esc_html( $eyebrow ); ?></span>
			<?php endif; ?>
			<?php if ( $title ) : ?>
				<h2 class="solution__title"><?php echo esc_html( $title ); ?></h2>
			<?php endif; ?>
			<?php if ( $subtitle ) : ?>
				<p class="solution__subtitle">
					<?php echo nl2br( esc_html( $subtitle ) ); ?>
				</p>
			<?php endif; ?>
		</div>

		<!-- Grid -->
		<?php if ( ! empty( $items ) ) : ?>
			<div class="solution__grid">
				<?php foreach ( $items as $item ) : ?>
					<?php
					$icon_id = $item['icon'];
					$label   = $item['label'];
					?>
					<div class="solution__item">
						<?php if ( $icon_id ) : ?>
							<div class="solution__icon">
								<?php echo wp_get_attachment_image( $icon_id, 'full' ); ?>
							</div>
						<?php endif; ?>
						<?php if ( $label ) : ?>
							<span class="solution__label"><?php echo esc_html( $label ); ?></span>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
