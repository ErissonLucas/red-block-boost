<?php
get_header();
?>

<main id="primary">
<?php if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    the_content();
  endwhile;
else :
  get_template_part( 'template-parts/content', 'none' );
endif; ?>
</main>

<?php get_footer(); ?>

