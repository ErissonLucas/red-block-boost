<?php
/**
 * Cabeçalho do tema
 * @package fitblock-red
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
    // Meta description básico
    $meta_description = '';
    if ( is_singular() ) {
      global $post;
      $excerpt = has_excerpt( $post ) ? get_the_excerpt( $post ) : wp_strip_all_tags( wp_trim_words( get_post_field( 'post_content', $post ), 30 ) );
      $meta_description = $excerpt;
    } elseif ( is_home() || is_front_page() ) {
      $meta_description = get_bloginfo( 'description' );
    } else {
      $meta_description = get_bloginfo( 'name' ) . ' — ' . get_bloginfo( 'description' );
    }
  ?>
  <meta name="description" content="<?php echo esc_attr( $meta_description ); ?>">
  
  <?php
    // Open Graph básico (se plugin de SEO não estiver ativo)
    if ( ! defined( 'WPSEO_VERSION' ) ) :
      $og_title = wp_get_document_title();
      $og_url   = is_singular() ? get_permalink() : home_url( '/' );
      $og_type  = is_singular() ? 'article' : 'website';
      $og_site  = get_bloginfo( 'name' );
      $og_image = '';
      if ( is_singular() && has_post_thumbnail() ) {
        $img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
        if ( $img ) { $og_image = $img[0]; }
      }
  ?>
    <meta property="og:type" content="<?php echo esc_attr( $og_type ); ?>" />
    <meta property="og:title" content="<?php echo esc_attr( $og_title ); ?>" />
    <meta property="og:description" content="<?php echo esc_attr( $meta_description ); ?>" />
    <meta property="og:url" content="<?php echo esc_url( $og_url ); ?>" />
    <meta property="og:site_name" content="<?php echo esc_attr( $og_site ); ?>" />
    <?php if ( $og_image ) : ?><meta property="og:image" content="<?php echo esc_url( $og_image ); ?>" /><?php endif; ?>
  <?php endif; ?>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="screen-reader-text" href="#conteudo">Pular para o conteúdo</a>

<?php if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'header' ) ) : ?>
  <!-- Header gerenciado pelo Elementor -->
<?php else : ?>
<header class="site-header" role="banner">
  <div class="container header-inner">
    <div class="site-branding">
      <?php if ( has_custom_logo() ) { the_custom_logo(); } ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </div>
    <button class="nav-toggle" aria-expanded="false" aria-controls="site-nav" data-toggle="nav" title="Abrir menu">
      <span class="screen-reader-text">Alternar navegação</span>☰
    </button>
    <nav id="site-nav" class="site-nav" role="navigation" aria-label="<?php esc_attr_e( 'Menu Principal', 'fitblock-red' ); ?>">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'menu',
          'fallback_cb'    => function() {
            echo '<ul><li><a href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '">Defina o Menu Principal</a></li></ul>';
          }
        ]);
      ?>
    </nav>
  </div>
</header>
<?php endif; ?>
