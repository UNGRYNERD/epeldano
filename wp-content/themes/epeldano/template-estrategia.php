<?php
 /* Template Name: Estrategia */
?>
<?php while (have_posts()) : the_post(); ?>
  <section class="strategy">
    <div class="strategy__intro">
      <h1 class="strategy__title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
    <div class="blocks">
      <?php while (have_rows('block')) : the_row(); ?>
        <div class="block">
          <h3 class="block__title"><?php the_sub_field('title'); ?></h3>
          <?= wp_get_attachment_image(get_sub_field('icon'), 'ungrynerd_small', false, array('class' => 'block__icon')); ?>
          <span class="block__more"><?php esc_html_e('> ver más', 'ungrynerd'); ?></span>
          <div class="block__text"><?php the_sub_field('text'); ?></div>
        </div>
      <?php endwhile; ?>
    </div>
  </section>
  <?= wp_get_attachment_image(get_field('image'), 'ungrynerd_big', false, array('class' => 'strategy__image')); ?>

<?php endwhile; ?>
