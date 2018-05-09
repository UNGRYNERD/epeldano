<?php
 /* Template Name: Qué hacemos */
?>
<?php while (have_posts()) : the_post(); ?>
  <section class="wedo">
    <div class="wedo__intro">
      <?php the_content(); ?>
    </div>
    <div class="round-links">
      <?php while (have_rows('links')) : the_row(); ?>
        <?php $link = get_sub_field('link'); ?>
        <a class="link" href="<?= $link['url']; ?>" target="<?= $link['target']; ?>">
          <?= $link['title']; ?>
        </a>
      <?php endwhile; ?>
    </div>
  </section>
<?php endwhile; ?>
