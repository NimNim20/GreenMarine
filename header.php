<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <section id="mobileHero"
        <?php 
        // Fetch the hero image URL dynamically using ACF
        $hero_image = get_field('heroimage');
        if ($hero_image): 
            $hero_image_url = esc_url($hero_image['url']);
            echo 'style="background-image: url(' . $hero_image_url . ');"'; 
        endif;
        ?>
    >
        <!-- Logo Section (top left) -->
        <div class="navLogos">
            <img alt="Logo 1" class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo1.png"> <!-- Add logo image source -->
            <img alt="Logo 2" class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo2.png"> <!-- Add logo image source -->
        </div>

        <!-- Hero Image Section (Main Content) -->
        <div class="hero-header">
            <div class="heroImages">
                <?php 
                // Fetch the hero image for the current page using ACF
                if ($hero_image): ?>
                    <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr(get_the_title() . ' Hero Image'); ?>">
                <?php else: ?>
                    <img src="" alt="No Hero Image Available"> <!-- Optional fallback -->
                <?php endif; ?>
            </div>
        </div>

        <!-- Hero Footer with 'KONTAKT' button -->
        <div class="hero-footer">
            <a href="<?php echo site_url('/contact'); ?>">
                <button class="kontaktButton">KONTAKT</button>
            </a>
        </div>
    </section>

    <?php wp_footer(); ?>
</body>
</html>
