<?php
/**
 * Template Part: Default Header.
 *
 * @package iwpdev/bulk-qr-theme
 */

use Iwpdev\BulkQrTheme\Nav\NavMenu;

?>
<header>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-auto">
				<?php the_custom_logo(); ?>
			</div>
			<div class="col">
				<div class="burger-menu"><span></span><span></span><span></span></div>
				<?php
				if ( has_nav_menu( 'header_menu' ) ) {
					wp_nav_menu(
							[
									'theme_location'  => 'header_menu',
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
	</div>
</header>
