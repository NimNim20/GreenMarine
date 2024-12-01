<?php
    $heroimg = get_field("img_trel");
    $titel = get_field("titel_trel");
    $flavortext = get_field("trelleborgtxt");
    $catalogimg = get_field("catalogimg");
    $catalogimg2 = get_field("catalogimg2");
    $catalogimg3 = get_field("catalogimg3");
    ?>
    <!-- <section id="trelleborg-section"> -->

    <div class="container-fluid p-0">
    <div class="row">
        <!-- Left Side: Text Content -->
        <div class="col-12 col-md-6 d-flex align-items-center">
            <div class="content-text trelleborg-content">
                <article id="trelleborgArticle">
                <h1><?php echo esc_html($titel); ?></h2>
                <p><?php echo esc_html($flavortext); ?></p>
                </article>

                <!-- Trelleborg Button -->
                <div class="trelleborg-btn-container">
                    <a href="https://trelleborg.com" class="trelleborg-btn">Trelleborg.com</a>
                </div>
            </div>
        </div>

        <!-- Right Side: PDF Showcase -->
        <div class="col-12 col-md-6 d-flex align-items-center">
        <section id="pdfList">
                <div class="pdf-container">
                    <h2><?php pll_e("Tilgængelige PDF'er") ?></h2>
                    <ul>
                        <?php
                        // Query to get attachments of type PDF
                        $pdf_query = new WP_Query(array(
                            'post_type' => 'attachment',
                            'post_mime_type' => 'application/pdf',
                            'posts_per_page' => -1,
                            'post_status' => 'inherit',
                        ));

                        if ($pdf_query->have_posts()) :
                            while ($pdf_query->have_posts()) : $pdf_query->the_post();
                                $pdf_url = wp_get_attachment_url(get_the_ID());
                                $pdf_title = get_the_title();
                        ?>
                            <li>
                                <a href="<?php echo esc_url($pdf_url); ?>" target="_blank" rel="noopener noreferrer">
                                    <?php echo esc_html($pdf_title); ?>
                                </a>
                            </li>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                        ?>
                            <li><?php pll_e ("Ingen tilgængelige PDF'er.") ?></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>



        <!-- Catalog Images -->
        <div class="catalog-images">
            <section id="catalogImages">
                <figure id="catalogs">
            <img src="<?php echo esc_url($catalogimg['url']); ?>" alt="<?php echo esc_attr($catalogimg['alt']); ?>" loading="lazy"> 
            <img src="<?php echo esc_url($catalogimg2['url']); ?>" alt="<?php echo esc_attr($catalogimg2['alt']); ?>" loading="lazy"> 
            <img src="<?php echo esc_url($catalogimg3['url']); ?>" alt="<?php echo esc_attr($catalogimg3['alt']); ?>" loading="lazy"> 
                </figure>
            </section>
        </div>

    <section id="scrolltotopbutton">
    <?php get_template_part ("template-parts/scrolltotop"); ?>
    </section>