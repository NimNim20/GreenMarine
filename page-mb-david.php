<?php get_header (); ?>




<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <section id="navButtons">
      <?php get_template_part("template-parts/navbuttons"); ?>
    </section>

    <?php
    $Heading = get_field("heading");
    $Description = get_field("description");
    $servicesHeading = get_field("services-heading");
    $serviceDiving = get_field("service-diving");
    $divingDescription = get_field("diving-description");
    $fishfarmHeading = get_field("fishfarm-heading");
    $fishfarmDescription = get_field("fishfarm-description");
    $davidImg2 = get_field("david-img2");
    ?>

    <section>
      <div class="container-fluid p-0">
        <div class="row">

          <div class="MB_David">
            <div class="col-12 col-md-6">
              <div class="MB_David_text">
                <h1><?php echo esc_html($Heading); ?></h1>
                <p><?php echo esc_html($Description); ?></p>
    
                <h2><?php echo esc_html($servicesHeading); ?></h2>
                <h3><?php echo esc_html($serviceDiving); ?></h3>
                <p><?php echo esc_html($divingDescription); ?></p>
                <h3><?php echo esc_html($fishfarmHeading); ?></h3>
                <p><?php echo esc_html($fishfarmDescription); ?></p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="MB_David_img">
                <img src="<?php echo esc_url($davidImg['url']); ?>" alt="<?php echo esc_attr($davidImg['alt']); ?>" loading="lazy"> 
          
                <img src="<?php echo esc_url($davidImg2['url']); ?>" alt="<?php echo esc_attr($davidImg2['alt']); ?>" loading="lazy"> 
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>



    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>