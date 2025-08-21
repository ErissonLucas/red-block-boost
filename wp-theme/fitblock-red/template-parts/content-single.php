<?php
/**
 * Conteúdo de post único
 * @package fitblock-red
 */
?>
<article <?php post_class(); ?>>
  <header>
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <p class="post-meta"><?php echo get_the_date(); ?> • <?php the_author_posts_link(); ?><?php if ( has_category() ) : ?> • <?php the_category( ', ' ); ?><?php endif; ?></p>
  </header>

  <?php if ( has_post_thumbnail() ) : ?>
    <figure class="entry-media">
      <?php the_post_thumbnail( 'large' ); ?>
      <?php if ( get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
        <figcaption><?php echo wp_kses_post( get_post( get_post_thumbnail_id() )->post_excerpt ); ?></figcaption>
      <?php endif; ?>
    </figure>
  <?php endif; ?>

  <div class="entry-content">
    <?php the_content(); ?>
  </div>

  <footer class="entry-footer">
    <?php the_tags( '<p>Tags: ', ', ', '</p>' ); ?>
  </footer>
</article>
