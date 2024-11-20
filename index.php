<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <section id="navButtons">
    <?php get_template_part("template-parts/navbuttons"); ?>
  </section>

  <section id="home_ydelser_icons">
    <?php get_template_part("template-parts/home_ydelser_icons"); ?>
  </section>

  <section id="home_ydelser">
    <?php get_template_part("template-parts/home_ydelser"); ?>
  </section>





  <section id="companiespart">
<?php get_template_part("template-parts/green_marine"); ?>
<?php get_template_part("template-parts/pontech"); ?>
<?php get_template_part("template-parts/mb_david"); ?>
<?php get_template_part("template-parts/trelleborg"); ?>
  </section>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>