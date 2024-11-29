    <?php
    $Heading = get_field("heading");
    $Description = get_field("description");
    $servicesHeading = get_field("services-heading");
    $serviceDiving = get_field("service-diving");
    $divingDescription = get_field("diving-description");
    $fishfarmHeading = get_field("fishfarm-heading");
    $fishfarmDescription = get_field("fishfarm-description");
    $davidImg2 = get_field("david-img2");
    $davidImg = get_field("david-img");
    $contactText = get_field("contact-text");
    ?>

<section>
  <div class="container-fluid p-0">
    <div class="row">
      <article class="page-content">
        <!-- Text Content Section -->
        <div class="col-12 col-md-6">
          <header class="content-text">
            <h1><?php echo esc_html($Heading); ?></h1>
            <p><?php echo esc_html($Description); ?></p>
          </header>
        </div>

        <!-- Image Section -->
        <div class="col-12 col-md-6">
          <div class="content_img">
            <img class="img-fluid" src="<?php echo esc_url($davidImg['url']); ?>" alt="<?php echo esc_attr($davidImg['alt']); ?>" loading="lazy"> 
          </div>
        </div>
      </article>
    </div>

    <div class="row">
      <article class="page-content2">
        <!-- Services Text Section -->
        <div class="col-12 col-md-6">
          <header class="content-text text2">
            <h2><?php echo esc_html($servicesHeading); ?></h2>

          <section>
            <h3><?php echo esc_html($serviceDiving); ?></h3>
            <p><?php echo esc_html($divingDescription); ?></p>
          </section>
          <section>
            <h3><?php echo esc_html($fishfarmHeading); ?></h3>
            <p><?php echo esc_html($fishfarmDescription); ?></p>
          </section>
          <section>
            <h3><?php echo esc_html($contactText); ?></h3>
            </header>
            <div class="trelleborg-btn-container">
              <a href="<?php echo site_url('/contact')?>" class="trelleborg-btn"><?php pll_e("Kontakt") ?></a>
            </div>
          </section>
        </div>

        <!-- Image Section -->
        <div class="col-12 col-md-6">
          <div class="content_img img2">
            <img class="img-fluid" src="<?php echo esc_url($davidImg2['url']); ?>" alt="<?php echo esc_attr($davidImg2['alt']); ?>" loading="lazy"> 
          </div>
        </div>
      </article>
    </div>
  </div>
</section>


    <section id="scrolltotopbutton">
    <?php get_template_part ("template-parts/scrolltotop"); ?>
    </section>