<?php
/**
 * FAQ Block Template.
 *
 * @package iwpdev/bulk-qr-theme
 */

$fields     = $args['fields'] ?? [];
$categories = $fields['faq_categories'] ?? [];
?>
<section class="faq">
	<div class="faq__container">

		<!-- Sidebar nav -->
		<?php if ( ! empty( $categories ) ) : ?>
			<aside class="faq__sidebar">
				<div class="faq__sidebar-label"><?php esc_html_e( 'CATEGORIES', 'bulk-qr-theme' ); ?></div>
				<nav class="faq__nav">
					<?php foreach ( $categories as $index => $category ) : ?>
						<?php
						$category_id    = $category['category_id'] ?? 'cat-' . $index;
						$category_title = $category['category_title'] ?? '';
						$category_icon  = $category['category_icon'] ?? '';
						?>
						<a href="#<?php echo esc_attr( $category_id ); ?>" class="faq__nav-item <?php echo $index === 0 ? 'faq__nav-item--active' : ''; ?>">
							<?php if ( $category_icon ) : ?>
								<?php echo wp_get_attachment_image( $category_icon, 'full', true ); ?>
							<?php endif; ?>
							<?php echo esc_html( $category_title ); ?>
						</a>
					<?php endforeach; ?>
				</nav>
			</aside>
		<?php endif; ?>

		<!-- Main content -->
		<div class="faq__content">

			<?php foreach ( $categories as $index => $category ) : ?>
				<?php
				$category_id    = $category['category_id'] ?? 'cat-' . $index;
				$category_title = $category['category_title'] ?? '';
				$category_icon  = $category['category_icon'] ?? '';
				$icon_color     = $category['category_icon_color'] ?? 'blue';
				$faq_items      = $category['faq_items'] ?? [];
				?>
				<div id="<?php echo esc_attr( $category_id ); ?>" class="faq__group">
					<div class="faq__group-header">
						<?php if ( $category_icon ) : ?>
							<span class="faq__group-icon faq__group-icon--<?php echo esc_attr( $icon_color ); ?>">
								<?php echo wp_get_attachment_image( $category_icon, 'full', true ); ?>
							</span>
						<?php endif; ?>
						<h3 class="faq__group-title"><?php echo esc_html( $category_title ); ?></h3>
					</div>

					<?php foreach ( $faq_items as $f_index => $item ) : ?>
						<?php
						$question = $item['question'] ?? '';
						$answer   = $item['answer'] ?? '';
						?>
						<div class="faq__item <?php echo ( $index === 0 && $f_index === 0 ) ? 'faq__item--open' : ''; ?>">
							<button class="faq__q" aria-expanded="<?php echo ( $index === 0 && $f_index === 0 ) ? 'true' : 'false'; ?>">
								<?php echo esc_html( $question ); ?>
								<svg class="faq__arrow" width="18" height="18" viewBox="0 0 18 18" fill="none">
									<path d="M4 7l5 5 5-5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</button>
							<div class="faq__a">
								<?php echo apply_filters( 'the_content', $answer ); ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endforeach; ?>

		</div><!-- /.faq__content -->
	</div><!-- /.faq__container -->
</section>
