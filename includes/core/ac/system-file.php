<?php 
require (WOOF_THEME_PATH . '/includes/core/ab/system-file.php');
if (class_exists('WPBakeryVisualComposerAbstract')) {
	add_action('init', 'requireVcExtend',2);
	}
add_action( 'tgmpa_register', 'woof_register_required_plugins' );
?>