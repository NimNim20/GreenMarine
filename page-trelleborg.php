<?php get_header (); ?>




<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

    <section id="navButtons">
    <?php get_template_part("template-parts/navbuttons"); ?>
    </section>

    <?php
    $heroimg = get_field("img_trel");
    $titel = get_field("titel_trel");
    $flavortext = get_field("trelleborgtext");
    $catalogimg = get_field("catalogimg");
    $catalogimg2 = get_field("catalogimg2");
    $catalogimg3 = get_field("catalogimg3");
    ?>
    <section id="trelleborg-section">
    <!-- Hero Image -->
    <div class="hero">
        <img src="<?php echo esc_url($heroimg); ?>" alt="Hero Image">
    </div>

    <!-- Trelleborg Button -->
    <div class="trelleborg-btn-container">
        <a href="https://trelleborg.com" class="trelleborg-btn">trelleborg.com</a>
    </div>

    <!-- Content -->
    <div class="trelleborg-content">
        <h2><?php echo esc_html($titel); ?></h2>
        <p><?php echo esc_html($flavortext); ?></p>
    </div>

    <!-- Catalog Images -->
    <div class="catalog-images">
        <img src="<?php echo esc_url($catalogimg); ?>" alt="Catalog 1">
        <img src="<?php echo esc_url($catalogimg2); ?>" alt="Catalog 2">
        <img src="<?php echo esc_url($catalogimg3); ?>" alt="Catalog 3">
    </div>
    </section>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>