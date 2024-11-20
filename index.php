<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <section class="content">
  <div class="button-grid">
    <a href="<?php echo site_url('/')?>" class="btn green-marine">Green Marine</a>
    <a href="<?php echo site_url('/pontech')?>" class="btn pontech">Pontech</a>
    <a href="<?php echo site_url('/mb-david')?>" class="btn mb-david">MB David</a>
    <a href="<?php echo site_url('/trelleborg')?>" class="btn trelleborg">Trelleborg</a>
  </div>
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