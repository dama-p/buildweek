<?php

function buildweek_register_styles() {
    wp_enqueue_style('buildweek-bootstrap', get_template_directory_uri() . "./style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts','buildweek_register_styles');

?>
