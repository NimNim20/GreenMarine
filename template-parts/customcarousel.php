<div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php
        // Fetch all carousel posts
        $loop = new WP_Query(array(
            "post_type" => "carousel",
            "posts_per_page" => -1
        ));

        $active_class_set = false;
        $counter = 0; // Counter to group the images into sets of 3
        
        if ($loop->have_posts()):
            while ($loop->have_posts()): $loop->the_post();

                $carouselimage = get_field('carouselimage');
                $alt_text = get_field('alt_text');
                
                if ($carouselimage):
                    if ($counter % 3 == 0): 
                        if ($counter > 0): 
                            echo '</div>'; 
                        endif;
                        // Start new slide
                        echo '<div class="carousel-item ' . (!$active_class_set ? 'active' : '') . '">';
                        echo '<div class="row">'; 
                    endif;
                    ?>
            
                    <div class="col-12 col-md-4">
                        <img src="<?php echo esc_url($carouselimage['url']); ?>" 
                             class="d-block w-100" 
                             alt="<?php echo esc_attr($alt_text); ?>">
                    </div>
                    <?php
                    $counter++;
                    if ($counter % 3 == 0 || $counter == $loop->post_count): 
                        // If 3 images have been added or it's the last image, close the row and the slide
                        echo '</div>'; 
                        echo '</div>';
                    endif;
                    $active_class_set = true; 
                endif;

            endwhile;
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
