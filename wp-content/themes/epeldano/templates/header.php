<header class="header">
  <?php $secondary_logo = get_theme_mod('secondary_logo'); ?>
  <?php if (!empty($secondary_logo) && is_front_page()) : ?>
    <a href="<?= esc_url(home_url('/')); ?>" class="custom-logo-link"><img src="<?= esc_url($secondary_logo) ?>"></a>
  <?php elseif (has_custom_logo()): ?>
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
  <a href="#" class="header__menu-toggle">
      <span></span>
      <span></span>
      <span></span>
  </a>
</header>
