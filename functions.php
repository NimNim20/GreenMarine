<?php

funciton gmd_load_resources() {
    wp_enqueue_style('style', get_template_directory_uri() . "style.css");
    wp_enqueue_script('script', get_template_directory_uri() . "script.js");
}
add_action ("wp_enqueue_scripts", "gmd_load_resources");

function gmd_disable_gutenberg() {
  remove_post_type_support('post', 'editor');
  remove_post_type_support('page', 'editor');
}
add_action('init', 'gmd_disable_gutenberg');