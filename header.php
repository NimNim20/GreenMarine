<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Marine Divers</title>
    <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="lang"> 
            <?php 
                echo pll_the_languages(array(
                'show_flags' => -1,
                'show_names' => -1
            )); 
            ?>
        </div>
        <?php get_template_part("template-parts/header_section"); ?>
    </header>
