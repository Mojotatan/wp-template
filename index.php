<?php get_heaer(); ?>

<!-- Start the loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Content -->

<!-- End the loop -->
<?php endwhile; else : ?>
  <p><?php esc_html_e(' Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>