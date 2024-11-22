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
          <div class="MB_David">
            <div class="col-12 col-md-6">
              <div class="MB_David_text">
                <h1><?php echo esc_html($Heading); ?></h1>
                <p><?php echo esc_html($Description); ?></p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="MB_David_img">
                <img src="<?php echo esc_url($aboutImg['url']); ?>" alt="<?php echo esc_attr($aboutImg['alt']); ?>" loading="lazy"> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section to Showcase PDFs -->
    <section id="pdfList">
            <div class="container">
                <h2>Available PDFs</h2>
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
                        <li>No PDFs available.</li>
                    <?php endif; ?>
                </ul>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>