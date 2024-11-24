<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  <section id="navButtons">
    <?php get_template_part("template-parts/navbuttons"); ?>
  </section>

  <?php
    $Heading = get_field("heading");
    $Description = get_field("description");
    ?>
    
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="frontpage-content">
            <div class="frontpage-text">
              <h1><?php echo esc_html($Heading); ?></h1>
              <p><?php echo esc_html($Description); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>


  <section id="home_ydelser_icons">
    <?php get_template_part("template-parts/home/home_ydelser_icons"); ?>
  </section>

  <section id="home_ydelser">
    <?php get_template_part("template-parts/home/home_ydelser"); ?>
  </section>

  <section id="scrollToTopBtn">
    <?php get_template_part ("template-parts/scrolltotop"); ?>
  </section>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>