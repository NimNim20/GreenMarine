<?php

function retro_load_resources() {
    // Enqueue Bootstrap CSS and JS
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), null, true);

    // Enqueue theme CSS and JS with cache busting
    wp_enqueue_style("style", get_template_directory_uri() . "/style.css", array(), filemtime(get_template_directory() . "/style.css"));
    wp_enqueue_script("script", get_template_directory_uri() . "/script.js", array(), filemtime(get_template_directory() . "/script.js"), true);

    // Enqueue fonts
    wp_enqueue_style("Playfair-font", "https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap");
    wp_enqueue_style("Montserrat-font", "https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap");

    // Enqueue anime.js
    wp_enqueue_script("anime-js", "https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js", array(), null, true);
}
add_action("wp_enqueue_scripts", "retro_load_resources");
