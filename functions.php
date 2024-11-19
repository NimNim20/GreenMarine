<?php

function gmd_load_resources() {
  wp_enqueue_style("style", get_template_directory_uri() . "/style.css");
}

add_action("wp_enqueue_scripts", "gmd_load_resources");