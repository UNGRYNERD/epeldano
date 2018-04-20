<section class="block slide" style="background-image: url(<?= wp_get_attachment_image_url(get_sub_field('background'), 'ungrynerd_big') ?>);">
  <h2 class="slide__title"><?php the_sub_field('title') ?></h2>
  <div class="slide__content owl-carousel">
    <?php while (have_rows('slide')) : the_row(); ?>
      <article class="slide__item">
        <h2 class="slide__item-title"><?php the_sub_field('title') ?></h2>
        <?php the_sub_field('content'); ?>
        <?= wp_get_attachment_image(get_sub_field('logo'), 'ungrynerd_small', false, array('class' => 'slide__item-logo')) ?>
      </article>
    <?php endwhile; ?>
  </div>
</section>
