<?php
/**
 * Template de post único
 * @package fitblock-red
 */
get_header(); ?>

<main id="conteudo" class="container" role="main" style="padding:2rem 0;">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-parts/content', 'single' ); ?>

    <nav class="post-navigation" role="navigation" aria-label="Navegação do post">
      <div class="nav-previous"><?php previous_post_link( '%link', '&larr; %title' ); ?></div>
      <div class="nav-next"><?php next_post_link( '%link', '%title &rarr;' ); ?></div>
    </nav>

    <?php comments_template(); ?>

    <?php
      // JSON-LD Article simples
      $json_ld = [
        '@context' => 'https://schema.org',
        '@type'    => 'Article',
        'headline' => get_the_title(),
        'datePublished' => get_the_date( DATE_W3C ),
        'dateModified'  => get_the_modified_date( DATE_W3C ),
        'author'  => [ '@type' => 'Person', 'name' => get_the_author() ],
        'mainEntityOfPage' => [ '@type' => 'WebPage', '@id' => get_permalink() ],
      ];
      if ( has_post_thumbnail() ) {
        $img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
        if ( $img ) { $json_ld['image'] = [ $img[0] ]; }
      }
    ?>
    <script type="application/ld+json"><?php echo wp_json_encode( $json_ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ); ?></script>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
