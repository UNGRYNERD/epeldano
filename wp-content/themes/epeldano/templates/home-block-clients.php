<?php if (have_rows('clients')) : the_row(); ?>
<section class="clients">
    <h3 class="clients__title"><?php the_sub_field('title') ?></h3>
    <?php $logos = get_sub_field('logos'); ?>
    <div class="clients__wrap owl-carousel">
      <?php foreach($logos as $logo): ?>
        <?= wp_get_attachment_image($logo['ID'], 'ungrynerd_small' ); ?>
      <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>