<?php

if( !function_exists ('woof_enqueue_scripts') ) :
	function woof_enqueue_scripts() {
	$woof_options = get_option('woof');
	$woof_protocol = is_ssl() ? 'https' : 'http';			
	wp_enqueue_script('bootstrap', (WOOF_THEME_URL . '/includes/js/vendor/bootstrap/js/bootstrap.min.js'), array('jquery'), '1.0',true);
	wp_enqueue_script('custom', (WOOF_THEME_URL . '/includes/js/custom.js'), array('jquery'), '1.0',true);
	wp_enqueue_script('plugins', (WOOF_THEME_URL . '/includes/js/plugins.js'), array('jquery'), '1.0',true);
	wp_enqueue_script('greensock', (WOOF_THEME_URL . '/includes/js/vendor/layerslider/js/greensock.js'), array('jquery'), '1.0',true);
	wp_enqueue_script('transitions', (WOOF_THEME_URL . '/includes/js/vendor/layerslider/js/layerslider.transitions.js'), array('jquery'), '1.0',true);
	wp_enqueue_script('kreaturamedia', (WOOF_THEME_URL . '/includes/js/vendor/layerslider/js/layerslider.kreaturamedia.jquery.js'), array('jquery'), '1.0',true);
	wp_enqueue_script('layerslider-load', (WOOF_THEME_URL . '/includes/js/vendor/layerslider/js/layerslider.load.js'), array('jquery'), '1.0',true);
	wp_register_script('map-min', (WOOF_THEME_URL . '/includes/js/map-min.js'), array('jquery'), '1.0',true);  
	wp_register_script('map-script', (WOOF_THEME_URL . '/includes/js/map-script.js'), array('jquery'), '1.0',true);	
	wp_enqueue_script('counter', (WOOF_THEME_URL . '/includes/js/counter.js'), array('jquery'), '1.0',true);
	//wp_enqueue_script('sliding-menu', (WOOF_THEME_URL . '/includes/js/sliding-menu-min.js'), array('jquery'), '1.0',true);
	wp_enqueue_script('prefixfree', (WOOF_THEME_URL . '/includes/js/prefixfree.min.js'), array('jquery'), '1.0',true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
	}
}
	add_action('wp_enqueue_scripts', 'woof_enqueue_scripts');
endif;