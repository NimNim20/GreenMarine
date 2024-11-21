<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Marine Divers</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<section id="mobileHero" style="background-image: url('<?php echo esc_url(get_hero_image_url()); ?>');">
    <div class="hero-header">
        <div class="navLogos">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/logo1.png" alt="Logo 1" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/logo2.png" alt="Logo 2" class="logo"> -->
        </div>
        <div class="nav">
            <a href="<?php echo site_url('/contact')?>" class="kontaktLink">Kontakt</a>
            <div class="aboutUs">Om os</div>
        </div>
    </div>
    <div class="hero-footer">
        <a href="<?php echo site_url('/contact')?>">
            <button class="kontaktButton">KONTAKT</button>
        </a>
    </div>
</section>
</body>
</html>
