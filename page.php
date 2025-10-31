<?php
/**
 * Page template.
 *
 * @package iwpdev/bulk-qr-theme
 */

get_header();
if ( ! is_home() && ! is_front_page() || ! is_page( 'faq-frequently-asked-questions' ) ) {
	?>
	<section class="page-content">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
	<?php
} else {
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			the_content();
		endwhile;
	endif;
}
get_footer();
