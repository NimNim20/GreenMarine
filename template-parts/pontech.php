<?php
    $Heading = get_field("heading");
    $Description = get_field("description");
    $pontechImg = get_field("pontech_img");
    ?>

    <section id="pontechContent">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="page-content">
            <div class="col-12 col-md-6">
              <div class="content-text pontech-text">
                <article id="pontechArticle">
                <h1><?php echo esc_html($Heading); ?></h1>
                <p><?php echo esc_html($Description); ?></p>
                </article>
                <div class="trelleborg-btn-container">
                <a href="https://pontechmarina.com/se/" class="trelleborg-btn" target="_blank"><?php pll_e("Pontech's side") ?></a>
                </div>
                
              </div>
            </div>

            <div class="col-12 col-md-6">
              <figure class="content_img">
                <img class="img-fluid" src="<?php echo esc_url($pontechImg['url']); ?>" alt="<?php echo esc_attr($pontechImg['alt']); ?>" loading="lazy"> 
              </figure>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="scrolltotopbutton">
    <?php get_template_part ("template-parts/scrolltotop"); ?>
    </section>