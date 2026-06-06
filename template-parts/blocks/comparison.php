<?php
/**
 * Template part for displaying comparison block
 *
 * @package iwpdev/bulk-qr-theme
 */

$fields        = $args['fields'] ?? [];
$eyebrow      = $fields['eyebrow'] ?? '';
$title        = $fields['title'] ?? '';
$static_label  = $fields['static_label'] ?? '';
$dynamic_label = $fields['dynamic_label'] ?? '';
$rows         = $fields['comparison_rows'] ?? [];

if ( empty( $rows ) ) {
	return;
}
?>
<section class="comparison">
	<div class="comparison__container">

		<!-- Header -->
		<div class="comparison__header">
			<?php if ( $eyebrow ) : ?>
				<span class="comparison__eyebrow"><?php echo esc_html( $eyebrow ); ?></span>
			<?php endif; ?>
			<?php if ( $title ) : ?>
				<h2 class="comparison__title"><?php echo esc_html( $title ); ?></h2>
			<?php endif; ?>
		</div>

		<!-- Table -->
		<div class="comparison__table-wrap">
			<table class="comparison__table" cellspacing="0" cellpadding="0">

				<!-- Head -->
				<thead>
				<tr>
					<th class="comparison__th comparison__th--feature"></th>
					<th class="comparison__th comparison__th--static"><?php echo esc_html( $static_label ); ?></th>
					<th class="comparison__th comparison__th--dynamic">
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none">
							<path d="M8 1l1.5 4.5H14l-3.75 2.7 1.5 4.5L8 10.2l-3.75 2.5 1.5-4.5L2 5.5h4.5L8 1z" stroke="currentColor" stroke-width="1.4" stroke-linejoin="round"></path>
						</svg>
						<?php echo esc_html( $dynamic_label ); ?>
					</th>
				</tr>
				</thead>

				<!-- Body -->
				<tbody>
				<?php foreach ( $rows as $index => $row ) : ?>
					<?php
					$is_last = ( $index === count( $rows ) - 1 );
					?>
					<tr class="comparison__row <?php echo $is_last ? 'comparison__row--last' : ''; ?>">
						<td class="comparison__td comparison__td--feature"><?php echo esc_html( $row['feature_name'] ); ?></td>
						<td class="comparison__td comparison__td--static">
							<?php if ( $row['static_value'] ) : ?>
								<span class="comparison__icon comparison__icon--yes">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8.5l4 4 6-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </span>
							<?php else : ?>
								<span class="comparison__icon comparison__icon--no">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M4 4l8 8M12 4l-8 8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"></path></svg>
                                </span>
							<?php endif; ?>
						</td>
						<td class="comparison__td comparison__td--dynamic">
							<?php if ( $row['dynamic_value'] ) : ?>
								<span class="comparison__icon comparison__icon--yes">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8.5l4 4 6-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                </span>
							<?php else : ?>
								<span class="comparison__icon comparison__icon--no">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M4 4l8 8M12 4l-8 8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"></path></svg>
                                </span>
							<?php endif; ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>

	</div>
</section>
