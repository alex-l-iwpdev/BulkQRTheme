<?php
/**
 * Template Part: Default Footer
 *
 * @package iwpdev/bulk-qr-theme
 */

?>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-auto">
				<?php the_custom_logo(); ?>
			</div>
			<div class="col">
				<?php
				if ( has_nav_menu( 'footer_menu' ) ) {
					wp_nav_menu(
							[
									'theme_location'  => 'footer_menu',
									'container'       => '',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'menu',
									'menu_id'         => '',
									'echo'            => true,
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 0,
							]
					);
				}
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-auto">
				<p class="copyright"><?php echo sprintf( '© %s. since %d. All rights reserved.', get_bloginfo( 'name' ), date( 'Y' ) ) ?></p>
			</div>
			<div class="col">
				<?php
				if ( has_nav_menu( 'footer_term_menu' ) ) {
					wp_nav_menu(
							[
									'theme_location'  => 'footer_term_menu',
									'container'       => '',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'privacy-menu',
									'menu_id'         => '',
									'echo'            => true,
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 0,
							]
					);
				}
				?>
			</div>
		</div>
	</div>
</footer>
