<?php get_header (); ?>




<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <section id="navButtons">
      <?php get_template_part("template-parts/navbuttons"); ?>
    </section>

    <?php
    $Heading = get_field("heading");
    $Description = get_field("description");
    $davidImg = get_field("david-img");
    ?>

    <div class="container-fluid">
      <div class="row">

        <div class="col-12 col-md-6">
          <div class="MB_David_img">
            <img src="<?php echo esc_url($davidImg['url']); ?>" alt="<?php echo esc_attr($davidImg['alt']); ?>"> 
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="MB_David">
            <h1><?php echo esc_html($Heading); ?></h1>
            <p><?php echo esc_html($Description); ?></p>
          </div>
        </div>

      </div>
    </div>



    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>