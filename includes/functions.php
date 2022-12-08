<?php
function woof_removeDemoModeLink() { 
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}

class Woof_Walker extends Walker_Nav_Menu {
    var $number = 1;
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $icon_class = $classes[0];
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
		
        $output .= $indent . '<li' . $id . $value . $class_names .'>';
        // add span with number here
        if ( $depth == 0 ) { // remove if statement if depth check is not required
            $output .= sprintf( '', $this->number++ );
        }
        $atts = array();        
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';
        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        $item_output = $args->before;
		     
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
		$item_output .= '<i class="fas fa-sort-down"></i>';
        $item_output .= $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once (get_template_directory().'/framework/class-tgm-plugin-activation.php');

/**
 * Register the required plugins for this theme.
 */
function woof_register_required_plugins() {
$woof_plugins = array(
// This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => esc_attr__( 'Redux Framework', 'woof' ),
            'slug'      => 'redux-framework',
            'required'  => true,
			'force_activation'   => false,
            'force_deactivation' => false,
        ),
		
		array(
            'name'      => esc_attr__( 'WPBakery Page Builder', 'woof' ),
            'slug'      => 'js_composer',
			'source'    => 'http://webredox.net/plugins/js_composer.zip',
            'required'  => true,
        ),	
		
		array(
            'name'      => esc_attr__( 'Revolution Slider', 'woof' ),
            'slug'      => 'revslider',
            'source'    => 'http://webredox.net/plugins/revslider.zip',
            'required'  => true,  
        ),
		
		array(
            'name'      => esc_attr__( 'Woof Plugin', 'woof' ),
            'slug'      => 'woof-plugin',
			'source'    => 'http://webredox.net/demo/wp/plugins/woof-plugin.zip',
			'required'  => true,
        ),
		
		array(
            'name'      => esc_attr__( 'Contact Form 7', 'woof' ),
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),
		
		array(
            'name'      => esc_attr__( 'Meta Box', 'woof' ),
            'slug'      => 'meta-box',
            'required'  => true,
        ),			
		array(
            'name'      => esc_attr__( 'MailChimp for WordPress', 'woof' ),
            'slug'      => 'mailchimp-for-wp',
            'required'  => false,
        ),
		
		array(
            'name'      => esc_html__( 'Woof! Demo Importer', 'woof' ),
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ),	
		
	
    );

    /**
     * Array of configuration settings. Amend each line as needed.
     */
    $woof_config = array(
        'default_path' => '',                      
        'menu'         => 'tgmpa-install-plugins',
        'has_notices'  => true,
        'dismissable'  => true,
        'dismiss_msg'  => '',                      
        'is_automatic' => false,                   
        'message'      => '',                      
        
    );
tgmpa( $woof_plugins, $woof_config );

}

if ( is_admin() ) {

	function woof_remove_revolution_slider_meta_boxes() {
		remove_meta_box( 'mymetabox_revslider_0', 'page', 'normal' );
		remove_meta_box( 'mymetabox_revslider_0', 'post', 'normal' );
		remove_meta_box( 'mymetabox_revslider_0', 'gallery', 'normal' );
		remove_meta_box( 'slugdiv', 'gallery', 'normal' );
	}

	add_action( 'do_meta_boxes', 'woof_remove_revolution_slider_meta_boxes' );
	
}
