<?php
/**
 * Template Name:Services Page Template
 */
?>
<div class="static-img-services"></div>
<?php get_template_part('templates/page', 'header-services'); ?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page-services'); ?>
<?php endwhile; ?>
