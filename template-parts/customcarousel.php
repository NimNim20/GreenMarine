<div class="container">
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
              <ol class="carousel-indicators">
                <?php
                $loop = new WP_Query(array(
                  "post_type" => "carousels",
                  "posts_per_page" => -1
                ));
                $index = 0;
                ?>

                <?php if($loop->have_posts()): ?>
                  <?php while($loop->have_posts()): $loop->the_post(); ?>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $index; ?>" class="<?php echo ($index == 0) ? "active" : "" ?>"></li>
                    <?php $index++; ?>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                <?php endif; ?>
              </ol>
              <div class="carousel-inner">
                <!-- Slide -->
                <?php $index = 0; ?>
                <?php if($loop->have_posts()): ?>
                  <?php while($loop->have_posts()): $loop->the_post() ?>
                    <?php
                    $CarouselImage = get_field("carouselimage");
                    ?>
                    <div class="carousel-item <?php echo ($index == 0) ? "active" : "" ?>">
                      <img class="d-block w-100" src="<?php echo esc_url($CarouselImage['url']); ?>" alt="<?php echo esc_attr($CarouselImage['alt']); ?>">
                    </div>
                    <?php $index++; ?>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>

              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
      </div>
  </div>