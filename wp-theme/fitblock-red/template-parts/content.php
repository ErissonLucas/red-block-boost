<?php
/**
 * Card/trecho de conteúdo padrão
 * @package fitblock-red
 */
?>
<article <?php post_class('post-card'); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="post-meta"><?php echo get_the_date(); ?> • <?php the_author_posts_link(); ?></p>
  </header>
  <?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
      <?php the_post_thumbnail( 'large', [ 'loading' => 'lazy' ] ); ?>
    </a>
  <?php endif; ?>
  <div class="entry-excerpt">
    <p><?php echo wp_kses_post( wp_trim_words( get_the_excerpt(), 30 ) ); ?></p>
  </div>
  <p><a class="btn btn--secondary" href="<?php the_permalink(); ?>"><?php _e( 'Ler mais', 'fitblock-red' ); ?></a></p>
</article>
