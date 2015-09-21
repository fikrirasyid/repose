<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Repose
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<button class="sidebar-close" aria-controls="secondary" aria-expanded="true"><?php esc_html_e( 'Close', 'repose' ); ?></button>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
