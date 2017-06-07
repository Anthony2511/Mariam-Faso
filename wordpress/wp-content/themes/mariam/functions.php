<?php

// Define shortcut path
$css =  get_template_directory_uri() . '/css/main.css';
$images =  get_template_directory_uri() . '/images/';
$scripts =  get_template_directory_uri() . '/scripts/';


/*
 * Retrieves the absolute URI for given asset in this theme.
 */

function get_images($src = '') {
    return get_template_directory_uri() . '/images/' . trim($src, '/');
}


/*
 * Displays the absolute URI for given asset in this theme.
 */

function theme_asset($src = '') {
    echo get_theme_asset($src);
}

?>
