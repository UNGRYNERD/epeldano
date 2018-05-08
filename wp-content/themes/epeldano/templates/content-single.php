<?php get_template_part('templates/search-archive'); ?>
<?php while (have_posts()) : the_post(); ?>
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
