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
      <?php
        $style = get_field('is_logo') ? '' : 'background-image: url(' . get_the_post_thumbnail_url(get_the_ID(), 'ungrynerd_big') . ');';
        $style .= get_field('background') ? 'background-color:' . get_field('background') : '';
      ?>
      <article <?php post_class('post-block ' . (get_field('black') ? 'post-block--black' : '') . (get_field('is_logo') ? 'post-block--logo' : '')) ?> style="<?= esc_attr($style); ?>">
        <div class="post-block__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <?php the_excerpt(); ?>
        <p class="post-block__date"><?php the_time(get_option('date_format')); ?></p>
        <a href="<?php the_permalink(); ?>" class="post-block__more">+</a>
        <?php if (get_field('is_logo')) : ?>
          <?php the_post_thumbnail('ungrynerd_small', ['class' => 'post-block__logo']); ?>
        <?php endif; ?>
      </article>
    <?php endif; ?>
  <?php endwhile; ?>
</section>
<a href="#" class="button news__more"><?php esc_html_e('> Ver noticias anteriores', 'ungrynerd'); ?></a>
