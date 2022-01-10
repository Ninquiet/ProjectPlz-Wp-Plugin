<?php

/**
 * Plugin Name:       Front End Pluggin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

//API REST
require_once plugin_dir_path(__File__)."includes/API/api-registro.php";
//Shortcodes
require_once plugin_dir_path(__FILE__)."public/shortcode/form-registro.php";
