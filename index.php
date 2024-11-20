<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <section class="content">
  <div class="button-grid">
    <a href="#" class="btn green-marine" data-target="#green-marine-section">Green Marine</a>
    <a href="#" class="btn pontech" data-target="#pontech-section">Pontech</a>
    <a href="#" class="btn mb-david" data-target="#mb-david-section">MB David</a>
    <a href="#" class="btn trelleborg" data-target="#trelleborg-section">Trelleborg</a>
  </div>
</section>

  <section id="home_ydelser_icons">
    <?php get_template_part("index_template-parts/home_ydelser_icons"); ?>
  </section>

  <section id="home_ydelser_icons">
    <?php get_template_part("index_template-parts/home_ydelser"); ?>
  </section>



  <section id="companiespart">
<?php get_template_part("template-parts/index_templates-parts_test/mb_david"); ?>
<?php get_template_part("template-parts/index_templates-parts_test/green_marine"); ?>
<?php get_template_part("template-parts/index_templates-parts_test/pontech"); ?>
<?php get_template_part("template-parts/index_templates-parts_test/trelleborg"); ?>
  </section>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>