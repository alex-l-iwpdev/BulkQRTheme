<?php
/**
 * Template part for displaying text-image blocks.
 *
 * @package iwpdev/bulk-qr-theme
 */

$fields = $args['fields'];
?>
<section>
	<div class="container">
		<div class="row align-items-center">
			<?php
			if ( 'left' === $fields['image_position'] ?? '' ) {
				$image = wp_get_attachment_image_url( $fields['image'], 'full' );
				?>
				<div class="col-lg-6">
					<img
							src="<?php echo esc_url( $image ); ?>"
							loading="lazy"
							alt="<?php echo esc_attr( get_the_title( $fields['image'] ) ); ?>">
				</div>
			<?php } ?>
			<div class="col-lg-6">
				<?php if ( ! empty( $fields['title'] ) ) { ?>
					<h2><?php echo esc_html( $fields['title'] ); ?></h2>
				<?php } ?>
				<?php if ( ! empty( $fields['description'] ) ) { ?>
					<?php echo wp_kses_post( wpautop( $fields['description'] ) ); ?>
				<?php } ?>
			</div>
			<?php if ( 'right' === $fields['image_position'] ?? '' ) {
				$image = wp_get_attachment_image_url( $fields['image'], 'full' );
				?>
				<div class="col-lg-6">
					<img
							src="<?php echo esc_url( $image ); ?>"
							loading="lazy"
							alt="<?php echo esc_attr( get_the_title( $fields['image'] ) ); ?>">
				</div>
			<?php } ?>
		</div>
	</div>
</section>
