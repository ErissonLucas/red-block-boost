<?php get_header(); ?>
<main id="primary" class="site-main">
  <header class="page-header"><h1 class="page-title"><?php the_archive_title(); ?></h1></header>
  <?php if ( have_posts() ) : ?>
    <div class="posts-grid">
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="entry-summary"><?php the_excerpt(); ?></div>
        </article>
      <?php endwhile; ?>
    </div>
    <?php the_posts_pagination(); ?>
  <?php else : ?>
    <?php get_template_part( 'template-parts/content', 'none' ); ?>
  <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

