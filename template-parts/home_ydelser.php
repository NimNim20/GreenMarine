<?php
$loop = new WP_Query(array(
    "post_type" => "services-in-depth-in",
    'posts_per_page' => -1
));?>

<div class="home_ydelser_boby">
    <div class="container-fluid">

        <?php if($loop->have_posts()): ?>
            <?php while($loop->have_posts()): $loop->the_post() ?>

                <?php
                $title = get_the_title();
                $text = get_field("text");
                $image = get_field("image");
                $post_id = get_the_ID(); // Unique ID for each post
                ?>

                <div class="row home_ydelser" data-title="<?php echo $title; ?>"> <!-- c -->
                    <div class="col-6 img_box_home_ydelser"> <!--  -->
                        <img src="<?php echo $image["url"]; ?>" alt="" class="home_ydelser-image" loading="lazy">
                    </div>
                    <div class="col-6 home_ydelser_title_text">
                        <h2 class="home_ydelser-title"><?php echo $title; ?></h2>
                        <p class="home_ydelser_text"><?php echo $text; ?></p>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</div>