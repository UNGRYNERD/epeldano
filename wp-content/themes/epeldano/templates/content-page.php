<article <?php post_class('s-post'); ?>>
  <header>
    <h1 class="s-post__title"><?php the_title(); ?></h1>
  </header>
  <div class="s-post__content">
    <?php the_content(); ?>
  </div>
  <?php get_template_part('templates/post-share'); ?>
</article>
