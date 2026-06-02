<?php
/**
 * Api section block template.
 *
 * @package iwpdev/bulk-qr-theme
 */

$fields   = $args['fields'] ?? [];
$eyebrow  = ! empty( $fields['eyebrow'] ) ? $fields['eyebrow'] : 'FOR DEVELOPERS';
$title    = ! empty( $fields['title'] ) ? $fields['title'] : 'REST API to Automate<br>Everything';
$subtitle = ! empty( $fields['subtitle'] ) ? $fields['subtitle'] : 'Generate QR codes, manage campaigns, and retrieve analytics<br>programmatically. Full REST API with comprehensive documentation.';
$docs_link = ! empty( $fields['docs_link'] ) ? $fields['docs_link'] : 'https://stage.bulkqr.org/api/';

?>
<section class="api">
	<div class="api__container">

		<!-- Header -->
		<div class="api__header">
			<span class="api__eyebrow"><?php echo esc_html( $eyebrow ); ?></span>
			<h2 class="api__title"><?php echo wp_kses_post( $title ); ?></h2>
			<p class="api__subtitle">
				<?php echo wp_kses_post( $subtitle ); ?>
			</p>
		</div>

		<!-- Two-column content -->
		<div class="api__body">

			<!-- Left: code block -->
			<div class="api__code-panel">
				<div class="api__code-header">
					<span class="api__code-title">Generate QR codes in bulk</span>
					<span class="api__method api__method--post">POST</span>
				</div>
				<div class="api__code-block">
<pre><span class="c"># POST /bqs/v1/generate-qr</span>
curl -X POST https://stage.bulkqr.org/wp-json/bqs/v1/generate-qr \
  -H <span class="s">"Authorization: Bearer YOUR_API_KEY"</span> \
  -H <span class="s">"Content-Type: application/json"</span> \
  -d <span class="s">'{</span>
    <span class="k">"format"</span>: <span class="v">"png"</span>,
    <span class="k">"size"</span>: <span class="n">500</span>,
    <span class="k">"shape_type"</span>: <span class="v">"rounded"</span>,
    <span class="k">"bg_color"</span>: <span class="s">"#ffffff"</span>,
    <span class="k">"shape_color"</span>: <span class="s">"#000000"</span>,
    <span class="k">"qrs_data"</span>: [
      { <span class="k">"data"</span>: <span class="s">"https://yoursite.com/promo"</span>, <span class="k">"file_name"</span>: <span class="s">"promo"</span> }
    ]
  <span class="s">}'</span>

<span class="c"># Response</span>
{
  <span class="k">"code"</span>: <span class="n">200</span>,
  <span class="k">"status"</span>: <span class="v">"success"</span>,
  <span class="k">"message"</span>: <span class="s">"Request sent for fulfillment"</span>
}</pre>
				</div>
			</div>

			<!-- Right: endpoints grouped -->
			<div class="api__endpoints">
				<h3 class="api__endpoints-title">API Endpoints</h3>

				<!-- Campaign -->
				<div class="api__group">
					<div class="api__group-label">Campaign</div>

					<div class="api__endpoint">
						<span class="api__method api__method--get">GET</span>
						<span class="api__endpoint-path">/bqs/v1/campaign — Get list of campaigns</span>
					</div>
					<div class="api__endpoint">
						<span class="api__method api__method--post">POST</span>
						<span class="api__endpoint-path">/bqs/v1/campaign — Create a new campaign</span>
					</div>
					<div class="api__endpoint">
						<span class="api__method api__method--get">GET</span>
						<span class="api__endpoint-path">/bqs/v1/campaign/{id} — Get campaign by ID</span>
					</div>
					<div class="api__endpoint">
						<span class="api__method api__method--delete">DEL</span>
						<span class="api__endpoint-path">/bqs/v1/campaign/{id} — Delete campaign</span>
					</div>
				</div>

				<!-- QR -->
				<div class="api__group">
					<div class="api__group-label">QR</div>

					<div class="api__endpoint">
						<span class="api__method api__method--post">POST</span>
						<span class="api__endpoint-path">/bqs/v1/generate-qr — Generate QR codes in bulk</span>
					</div>
					<div class="api__endpoint">
						<span class="api__method api__method--post">POST</span>
						<span class="api__endpoint-path">/bqs/v1/generate-qr-dynamic — Generate dynamic QR</span>
					</div>
					<div class="api__endpoint">
						<span class="api__method api__method--get">GET</span>
						<span class="api__endpoint-path">/bqs/v1/get_qr_staticstic/{id} — QR statistics</span>
					</div>
					<div class="api__endpoint">
						<span class="api__method api__method--post">POST</span>
						<span class="api__endpoint-path">/bqs/v1/update-qr/{id} — Update QR destination</span>
					</div>
					<div class="api__endpoint">
						<span class="api__method api__method--delete">DEL</span>
						<span class="api__endpoint-path">/bqs/v1/delete-qr/{id} — Delete QR</span>
					</div>
				</div>

				<!-- Short link -->
				<div class="api__group">
					<div class="api__group-label">Short Link</div>

					<div class="api__endpoint">
						<span class="api__method api__method--post">POST</span>
						<span class="api__endpoint-path">/bqs/v1/short-url — Generate shortened URLs</span>
					</div>
					<div class="api__endpoint">
						<span class="api__method api__method--get">GET</span>
						<span class="api__endpoint-path">/bqs/v1/short-url/{id} — Get short URL details</span>
					</div>
					<div class="api__endpoint">
						<span class="api__method api__method--post">POST</span>
						<span class="api__endpoint-path">/bqs/v1/short-url/update — Update target URL</span>
					</div>
					<div class="api__endpoint">
						<span class="api__method api__method--delete">DEL</span>
						<span class="api__endpoint-path">/bqs/v1/short-url/{id} — Delete short URL</span>
					</div>
				</div>

				<a href="<?php echo esc_url( $docs_link ); ?>" target="_blank" rel="noopener" class="api__docs-link btn">
					View full documentation
					<svg width="14" height="14" viewBox="0 0 14 14" fill="none">
						<path d="M2 12L12 2M12 2H7M12 2v5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</a>

			</div>
		</div>
	</div>
</section>
