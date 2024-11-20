<?php
$loop = new WP_Query(array(
    "post_type" => "Services_in_depth_index",
    'posts_per_page'    => -1,
));?>

<div class="">


    <?php if($loop->have_posts()): ?>
        <?php while($loop->have_posts()): $loop->the_post() ?>

            <?php
            $title = get_the_title();
            $text = get_field("text");
            $image = get_field("image");
            ?>


            <div class="icon-item">
                <img src="<?php echo $image["url"] ?>" alt="" class="home_ydelser-image">
                <h2 class="icon-title"><?php echo $title; ?></h2>
                <p class="icon-title"><?php echo $title; ?></p>
             </div>
           
          

        <?php endwhile; ?>
    <?php endif; ?>
  
</div>