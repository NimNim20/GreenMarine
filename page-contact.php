<?php get_header(); ?>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>

  <section class="contactForm">
    <?php echo do_shortcode ('[cf7form cf7key="greenmarinecontact"]'); ?>
  </section>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>