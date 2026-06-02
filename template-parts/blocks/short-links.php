<?php
$fields = $args['fields'] ?? [];
$eyebrow    = $fields['eyebrow'] ?? '';
$title      = $fields['title'] ?? '';
$description = $fields['description'] ?? '';
$list_items  = $fields['list_items'] ?? [];
$image      = $fields['image'] ?? '';
?>
<section class="short-links">
	<div class="short-links__container">

		<!-- Left: Text content -->
		<div class="short-links__content">
			<?php if ( $eyebrow ) : ?>
				<span class="short-links__eyebrow"><?php echo esc_html( $eyebrow ); ?></span>
			<?php endif; ?>

			<?php if ( $title ) : ?>
				<h2 class="short-links__title"><?php echo wp_kses_post( $title ); ?></h2>
			<?php endif; ?>

			<?php if ( $description ) : ?>
				<p class="short-links__desc">
					<?php echo esc_html( $description ); ?>
				</p>
			<?php endif; ?>

			<?php if ( ! empty( $list_items ) ) : ?>
				<ul class="short-links__list">
					<?php foreach ( $list_items as $item ) : ?>
						<li class="short-links__list-item">
							<span class="short-links__check" aria-hidden="true">
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8.5l3.5 3.5 6.5-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></svg>
							</span>
							<?php echo esc_html( $item['item_text'] ); ?>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>

		<!-- Right: Image -->
		<div class="short-links__visual">
			<?php if ( $image ) : ?>
				<?php echo wp_get_attachment_image( $image, 'full', false, [ 'class' => 'short-links__img' ] ); ?>
			<?php endif; ?>
		</div>

	</div>
</section>
