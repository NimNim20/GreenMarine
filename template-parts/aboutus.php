<?php get_header (); ?>

    <?php
    $Heading = get_field("heading");
    $Description = get_field("description");
    $Description2 = get_field("description2");
    $Description3 = get_field("description3");
    $Description4 = get_field("description4");
    $Description5 = get_field("description5");
    $Description6 = get_field("description6");
    $aboutImg = get_field ("about_image");
    $imgText1 = get_field ("img-text1");
    $aboutImg2 = get_field ("about_image2");
    $imgText2 = get_field ("img-text2");
    ?>

    <section>
      <div class="container-fluid p-0">
        <div class="row">
          <div class="about-content">
            <div class="col-12 col-md-6">
              <div class="about-text">
                <article id="aboutArticle">
                <header>
                <h1 class="about-heading"><?php echo esc_html($Heading); ?></h1>
                </header>
                <p><?php echo esc_html($Description); ?></p>
                <p><?php echo esc_html($Description2); ?></p>
                <p><?php echo esc_html($Description3); ?></p>
                <p><?php echo esc_html($Description4); ?></p>
                <p><?php echo esc_html($Description5); ?></p>
                <p><?php echo esc_html($Description6); ?></p>
                </article>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="content_img about-images">
                <div class= "about-img1">
                  <figure>
                    <img src="<?php echo esc_url($aboutImg['url']); ?>" alt="<?php echo esc_attr($aboutImg['alt']); ?>" loading="lazy">
                  </figure>
                      <p class="img-text"><?php echo esc_html($imgText1); ?></p>
                </div>
               
                
                <img src="<?php echo esc_url($aboutImg2['url']); ?>" alt="<?php echo esc_attr($aboutImg2['alt']); ?>" loading="lazy"> 
                <p class="img-text"><?php echo esc_html($imgText2); ?></p> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="scrolltotopbutton">
    <?php get_template_part ("template-parts/scrolltotop"); ?>
    </section>


<?php get_footer(); ?>