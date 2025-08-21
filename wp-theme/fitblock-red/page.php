<?php
/**
 * Template de página
 * @package fitblock-red
 */
get_header(); ?>

<main id="conteudo" class="container" role="main" style="padding:2rem 0;">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article <?php post_class(); ?>>
      <header>
        <h1><?php the_title(); ?></h1>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
