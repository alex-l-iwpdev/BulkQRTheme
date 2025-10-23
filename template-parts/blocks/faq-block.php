<?php
/**
 * FAQ Block Template.
 *
 * @package iwpdev/bulk-qr-theme
 */

$fields = $args['fields'];
?>
<section class="faq-section">
	<div class="container">
		<div class="row">
			<div class="col-auto">
				<?php if ( ! empty( $fields['title'] ) ) { ?>
					<h2><?php echo esc_html( $fields['title'] ); ?></h2>
				<?php } ?>
			</div>
			<div class="col">
				<?php if ( ! empty( $fields['faq_items'] ) ) { ?>
					<div class="faq-items">
						<?php foreach ( $fields['faq_items'] as $faq_item ) { ?>
							<div class="faq-item">
								<h3>
									<?php echo esc_html( $faq_item['question'] ); ?>
									<i class="icon-plus"></i>
								</h3>
								<div class="faq-description">
									<p><?php echo esc_html( $faq_item['answer'] ); ?></p>
								</div>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
