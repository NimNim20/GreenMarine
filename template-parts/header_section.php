<section id="mobileHero"
    <?php 
    $hero_image = get_field('heroimage');
    if ($hero_image): 
        $hero_image_url = esc_url($hero_image['url']);
        echo 'style="background-image: url(' . $hero_image_url . '); background-size: cover; background-position: center;"'; 
    endif;
    ?>
    >
<div class="navbarBlue">
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