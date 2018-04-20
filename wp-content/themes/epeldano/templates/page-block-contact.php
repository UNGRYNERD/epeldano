<?php use Roots\Sage\Extras; ?>
<section class="block contact">
  <h2 class="contact__title"><?php the_sub_field('title') ?></h2>
  <div class="contact__content">
    <?php if (get_sub_field('contact_title_1')) : ?>
      <div class="contact__data">
        <h3 class="contact__data-title"><?php the_sub_field('contact_title_1'); ?></h3>
        <?php the_sub_field('contact_data_1'); ?>
      </div>
    <?php endif; ?>
    <?php if (get_sub_field('contact_title_2')) : ?>
      <div class="contact__data">
        <h3 class="contact__data-title"><?php the_sub_field('contact_title_2'); ?></h3>
        <?php the_sub_field('contact_data_2'); ?>
      </div>
    <?php endif; ?>
    <?php if (get_sub_field('contact_title_3')) : ?>
      <div class="contact__data">
        <h3 class="contact__data-title"><?php the_sub_field('contact_title_3'); ?></h3>
        <?php the_sub_field('contact_data_3'); ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="contact__links">
    <?php $link = get_sub_field('button'); ?> 
    <a class="button" target="<?= !empty($link['target']) ? $link['target'] : '_self'; ?>" href="<?= $link['url']; ?>"><?= $link['title']; ?></a>
    <div class="contact__social">
      <?php if (get_sub_field('twitter')) : ?>
        <a target="_blank" href="<?php the_sub_field('twitter'); ?>"><?= Extras\inline_svg('icon-twitter'); ?></a>
      <?php endif; ?>
      <?php if (get_sub_field('linkedin')) : ?>
        <a target="_blank" href="<?php the_sub_field('linkedin'); ?>"><?= Extras\inline_svg('icon-linkedin'); ?></a>
      <?php endif; ?>
      <?php if (get_sub_field('facebook')) : ?>
        <a target="_blank" href="<?php the_sub_field('facebook'); ?>"><?= Extras\inline_svg('icon-facebook'); ?></a>
      <?php endif; ?>
    </div>
  </div>
</section>
