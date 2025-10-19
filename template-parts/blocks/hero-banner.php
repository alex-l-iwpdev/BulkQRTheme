<?php
/**
 * Hero Banner block.
 *
 * @package iwpdev/bulk-qr-theme
 */

$fields = $args['fields'];
?>
<section class="banner-text">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="description">
					<?php if ( ! empty( $fields['banner_title'] ) ) { ?>
						<h1><?php echo esc_html( $fields['banner_title'] ); ?></h1>
					<?php } ?>
					<?php if ( ! empty( $fields['banner_description'] ) ) { ?>
						<p><?php echo esc_html( $fields['banner_description'] ); ?></p>
					<?php } ?>
				</div>
				<?php
				if ( ! empty( $fields['banner_image'] ) ) {

					$image = wp_get_attachment_image_url( $fields['banner_image'], 'full' );
					?>
					<img
							src="<?php echo esc_url( $image ); ?>"
							alt="<?php echo esc_attr( get_the_title( $fields['banner_image'] ) ); ?>">
				<?php } ?>
			</div>
		</div>
	</div>
</section>
