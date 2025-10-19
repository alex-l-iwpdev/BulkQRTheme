<?php
/**
 * Steps block generate.
 *
 * @package iwpdev/bulk-qr-theme
 */

$fields = $args['fields'];
?>
<section class="steps">
	<div class="container">
		<?php if ( ! empty( $fields['block_title'] ) ) { ?>
			<div class="row">
				<div class="col-12">
					<h2><?php echo esc_html( $fields['block_title'] ); ?></h2>
				</div>
			</div>
		<?php } ?>
		<?php if ( ! empty( $fields['block_steps'] ) ) { ?>
			<div class="row">
				<?php foreach ( $fields['block_steps'] as $step ) { ?>
					<div class="col-lg-4">
						<?php
						if ( ! empty( $step['image'] ) ) {
							$image = wp_get_attachment_image_url( $step['image'], 'full' );
							?>
							<img
									src="<?php echo esc_url( $image ); ?>"
									alt="<?php echo esc_attr( get_the_title( $step['image'] ) ); ?>">
						<?php } ?>
						<?php if ( ! empty( $step['step_title'] ) ) { ?>
							<h4><?php echo esc_html( $step['step_title'] ); ?></h4>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</section>
