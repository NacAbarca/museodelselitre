<?php
/**
 * Template part for displaying posts
 *
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
		<?php echo get_the_term_list($post->ID,'tipo_de_archivo', '<i arias-hidden class="fas fa-chevron-right" title="Categoria de Exposición"></i>Exposición: ', ', ', ''); ?>
		<?php
		if ( 'post' === get_post_type() ) :
			wp_bootstrap_starter_posted_on();
		endif ;
		?>
	</div>
	<?php wp_bootstrap_starter_entry_footer(); ?>

	</div>
	<!-- end: card-footer -->
</div>
<!-- start: card -->







<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div>


	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wp_bootstrap_starter_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
        if ( is_single() ) :?>

			<?php the_content();
        else :
            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
        endif;

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Páginas:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
