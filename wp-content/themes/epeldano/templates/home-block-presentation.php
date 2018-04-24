<?php if (get_field('presentation_text')): ?>
  <section class="presentation">
    <h2 class="presentation__text"><?php the_field('presentation_text'); ?></h2>
  </section>
<?php endif; ?>