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
    <?php get_template_part("template-parts/home_ydelser_icons"); ?>
  </section>


  <section id="green-marine-section">
  <h2>Green Marine Section</h2>
  <p>Details about Green Marine...</p>
</section>

<section id="pontech-section">
  <h2>Pontech Section</h2>
  <p>Details about Pontech...</p>
</section>

<section id="mb-david-section">
  <h2>MB David Section</h2>
  <p>Details about MB David...</p>
</section>

<section id="trelleborg-section">
  <h2>Trelleborg Section</h2>
  <p>Details about Trelleborg...</p>
</section>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>