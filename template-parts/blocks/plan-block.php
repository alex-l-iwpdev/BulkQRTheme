<?php
/**
 * Plan block template.
 *
 * @package iwpdev/bulk-qr-theme
 */

$fields = $args['fields'];
?>
<section class="plans" id="plan-block">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php if ( ! empty( $fields['block_title'] ) ) { ?>
					<h2><?php echo esc_html( $fields['block_title'] ); ?></h2>
				<?php } ?>
				<?php if ( ! empty( $fields['block_description'] ) ) { ?>
					<p><?php echo esc_html( $fields['block_description'] ); ?></p>
				<?php } ?>
				<div class="filer-plans">
					<div class="plans-radio">
						<div class="radio">
							<input id="monthly" type="radio" value="monthly" name="plans" checked>
							<label for="monthly">Monthly</label>
						</div>
						<div class="radio">
							<input id="yearly" type="radio" value="yearly" name="plans">
							<label for="yearly">Yearly</label>
						</div>
					</div>
					<div class="select">
						<select name="plans_currency" id="plans-currency">
							<option value="USD" selected>USD</option>
							<option value="UAH">UAH</option>
							<option value="PLN">PLN</option>
							<option value="EUR">EUR</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<?php if ( $fields['plans_items'] ) { ?>
					<div class="plans-items">
						<?php foreach ( $fields['plans_items'] as $item ) { ?>
							<div class="plans-item">
								<?php if ( ! empty( $item['plan_title'] ) ) { ?>
									<h4><?php echo esc_html( $item['plan_title'] ); ?></h4>
								<?php } ?>
								<h4 class="price"
									data-by_month="<?php echo esc_attr( $item['plan_price_by_month'] ); ?>"
									data-by_yearly="<?php echo esc_attr( $item['plan_price_by_yearly'] ); ?>">
									<span>$<?php echo esc_attr( $item['plan_price_by_month'] ); ?> </span>/ Month
								</h4>
								<?php if ( ! empty( $item['plans_description'] ) ) { ?>
									<ul class="plans-description">
										<?php foreach ( $item['plans_description'] as $value ) { ?>
											<li><?php echo esc_html( $value['description'] ); ?></li>
										<?php } ?>
									</ul>
								<?php } ?>
								<?php if ( ! empty( $item['cta_button_text'] ) ) { ?>
									<a
											class="btn"
											data-form_m="<?php echo esc_url( $item['cta_form_link_m'] ?? '' ); ?>"
											data-form_y="<?php echo esc_url( $item['cta_form_link_y'] ?? '' ); ?>"
											href="<?php echo esc_url( $item['cta_button_link'] ?: $item['cta_form_link_m'] ); ?>">
										<?php echo esc_html( $item['cta_button_text'] ); ?>
									</a>
								<?php } ?>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
