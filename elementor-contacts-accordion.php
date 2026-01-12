<?php
//Plugin info
/*
Plugin Name: Elementor Contacts Accordion
Description: Adds a repeater-based contacts accordion section to Elementor.
Version: 1.0
Author: Valdas Kriūnas
Licence: GPLv3
*/

if (!defined('ABSPATH')) { exit; }

function register_contacts_accordion($widgets_manager) {
  require_once (plugin_dir_path(__FILE__) . 'widgets/widget.php');
  $widgets_manager -> register(new \Elementor_Contacts_Accordion());
}
add_action('elementor/widgets/register', 'register_contacts_accordion');

function load_contacts_accordion_assets() {
  wp_enqueue_style('style', plugin_dir_url(__FILE__) . 'assets/css/style.css');
  wp_enqueue_script('script', plugin_dir_url(__FILE__) . 'assets/js/script.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'load_contacts_accordion_assets');
?>