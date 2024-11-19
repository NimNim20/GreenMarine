<?php

function gmd_enqueue_styles() {
  wp_enqueue_style("gmd-style", get_template_directory_uri() . "/style.css", array(), "1.0", "all");
}

add_action("wp_enqueue_scripts", "gmd_enqueue_styles");