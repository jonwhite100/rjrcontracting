<?php
/**
 * Template Name:Contact Page Template
 */
?>
<div class="static-img-contact"></div>
<?php get_template_part('templates/page', 'header-contact'); ?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page-contact'); ?>
<?php endwhile; ?>
