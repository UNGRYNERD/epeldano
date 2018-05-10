<?php if (!have_posts()) : ?>
  <article class="s-post">
    <h2 class="s-post__title"><?php esc_html_e('No hay entradas que mostrar', 'ungrynerd'); ?></h2>
    <div class="s-post__content">
      <p><?php esc_html_e('Prueba a usar el buscador o navega por el menú de la página.', 'ungrynerd'); ?></p>
      <?php get_search_form(); ?>
    </div>
  </article>
<?php endif; ?>

<section class="news">
<?php while (have_posts()) : the_post(); ?>
  <?php if ($wp_query->current_post==0) : ?>
    <article <?php post_class('post-block post-block--featured') ?>>
      <?php the_post_thumbnail('ungrynerd_big', array('class' => 'post-block__image')) ?>
      <div class="post-block__info">
        <h3 class="post-block__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
        <p class="post-block__date"><?php the_time(get_option('date_format')); ?></p>
        <a href="<?php the_permalink(); ?>" class="post-block__continue">
          <?php esc_html_e('> Continuar leyendo', 'ungrynerd'); ?>
        </a>
      </div>
    </article>
  <?php else : ?>
    <article <?php post_class('post-block ' . (get_field('black') ? 'post-block--black' : '')) ?> style="background-image: url(<?php the_post_thumbnail_url('ungrynerd_big'); ?>); background-color: <?php the_field('background') ?>">
      <div class="post-block__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
      <?php the_excerpt(); ?>
      <p class="post-block__date"><?php the_time(get_option('date_format')); ?></p>
      <a href="<?php the_permalink(); ?>" class="post-block__more">+</a>
    </article>
  <?php endif; ?>
<?php endwhile; ?>
</section>
