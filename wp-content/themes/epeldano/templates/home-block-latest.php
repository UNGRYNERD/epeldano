<?php if (have_rows('latest')) : the_row(); ?>
<?php $link = get_sub_field('link'); ?>
<section class="latest">
  <article class="latest__content">
    <h3 class="latest__title"><?php the_sub_field('title') ?></h3>
    <h2 class="latest__post"><a href="<?= $link['url']; ?>" target="<?= $link['target']; ?>"><?php the_sub_field('post_title'); ?></a></h2>
    <?php $latest = get_sub_field('latest'); ?>
    <p><a class="latest__link" href="<?= $link['url']; ?>" target="<?= $link['target']; ?>"><?= $link['title']; ?></a></p>
  </article>
</section>
<?php endif; ?>