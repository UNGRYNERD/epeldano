<section class="block guide">
  <div class="guide__wrapper">
    <div class="guide__content">
      <h2 class="guide__title"><?php the_sub_field('title') ?></h2>
      <?php the_sub_field('content'); ?>
    </div>
    <?= wp_get_attachment_image(get_sub_field('image'), 'ungrynerd_medium', false, array('class' => 'guide__image')); ?>
  </div>
</section>
