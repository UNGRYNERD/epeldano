<?php
 /* Template Name: Editorial */
?>
<?php if (have_rows('intro')) : ?>
  <?php the_row(); ?>
  <section class="ed-intro" style="background: url(<?= wp_get_attachment_image_url(get_sub_field('background'), 'ungrynerd_big'); ?>)">
    <div class="container">
      <div class="ed-intro__wrapper">
        <h1 class="ed-intro__title"><?php the_sub_field('title') ?></h1>
        <?php the_sub_field('text') ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if (have_rows('counter')) : ?>
  <?php the_row(); ?>
  <section class="ed-counter">
    <span class="ed-counter__number" data-counter="true"><?php the_sub_field('number') ?></span>
    <?php the_sub_field('text'); ?>
  </section>
<?php endif; ?>


<?php if (have_rows('block_1')) : ?>
  <?php the_row(); ?>
  <section class="ed-block ed-block--one">
    <?= wp_get_attachment_image(get_sub_field('background'), 'ungrynerd_big', false, ['class' => 'ed-block__image']); ?>
    <div class="ed-block__wrapper">
      <div class="ed-block__wrap">
        <h2 class="ed-block__title"><?php the_sub_field('title') ?></h2>
        <?php the_sub_field('text') ?>
        <?php if (have_rows('counter')) : ?>
          <?php the_row(); ?>
          <?php if (get_sub_field('number')) : ?>
            <section class="ed-block__counter">
              <?php the_sub_field('text'); ?>
              <span class="ed-block__number" data-counter="true"><?php the_sub_field('number') ?></span>
            </section>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if (have_rows('block_2')) : ?>
  <?php the_row(); ?>
  <section class="ed-block ed-block--two">
    <div class="container">
      <div class="ed-block__image"><?= wp_get_attachment_image(get_sub_field('background'), 'ungrynerd_big'); ?></div>
      <div class="ed-block__wrapper">
        <div class="ed-block__wrap">
          <h2 class="ed-block__title"><?php the_sub_field('title') ?></h2>
          <?php the_sub_field('text') ?>
          <?php if (have_rows('counter')) : ?>
            <?php the_row(); ?>
            <?php if (get_sub_field('number')) : ?>
              <section class="ed-block__counter">
                <?php the_sub_field('text'); ?>
                <span class="ed-block__number" data-counter="true"><?php the_sub_field('number') ?></span>
              </section>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>


<?php if (have_rows('block_3')) : ?>
  <?php the_row(); ?>
  <section class="ed-block ed-block--three">
    <div class="container">
      <div class="ed-block__image"><?= wp_get_attachment_image(get_sub_field('background'), 'ungrynerd_big'); ?></div>
      <div class="ed-block__wrapper">
        <div class="ed-block__wrap">
          <h2 class="ed-block__title"><?php the_sub_field('title') ?></h2>
          <?php the_sub_field('text') ?>
          <?php if (have_rows('counter')) : ?>
            <?php the_row(); ?>
            <?php if (get_sub_field('number')) : ?>
              <section class="ed-block__counter">
                <?php the_sub_field('text'); ?>
                <span class="ed-block__number" data-counter="true"><?php the_sub_field('number') ?></span>
              </section>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if (have_rows('close')) : ?>
  <?php the_row(); ?>
  <section class="ed-close">
    <h2 class="ed-close__title"><?php the_sub_field('title') ?></h2>
    <?php the_sub_field('text') ?>
  </section>
<?php endif; ?>


