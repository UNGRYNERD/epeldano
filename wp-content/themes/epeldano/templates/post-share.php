<?php use Roots\Sage\Extras; ?>
<div class="s-post__share share">
  <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(get_permalink()); ?>" class="share__button share__button--facebook">
    <?php echo Extras\inline_svg('icon-facebook'); ?>
  </a>
  <a target="_blank" href="https://plus.google.com/share?url=<?= urlencode(get_permalink()); ?>" class="share__button share__button--google">
    <?php echo Extras\inline_svg('icon-google'); ?>
  </a>
  <a target="_blank" href="https://www.linkedin.com/shareArticle?url=<?= urlencode(get_permalink()); ?>" class="share__button share__button--linkedin">
    <?php echo Extras\inline_svg('icon-linkedin'); ?>
  </a>
  <a target="_blank" href="https://twitter.com/home?status=<?= urlencode(get_the_title()) . ' ' . urlencode(get_permalink()); ?>" class="share__button share__button--twitter">
    <?php echo Extras\inline_svg('icon-twitter'); ?>
  </a>
</div>
