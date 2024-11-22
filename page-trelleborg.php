<?php get_header (); ?>




<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

    <section id="navButtons">
    <?php get_template_part("template-parts/navbuttons"); ?>
    </section>

    <?php
    $heroimg = get_field("img_trel");
    $titel = get_field("titel_trel");
    $flavortext = get_field("trelleborgtxt");
    $catalogimg = get_field("catalogimg");
    $catalogimg2 = get_field("catalogimg2");
    $catalogimg3 = get_field("catalogimg3");
    ?>
    <section id="trelleborg-section">
        <!-- Hero Image -->
        <div class="hero">
            <img src="<?php echo esc_url($heroimg['url']); ?>" alt="<?php echo esc_attr($heroimg['alt']); ?>" loading="lazy"> 
        </div>



        <!-- Content -->
        <div class="container-fluid p-0">
            <div class="row">
                <div class="page-content">
                    <div class="col-12 col-md-6">
                        <div class="content-text pontech-text">

                            <h2><?php echo esc_html($titel); ?></h2>
                            <p><?php echo esc_html($flavortext); ?></p>

                            <!-- Trelleborg Button -->
                            <div class="trelleborg-btn-container">
                                <a href="https://trelleborg.com" class="trelleborg-btn">Trelleborg.com</a>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        
                    </div>
                </div>
            </div>
        </div>
  

        <!-- Catalog Images -->
        <div class="catalog-images">
            <img src="<?php echo esc_url($catalogimg['url']); ?>" alt="<?php echo esc_attr($catalogimg['alt']); ?>" loading="lazy"> 
            <img src="<?php echo esc_url($catalogimg2['url']); ?>" alt="<?php echo esc_attr($catalogimg2['alt']); ?>" loading="lazy"> 
            <img src="<?php echo esc_url($catalogimg3['url']); ?>" alt="<?php echo esc_attr($catalogimg3['alt']); ?>" loading="lazy"> 
        </div>
    </section>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>