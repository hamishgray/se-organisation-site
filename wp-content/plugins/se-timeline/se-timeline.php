<?php
/**
* Plugin Name: SE Timeline
* Description: A tool to display SE timeline.
* Version: 1.0
* Author: Hamish Gray
* Text Domain: se-timeline
**/



/* =============================================
 #	 Install admin options interface
 # --------------------------------------------- */

// Creates an entry on the admin menu for plugin
add_action('admin_menu', 'se_timeline_plugin_menu');
function se_timeline_plugin_menu() {
	add_options_page('SE Timeline', 'SE Timeline', 'administrator', 'se-timeline-settings', 'se_timeline_display_settings');
}

// Generate options page and functionality
include(plugin_dir_path(__FILE__).'options.php');



/* =============================================
 #	 Functions for shortcode
 # --------------------------------------------- */

// Include shortcode generation functionality
include(plugin_dir_path(__FILE__).'functions.php');
// Register shortcode for content editors
add_shortcode('timeline', 'timeline_display');

