<?php if (have_rows('page_links')): the_row(); ?>
  <section class="links">
    <?php while (have_rows('links')) : the_row(); ?>
    <?php $link = get_sub_field('link'); ?>
      <a class="link" href="<?= $link['url']; ?>" target="<?= $link['target']; ?>">
        <?= wp_get_attachment_image(get_sub_field('image'), 'ungrynerd_pagelink')?>
        <span><?= $link['title']; ?></span>
      </a>
    <?php endwhile; ?>
  </section>
<?php endif; ?>