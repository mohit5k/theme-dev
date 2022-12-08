<?php
function woof_import_files() {
	return array(
		array(
			'import_file_name'             => 'Woof Demo',
			'categories'                   => array( 'Woof' ),
			'local_import_file'            => trailingslashit(WOOF_THEME_PATH ) . 'includes/woof-demo/demo-content.xml',
			'local_import_widget_file'     => trailingslashit(WOOF_THEME_PATH ) . 'includes/woof-demo/widgets.wie',
			//'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'ocdi/customizer.dat',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit(WOOF_THEME_PATH ) . 'includes/woof-demo/redux.json',
					'option_name' => 'woof',
				),
			),
			'import_preview_image_url'     => 'https://webredox.net/screen/woof.jpg',
			'import_notice'                => __( 'Be patient, it can take a couple of minutes.', 'woof' ),
			'preview_url'                  => 'https://webredox.net/demo/wp/woof/',
		),
		
	);
}
add_filter( 'pt-ocdi/import_files', 'woof_import_files' );

function woof_after_import_setup() {
	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
			'top-menu' => $main_menu->term_id,
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Sample Page' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'woof_after_import_setup' );

function ocdi_plugin_page_setup( $default_settings ) {
	$default_settings['parent_slug'] = 'themes.php';
	$default_settings['page_title']  = esc_html__( 'Woof Demo Importer' , 'woof' );
	$default_settings['menu_title']  = esc_html__( 'Woof Demo Importer' , 'woof' );
	$default_settings['capability']  = 'import';
	$default_settings['menu_slug']   = 'woof-one-click-demo-import';

	return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'ocdi_plugin_page_setup' );