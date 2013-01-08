<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/headers/foot.png" id="fotopie">
				
				<div id='license'>
					<a href="http://creativecommons.org/licenses/by-nc-nd/3.0/deed.es_CO"><img alt="Licencia Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/3.0/88x31.png" /></a><span style='font-size:8pt'><br />Este obra está bajo una <a href="http://creativecommons.org/licenses/by-nc-nd/3.0/deed.es_CO">Licencia Creative Commons Atribución-NoComercial-SinDerivadas 3.0 Unported</a>.</span>
				</div>
				<div id="info">
						<?php do_action( 'twentyten_credits' ); ?> 
						Sitio creado con la ayuda de <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyten' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyten' ); ?>" rel="generator"><?php printf( __( '%s.', 'twentyten' ), 'WordPress' ); ?></a>
				</div>
				<div id='info' class='justificado'>
					Cualquier fallo, error o sugerencia que encontréis podéis mandar un correo a <span style='font-weight:bold;'>cesarmc@fundaciondisi.com</span>, gracias!
				</div>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>