<?php get_template_part('templates/search-archive'); ?>
<?php if (have_posts()): ?>

  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class('s-post'); ?>>
      <header>
        <h2 class="s-post__title">
          <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
          <?php get_template_part('templates/entry-meta'); ?>
        </header>
        <div class="s-post__content">
          <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="s-post__more"><?php esc_html_e('> Continuar leyendo', 'ungrynerd'); ?></a>
        <?php get_template_part('templates/post-share'); ?>
    </article>
  <?php endwhile; ?>
  <?php the_posts_navigation([
    'prev_text'                  => __('< Ver anteriores', 'ungrynerd'),
    'next_text'                  => __('Ver siguientes >', 'ungrynerd')
  ]); ?>
<?php else : ?>
  <article class="s-post">
    <h2 class="s-post__title"><?php esc_html_e('No hay resultados para tu búsqueda', 'ungrynerd'); ?></h2>
    <div class="s-post__content">
      <?php esc_html_e('Prueba con otros términos de búsqueda o navega por el menú de la página.', 'ungrynerd'); ?>
    </div>
  </article>
<?php endif; ?>
