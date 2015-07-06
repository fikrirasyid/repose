<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Repose
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrap site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'repose' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'repose' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'repose' ), 'Repose', '<a href="http://fikrirasy.id" rel="designer">Fikri Rasyid</a>' ); ?>
		</div><!-- .wrap.site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
