<?php 
 /* Template Name: Página de bloques */
?>
<?php if (have_rows('blocks')) : ?>
  <?php while (have_rows('blocks')) : the_row(); ?>
    <?php get_template_part('templates/page-block', get_row_layout()) ?>
  <?php endwhile; ?>
<?php endif; ?>