<?php
/**
 * Template Name:About Page Template
 */
?>
<div class="static-img-about"></div>
<?php get_template_part('templates/page', 'header-about'); ?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page-about'); ?>
<?php endwhile; ?>
