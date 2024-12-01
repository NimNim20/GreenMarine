<nav> 
    <section id="mobileHero" loading="lazy"
        <?php 
        $hero_image = get_field('heroimage');
        if (is_array($hero_image) && isset($hero_image['url'])) { 
            $hero_image_url = esc_url($hero_image['url']);
            echo 'style="background-image: url(' . $hero_image_url . '); background-size: cover; background-position: center;"'; 
            echo ' data-src="' . $hero_image_to_use . '" class="lazy-background"';  // Lazy load the background image
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
        $logo3 = get_field('logo3');

        if ($logo1): ?>
        <a href="<?php echo site_url('/')?>"><img src="<?php echo esc_url($logo1['url']); ?>" alt="<?php echo esc_attr($logo1['alt']); ?>" class="logo"></a>
        <?php endif; ?>

        <?php if ($logo2): ?>
            <img src="<?php echo esc_url($logo2['url']); ?>" alt="<?php echo esc_attr($logo2['alt']); ?>" class="logo">
        <?php endif; ?>
    </div>

        <!-- Links Section (top right) -->
        <div class="nav">
                <div class="phoneNum">
                    <?php if ($logo3): ?>
                    <img src="<?php echo esc_url($logo3['url']); ?>" alt="<?php echo esc_attr($logo3['alt']); ?>" class="phoneIcon">
                    <?php endif; ?>
                    <a href="tel:+298770060">+298 770060</a>
                </div>

                <!-- Desktop Navigation -->
                <div class="navLinks">
                <?php
                    $current_language = pll_current_language();  // Get current language code
                        if ($current_language == 'da') {
                        $contact_url = site_url('/kontakt/');
                        $about_url = site_url('/om-os/');
                        }
                            else if ($current_language == 'en') {
                            $contact_url = site_url('/en/contact/');
                            $about_url = site_url('/en/about-us/');
                        }
                        ?>
                            <a href="<?php echo $contact_url; ?>"><?php pll_e("Kontakt"); ?></a>
                            <a href="<?php echo $about_url; ?>"><?php pll_e("Om os"); ?></a>
                </div>
                    <div class="lang"> 
                    <?php 
                        pll_the_languages(array(
                        'show_flags' => 1,
                        'show_names' => 0
                    )); 
                    ?>
                    </div>


                <!-- Burger Menu for Mobile -->
            <div class="burgerMenu">
                    <button class="burgerButton">☰</button>
                <div class="dropdown">
                        <a href="<?php echo site_url('/kontakt'); ?>"><?php pll_e("Kontakt") ?></a>
                        <a href="<?php echo site_url('/om-os'); ?>"><?php pll_e("Om os") ?></a>
                </div>
            </div>
    </div>


    </div>
        <!-- Hero Image Section (Main Content) -->
        <div class="hero-header"></div>
    </section>
</nav>  