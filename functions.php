<?php
function load_dashicons_frontend() {
    wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'load_dashicons_frontend');
