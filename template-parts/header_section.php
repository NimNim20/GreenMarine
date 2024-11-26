<section id="mobileHero"
    <?php 
    $hero_image = get_field('heroimage');
    if (is_array($hero_image) && isset($hero_image['url'])) { 
        $hero_image_url = esc_url($hero_image['url']);
        echo 'style="background-image: url(' . $hero_image_url . '); background-size: cover; background-position: center;"'; 
    } else {
        echo 'style="background-color: #f4f4f4;"';
    }
    ?>
>
<div class="navbarBlue">
    <!-- Logo Section (top left) -->
    <div class="navLogos">
    <?php 
    $logo1 = get_field('logo1');
    $logo2 = get_field('logo2');

    if ($logo1): ?>
       <a href="<?php echo site_url('/')?>"><img src="<?php echo esc_url($logo1['url']); ?>" alt="<?php echo esc_attr($logo1['alt']); ?>" class="logo"></a>
    <?php endif; ?>

    <?php if ($logo2): ?>
        <img src="<?php echo esc_url($logo2['url']); ?>" alt="<?php echo esc_attr($logo2['alt']); ?>" class="logo">
    <?php endif; ?>
</div>

    <!-- Links Section (top right) -->
    <div class="nav">
        <div class="lang"> 
            <?php pll_the_languages() ?>
        </div>
    <!-- Desktop Navigation -->
    <div class="navLinks">
        <a href="<?php echo site_url('/contact'); ?>">Kontakt</a>
        <a href="<?php echo site_url('/om-os'); ?>">Om os</a>
    </div>

    <!-- Burger Menu for Mobile -->
    <div class="burgerMenu">
        <button class="burgerButton">☰</button>
        <div class="dropdown">
            <a href="<?php echo site_url('/contact'); ?>">Kontakt</a>
            <a href="<?php echo site_url('/om-os'); ?>">Om os</a>
        </div>
    </div>
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