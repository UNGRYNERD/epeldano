<section class="block magazine">
  <h2 class="magazine__title"><?php the_sub_field('title') ?></h2>
  <div class="magazine__wrapper">
    <div class="magazine__content">
      <?php the_sub_field('content'); ?>
      <div class="magazine__counters">
        <div class="counter">
          <h3 class="counter__title"><?php esc_html_e('Lectores', 'ungrynerd'); ?></h3>
          <span class="counter__number" data-counter="true"><?php the_sub_field('readers'); ?></span>
        </div>
        <div class="counter">
          <h3 class="counter__title"><?php esc_html_e('Ejemplares', 'ungrynerd'); ?></h3>
          <span class="counter__number" data-counter="true"><?php the_sub_field('copies'); ?></span>
        </div>
      </div>
    </div>
    <?= wp_get_attachment_image(get_sub_field('image'), 'ungrynerd_medium', false, array('class' => 'magazine__image')); ?>
  </div>
</section>
