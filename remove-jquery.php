<?php 

/**
 * Plugin Name: Remove jQuery
 * Plugin URI: https://marc.tv
 * Description: Completely remove jQuery from your theme.
 * Version: 0.9
 * Author: Marc Tönsing
 * Author URI: https://marc.tv
 * License: GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

/* Removes jQuery From WordPress. Exept backend and when the admin toolbar is visisble */

function init_without_jquery() {
    if (!is_admin() AND !is_admin_bar_showing()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', false);
    }
}

add_action('init', 'init_without_jquery');