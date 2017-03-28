<div class="container">
  <div class="col-sm-8">
    <?php the_content(); ?>
  </div>
  <div class="col-sm-4 sidebar">
    <?php dynamic_sidebar('sidebar-primary'); ?>
  </div>
</div>
<?php
  wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']);
?>
