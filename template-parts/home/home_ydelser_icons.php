<?php
$loop = new WP_Query(array(
    "post_type" => "service",
    'meta_key' => 'priority_order',
    'orderby' => 'meta_value_num',
    'order'   => 'DESC',
    'posts_per_page'    => -1,
));?>

<div class="container">

    <div class="container home_ydelser_icon_wrapper">

    <?php if($loop->have_posts()): ?>
        <?php while($loop->have_posts()): $loop->the_post() ?>

            <?php
            $title = get_the_title();
            $image = get_field("icon");
            $post_id = get_the_ID(); // Get unique ID for each post
            ?>

            <div class="icon-item">
                <a href="#<?php echo $title; ?>" data-title="<?php echo $title; ?>">
                    <img src="<?php echo $image["url"]; ?>" alt="" class="icon-image">
                </a>
                <p class="icon-title"><?php echo $title; ?></p>
            </div>

            


        <?php endwhile; ?>
    <?php endif; ?>
  
    </div>
</div>