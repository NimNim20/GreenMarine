<div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php
        // Fetch all carousel posts
        $loop = new WP_Query(array(
            "post_type" => "carousel",
            "posts_per_page" => -1
        ));

        $active_class_set = false;
        $counter = 0;
        
        if ($loop->have_posts()):
            while ($loop->have_posts()): $loop->the_post();

                $carouselimage = get_field('carouselimage');
                $alt_text = get_field('alt_text');
                
                if ($carouselimage):
                    // Open new carousel item (slide) if needed
                    if ($counter % 3 == 0): 
                        if ($counter > 0): 
                            echo '</div>'; // Close previous row
                            echo '</div>'; // Close previous carousel-item
                        endif;
                        echo '<div class="carousel-item ' . (!$active_class_set ? 'active' : '') . '">';
                        echo '<div class="row g-2">'; // Start new row with gutter
                    endif;
                    ?>
                    <div class="col-12 col-md-4">
                        <img src="<?php echo esc_url($carouselimage['url']); ?>" 
                             class="d-block w-100" 
                             alt="<?php echo esc_attr($alt_text); ?>">
                    </div>
                    <?php
                    $counter++;
                    $active_class_set = true; 
                endif;

            endwhile;

            // Close remaining open tags
            if ($counter % 3 != 0): 
                echo '</div>'; // Close last row
                echo '</div>'; // Close last carousel-item
            endif;

            wp_reset_postdata();
        endif;
        ?>
    </div>

    <!-- Carousel controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#customCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
