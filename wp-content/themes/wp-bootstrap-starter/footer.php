<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
            <div class="site-info row text-center">

                <p class="col-md-3">&copy; <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a> '; ?> - Región de Tarapaca - Chile - Sudamerica</p>
				<p class="col-md-6">Prohibida la reproducción de fotogradías y documentos sin autorización de la <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a> '; ?></p>
                <p class="col-md-3">Desarrollado Wordpress por <a class="credits" href="http://www.nacchile.cl" target="_blank" title="Desarrollado Wordpress por Nac Chile" alt="Desarrollado Wordpress por"><?php echo esc_html__('Nac Chile','wp-bootstrap-starter'); ?></a></p>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>