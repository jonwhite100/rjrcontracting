<?php
/**
 * Template Name:Home Page Template
 */
?>
<div id="carousel-wrapper"><?php echo do_shortcode('[twabc-carousel interval="9000"]')?></div>
<?php get_template_part('templates/page', 'header-home'); ?>
<?php while (have_posts()) : the_post(); ?>
  <?php // get_template_part('templates/page', 'header-home'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
