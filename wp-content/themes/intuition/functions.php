<?php if(!isset($content_width)) $content_width = 640;
define('CPOTHEME_ID', 'intuition');
define('CPOTHEME_NAME', 'Intuition');
define('CPOTHEME_VERSION', '1.3.7');
//Other constants
define('CPOTHEME_LOGO_WIDTH', '150');
define('CPOTHEME_THUMBNAIL_HEIGHT', '350');
define('CPOTHEME_USE_PAGES', true);
define('CPOTHEME_USE_SLIDES', true);
define('CPOTHEME_USE_TAGLINE', true);
define('CPOTHEME_USE_FEATURES', true);
define('CPOTHEME_USE_PORTFOLIO', true);

//Load Core; check existing core or load development core
$core_path = get_template_directory().'/core/';
if(defined('CPOTHEME_CORE')) $core_path = CPOTHEME_CORELITE;
require_once $core_path.'init.php';

$include_path = get_template_directory().'/includes/';

//Main components
require_once($include_path.'setup.php');

//adding extra cdd
add_action('wp_enqueue_scripts', 'add_extrahead_function');


function add_extrahead_function() {
    wp_enqueue_script('fontawsome', 'https://use.fontawesome.com/482a225de1.js');
	wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
	wp_enqueue_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
	wp_enqueue_style('custom_css', '/wp-content/themes/intuition/custom/custom.css');
}

function sc_contact_form() {
	
	require 'custom/contact_form.php';
}
add_shortcode('contact_form', 'sc_contact_form');

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
  	 unset( $tabs['reviews'] ); 
    return $tabs;

}