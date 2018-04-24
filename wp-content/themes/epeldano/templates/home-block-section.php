<?php if (have_rows('section')) : the_row(); ?>
<section class="home-section">
  <div class="home-section__wrapper" style="background-image: url(<?= wp_get_attachment_image_url(get_sub_field('background'), 'ungrynerd_big') ?>);">
    <article class="home-section__content">
      <?php the_sub_field('text') ?>
      <?php $link = get_sub_field('link'); ?>
      <p><a class="button" href="<?= $link['url']; ?>" target="<?= $link['target']; ?>"><?= $link['title']; ?></a></p>
    </article>
  </div>
</section>
<?php endif; ?>