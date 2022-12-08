<?php
global $woof_options;
$woof_options = get_option('woof');
function woof_style() {
//home
wp_enqueue_style('woof-main', (WOOF_THEME_URL . '/style.css'));
wp_enqueue_style('yourstyle', (WOOF_THEME_URL . '/includes/css/yourstyle.css'));
wp_enqueue_style('woof-map', (WOOF_THEME_URL . '/includes/css/map.css'));
wp_enqueue_style('flaticon', (WOOF_THEME_URL . '/includes/fonts/flaticon/flaticon.css'));
wp_enqueue_style('fontawesome', (WOOF_THEME_URL . '/includes/css/fontawesome.css'));
wp_enqueue_style('bootstrap', (WOOF_THEME_URL . '/includes/js/vendor/bootstrap/css/bootstrap.min.css'));
wp_enqueue_style('woof-style', (WOOF_THEME_URL . '/includes/css/style.css'));
wp_enqueue_style('plugins', (WOOF_THEME_URL . '/includes/css/plugins.css'));
wp_enqueue_style('maincolors', (WOOF_THEME_URL . '/includes/css/styles/maincolors.css'));
wp_enqueue_style('woof-woocommerce', (WOOF_THEME_URL . '/includes/css/woof-woocommerce.css'));
wp_enqueue_style('layerslider', (WOOF_THEME_URL . '/includes/js/vendor/layerslider/css/layerslider.css'));
}
add_action('wp_enqueue_scripts', 'woof_style');
if($woof_options['tobar'] == 'yes') {
function woof_enqueue_header_style() {		
	wp_enqueue_style('topbarr', (WOOF_THEME_URL . '/includes/css/topbar.css'));		
	}		
	add_action('wp_enqueue_scripts', 'woof_enqueue_header_style');	
}
function woof_fonts_url() {
    $woof_font_url = '';
    
    if ( 'off' !== _x( 'on', 'Open+Sans font: on or off', 'woof' ) ) {
        $woof_font_url = add_query_arg( 'family','Open+Sans:400,700%7CQuicksand:400,500,700' , "//fonts.googleapis.com/css" );
    }
    return $woof_font_url;
}

function woof_scripts() {
    wp_enqueue_style( 'woof_fonts', woof_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'woof_scripts' );

function woof_enqueue_custom_admin_style() {
wp_register_style( 'custom_wp_admin_css', (WOOF_THEME_URL . '/includes/css/admin-style.css'), false, '1.0.0' );
wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'woof_enqueue_custom_admin_style' );