<?php
/**
 * The template for displaying // TODO: taxonomy videoteca
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

 	<section id="primary" class="content-area col-sm-12 col-lg-12">
 		<main id="main" class="site-main" role="main">

 		<?php
 		if ( have_posts() ) : ?>

 			<header class="page-header">
 				<?php
 					the_archive_title( '<h1 class="text-center"><span class="badge badge-info">', '</span></h1>' );
 					the_archive_description( '<div class="archive-description">', '</div>' );
        ?>
 			</header><!-- .page-header -->
      <div class="card-group">
   			<?php
        /* Start the Loop */
   			while ( have_posts() ) : the_post();
   				get_template_part( 'template-multimedia/content', 'videoteca' );
        endwhile;
        the_posts_navigation();
     		else :
          get_template_part( 'template-multimedia/content', 'none' );
        endif; ?>
      </div>
 		</main><!-- #main -->
 	</section><!-- #primary -->

 <?php
 get_sidebar();
 get_footer();
