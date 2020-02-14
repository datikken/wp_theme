<?php
    define('THEME_URI', get_template_directory_uri() );
    define('THEME_PATH', get_template_directory() );
    
/* include theme files */
include(THEME_PATH . '/inc/theme-file.php');

// add hooks
add_action('wp_enqueue_scripts', 'theme_scripts');