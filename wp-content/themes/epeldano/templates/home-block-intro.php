<?php if (have_rows('intro')) : the_row(); ?>
<section class="home-intro" style="background-image: url(<?= wp_get_attachment_image_url(get_sub_field('background'), 'ungrynerd_big') ?>);">
  <h2 class="home-intro__title"><?php the_sub_field('text') ?></h2>
</section>
<?php endif; ?>