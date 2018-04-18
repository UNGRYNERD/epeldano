<header class="header">
  <?php if (has_custom_logo()): ?>
    <?php the_custom_logo(); ?>
  <?php else: ?>
    <a class="header__site-name" href="<?= esc_url(home_url('/')); ?>">
      <?php bloginfo('name'); ?>
    </a>
  <?php endif ?>
  <nav class="nav">
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu', 'container' => '']);
    endif;
    ?>
  </nav>
</header>
