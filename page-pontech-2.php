<?php get_header (); ?>




<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <section id="navButtons">
    <?php get_template_part("template-parts/navbuttons"); ?>
  </section>

  <section>
    <?php get_template_part("template-parts/pontech"); ?>
  </section>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>