<?php if (have_rows('logos')) : the_row(); ?>
<section class="logos">
  <article class="logos__content">
    <h3 class="logos__text"><?php the_sub_field('text') ?></h3>
    <?php $logos = get_sub_field('logos'); ?>
    <div class="logos__wrap">
    <?php foreach($logos as $logo): ?>
      <?php if (!empty(get_field('image_link', $logo['ID']))) : ?>
        <a target="_blank" href="<?= get_field('image_link', $logo['ID']); ?>">
          <?= wp_get_attachment_image($logo['ID'], 'ungrynerd_small' ); ?>
        </a>
      <?php else : ?>
        <?= wp_get_attachment_image($logo['ID'], 'ungrynerd_small' ); ?>
      <?php endif; ?>
    <?php endforeach; ?>
    </div>
    <?php $link = get_sub_field('link'); ?>
    <p><a class="logos__link" href="<?= $link['url']; ?>" target="<?= $link['target']; ?>"><?= $link['title']; ?></a></p>
  </article>
</section>
<?php endif; ?>
