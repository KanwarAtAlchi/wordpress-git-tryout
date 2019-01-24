<?php
    // Add scripts
    function yts_add_scripts() {
        //Add Main CSS
        wp_enqueue_style('yts-main-style', plugins_url(). '/youtubesubs/css/style.css');
        //Add Main js
        wp_enqueue_script('yts_main_script', plugins_url(). '/youtubesubs/js/main.js');

        //Add google script
        wp_register_script('google', 'https://apis.google.com/js/platform.js');
        wp_enqueue_script('google');
    }

    add_action('wp_enqueue_scripts','yts_add_scripts');

