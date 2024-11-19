<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <section class="content">
    <div class="button-grid">
      <a href="#" class="btn green-marine">Green Marine</a>
        <a href="#" class="btn pontech">Pontech</a>
        <a href="#" class="btn mb-david">MB David</a>
      <a href="#" class="btn trelleborg">Trelleborg</a>
    </div>
  </section>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>