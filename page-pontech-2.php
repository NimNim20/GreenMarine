<?php get_header (); ?>




<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <section id="navButtons">
    <?php get_template_part("template-parts/navbuttonstrans"); ?>
  </section>

  <section>
    <?php get_template_part("template-parts/pontech"); ?>
  </section>

  <section id="scrolltotopbutton">
    <?php get_template_part ("template-parts/scrolltotop"); ?>
  </section>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>