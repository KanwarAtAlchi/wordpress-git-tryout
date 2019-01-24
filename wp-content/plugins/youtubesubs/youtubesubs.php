<?php
/*
Plugin Name: youtubesubs
Plugin URI: https://github.com/kanwarme
Description: Display youtube sub button and count
Version: 0.1.0
Author: Alchi
Author URI: http://health-check-team.example.com
*/

// EXIT if accessed directly

if(!defined('ABSPATH')) {
    exit;
}

//Load scripts
require_once(plugin_dir_path(__FILE__). '/includes/youtubesubs-scripts.php');

//Load Class
require_once(plugin_dir_path(__FILE__). '/includes/youtubesubs-class.php');

function register_youtubesubs(){
    register_widget('Youtube_Subs_Widget');
}

add_action('widgets_init','register_youtubesubs');
