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
    $davidImg = get_field("david-img");
    $contactText = get_field("contact-text");
    ?>

    <section id="mbdavid">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="page-content">
            <div class="col-12 col-md-6">
              <div class="content-text">
                <h1><?php echo esc_html($Heading); ?></h1>
                <p><?php echo esc_html($Description); ?></p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="content_img">
                <img src="<?php echo esc_url($davidImg['url']); ?>" alt="<?php echo esc_attr($davidImg['alt']); ?>" loading="lazy"> 
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="page-content2">
            <div class="col-12 col-md-6">
              <div class="content-text text2">
                <h2><?php echo esc_html($servicesHeading); ?></h2>
                <h3><?php echo esc_html($serviceDiving); ?></h3>
                <p><?php echo esc_html($divingDescription); ?></p>
                <h3><?php echo esc_html($fishfarmHeading); ?></h3>
                <p><?php echo esc_html($fishfarmDescription); ?></p>
                <h3><?php echo esc_html($contactText); ?></h3>

                <div class="trelleborg-btn-container">
                  <a href="<?php echo site_url('/contact')?>" class="trelleborg-btn"><?php pll_e("Kontakt") ?></a>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="content_img img2">
                <img src="<?php echo esc_url($davidImg2['url']); ?>" alt="<?php echo esc_attr($davidImg2['alt']); ?>" loading="lazy"> 
              </div>
            </div>
          </div>
        </div>
      </div>

      <section id="customcarousel">
      <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active col-12 col-md-4">
            <img src="<?php echo esc_url($davidImg2['url']); ?>" class="d-block" alt="...">
            <img src="<?php echo esc_url($davidImg2['url']); ?>" class="d-block" alt="...">
            <img src="<?php echo esc_url($davidImg2['url']); ?>" class="d-block" alt="...">
        </div>
        <div class="carousel-item">
        </div>
        <div class="carousel-item">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#customCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

      </section>
    </section>

    <section id="scrolltotopbutton">
    <?php get_template_part ("template-parts/scrolltotop"); ?>
    </section>



    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>