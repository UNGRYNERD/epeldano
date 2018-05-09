<?php if (!have_posts()) : ?>
  <article class="s-post">
    <h2 class="s-post__title"><?php esc_html_e('No hay entradas que mostrar', 'ungrynerd'); ?></h2>
    <div class="s-post__content">
      <p><?php esc_html_e('Prueba a usar el buscador o navega por el menú de la página.', 'ungrynerd'); ?></p>
      <?php get_search_form(); ?>
    </div>
  </article>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>

<?php endwhile; ?>
