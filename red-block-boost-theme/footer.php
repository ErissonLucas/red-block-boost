<?php if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'footer' ) ) : ?>
  <?php // Elementor footer will render here ?>
<?php else : ?>
  <footer class="site-footer">
    <div class="container mx-auto px-4 py-6 text-center text-sm text-gray-500">
      &copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>
    </div>
  </footer>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>

