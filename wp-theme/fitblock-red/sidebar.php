<?php
/**
 * Sidebar
 * @package fitblock-red
 */
?>
<aside class="sidebar" role="complementary">
  <?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
    <?php dynamic_sidebar( 'primary-sidebar' ); ?>
  <?php else : ?>
    <section class="widget">
      <h2 class="widget-title"><?php _e( 'Barra Lateral', 'fitblock-red' ); ?></h2>
      <p><?php _e( 'Adicione widgets em Aparência → Widgets.', 'fitblock-red' ); ?></p>
    </section>
  <?php endif; ?>
</aside>
