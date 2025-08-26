<?php
/*
Template Name: Elementor Full Width
Template Post Type: page
*/
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main id="primary" class="elementor-template-fullwidth">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>

