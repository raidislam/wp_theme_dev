<?php

function wb_scripts()
{
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', '1.0.1', 'all');
}


add_action('wp_enqueue_scripts', 'wb_scripts');
