<?php
$loop = new WP_Query(array(
    "post_type" => "service",
    "posts_per_page" => 20
));?>

<div class="container">

<div class="titel_på_green_marine">
    <h1>Green Marine</h1>
</div>


<div class="row">


    <?php if($loop->have_posts()): ?>
        <?php while($loop->have_posts()): $loop->the_post() ?>

            <?php
            $title = get_the_title();
            $image = get_field("icon");
            ?>

           
            <div class="container">
                <div class="row">

                    <img src="<?php echo $image["url"] ?>">
                    <?php echo $title; ?>
        
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
  
    </div>
</div>