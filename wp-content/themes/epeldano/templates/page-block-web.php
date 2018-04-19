<section class="block magazine">
  <h2 class="magazine__title"><?php the_sub_field('title') ?></h2>
  <div class="magazine__wrapper">
    <div class="magazine__content">
      <?php the_sub_field('content'); ?>
      <p><a href="<?php the_sub_field('link'); ?>" class="button"><?php esc_html_e('> Ver web', 'ungrynerd'); ?></a></p>
      <div class="magazine__counters">
        <div class="counter">
          <h3 class="counter__title"><?php esc_html_e('Visitas al mes', 'ungrynerd'); ?></h3>
          <span class="counter__number"><?php the_sub_field('visits'); ?></span>
        </div>
        <div class="counter">
          <h3 class="counter__title"><?php esc_html_e('Visitantes únicos', 'ungrynerd'); ?></h3>
          <span class="counter__number"><?php the_sub_field('unique_visits'); ?></span>
        </div>
      </div>
    </div>
    <?= wp_get_attachment_image(get_sub_field('image'), 'ungrynerd_medium', false, array('class' => 'magazine__image')); ?>
  </div>
</section>
