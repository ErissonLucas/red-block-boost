<?php
/**
 * Rodapé do tema
 * @package fitblock-red
 */
?>
<footer class="site-footer" role="contentinfo">
  <div class="container footer-inner">
    <nav aria-label="<?php esc_attr_e( 'Menu do Rodapé', 'fitblock-red' ); ?>">
      <?php
        wp_nav_menu([
          'theme_location' => 'footer',
          'container'      => false,
          'menu_class'     => 'menu',
          'fallback_cb'    => false,
        ]);
      ?>
    </nav>
    <div class="footer-bottom">
      <span>© <?php echo date('Y'); ?> <?php bloginfo('name'); ?> — <?php bloginfo('description'); ?></span>
      <a class="btn btn--secondary" href="#topo">Voltar ao topo</a>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
