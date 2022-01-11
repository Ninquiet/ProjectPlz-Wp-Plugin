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

define("PLZ_PATH",plugin_dir_path(__File__));

//API REST
require_once PLZ_PATH."includes/API/api-registro.php";
require_once PLZ_PATH."includes/API/api-login.php";

//Shortcodes
require_once PLZ_PATH."public/shortcode/form-registro.php";
require_once PLZ_PATH."public/shortcode/form-login.php";


//  rol personalizado
function plz_plugin_activar(){
    add_role('cliente',"cliente","read_post");
}

function plz_plugin_desactivar(){
    remove_role('cliente');
}

register_activation_hook(__FILE__,"plz_plugin_activar");
register_deactivation_hook(__FILE__,"plz_plugin_desactivar");