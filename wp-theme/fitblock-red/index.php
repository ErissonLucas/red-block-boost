<?php
/**
 * Template base (fallback)
 * @package fitblock-red
 */
get_header(); ?>

<?php if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'archive' ) ) { get_footer(); return; } ?>

<section class="hero" id="topo">
  <div class="container hero-inner">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    <div>
      <a class="btn btn--primary" href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>">Ver artigos</a>
      <a class="btn btn--secondary" href="#conteudo">Saiba mais</a>
    </div>
  </div>
</section>

<main id="conteudo" class="container content-grid" role="main">
  <div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
    <?php endwhile; ?>

    <nav class="pagination" role="navigation" aria-label="Paginação"> 
      <div class="nav-previous"><?php next_posts_link( '&larr; Posts antigos' ); ?></div>
      <div class="nav-next"><?php previous_posts_link( 'Posts recentes &rarr;' ); ?></div>
    </nav>

    <?php else : ?>
      <article class="post-card">
        <h2><?php _e( 'Nada encontrado', 'fitblock-red' ); ?></h2>
        <p><?php _e( 'Adicione posts ou páginas para começar.', 'fitblock-red' ); ?></p>
      </article>
    <?php endif; ?>
  </div>

  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
