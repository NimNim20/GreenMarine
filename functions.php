<?php

function gmd_load_resources() {
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), null, true);

    // The following returns by default style.css in the current active theme directory.
    wp_enqueue_style("my-theme-style", get_stylesheet_uri());
    wp_enqueue_style('my-theme-home-style', get_theme_file_uri('style-home.css') );
    wp_enqueue_script("script", get_template_directory_uri() . "/script.js", array(), filemtime(get_template_directory() . "/script.js"), true);

    // Enqueue anime.js
    wp_enqueue_script("anime-js", "https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js", array(), null, true);
}
add_action("wp_enqueue_scripts", "gmd_load_resources");

function gmd_disable_gutenberg() {
  remove_post_type_support("page", "editor");
  remove_post_type_support("post", "editor");
}
add_action("init", "gmd_disable_gutenberg");

function gmd_register_strings() {
  pll_register_string("footer", "Information");
  pll_register_string("footer", "Adresse");
  pll_register_string("footer", "Færøerne");
  pll_register_string("footer", "Kontaktformular");
  pll_register_string("footer", "Kontakt");
  pll_register_string("footer", "Find os på");
  pll_register_string("index", "Kontakt");
  pll_register_string("header-section", "Kontakt");
  pll_register_string("header-section", "Om os");
  pll_register_string("header-section", "Kontakt");
  pll_register_string("header-section", "Om os");
  pll_register_string("header-section", "KONTAKT");
  pll_register_string("page-mb-david", "Kontakt");
}

add_action("init", "gmd_register_strings");