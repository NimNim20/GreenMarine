<?php get_header(); ?>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>

  <section class="contactForm">
    <div class="container">
      <div class="col-12">
        <?php echo do_shortcode ('[cf7form cf7key="greenmarinecontact"]'); ?>
      </div>
    </div>
  </section>

  <?php endwhile; ?>
<?php endif; ?>