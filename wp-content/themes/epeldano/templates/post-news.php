<article <?php post_class('post-block ' . (get_field('black') ? 'post-block--black' : '')) ?> style="background-image: url(<?php the_post_thumbnail_url('ungrynerd_big'); ?>); background-color: <?php the_field('background') ?>">
  <div class="post-block__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
  <?php the_excerpt(); ?>
  <p class="post-block__date"><?php the_time(get_option('date_format')); ?></p>
  <a href="<?php the_permalink(); ?>" class="post-block__more">+</a>
</article>
