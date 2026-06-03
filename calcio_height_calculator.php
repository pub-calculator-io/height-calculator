<?php
/*
Plugin Name: Height Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/height-calculator/
Description: Predict your child's future adult height with our free Height Calculator. Based on scientific data, it accurately estimates growth and converts height units.
Version: 1.0.0
Author: www.calculator.io / Height Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_height_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Height Calculator by www.calculator.io";

function calcio_height_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Height Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_height_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_height_calculator', 'calcio_height_calculator_shortcode' );