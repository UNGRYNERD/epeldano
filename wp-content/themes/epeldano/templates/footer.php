<footer class="footer">
  <div class="footer__container">
    <?php $secondary_logo = get_theme_mod('secondary_logo'); ?>
    <?php if (!empty($secondary_logo)) : ?>
      <a href="<?= esc_url(home_url('/')); ?>" class="footer__logo"><img src="<?= esc_url($secondary_logo) ?>"></a>
    <?php endif; ?>
    <?php
    if (has_nav_menu('pub_navigation')) :
      wp_nav_menu(['theme_location' => 'pub_navigation', 'menu_class' => 'footer__menu footer__menu--pub', 'container' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s"><h3>Publicaciones</h3>%3$s</ul>']);
    endif;
    ?>
    <?php
    if (has_nav_menu('exp_navigation')) :
      wp_nav_menu(['theme_location' => 'exp_navigation', 'menu_class' => 'footer__menu footer__menu--exp', 'container' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s"><h3>Experiencias</h3>%3$s</ul>']);
    endif;
    ?>
    <?php
    if (has_nav_menu('other_navigation')) :
      wp_nav_menu(['theme_location' => 'other_navigation', 'menu_class' => 'footer__menu footer__menu--other', 'container' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>']);
    endif;
    ?>
  </div>
  <div class="footer__container">
    <p class="copy">© <?= Date('Y'); ?>. <?php esc_html_e('Peldaño. Todos los derechos reservados.', 'ungrynerd'); ?></p>
  </div>
</footer>
