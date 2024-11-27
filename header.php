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
            'show_flags' => 1,       // Show only flags
            'show_names' => 0,       // Hide language names
            'hide_if_empty' => 1,    // Hide if no translations are available
            'echo' => 0              // Return as string to avoid unexpected behavior
        )); 
    ?>
    </div>

        <?php get_template_part("template-parts/header_section"); ?>
    </header>
