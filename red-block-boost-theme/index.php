<?php
get_header();
?>

<main id="primary" class="site-main">
<?php if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    the_content();
  endwhile;
else :
  get_template_part( 'template-parts/content', 'none' );
endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

