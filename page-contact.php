<?php get_header(); ?>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
  <section id="navButtons">
    <?php get_template_part("template-parts/navbuttons"); ?>
  </section>
  <section class="contactForm">
    <?php echo do_shortcode ('[contact-form-7 id="75513d2" title="GreenMarineContact"]'); ?>
  </section>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>