<?php
/*
Plugin Name: Height Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/height-calculator/
Description: Based on a linear regression study, this free growth calculator estimates a child's growth as an adult in the future. It can also be converted between several height units.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_height_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Height Calculator by Calculator.iO";

function display_ci_height_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/height-calculator/" target="_blank"><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48"></a> Height Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_height_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_height_calculator', 'display_ci_height_calculator' );