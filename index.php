<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>Hello world!</h1>
        </div>
      </div>
    </div>
  </section>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>