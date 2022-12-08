<?php
/*** Removing shortcodes ***/
vc_remove_element("vc_widget_sidebar");
vc_remove_element("vc_gallery");
vc_remove_element("vc_wp_search");
vc_remove_element("vc_wp_meta");
vc_remove_element("vc_wp_recentcomments");
vc_remove_element("vc_wp_calendar");
vc_remove_element("vc_wp_pages");
vc_remove_element("vc_wp_tagcloud");
vc_remove_element("vc_wp_custommenu");
vc_remove_element("vc_wp_text");
vc_remove_element("vc_wp_posts");
vc_remove_element("vc_wp_links");
vc_remove_element("vc_wp_categories");
vc_remove_element("vc_wp_archives");
vc_remove_element("vc_wp_rss");
vc_remove_element("vc_teaser_grid");
vc_remove_element("vc_button");
vc_remove_element("vc_button2");
vc_remove_element("vc_cta_button");
vc_remove_element("vc_cta_button2");
vc_remove_element("vc_message");
vc_remove_element("vc_tour");
vc_remove_element("vc_progress_bar");
vc_remove_element("vc_pie");
vc_remove_element("vc_posts_slider");
vc_remove_element("vc_toggle");
vc_remove_element("vc_images_carousel");
vc_remove_element("vc_posts_grid");
vc_remove_element("vc_carousel");

/*** Remove unused parameters ***/
if (function_exists('vc_remove_param')) {
	vc_remove_param('vc_single_image', 'css_animation');
	vc_remove_param('vc_row', 'bg_image');
	vc_remove_param('vc_row', 'bg_color');
	vc_remove_param('vc_row', 'font_color');
	vc_remove_param('vc_row', 'margin_bottom');
	vc_remove_param('vc_row', 'bg_image_repeat');
	vc_remove_param('vc_tabs', 'interval');
	vc_remove_param('vc_separator', 'style');
	vc_remove_param('vc_separator', 'color');
	vc_remove_param('vc_separator', 'accent_color');
	vc_remove_param('vc_separator', 'el_width');
	vc_remove_param('vc_text_separator', 'style');
	vc_remove_param('vc_text_separator', 'color');
	vc_remove_param('vc_text_separator', 'accent_color');
	vc_remove_param('vc_text_separator', 'el_width');
}

/*** Row ***/
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => "Row Type",
	"param_name" => "row_type",
	"value" => array(		
        "Row" => "row",	
		"Woof Row" => "main-section",
		
	)
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Type",
	"param_name" => "type",
	"value" => array(
		"Full Width" => "full_width",
		"In Grid" => "grid"		
	),
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Anchor ID",
	"param_name" => "anchor",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

// Woof Row Main Section Start //
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Section Layout",
	"param_name" => "wr_section_layout",
	"value" => array(
		"Full Width" => "section_full_width",
		"In Grid" => "section_grid",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Grid Layout",
	"param_name" => "wr_section_layout_grid",
	"value" => array(
		"Default" => "",
		"Fluid" => "section_layout_grid",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Section ID",
	"param_name" => "wr_section_id",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Section Class",
	"param_name" => "wr_section_class",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Height",
	"param_name" => "wr_section_height",
	"value" => "",
	"description" => esc_attr__("Please insert height in format: 300px", 'woof'),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "Background Color",
	"param_name" => "wr_background_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Background Color Scheme",
	"param_name" => "wr_color_scheme",
	"value" => array(
		"Disable" => "",
		"Scheme 1" => "bg-light-custom",
		"Scheme 2" => "bg-primary",
		"Scheme 3" => "bg-light",
		
		"Scheme 4" => "cel-ideas",
		"Scheme 5" => "cel-ideas-2",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => "Background Image",
	"value" => "",
	"param_name" => "wr_background_img",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Section Parallax",
	"param_name" => "wr_background_parallax",
	"value" => array(
		"Disable" => "inherit",
		"Enable" => "fixed",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Background Parallax Effect",
	"param_name" => "wr_background_parallaxx",
	"value" => array(
		"Disable" => "",
		"Enable" => "woof-bg",
		"Fancy" => "testimonial",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Background Icon",
	"param_name" => "wr_section_icon",
	"value" => array(
		"Disable" => "",
		"Custom Icon" => "woof-icon-row",
		"Dog Icon 1" => "dog-bg1",
		"Dog Icon 2" => "dog-bg2",
		"Dog Icon 3" => "dog-bg3",
		"Cat Icon 1" => "cat-bg1",
		"Cat Icon 2" => "cat-bg2",
		"Cat Icon 3" => "cat-bg3",
		"Paws House Icon" => "paws-house-bg1",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Icon Class Name",
	"value" => "",
	"param_name" => "icon_class_name_row",
	"description" => __("<a href='http://webredox.net/demo/wp/woof/icon' target='_blank'>Flaticon</a> Ex: flaticon-dog-20 <br><a href='https://fontawesome.com/v5/cheatsheet' target='_blank'>Fontawesome Icon</a> Ex: fab fa-android <br> fas fa-baby-carriage", 'woof'),
	"dependency" => Array('element' => "wr_section_icon", 'value' => array('woof-icon-row'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Background Fancy Effect",
	"param_name" => "wr_background_fancy",
	"value" => array(
		"Disable" => "",
		"Enable" => "bg-light-custom card",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Section Default Padding",
	"param_name" => "wr_default_pad",
	"value" => array(
		"Disable" => "",
		"Space 120 120" => "section",
		"Space 150 120" => "section2",
	),
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding Top",
	"param_name" => "wr_padding_top",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding Bottom",
	"param_name" => "wr_padding_bottom",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Margin Top",
	"param_name" => "wr_margin_top",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Margin Bottom",
	"param_name" => "wr_margin_bottom",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('main-section'))
));
// Woof Row Main Section End //
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Row in content menu",
	"value" => array(
		"No" => "",
		"Yes" => "in_content_menu"
	),
	"param_name" => "in_content_menu",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Content menu title",
	"value" => "",
	"param_name" => "content_menu_title",
	"description" => "",
	"dependency" => Array('element' => "in_content_menu", 'value' => array('in_content_menu'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Content menu icon",
	"param_name" => "content_menu_icon",
	"value" => '',
	"description" => "",
	"dependency" => Array('element' => "in_content_menu", 'value' => array('in_content_menu'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Text Align",
	"param_name" => "text_align",
	"value" => array(
		"Left" => "left",
		"Center" => "center",
		"Right" => "right"
	),
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Video background",
	"value" => array(
		"No" => "",
		"Yes" => "show_video"
	),
	"param_name" => "video",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Video overlay",
	"value" => array(
		"No" => "",
		"Yes" => "show_video_overlay"
	),
	"param_name" => "video_overlay",
	"description" => "",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => "Video overlay image (pattern)",
	"value" => "",
	"param_name" => "video_overlay_image",
	"description" => "",
	"dependency" => Array('element' => "video_overlay", 'value' => array('show_video_overlay'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Video background (webm) file url",
	"value" => "",
	"param_name" => "video_webm",
	"description" => "",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Video background (mp4) file url",
	"value" => "",
	"param_name" => "video_mp4",
	"description" => "",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Video background (ogv) file url",
	"value" => "",
	"param_name" => "video_ogv",
	"description" => "",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => "Video preview image",
	"value" => "",
	"param_name" => "video_image",
	"description" => "",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));
vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => "Background image",
	"value" => "",
	"param_name" => "background_image",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax', 'row'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Section height",
	"param_name" => "section_height",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));
vc_add_param("vc_row", array(
    "type" => "textfield",
    "class" => "",
    "heading" => "Parallax speed",
    "param_name" => "parallax_speed",
    "value" => "",
    "dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "Background color",
	"param_name" => "background_color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable','content_menu'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "Border bottom color",
	"param_name" => "border_color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding",
	"value" => "",
	"param_name" => "side_padding",
	"description" => "Padding (left/right in % - full width only)",
	"dependency" => Array('element' => "type", 'value' => array('full_width'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding Top",
	"value" => "",
	"param_name" => "padding_top",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding Bottom",
	"value" => "",
	"param_name" => "padding_bottom",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "Label Color",
	"param_name" => "color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "Label Hover Color",
	"param_name" => "hover_color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "More Label",
	"param_name" => "more_button_label",
	"value" =>  "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Less Label",
	"param_name" => "less_button_label",
	"value" =>  "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Label Position",
	"param_name" => "button_position",
	"value" => array(
		"" => "",
		"Left" => "left",
		"Right" => "right",
		"Center" => "center"
	),
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));
vc_add_param("vc_row",  array(
  "type" => "dropdown",
  "heading" => "CSS Animation",
  "param_name" => "css_animation",
  "admin_label" => true,
  "value" => '',
  "description" => "",
  "dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));
vc_add_param("vc_row",  array(
  "type" => "textfield",
  "heading" => "Transition delay (ms)",
  "param_name" => "transition_delay",
  "admin_label" => true,
  "value" => "",
  "description" => "",
  "dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));


/*** Row Inner ***/

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => "Row Type",
	"param_name" => "row_type",
	"value" => array(
		"Row" => "row",
	)
	
));
vc_add_param("vc_row_inner", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => "Use as box",
	"value" => array("Use row as box" => "use_row_as_box" ),
	"param_name" => "use_as_box",
	"description" => '',
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Type",
	"param_name" => "type",
	"value" => array(
		"Full Width" => "full_width",
		"In Grid" => "grid"
	),
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Anchor ID",
	"param_name" => "anchor",
	"value" => ""
));
vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Text Align",
	"param_name" => "text_align",
	"value" => array(
		"Left" => "left",
		"Center" => "center",
		"Right" => "right"
	)
	
));
vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "Background color",
	"param_name" => "background_color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row_inner", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => "Background image",
	"value" => "",
	"param_name" => "background_image",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));

vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => "Border color",
	"param_name" => "border_color",
	"value" => "",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding",
	"value" => "",
	"param_name" => "padding",
	"description" => "Padding (left/right in % - full width only)",
	"dependency" => Array('element' => "type", 'value' => array('full_width'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding Top",
	"value" => "",
	"param_name" => "padding_top",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));
vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Padding Bottom",
	"value" => "",
	"param_name" => "padding_bottom",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));


/***************** Woof Shortcodes *********************/

// Title Block
vc_map( array(
		"name" => "Woof Title",
		"base" => "wr_vc_section_title",
		"category" => 'by Woof',
		"icon" => "woof-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Style Type",
				"param_name" => "featyretype",
				"value" => array(
					"Style 1" => "st1",
					"Style 2" => "st2",
					
				),
				"description" => ""
			),			
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
			),				
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Content Text",
				"param_name" => "content",
				"value" => "I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo."
			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Float",
				"param_name" => "float",
				"value" => array(
					"Default" => "None",
					"Left" => "float-left",
					"Right" => "float-right",
					"Center" => "float-center",
				)
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Default Icon",
				"param_name" => "df_icon",
				"value" => array(
					"Enable" => "",
					"Disable" => "display-icon",
				)
			),			
			array(
				"type" => "colorpicker",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Color",
				"param_name" => "color2",
				"value" => ""
			),
			array(
				"type" => "colorpicker",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Bold Color",
				"param_name" => "color",
				"value" => ""
			),				
				array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Text Transform",
				"param_name" => "text_transform",
				"value" => array(
				    "None" => "none",
					"Uppercase" => "uppercase",
					"Lowercase" => "lowercase",
					"Capitalize" => "capitalize",
				),
				"description" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Font Size",
				"param_name" => "font_size",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Font Weight",
				"param_name" => "font_weight",
				"value" => array(
				    "" => "",
					"Default" => "normal",
					"Lighter" => "lighter",
					"Thin 100" => "100",
					"Extra-Light 200" => "200",
					"Light 300" => "300",
					"Regular 400" => "400",
					"Medium 500" => "500",
					"Semi-Bold 600" => "600",
					"Bold 700" => "700",
					"Extra-Bold 800" => "800",
					"Ultra-Bold 900" => "900",
				)

			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Font Line Height",
				"param_name" => "line_height",
				"value" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Text Align",
				"param_name" => "text_align",
				"value" => array(
				    "" => "",
					"Left" => "left",
					"Right" => "right",
					"Center" => "center",
					"Justify" => "justify",
					
				),
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'woof')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'woof')
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin2",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'woof')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding2",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'woof')
			),				
			
		)
) );
// Text Block
vc_map( array(
		"name" => "Woof Text",
		"base" => "wr_vc_section_text",
		"category" => 'by Woof',
		"icon" => "woof-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),		
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Text",
				"param_name" => "title",
				"value" => "",
				"admin_label" => true,
			),					
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Content Text",
				"param_name" => "content",
				"value" => "I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo."
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Name",
				"param_name" => "button_name",
				"value" => "",
				"description" => "Ex: contact us",
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button URL",
				"param_name" => "button_link_url",
				"value" => "",
			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Link Target",
				"param_name" => "button_link_target",
				"value" => array(
				    "" => "",
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "List Icon",
				"param_name" => "df_icon",
				"value" => array(
					"Disable" => "",
					"Enable" => "custom",
					"Enable Padding 0" => "custom pl-0",
				)
			),			
			array(
				"type" => "colorpicker",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Color",
				"param_name" => "color",
				"value" => ""
			),				
				array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Text Transform",
				"param_name" => "text_transform",
				"value" => array(
				    "None" => "none",
					"Uppercase" => "uppercase",
					"Lowercase" => "lowercase",
					"Capitalize" => "capitalize",
				),
				"description" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Font Size",
				"param_name" => "font_size",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Font Weight",
				"param_name" => "font_weight",
				"value" => array(
				    "" => "",
					"Default" => "normal",
					"Lighter" => "lighter",
					"Thin 100" => "100",
					"Extra-Light 200" => "200",
					"Light 300" => "300",
					"Regular 400" => "400",
					"Medium 500" => "500",
					"Semi-Bold 600" => "600",
					"Bold 700" => "700",
					"Extra-Bold 800" => "800",
					"Ultra-Bold 900" => "900",
				)

			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Font Line Height",
				"param_name" => "line_height",
				"value" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Text Align",
				"param_name" => "text_align",
				"value" => array(
				    "" => "",
					"Left" => "left",
					"Right" => "right",
					"Center" => "center",
					"Justify" => "justify",
					
				),
				"description" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'woof')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'woof')
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin2",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'woof')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding2",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'woof')
			),				
			
		)
) );
// Image Block
vc_map( array(
		"name" => "Woof Image",
		"base" => "wr_vc_section_image",
		"category" => 'by Woof',
		"icon" => "woof-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Style Type",
				"param_name" => "featyretype",
				"value" => array(
					"Style 1" => "st1",
					"Style 2" => "st2",
					
				),
				"description" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Border Type",
				"param_name" => "bordersty",
				"value" => array(
					"Default" => "none",
					"Style 1" => "border-irregular1 border-double",
					"Style 2" => "border-irregular1",
					"Style 3" => "border-irregular2",
					
				),
				"description" => ""
			),			
			array(
				"type" => "attach_image",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Upload Image",
				"param_name" => "img_url",
				"value" => "",
				"admin_label" => true,
			),		
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Custom URL",
				"param_name" => "link_url",
				"value" => "",
			),			
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Width",
				"param_name" => "width",
				"value" => ""
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Height",
				"param_name" => "height",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Float",
				"param_name" => "float",
				"value" => array(
					"None" => "none",
					"Left" => "left",
					"Right" => "right",
				)

			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Position",
				"param_name" => "position",
				"value" => array(
					"Default" => "inherit",
					"Absolute" => "absolute",
					"Relative" => "relative",
					"Static" => "static",
					
				),
				"description" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Top",
				"param_name" => "top",
				"value" => ""
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Bottom",
				"param_name" => "Bottom",
				"value" => ""
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Left",
				"param_name" => "left",
				"value" => ""
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Right",
				"param_name" => "right",
				"value" => ""
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Z-index",
				"param_name" => "zindex",
				"value" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animate Style",
				"param_name" => "dataaos",
				"value" => array(
					"Default" => "none",
					"ZoomIn" => "zoom-in",
					"FadeDown" => "fade-down",
					
				),
				"description" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Animate Duration",
				"param_name" => "duration",
				"value" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'woof')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'woof')
			),

		)
) );
// Triangle Block
vc_map( array(
		"name" => "Woof Section Triangle",
		"base" => "wr_vc_triangle",
		"category" => 'by Woof',
		"icon" => "woof-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),					
			
		)
) );
// Video Block
vc_map( array(
		"name" => "Woof Video",
		"base" => "wr_vc_section_video",
		"category" => 'by Woof',
		"icon" => "woof-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),		
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Video URL",
				"param_name" => "link_url",
				"value" => "",
				"description" => __("Please insert YouTube/Vimeo embed video url here. Ex: https://www.youtube.com/embed/oVCtgAzQ99A", 'woof'),
				"admin_label" => true,
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Margin",
				"param_name" => "margin2",
				"value" => "",
				"description" => __("Please insert margin in format: 0px 0px 0px 0px", 'woof')
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Padding",
				"param_name" => "padding2",
				"value" => "",
				"description" => __("Please insert padding in format: 0px 0px 0px 0px", 'woof')
			),				
			
		)
) );
// Slider Block
vc_map( array(
		"name" => "Woof Slider",
		"base" => "wr_vc_slider",
		"category" => 'by Woof',
		"icon" => "woof-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Number Of Posts To Show",
				"param_name" => "showpost",
				"value" => "-1",
				"description" => esc_attr__("Please insert number of videos show in format: 4", 'woof'),
				"admin_label" => true,
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Category Name",
				"param_name" => "categoryname",
				"value" => "",
				"description" => __("(Optional) Insert category name in format: Graphic", 'woof'),
				"admin_label" => true,
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Post Offset",
				"param_name" => "postoffset",
				"value" => "",
				"description" => esc_attr__("Use this field if you need", 'woof'),
				"admin_label" => true,
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Slider Control",
				"param_name" => "featyretype",
				"value" => array(
					"Enable" => "",
					"Disable" => "st2",																	
				),
				"description" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Click To Next",
				"param_name" => "typeview",
				"value" => array(
					"Enable" => "",
					"Disable" => "st2",																	
				),
				"description" => ""
			),				
          
		)
) );

// Portfolio Block
vc_map( array(
		"name" => "Woof Portfolio/Gallery Filter",
		"base" => "wr_vc_portfolio",
		"category" => 'by Woof',
		"icon" => "woof-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),				
            array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => esc_attr__('Filter Option', 'woof'),
				"param_name" => "featyretype",
				"value" => array(
					"Enable" => "st2",
					"Disable" => "st1",
				),
				"description" => "",
			),
			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Category Name",
				"param_name" => "categoryname",
				"value" => "",
				"description" => "Use this field if you need.",
				"dependency" => Array('element' => "featyretype", 'value' => array('st1')),
				"admin_label" => true,
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Number of posts to show",
				"param_name" => "postcount",
				"value" => "-1",
				"description" => __("Please insert number of member show in format: 8", 'woof'),
				"admin_label" => true,
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => esc_attr__('Post Offset', 'woof'),
				"param_name" => "postoffset",
				"value" => "",
				"description" => esc_attr__('Use this field if you need.', 'woof'),
				"admin_label" => true,
			),
            
		)
) );
// Portfolio Block
vc_map( array(
		"name" => "Woof Portfolio/Gallery Slider",
		"base" => "wr_vc_portfolio_slider",
		"category" => 'by Woof',
		"icon" => "woof-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Category Name",
				"param_name" => "categoryname",
				"value" => "",
				"description" => "Use this field if you need. Ex: Design",
				"admin_label" => true,
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Number of posts to show",
				"param_name" => "postcount",
				"value" => "-1",
				"description" => __("Please insert number of member show in format: 8", 'woof'),
				"admin_label" => true,
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => esc_attr__('Post Offset', 'woof'),
				"param_name" => "postoffset",
				"value" => "",
				"description" => esc_attr__('Use this field if you need.', 'woof'),
				"admin_label" => true,
			),
            
		)
) );
// Services Block
vc_map( array(
		"name" => "Woof Services",
		"base" => "wr_vc_services",
		"category" => 'by Woof',
		"icon" => "woof-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),		
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Style Type",
				"param_name" => "featyretype",
				"value" => array(
					"Style 1" => "st1",
					"Style 2" => "st2",
				),
				"description" => ""
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Category Name",
				"param_name" => "categoryname",
				"value" => "",
				"description" => __("(Optional) Insert category name in format: Graphic", 'woof'),
				"admin_label" => true,
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Number of posts to show",
				"param_name" => "showpost",
				"value" => "-1",
				"description" => __("Please insert number of member show in format: 8", 'woof'),
				"admin_label" => true,
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => esc_attr__('Post Offset', 'woof'),
				"param_name" => "postoffset",
				"value" => "",
				"description" => esc_attr__('Use this field if you need.', 'woof'),
				"admin_label" => true,
			),			
	            
		)
) );
// Adoption Block
vc_map( array(
		"name" => "Woof Adoption",
		"base" => "wr_vc_adoption",
		"category" => 'by Woof',
		"icon" => "woof-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Category Name",
				"param_name" => "categoryname",
				"value" => "",
				"description" => __("(Optional) Insert category name in format: Graphic", 'woof'),
				"admin_label" => true,
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Number of posts to show",
				"param_name" => "showpost",
				"value" => "-1",
				"description" => __("Please insert number of member show in format: 8", 'woof'),
				"admin_label" => true,
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => esc_attr__('Post Offset', 'woof'),
				"param_name" => "postoffset",
				"value" => "",
				"description" => esc_attr__('Use this field if you need.', 'woof'),
				"admin_label" => true,
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Name",
				"param_name" => "button_name",
				"value" => "",
				"description" => "Ex: See more pets",
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button URL",
				"param_name" => "button_link_url",
				"value" => "",
			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Button Link Target",
				"param_name" => "button_link_target",
				"value" => array(
				    "" => "",
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),				
	            
		)
) );

// Counter Block
vc_map( array(
		"name" => "Woof Counter",
		"base" => "wr_vc_counter",
		"category" => 'by Woof',
		"icon" => "woof-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),						
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Data Title",
				"param_name" => "counter_name1",
				"value" => "",
				"description" => __("Please insert counter name in format: Finished projects", 'woof'),
				"admin_label" => true,
			),
			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Data Number",
				"param_name" => "counter_num1",
				"value" => "",
				"description" => __("Please insert counter number in format: 5120", 'woof'),
				"admin_label" => true,
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Icon Name",
				"param_name" => "icon_name",
				"value" => "",
				"description" => __("<a href='http://webredox.net/demo/wp/woof/icon' target='_blank'>Flaticon</a> Ex: flaticon-dog-20 <br><a href='https://fontawesome.com/v5/cheatsheet' target='_blank'>Fontawesome Icon</a> Ex: fab fa-android <br> fas fa-baby-carriage", 'woof'),
				"admin_label" => true,
			),
            
		)
) );

// Testimonials Block

class WPBakeryShortCode_WR_VC_Testimonials  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Woof Testimonials", "Woof",
        "base" => "wr_vc_testimonials",
        "as_parent" => array('only' => 'wr_vc_testimonial'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'by Woof',
		"icon" => "woof-icon",
        "show_settings_on_create" => true,
        "params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),						
            
        ),
        "js_view" => 'VcColumnView'
) );
class WPBakeryShortCode_WR_VC_Testimonial extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Woof Testimonials Quotes", "Woof",
        "base" => "wr_vc_testimonial",
        "content_element" => true,
		"icon" => "woof-icon",
        "as_child" => array('only' => 'wr_vc_testimonials'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => esc_attr__("Please insert client name here. Ex: John Romer", 'woof'),
				"admin_label" => true,				
			),						
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Designation",
				"param_name" => "company",
				"value" => "",
				"description" => esc_attr__("Please insert designation here. Ex: Google / Manager", 'woof'),
				"admin_label" => true,
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Content",
				"param_name" => "content",
				"value" => "I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo."
			),	
			array(
				"type" => "attach_image",
				"holder" => "hidden",
				"class" => "",
				"heading" => " Image",
				"param_name" => "image",
				"value" => "",
				"description" => esc_attr__("Upload Image", 'woof')
			),				
        )
) );

// Team Member Block
vc_map( array(
		"name" => "Woof Team Member",
		"base" => "wr_vc_team",
		"category" => 'by Woof',
		"icon" => "woof-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Style Type",
				"param_name" => "featyretype",
				"value" => array(
					"Style 1" => "st1",
					"Style 2" => "st2",
					"Style 3" => "st3",
				),
				"description" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Category Name",
				"param_name" => "categoryname",
				"value" => "",
				"description" => esc_attr__("Insert category name in format: Developer (Optional)", 'woof'),
				"admin_label" => true,
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Number of posts to show",
				"param_name" => "showpost",
				"value" => "-1",
				"description" => esc_attr__("Please insert number of team member to show in format: 4", 'woof'),
				"admin_label" => true,
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => esc_attr__('Post Offset', 'woof'),
				"param_name" => "postoffset",
				"value" => "",
				"description" => esc_attr__('Use this field if you need.', 'woof'),
				"admin_label" => true,
			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Social Icon",
				"param_name" => "styletype",
				"value" => array(
					"Enable" => "",
					"Disable" => "st1",
				)
			),	
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Socail Link Target",
				"param_name" => "link_target",
				"value" => array(
				    "" => "",
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => ""
			),				
			
		)
) );
// Socail Block
vc_map( array(
		"name" => "Woof Socail",
		"base" => "wr_vc_social",
		"category" => 'by Woof',
		"icon" => "woof-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),		
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",				
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Icon Name",
				"param_name" => "icon_name",
				"value" => "",
				"description" => __("<a href='http://webredox.net/demo/wp/woof/icon' target='_blank'>Flaticon</a> Ex: flaticon-dog-20. <br><a href='https://fontawesome.com/v5/cheatsheet' target='_blank'>Fontawesome Icon</a> Ex: fab fa-android <br> fas fa-baby-carriage", 'woof'),
				"admin_label" => true,
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Facebook URL",
				"param_name" => "sc_facebook",
				"value" => "",
				"admin_label" => true,
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Twitter URL",
				"param_name" => "sc_twitter",
				"value" => "",
				"admin_label" => true,
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Instagram URL",
				"param_name" => "sc_instagram",
				"value" => "",
				"admin_label" => true,
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Google+ URL",
				"param_name" => "sc_google",
				"value" => "",
				"admin_label" => true,
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Pinterest URL",
				"param_name" => "sc_pinterest",
				"value" => "",
				"admin_label" => true,
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Linkedin URL",
				"param_name" => "sc_linkedin",
				"value" => "",
				"admin_label" => true,
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "YouTube URL",
				"param_name" => "sc_youtube",
				"value" => "",
				"admin_label" => true,
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Vimeo URL",
				"param_name" => "sc_vimeo",
				"value" => "",
				"admin_label" => true,
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Skype URL",
				"param_name" => "sc_skype",
				"value" => "",
				"admin_label" => true,
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Behance URL",
				"param_name" => "sc_behance",
				"value" => "",
				"admin_label" => true,
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Soundcloud URL",
				"param_name" => "sc_soundcloud",
				"value" => "",
				"admin_label" => true,
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Dribbble URL",
				"param_name" => "sc_dribbble",
				"value" => "",
				"admin_label" => true,
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "E-mail Address",
				"param_name" => "sc_email",
				"value" => "",
				"admin_label" => true,
			),				
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
				    "" => "",
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => ""
			),		

		
		)
) );
// Newsletter Block
vc_map( array(
		"name" => "Woof  MailChimp Newsletter",
		"base" => "wr_vc_newsletter",
		"category" => 'by Woof',
		"icon" => "woof-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => esc_attr__("Please insert title text here. Ex: Subscribe to our newsletter", 'woof'),
				"admin_label" => true,
			),	
			array(
				"type" => "textarea_html",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Content Text",
				"param_name" => "content",
				"value" => "",
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => " MailChimp ID",
				"param_name" => "contactfromid",
				"value" => "",
				"description" => __("Please insert MailChimp form id number in format: 27", 'woof'),
				"admin_label" => true,
			),				
  
		)
) );
// Contact Info Block
vc_map( array(
		"name" => "Woof Contact Info",
		"base" => "wr_vc_contact_info",
		"category" => 'by Woof',
		"icon" => "woof-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),		
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Style Type",
				"param_name" => "featyretype",
				"value" => array(
					"Style 1" => "st1",
					"Style 2" => "st2",
				),
				"description" => ""
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",	
				"admin_label" => true,				
			),		
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Content",
				"param_name" => "content",
				"value" => "",
			),		
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Icon Name",
				"param_name" => "icon_name",
				"value" => "",
				"description" => __("<a href='http://webredox.net/demo/wp/woof/icon' target='_blank'>Flaticon</a> Ex: flaticon-dog-20. <br><a href='https://fontawesome.com/v5/cheatsheet' target='_blank'>Fontawesome Icon</a> Ex: fab fa-android <br> fas fa-baby-carriage", 'woof'),
				"dependency" => Array('element' => "featyretype", 'value' => array('st1'))
			),			
			array(
				"type" => "textarea",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Contact Address",
				"param_name" => "address",
				"value" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),		
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Contact Phone Number 1",
				"param_name" => "con_phone1",
				"value" => "",	
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Contact Phone Number 2",
				"param_name" => "con_phone2",
				"value" => "",		
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Contact Phone Number 3",
				"param_name" => "con_phone3",
				"value" => "",		
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),
			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Contact Mail Address 1",
				"param_name" => "con_mail1",
				"value" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Contact Mail Address 2",
				"param_name" => "con_mail2",
				"value" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),	
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Contact Mail Address 3",
				"param_name" => "con_mail3",
				"value" => "",
				"dependency" => Array('element' => "featyretype", 'value' => array('st2'))
			),	
			
		)
) );

// Contact Form Block
vc_map( array(
		"name" => "Woof Contact Form",
		"base" => "wr_vc_contact_form",
		"category" => 'by Woof',
		"icon" => "woof-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Extra Class",
				"param_name" => "class",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Style Type",
				"param_name" => "featyretype",
				"value" => array(
					"Style 1" => "st1",
					"Style 2" => "st2",
				),
				"description" => ""
			),				
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => esc_attr__("Please insert title text here. Ex: Get in Touch", 'woof'),
				"admin_label" => true,
			),			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Contact Form ID",
				"param_name" => "contactfromid",
				"value" => "",
				"description" => __("Please insert contact form id number in format: 27", 'woof'),
				"admin_label" => true,
			),				
  
		)
) );
// Google Map Block
vc_map( array(
		"name" => "Woof Google Map",
		"base" => "wr_vc_map",
		"category" => 'by Woof',
		"icon" => "woof-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Latitude, Longitude",
				"param_name" => "latitude",
				"value" => "",
				"description" => "Ex: 48.859003, 2.345275",
				"admin_label" => true,
			),
			
			array(
				"type" => "textfield",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Address",
				"param_name" => "address",
				"value" => "",
				"description" => "Ex: 27th Brooklyn New York, NY 10065",
				"admin_label" => true,
			),
			
			array(
				"type" => "attach_image",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Upload Location Marker",
				"param_name" => "image",
				"description" => "",
				"admin_label" => true,
			),
			array(
				"type" => "dropdown",
				"holder" => "hidden",
				"class" => "",
				"heading" => "Style Type",
				"param_name" => "featyretype",
				"value" => array(
					"Style 1" => "st1",
					"Style 2" => "st2",
				),
				"description" => ""
			),
			
		)
) );


?>