<?php if (get_field('total_reach')): ?>
  <section class="reach">
    <h3 class="reach__text">
      <span class="reach__number" data-counterup-time="2000" data-counterup-offset="1000" data-counter="true"><?php the_field('total_reach'); ?></span>
      <span class="reach__total"><?php esc_html_e('Total Reach', 'ungrynerd'); ?></span>
    </h3>
  </section>
<?php endif; ?>