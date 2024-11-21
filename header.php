<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Marine Divers</title>
    <section id="mobileHero"
    <?php wp_head() ?>
    <?php 
    $hero_image = get_field('heroimage');
    if ($hero_image): 
        $hero_image_url = esc_url($hero_image['url']);
        echo 'style="background-image: url(' . $hero_image_url . '); background-size: cover; background-position: center;"'; 
    endif;
    ?>
>
    <!-- Logo Section (top left) -->
    <div class="navLogos">
        <img alt="Logo 1" class="logo">
        <img alt="Logo 2" class="logo">
    </div>

    <!-- Links Section (top right) -->
    <div class="navLinks">
        <a href="<?php echo site_url('/contact'); ?>">Kontakt</a>
        <a href="<?php echo site_url('/om-os'); ?>">Om os</a>
    </div>

    <!-- Hero Image Section (Main Content) -->
    <div class="hero-header"></div>

    <!-- Hero Footer with 'KONTAKT' button -->
    <div class="hero-footer">
        <a href="<?php echo site_url('/contact'); ?>">
            <button class="kontaktButton">KONTAKT</button>
        </a>
    </div>
</section>
</head>
<body>


