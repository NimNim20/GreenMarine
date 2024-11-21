<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <section id="mobileHero">
    <div class="navLogos">
        <img alt="Logo 1" class="logo">
        <img alt="Logo 2" class="logo">
    </div>
        <div class="hero-header">

            <div class="heroImages">
                <?php 
                // Fetch the hero image for the current page using ACF
                $hero_image = get_field('heroimage'); 
                if ($hero_image): ?>
                    <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr(get_the_title() . ' Hero Image'); ?>">
                <?php else: ?>
                    <img src="" alt="No Hero Image Available"> <!-- Optional fallback -->
                <?php endif; ?>
            </div>
        </div>
        <div class="hero-footer">
            <a href="<?php echo site_url('/contact'); ?>">
                <button class="kontaktButton">KONTAKT</button>
            </a>
        </div>
    </section>
</body>
<html>
