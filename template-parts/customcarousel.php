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
        $slides = [];

        if ($loop->have_posts()):
            while ($loop->have_posts()): $loop->the_post();

                $carouselimage = get_field('carouselimage');
                $alt_text = get_field('alt_text');

                if ($carouselimage):
                    $slides[] = [
                        'url' => esc_url($carouselimage['url']),
                        'alt' => esc_attr($alt_text),
                    ];
                endif;

            endwhile;
            wp_reset_postdata();
        endif;

        // Group images into slides (3 images per slide)
        $chunked_slides = array_chunk($slides, 3);

        foreach ($chunked_slides as $index => $slide_images):
            ?>
            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                <div class="row">
                    <?php foreach ($slide_images as $image): ?>
                        <div class="col-12 col-md-4">
                            <img src="<?php echo $image['url']; ?>" 
                                 class="d-block w-100" 
                                 alt="<?php echo $image['alt']; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php
        endforeach;
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
