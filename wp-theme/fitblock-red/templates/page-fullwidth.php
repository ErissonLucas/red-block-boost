<?php
/**
 * Template Name: Página Full Width (Elementor)
 * Description: Largura total, sem sidebar. Ideal para Elementor.
 * @package fitblock-red
 */
get_header(); ?>

<main id="conteudo" class="container" role="main" style="padding:2rem 0; max-width:none; width:100%;">
  <?php if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'single' ) ) { get_footer(); return; } ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article <?php post_class(); ?>>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
