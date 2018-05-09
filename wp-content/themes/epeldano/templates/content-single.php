<?php get_template_part('templates/search-archive'); ?>
<?php while (have_posts()) : the_post(); ?>
  <?php if (get_field('show_thumbnail')) : ?>
    <?php the_post_thumbnail('ungrynerd_big', array('class' => 's-post__image')); ?>
  <?php endif; ?>
  <article <?php post_class('s-post'); ?>>
    <header>
      <h1 class="s-post__title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="s-post__content">
      <?php the_content(); ?>
    </div>
    <?php get_template_part('templates/post-share'); ?>
    <?php the_post_navigation([
      'prev_text'                  => __('< Ver anterior', 'ungrynerd'),
      'next_text'                  => __('Ver siguiente >', 'ungrynerd')
    ]); ?>
  </article>
<?php endwhile; ?>
