<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */
?>

</div><!--end #colleft-->
</div><!--end #colmid-->
</div><!--end #colmask-->

	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			<?php do_action( 'toolbox_credits' ); ?>
			Powered by <a href="http://wordpress.org/" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'toolbox' ); ?>" rel="generator">WordPress</a>
			<span class="sep"> | </span>
			Theme by <a href="http://www.amandakrauss.com" rel="designer">Amanda Krauss</a>
		</div>
	</footer><!-- #colophon -->
	


<?php wp_footer(); ?>


</body>
</html>