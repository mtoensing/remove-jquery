<?php 

/**
 * Plugin Name: Remove jQuery from Theme
 * Plugin URI: https://github.com/mtoensing/remove-jquery
 * Description: Completely remove jQuery from your theme.
 * Version: 1.0
 * Author: Marc Tönsing
 * Author URI: https://marc.tv
 * License: GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

/* Removes jQuery From WordPress. Exept backend and when the admin toolbar is visisble */

function init_without_jquery() {
    if (!is_admin() AND !is_admin_bar_showing() AND !$GLOBALS['pagenow'] === 'wp-login.php' ) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', false);
    }
}

add_action('init', 'init_without_jquery');