<?php if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'footer' ) ) : ?>
  <?php // Elementor footer will render here ?>
<?php else : ?>
  <footer>
    &copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>
  </footer>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>

