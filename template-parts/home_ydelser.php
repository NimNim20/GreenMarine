<?php
$loop = new WP_Query(array(
    "post_type" => "Services_in_depth_in",
    'posts_per_page'    => -1
));?>

<div class="home_ydelser_boby">


    <?php if($loop->have_posts()): ?>
        <?php while($loop->have_posts()): $loop->the_post() ?>

            <?php
            $title = get_the_title();
            $text = get_field("text");
            $image = get_field("image");
            ?>


            <div class="home_ydelser">
                <img src="<?php echo $image["url"] ?>" alt="" class="home_ydelser-image">
                <h2 class="home_ydelser-title"><?php echo $title; ?></h2>
                <p class="home_ydelser_text"><?php echo $text; ?></p>
            </div>
           
          

        <?php endwhile; ?>
    <?php endif; ?>
  
</div>