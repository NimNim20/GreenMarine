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


<section id="contentDavid">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="page-content">
            <div class="col-12 col-md-6">
              <div class="content-text">
                <article id="headerContent">
                <header>
                <h1><?php echo esc_html($Heading); ?></h1>
                </header>
                <p><?php echo esc_html($Description); ?></p>
                </article>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <figure class="content_img">
                <img class="img-fluid" src="<?php echo esc_url($davidImg['url']); ?>" alt="<?php echo esc_attr($davidImg['alt']); ?>" loading="lazy"> 
              </figure>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="page-content2">
            <div class="col-12 col-md-6">
              <div class="content-text text2">
              <article id="servicesDescription">
                <header> 
                <h2><?php echo esc_html($servicesHeading); ?></h2>
                </header>
                <header>
                <h3><?php echo esc_html($serviceDiving); ?></h3>
                </header>
                <p><?php echo esc_html($divingDescription); ?></p>
                <header>
                <h3><?php echo esc_html($fishfarmHeading); ?></h3>
                </header>
                <p><?php echo esc_html($fishfarmDescription); ?></p>
                <h3><?php echo esc_html($contactText); ?></h3>
              </article>

                <div class="trelleborg-btn-container">
                  <a href="<?php echo site_url('/contact')?>" class="trelleborg-btn"><?php pll_e("Kontakt") ?></a>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <figure class="content_img img2">
                <img class="img-fluid" src="<?php echo esc_url($davidImg2['url']); ?>" alt="<?php echo esc_attr($davidImg2['alt']); ?>" loading="lazy"> 
              </figure>
            </div>
          </div>
        </div>
      </div>
</section>



    <section id="scrolltotopbutton">
    <?php get_template_part ("template-parts/scrolltotop"); ?>
    </section>