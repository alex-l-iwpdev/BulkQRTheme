<?php
/**
 * Theme index file.
 *
 * @package iwpdev/bulk-qr-theme
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		the_content();
	endwhile;
endif;

get_footer();
