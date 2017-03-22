<?php
/**
 * Template Name:Home Page Template
 */
?>
<?php get_template_part('templates/page', 'header'); ?>
<h1>JON RULES YOU ALL</h1>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header-home'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
