<section class="block intro" style="background-image: url(<?= wp_get_attachment_image_url(get_sub_field('background'), 'ungrynerd_big') ?>);">
  <h2 class="intro__title"><?php the_sub_field('title') ?></h2>
  <div class="intro__content">
    <?php the_sub_field('content'); ?>
    <?php $button = get_sub_field('button'); ?>
    <?php if ($button) : ?>
      <p class="intro__button"><a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="button"><?php echo $button['title']; ?></a></p>
    <?php endif; ?>
  </div>
</section>
