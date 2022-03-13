<?php

/*
Plugin Name: Modern Admin Dashboard
Plugin URI: https://apptm.de/modern-admin-dashboard
Description: WordPress Admin Dashboard by DevStyles
Author: DevStyles
Version: 1.0
Author URI: https://apptm.de
*/

function modern_admin_dashboard_style() {
    wp_enqueue_style('modern_admin_dashboard', plugins_url('wp-admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'modern_admin_dashboard_style');
add_action('login_enqueue_scripts', 'modern_admin_dashboard_style');



function my_login_css() {
    echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('login.css  ', __FILE__). '">';
  }
  
  add_action('login_head', 'my_login_css');

?>