<?php
$loop = new WP_Query(array(
    "post_type" => "service",
    'meta_key' => 'priority_order',
    'orderby' => 'meta_value',
    'order'   => 'DESC',
    'posts_per_page'    => -1,
));?>

<div class="container">

<div class="titel_på_green_marine">
    <h1>Green Marine</h1>
</div>


<div class="container home_ydelser_icon_wrapper">


    <?php if($loop->have_posts()): ?>
        <?php while($loop->have_posts()): $loop->the_post() ?>

            <?php
            $title = get_the_title();
            $image = get_field("icon");
            ?>


            <div class="icon-item">
                <img src="<?php echo $image["url"] ?>" alt="" class="icon-image">
                <p class="icon-title"><?php echo $title; ?></p>
             </div>
           
          

        <?php endwhile; ?>
    <?php endif; ?>
  
    </div>
</div>