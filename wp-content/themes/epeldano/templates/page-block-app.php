<section class="block app">
  <div class="app__container">
    <div class="app__content">
      <h2 class="app__title"><?php the_sub_field('title') ?></h2>
      <?php the_sub_field('content'); ?>
    </div>
    <div class="app__wrapper">      
      <div class="counter">
        <h3 class="counter__title"><?php esc_html_e('Descargas', 'ungrynerd'); ?></h3>
        <span class="counter__number" data-counter="true"><?php the_sub_field('downloads'); ?></span>
      </div>
      <div class="app__downloads">
        <a href="<?php the_sub_field('android'); ?>" class="button"><?php esc_html_e('> Descargar Android', 'ungrynerd'); ?></a>
        <a href="<?php the_sub_field('ios'); ?>" class="button"><?php esc_html_e('> Descargar iOS', 'ungrynerd'); ?></a>
      </div>
    </div>
  </div>
  <?= wp_get_attachment_image(get_sub_field('image'), 'ungrynerd_medium', false, array('class' => 'app__image')); ?>
</section>
