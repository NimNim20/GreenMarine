<section class="content">
<div class="button-grid">
    <?php
        $current_language = pll_current_language();  // Get current language code
        if ($current_language == 'da') {
            $green_marine_url = site_url('/');
            $mb_david_url = site_url('/mb-david/');
            $pontech_url = site_url('/pontech/');
            $trelleborg_url = site_url('/trelleborg/');
        } else if ($current_language == 'en') {
            $green_marine_url = site_url('/en/green-marine-divers-english/');
            $mb_david_url = site_url('/en/mb-david-english/');
            $pontech_url = site_url('/en/pontech-2/');
            $trelleborg_url = site_url('/en/trelleborg-2/');
        }
    ?>
    <a href="<?php echo $green_marine_url; ?>" class="btn green-marine">Green Marine</a>
    <a href="<?php echo $mb_david_url; ?>" class="btn mb-david">MB David</a>
    <a href="<?php echo $pontech_url; ?>" class="btn pontech">Pontech</a>
    <a href="<?php echo $trelleborg_url; ?>" class="btn trelleborg">Trelleborg</a>
</div>

</section>