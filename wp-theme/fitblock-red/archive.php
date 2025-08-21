<?php
/**
 * Template de arquivo (categorias, tags, autor...)
 * @package fitblock-red
 */
get_header(); ?>

<?php if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'archive' ) ) { get_footer(); return; } ?>

<main id="conteudo" class="container content-grid" role="main" style="padding:2rem 0;">
  <div>
    <header>
      <h1><?php the_archive_title(); ?></h1>
      <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
    </header>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
    <?php endwhile; ?>
      <nav class="pagination" role="navigation" aria-label="Paginação"> 
        <div class="nav-previous"><?php next_posts_link( '&larr; Posts antigos' ); ?></div>
        <div class="nav-next"><?php previous_posts_link( 'Posts recentes &rarr;' ); ?></div>
      </nav>
    <?php else : ?>
      <p><?php _e( 'Sem conteúdos neste arquivo.', 'fitblock-red' ); ?></p>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
