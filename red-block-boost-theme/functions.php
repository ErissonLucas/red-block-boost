<?php

// Theme setup
function rbb_theme_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
  add_theme_support( 'custom-logo', [ 'height' => 80, 'width' => 240, 'flex-height' => true, 'flex-width' => true ] );

  register_nav_menus( [
    'primary' => __( 'Primary Menu', 'red-block-boost-theme' ),
    'footer'  => __( 'Footer Menu', 'red-block-boost-theme' ),
  ] );
}
add_action( 'after_setup_theme', 'rbb_theme_setup' );

// Widgets
function rbb_widgets_init() {
  register_sidebar( [
    'name'          => __( 'Sidebar', 'red-block-boost-theme' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here.', 'red-block-boost-theme' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ] );
}
add_action( 'widgets_init', 'rbb_widgets_init' );

// Enqueue assets
function rbb_enqueue_assets() {
  $theme_version = wp_get_theme()->get( 'Version' );
  wp_enqueue_style( 'rbb-style', get_stylesheet_uri(), [], $theme_version );

  $tailwind_css = get_template_directory() . '/assets/css/tailwind.css';
  if ( file_exists( $tailwind_css ) ) {
    wp_enqueue_style( 'rbb-tailwind', get_template_directory_uri() . '/assets/css/tailwind.css', [], filemtime( $tailwind_css ) );
  }

  // Optional: theme JS
  $theme_js = get_template_directory() . '/assets/js/theme.js';
  if ( file_exists( $theme_js ) ) {
    wp_enqueue_script( 'rbb-theme', get_template_directory_uri() . '/assets/js/theme.js', [], filemtime( $theme_js ), true );
  }
}
add_action( 'wp_enqueue_scripts', 'rbb_enqueue_assets' );

// Elementor: register theme locations so Elementor Pro can override
function rbb_register_elementor_locations( $elementor_theme_manager ) {
  $elementor_theme_manager->register_location( 'header' );
  $elementor_theme_manager->register_location( 'footer' );
  $elementor_theme_manager->register_location( 'single' );
  $elementor_theme_manager->register_location( 'archive' );
}
add_action( 'elementor/theme/register_locations', 'rbb_register_elementor_locations' );

// Performance tweaks
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'emoji_svg_url', '__return_false' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
add_filter( 'wp_lazy_loading_enabled', '__return_true' );

// Custom Post Types (testimonials, faqs, kits)
function rbb_register_cpts() {
  register_post_type( 'rbb_testimonial', [
    'label' => __( 'Testimonials', 'red-block-boost-theme' ),
    'public' => true,
    'menu_icon' => 'dashicons-testimonial',
    'supports' => [ 'title', 'editor', 'thumbnail' ],
    'show_in_rest' => true,
  ] );

  register_post_type( 'rbb_faq', [
    'label' => __( 'FAQs', 'red-block-boost-theme' ),
    'public' => true,
    'menu_icon' => 'dashicons-editor-help',
    'supports' => [ 'title', 'editor' ],
    'show_in_rest' => true,
  ] );

  register_post_type( 'rbb_kit', [
    'label' => __( 'Kits', 'red-block-boost-theme' ),
    'public' => true,
    'menu_icon' => 'dashicons-products',
    'supports' => [ 'title', 'editor', 'thumbnail' ],
    'show_in_rest' => true,
  ] );
}
add_action( 'init', 'rbb_register_cpts' );

// ACF programmatic fields (if ACF is active)
function rbb_register_acf_fields() {
  if ( ! function_exists( 'acf_add_local_field_group' ) ) return;

  acf_add_local_field_group( [
    'key' => 'group_rbb_kit',
    'title' => 'Kit Details',
    'fields' => [
      [ 'key' => 'field_rbb_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text' ],
      [ 'key' => 'field_rbb_old_price', 'label' => 'Old Price', 'name' => 'old_price', 'type' => 'text' ],
      [ 'key' => 'field_rbb_perks', 'label' => 'Perks', 'name' => 'perks', 'type' => 'repeater', 'sub_fields' => [ [ 'key' => 'field_rbb_perk', 'label' => 'Perk', 'name' => 'perk', 'type' => 'text' ] ] ],
      [ 'key' => 'field_rbb_highlight', 'label' => 'Highlight', 'name' => 'highlight', 'type' => 'true_false' ],
      [ 'key' => 'field_rbb_tag', 'label' => 'Tag', 'name' => 'tag', 'type' => 'text' ],
    ],
    'location' => [ [ [ 'param' => 'post_type', 'operator' => '==', 'value' => 'rbb_kit' ] ] ],
  ] );

  acf_add_local_field_group( [
    'key' => 'group_rbb_testimonial',
    'title' => 'Testimonial Details',
    'fields' => [
      [ 'key' => 'field_rbb_author', 'label' => 'Author', 'name' => 'author', 'type' => 'text' ],
    ],
    'location' => [ [ [ 'param' => 'post_type', 'operator' => '==', 'value' => 'rbb_testimonial' ] ] ],
  ] );
}
add_action( 'acf/init', 'rbb_register_acf_fields' );

// Helper component renderers mirroring React components
function rbb_badge( $text, $extra_classes = '' ) {
  echo '<span class="inline-block rounded-full bg-secondary text-secondary-foreground px-4 py-2 text-sm font-semibold ' . esc_attr( $extra_classes ) . '">' . esc_html( $text ) . '</span>';
}

function rbb_landing_button( $text, $href = '#', $variant = 'primary', $size = 'default', $extra_classes = '' ) {
  $variants = [
    'primary' => 'bg-gradient-primary text-primary-foreground hover:shadow-glow focus:ring-primary',
    'secondary' => 'bg-background text-primary border-2 border-primary hover:bg-secondary focus:ring-primary',
    'hero' => 'bg-background text-primary border-2 border-background/20 hover:bg-primary hover:text-primary-foreground focus:ring-background',
  ];
  $sizes = [
    'default' => 'px-8 py-4 text-base',
    'sm' => 'px-6 py-3 text-sm',
    'lg' => 'px-10 py-5 text-lg',
  ];
  $base = 'inline-flex items-center justify-center rounded-full px-8 py-4 text-base font-bold shadow-elegant transition-smooth focus:outline-none focus:ring-2 focus:ring-offset-2 active:scale-95 disabled:opacity-50 disabled:pointer-events-none';
  $class = trim( $base . ' ' . ( $variants[$variant] ?? $variants['primary'] ) . ' ' . ( $sizes[$size] ?? $sizes['default'] ) . ' ' . $extra_classes );
  echo '<a href="' . esc_url( $href ) . '" class="' . esc_attr( $class ) . '">' . esc_html( $text ) . '</a>';
}

function rbb_section_title( $args = [] ) {
  $defaults = [ 'kicker' => '', 'title' => '', 'subtitle' => '', 'center' => true ];
  $a = wp_parse_args( $args, $defaults );
  $align = $a['center'] ? 'text-center' : 'text-left';
  echo '<div class="mb-12 ' . esc_attr( $align ) . '">';
  if ( ! empty( $a['kicker'] ) ) echo '<p class="text-sm font-bold tracking-wider text-primary uppercase mb-3">' . esc_html( $a['kicker'] ) . '</p>';
  echo '<h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-foreground leading-tight">' . esc_html( $a['title'] ) . '</h2>';
  if ( ! empty( $a['subtitle'] ) ) echo '<p class="mt-4 text-lg text-muted-foreground max-w-3xl mx-auto leading-relaxed">' . esc_html( $a['subtitle'] ) . '</p>';
  echo '</div>';
}

function rbb_benefit_card( $icon, $title, $desc ) {
  echo '<div class="group p-6 rounded-3xl bg-card shadow-sm border border-border hover:shadow-elegant transition-smooth">';
  echo '<div class="w-16 h-16 rounded-2xl bg-gradient-primary flex items-center justify-center text-2xl mb-4 group-hover:shadow-glow transition-smooth">' . esc_html( $icon ) . '</div>';
  echo '<h4 class="text-lg font-bold text-card-foreground mb-2">' . esc_html( $title ) . '</h4>';
  echo '<p class="text-sm text-muted-foreground leading-relaxed">' . esc_html( $desc ) . '</p>';
  echo '</div>';
}

function rbb_testimonial_card( $image_url, $text, $author ) {
  echo '<div class="rounded-3xl bg-card shadow-sm border border-border overflow-hidden hover:shadow-elegant transition-smooth">';
  echo '<div class="aspect-[4/5] bg-cover bg-center" style="background-image:url(' . esc_url( $image_url ) . ');"></div>';
  echo '<div class="p-6"><p class="text-sm text-card-foreground leading-relaxed mb-3">"' . esc_html( $text ) . '"</p><p class="text-xs text-muted-foreground font-semibold">' . esc_html( $author ) . '</p></div>';
  echo '</div>';
}

