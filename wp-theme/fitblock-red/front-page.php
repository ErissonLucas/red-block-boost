<?php
/**
 * Página inicial estática (Front Page)
 * @package fitblock-red
 */
get_header(); ?>

<?php if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'single' ) ) { get_footer(); return; } ?>

<section class="hero" id="topo">
  <div class="container hero-inner">
    <h1><?php echo esc_html( get_bloginfo('name') ); ?></h1>
    <p><?php echo esc_html( get_bloginfo('description') ); ?></p>
    <div>
      <a class="btn btn--primary" href="#sobre">Começar agora</a>
      <a class="btn btn--secondary" href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>">Ver blog</a>
    </div>
  </div>
</section>

<main id="conteudo" class="container" role="main">
  <section id="sobre" class="container" style="padding:2rem 0;">
    <h2>Sobre</h2>
    <p>Este tema foi criado para ser leve, acessível e otimizado, com foco em conversão e leitura agradável.</p>
  </section>

  <?php if ( have_posts() ) : ?>
    <section aria-labelledby="ultimos-posts" style="padding:2rem 0;">
      <h2 id="ultimos-posts">Últimos Posts</h2>
      <div class="posts-grid" style="display:grid; gap:1rem; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));">
        <?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class('post-card'); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail( 'medium_large', [ 'loading' => 'lazy' ] ); ?>
              </a>
            <?php endif; ?>
            <h3 style="margin:.5rem 0; font-size:1.1rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="post-meta"><?php echo get_the_date(); ?></p>
            <p><?php echo wp_kses_post( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
          </article>
        <?php endwhile; ?>
      </div>
    </section>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
