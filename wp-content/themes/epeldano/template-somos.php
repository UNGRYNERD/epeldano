<?php
 /* Template Name: Somos */
?>
<?php while (have_posts()) : the_post(); ?>
  <section class="weare">
    <div class="weare__intro">
      <?php the_content(); ?>
    </div>

    <?php if (have_rows('steps')) : the_row(); ?>
    <div class="steps">
      <div class="container">
        <h2 class="steps__title"><?php esc_html_e('Nuestros valores', 'ungrynerd'); ?></h2>
          <div class="steps__wrapper">
            <h3 class="steps__step">
              <p class="steps__step__number">01</p>
              <?php the_sub_field('step1') ?>
            </h3>
            <h3 class="steps__step">
              <p class="steps__step__number">02</p>
              <?php the_sub_field('step2') ?>
            </h3>
            <h3 class="steps__step">
              <p class="steps__step__number">03</p>
              <?php the_sub_field('step3') ?>
            </h3>
            <h3 class="steps__step">
              <p class="steps__step__number">04</p>
              <?php the_sub_field('step4') ?>
            </h3>
          </div>
      </div>
    </div>
    <?php endif; ?>
    <?php if (have_rows('team')) : the_row(); ?>
    <div class="team">
      <div class="team__intro"><?php the_sub_field('intro'); ?></div>
      <div class="members">
        <?php $index = 0; ?>
        <?php while (have_rows('members')) : the_row(); ?>
          <div class="member">
            <?php
              $index++;
              $size = $index <= 2 ? 'ungrynerd_member_big' : 'ungrynerd_member';
            ?>
            <?= wp_get_attachment_image(get_sub_field('photo'), $size, false, array('class' => 'member__photo')); ?>
            <h3 class="member__name"><?php the_sub_field('name'); ?></h3>
            <h4 class="member__position"><?php the_sub_field('position'); ?></h4>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
    <?php endif; ?>
    <div class="weare__text">
      <?php the_field('text'); ?>
    </div>
  </section>
<?php endwhile; ?>
