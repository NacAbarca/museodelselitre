<?php
/**
 * Template part for displaying posts
 *  // TODO: Este contenido para multimedia son Videoteca, Exposición y Musica de la Época
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
?>
<!-- start: card -->
<div id="post-<?php the_ID(); ?>" class="card border-dark">
  <!-- start: card-title -->
  <div class="card-header border-dark">
    <?php
    if ( is_single() ) :
      the_title( '<h4 class="card-title">', '</h4>' );
    else :
      the_title( '<h4 class="card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
    endif;
    ?>
  </div>
  <!-- end: card-title -->
	<!-- start: imagen -->
  <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }?>
	<!-- end-imagen -->
	<!-- start: card-body -->
  <div class="card-body">
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Páginas:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );
		?>

		<!-- start: card-text -->
    <p class="card-text">
			<?php
			if ( is_single() ) :
				the_content();
			else :
				the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
			endif;
			?>
		</p>
		<!-- end: card-text -->
  </div>
	<!-- end: card-body -->
	<!-- start: card-footer -->
	<div class="card-footer border-dark">
		<div class="text-muted">
			<?php wp_bootstrap_starter_posted_on();?>
		</div>
		<?php wp_bootstrap_starter_entry_footer(); ?>

	</div>
	<!-- end: card-footer -->
</div>
<!-- start: card -->
<br/>
