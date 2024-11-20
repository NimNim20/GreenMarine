<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Marine Divers</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <section id="mobileHero">
        <div class="hero-header">
            <img alt="Logo 1" class="logo">
            <img alt="Logo 2" class="logo">

            <div class="nav">
                <a href="<?php echo site_url('/contact')?>">
                    <button class="kontaktHeader">Kontakt</button>
                </a>
                <div class="aboutUs">
                    Om os
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
