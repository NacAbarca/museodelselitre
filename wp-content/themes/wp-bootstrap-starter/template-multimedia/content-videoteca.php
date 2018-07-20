<?php
/**
 * Template part for displaying posts
 *  // TODO: Este contenido para multimedia son Videoteca, Exposición y Musica de la Época
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
?>
<div id="post-<?php the_ID(); ?>" class="border-dark col-md-5">
  <div class="card" style="margin:1%">
    <!-- start: imagen -->
    <?php
    if ( is_single() ) :
      the_content();
    elseif (has_post_thumbnail()) :
      the_post_thumbnail();
    endif;?>
  	<!-- end-imagen -->
    <!-- <img class="card-img-top" src=".../100px180/" alt="Card image cap"> -->
    <div class="card-body">
      <!-- start: card-title -->
      <?php
      if ( is_single() ) :
        the_title( '<h5 class="card-title">', '</h4>' );
      else :
        the_title( '<h5 class="card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
      endif;
      ?>
      <!-- end: card-title -->
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
    <div class="card-footer">
      <small class="text-muted">
        <?php wp_bootstrap_starter_posted_on();?>
      </small>
    </div>
  </div>
</div>
<!-- start: card -->
&nbsp;
