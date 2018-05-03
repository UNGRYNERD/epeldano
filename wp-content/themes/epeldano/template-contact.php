<?php
 /* Template Name: Contacto */
?>
<?php if (have_rows('where')): ?>
  <?php the_row(); ?>
  <?php $address = get_sub_field('map') ?>
  <section class="contact">
    <div class="contact__wrapper">
      <div class="col1">
        <h2 class="contact__title"><?php esc_html_e('¿Dónde estamos?', 'ungrynerd'); ?></h2>
        <?php the_sub_field('text') ?>
      </div>
      <div class="col2">
        <section id="contact-map" data-lat="<?= $address['lat'] ?>" data-lng="<?= $address['lng'] ?>"></section>
      </div>
    </div>
    <div class="contact__wrapper">
      <h2 class="contact__title col1"><?php esc_html_e('¿Quieres anunciarte?', 'ungrynerd'); ?></h2>
      <div class="col2 info-wrap">
        <?php while (have_rows('contacts')) : the_row(); ?>
          <div class="info">
            <h3 class="info__title"><?php the_sub_field('title'); ?></h3>
            <?php the_sub_field('data'); ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
    <div class="contact__wrapper">
      <h2 class="contact__title col1"><?php esc_html_e('Contáctanos', 'ungrynerd'); ?></h2>
      <div class="col2 form-wrap">
        <?= do_shortcode(get_field('form')); ?>
      </div>
    </div>
  </section>
<?php endif; ?>

