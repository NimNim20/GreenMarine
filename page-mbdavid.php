<?php get_header (); ?>




<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <section id="navButtons">
    <?php get_template_part("template-parts/navbuttons"); ?>
  </section>



<h1>Hello World</h1>
<p>Testing our clicking functionality</p>



    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>