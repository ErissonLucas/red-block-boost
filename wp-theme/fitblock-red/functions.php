<?php
/**
 * Funções e definições do tema FitBlock Red
 * @package fitblock-red
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

// Configurações básicas do tema
function fitblock_red_setup() {
  // Título dinâmico
  add_theme_support( 'title-tag' );

  // Miniaturas
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'hero', 1600, 900, true );

  // HTML5
  add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );

  // Menus
  register_nav_menus([
    'primary' => __( 'Menu Principal', 'fitblock-red' ),
    'footer'  => __( 'Menu do Rodapé', 'fitblock-red' ),
  ]);
}
add_action( 'after_setup_theme', 'fitblock_red_setup' );

// Enfileirar estilos e scripts
function fitblock_red_assets() {
  $ver = wp_get_theme()->get( 'Version' );
  wp_enqueue_style( 'fitblock-red-style', get_stylesheet_uri(), [], $ver );
  wp_enqueue_script( 'fitblock-red-js', get_template_directory_uri() . '/assets/js/theme.js', [], $ver, true );
}
add_action( 'wp_enqueue_scripts', 'fitblock_red_assets' );

// Widgets
function fitblock_red_widgets_init() {
  register_sidebar([
    'name'          => __( 'Barra Lateral', 'fitblock-red' ),
    'id'            => 'primary-sidebar',
    'description'   => __( 'Adicione widgets aqui.', 'fitblock-red' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ]);
}
add_action( 'widgets_init', 'fitblock_red_widgets_init' );

// Fallback wp_body_open (compatibilidade WP < 5.2)
if ( ! function_exists( 'wp_body_open' ) ) {
  function wp_body_open() { do_action( 'wp_body_open' ); }
}

// Link canônico simples (se não houver plugin de SEO)
function fitblock_red_rel_canonical() {
  if ( is_singular() ) {
    echo '<link rel="canonical" href="' . esc_url( get_permalink() ) . '" />' . "\n";
  } elseif ( is_home() || is_front_page() ) {
    echo '<link rel="canonical" href="' . esc_url( home_url( '/' ) ) . '" />' . "\n";
  }
}
add_action( 'wp_head', 'fitblock_red_rel_canonical', 1 );
