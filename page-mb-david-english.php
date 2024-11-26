<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <section>
    <?php get_template_part("template-parts/mb-david"); ?>
  </section>

  <?php endwhile; ?>
<?php endif; ?>