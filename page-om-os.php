<?php get_header (); ?>

<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <section id="navButtons">
      <?php get_template_part("template-parts/navbuttons"); ?>
    </section>

    <?php
    $Heading = get_field("heading");
    $Description = get_field("description");
    $aboutImg = get_field ("about_image");
    ?>

    <section>
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
                <img src="<?php echo esc_url($aboutImg['url']); ?>" alt="<?php echo esc_attr($aboutImg['alt']); ?>" loading="lazy"> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>