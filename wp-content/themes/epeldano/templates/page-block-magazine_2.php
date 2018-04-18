<section class="block magazine-2">
  <h2 class="magazine-2__title"><?php the_sub_field('title') ?></h2>
  <div class="magazine-2__wrapper">
    <div class="magazine-2__content">
      <?php the_sub_field('content'); ?>
    </div>
    <?= wp_get_attachment_image(get_sub_field('image'), 'ungrynerd_medium', false, array('class' => 'magazine-2__image')); ?>
    <div class="magazine-2__counters">
      <div class="counter">
        <h3 class="counter__title"><?php esc_html_e('Lectores', 'ungrynerd'); ?></h3>
        <span class="counter__number"><?php the_sub_field('readers'); ?></span>
      </div>
      <div class="counter">
        <h3 class="counter__title"><?php esc_html_e('Ejemplares', 'ungrynerd'); ?></h3>
        <span class="counter__number"><?php the_sub_field('copies'); ?></span>
      </div>
    </div>
  </div>
</section>
