<div class="s-post__meta">
  <?php esc_html_e('Publicado el', 'ungrynerd'); ?>
  <time class="updated" datetime="<?= get_post_time('c', true); ?>">
    <?= get_the_date(); ?>
  </time>
  <span class="byline author vcard">/ <?= __('por', 'ungrynerd'); ?>
    <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn">
      <?= get_the_author(); ?>
    </a>
  </span>
  / <?php esc_html_e('en', 'ungrynerd'); ?> <?php the_category(', '); ?>
</div>
