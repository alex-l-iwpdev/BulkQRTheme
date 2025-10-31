<?php
/**
 * Theme header template.
 *
 * @package iwpdev/bulk-qr-theme
 */

?>
<!DOCTYPE html>
<html style="margin-top: 0px !important;" <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta
			name="viewport"
			content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
			href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&amp;display=swap"
			rel="stylesheet">
	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
	<script>( function( w, d, s, l, i ) {
			w[ l ] = w[ l ] || [];
			w[ l ].push( {
				'gtm.start':
					new Date().getTime(), event: 'gtm.js'
			} );
			var f = d.getElementsByTagName( s )[ 0 ],
				j = d.createElement( s ), dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore( j, f );
		} )( window, document, 'script', 'dataLayer', 'GTM-T3TS9K7J' );</script>
	<!-- End Google Tag Manager -->
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3TS9K7J"
				height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->
</head>
<body <?php body_class(); ?>>
<?php
get_template_part( 'template-parts/header/default', 'header' );
?>
