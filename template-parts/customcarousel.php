<?php
// Check if the current post has the Carousel Field repeater.
if (have_rows('carousel_field', get_the_ID())) : ?>
  <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php
      $slide_index = 0; // To track the active slide.
      while (have_rows('carousel_field', get_the_ID())) : the_row();
        $carousel_images = get_sub_field('carouselimage'); // ACF Image Field (should be array).
        $alt_text = get_sub_field('alt_text'); // Alt text for the image.
        ?>
        <div class="carousel-item <?php echo ($slide_index === 0) ? 'active' : ''; ?>">
          <div class="row">
            <?php if ($carousel_images) : ?>
              <?php foreach ($carousel_images as $carousel_image) : ?>
                <div class="col-12 col-md-4">
                  <img src="<?php echo esc_url($carousel_image['url']); ?>" class="d-block w-100" alt="<?php echo esc_attr($alt_text ?: 'Carousel Image'); ?>">
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
        <?php
        $slide_index++;
      endwhile;
      ?>
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#customCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<?php else : ?>
  <p>No carousel items found.</p>
<?php endif; ?>
