<?php
$output = $el_class = '';
extract(shortcode_atts(array(
	'wr_section_layout' => '',
	'wr_section_id' => '',
	'wr_section_class' => '',
	'wr_section_width' => '',
	'wr_section_height' => '',
	'wr_section_icon' => '',
	'wr_section_layout_grid' => '',
	'wr_background_img' => '',
	'wr_background_color' => '',
	'wr_background_parallax' => '',
	'wr_background_parallaxx' => '',
	'wr_background_fancy' => '',
	'wr_padding_top' => '',
	'wr_padding_bottom' => '',
	'wr_margin_top' => '',
	'wr_margin_bottom' => '',
	'wr_text_align' => '',
	'wr_color_scheme' => '',
	'wr_background_opacity' => '',
	'wr_default_pad' => '',
	'el_class' => '',
	'row_type' => 'row',
	'use_as_box' => '',
	'type' => 'full_width',
	'anchor' => '',
	'in_content_menu'=>'',
	'content_menu_title' => '',
	'content_menu_icon' => '',
	'video' => '',
	'video_overlay' => '',
	'video_overlay_image' => '',
	'video_webm' => '',
	'video_mp4' => '',
	'video_ogv' => '',
	'video_image' => '',
	'background_color' => '',
	'section_height' => '',
    'parallax_speed' => '1',
	'background_image' => '',
	'border_color' => '',
	'padding_top' => '',
	'padding_bottom' => '',
	'side_padding' => '',
	'text_align' => 'left',
	'more_button_label' =>'More Facts',
	'less_button_label'=>'Less Facts',
	'button_position'=>'center',
	'color'=>'',
	'hover_color'=>'',
	'content_background_color' => '',
	'css_animation'=>'',
	'transition_delay'=>'',
	'icon_class_name_row'=>'',

), $atts));

wp_enqueue_style( 'js_composer_front' );
wp_enqueue_script( 'wpb_composer_front_js' );
wp_enqueue_style('js_composer_custom_css');


if($type == "grid"){
	$css_class_type =  " grid_section";
} else {
	$css_class_type =  "";
}

if($type == "grid"){
	$css_class_type_inner =  " section_inner";
} else {
	$css_class_type_inner =  " full_section_inner";
}

$css_class_video =  "";
if($video == "show_video"){
	$css_class_video =  " video_section";
}

$css_class_in_content_menu =  "";
if($in_content_menu == "in_content_menu"){
	$css_class_in_content_menu =  " in_content_menu";
}

$_image ="";
if($background_image != '' || $background_image != ' ') { 
	$_image = wp_get_attachment_image_src( $background_image, 'full');
}

$wr_class_layout_full =  "";
$wr_row_layout_full =  "";
$wr_class_layout_grid =  "";
$wr_row_layout_grid =  "";
if($wr_section_layout == "section_grid"){
	if($wr_section_layout_grid == "section_layout_grid"){
	$wr_class_layout_grid =  "container-fluid";
	} else {
	$wr_class_layout_grid =  "container";	
	}	
	$wr_row_layout_grid =  "row";
}
else {
	$wr_class_layout_full =  "wr-section-full-width";
	$wr_row_layout_full =  "row-off";	
}




$wr_back_image ="";
if($wr_background_img != '' || $wr_background_img != ' ') { 
	$wr_back_image = wp_get_attachment_image_src( $wr_background_img, 'full');
}



$overlay_image ="";
if($video_overlay_image != '' && $video_overlay_image != ' ') { 
	$overlay_image = wp_get_attachment_image_src( $video_overlay_image, 'full');
}

if($css_animation != ""){
	$clsss_css_animation =  "  " . $css_animation;
} else {
	$clsss_css_animation =  "";
}
$delay = "";
if($transition_delay != ""){
	$delay = " style='transition-delay:" . $transition_delay . "ms; animation-delay:" . $transition_delay . "ms; -webkit-animation-delay: " . $transition_delay . "ms'";
}
$anchor_id = "";
if($anchor != ""){
	$anchor_id = ' data-q_id="#'.$anchor.'"';
}

$menu_title = "";
if($content_menu_title != ""){
	$menu_title = ' data-q_title="'.$content_menu_title.'"';
}

$menu_icon = "";
if($content_menu_icon != ""){
	$menu_icon = ' data-q_icon="'.$content_menu_icon.'"';
}

$use_row_as_box_class="";
if($use_as_box == 'use_row_as_box'){
	$use_row_as_box_class = ' use_row_as_box';
}

if($row_type == 'row') {
	$output .= '<div '.$anchor_id.' '.$menu_title.' '.$menu_icon.' class="' . $css_class_type . $css_class_in_content_menu . $css_class_video . $use_row_as_box_class . '"';
	if($background_color != "" || $border_color != "" || $padding_top != "" || $padding_bottom != "" || $text_align != "" || $_image != ""){
			$output .= " style='";
				if($background_color != ""){
					$output .="background-color:".$background_color.";";
				}
				if($_image != ""){
					$output .="background-image:url(".$_image[0].");";
				}
				if($border_color != ""){
					if($use_as_box == 'use_row_as_box') {
						$output .=" border: 1px solid ".$border_color.";";
					}else {
						$output .=" border-bottom: 1px solid ".$border_color.";";
					}
				}
				if($padding_top != ""){
					$output .=" padding-top:".$padding_top."px;";
				}
				if($padding_bottom != ""){
					$output .=" padding-bottom:".$padding_bottom."px;";
				}
				$output .= ' text-align:' . $text_align . ';';
				$output.="'";
		}
	$output.=">";
	if($video == "show_video"){
		$v_image = wp_get_attachment_url($video_image);
		$v_overlay_image = wp_get_attachment_url($video_overlay_image);
		
		$output .= '<div class="mobile-video-image" style="background-image: url('.$v_image.')"></div><div class="video-overlay';
								if($video_overlay == "show_video_overlay"){
									$output .= ' active';
								}
								$output .= '"';
								$output .= ($overlay_image !== '' && $overlay_image !== ' ') ? " style='background-image:url(" . $overlay_image[0] . ");'" : '';
								$output .= '></div><div class="video-wrap">
									
									<video class="video" width="1920" height="800" poster="'.$v_image.'" controls="controls" preload="auto" loop autoplay muted>';
											if(!empty($video_webm)) { $output .= '<source type="video/webm" src="'.$video_webm.'">'; }
											if(!empty($video_mp4)) { $output .= '<source type="video/mp4" src="'.$video_mp4.'">'; }
											if(!empty($video_ogv)) { $output .= '<source type="video/ogg" src="'. $video_ogv.'">'; }
										 $output .='<object width="320" height="240" type="application/x-shockwave-flash" data="'.get_template_directory_uri().'/js/flashmediaelement.swf">
													<param name="movie" value="'.get_template_directory_uri().'/js/flashmediaelement.swf" />
													<param name="flashvars" value="controls=true&file='.$video_mp4.'" />
													<img src="'.$v_image.'" width="1920" height="800" title="No video playback capabilities" alt="Video thumb" />
											</object>
									</video>		
							</div>';
	}
	$output .= '<div class="' . $css_class_type_inner . ' clearfix"';
	if($side_padding != ""){
			$output .= " style='padding: 0% ".$side_padding."%'";
		}
	$output .= '>';
	if($type == "grid"){
		$output .= "<div class='section_inner_margin clearfix'>";
	}
	if($row_type == "row" && $css_animation != ""){
		$output .= '<div class="'. $clsss_css_animation .'"><div'. $delay .'>';
	}
}else if($row_type == 'parallax'){
    $output .='<section '.$anchor_id.' '.$menu_title.' '.$menu_icon.' data-speed="'. $parallax_speed .'" class="parallax_section_holder '.$css_class_in_content_menu.'" style = "';
    $output .= ($section_height !='' || $section_height!=' ') ? ' height:' . $section_height . 'px;' : '';
    $output .= ($background_image !== '' || $background_image !== ' ') ? " background-image:url('" . $_image[0] . "');" : "";
    $output .= '"';
    $output .= '>';
	$output .='<div class="parallax_content ' . $text_align . '">';

}
else if($row_type == 'main-section'){
    $output .='<div';
	if($wr_section_id != ""){
    $output .=' id="'.$wr_section_id.'"';
	}
    $output .=' class="full-width-section '.$wr_class_layout_full.' '.$wr_color_scheme.' '.$wr_section_class.' '.$wr_section_icon.' '.$icon_class_name_row.'" ';
	$output.=">";	
    $output .='<div class="block-wrapper '.$wr_default_pad.' '.$wr_background_parallaxx.'"';	
	if($wr_section_height != "" || $wr_background_color != "" || $wr_background_img != "" || $wr_background_parallax != "" || $wr_padding_top != "" || $wr_padding_bottom != "" || $wr_margin_top != "" || $wr_margin_bottom != ""){
			$output .= " style='";
				if($wr_section_height != ""){
					$output .="height:".$wr_section_height.";";
				}			
				if($wr_background_color != ""){
					$output .="background-color:".$wr_background_color.";";
				}
				if($wr_background_img != ""){
					$output .="background: url(".$wr_back_image[0].");";
				}
				if($wr_background_parallax != ""){
					$output .="background-attachment:".$wr_background_parallax.";";
				}				
				if($wr_padding_top != ""){
					$output .=" padding-top:".$wr_padding_top.";";
				}
				if($wr_padding_bottom != ""){
					$output .=" padding-bottom:".$wr_padding_bottom.";";
				}
				if($wr_margin_top != ""){
					$output .=" margin-top:".$wr_margin_top.";";
				}
				if($wr_margin_bottom != ""){
					$output .=" margin-bottom:".$wr_margin_bottom.";";
				}				
				$output.="'";
		}
	$output.=">";	
		$output .='<div class="section-wrapper '.$wr_class_layout_grid.'">';
		$output.='<div class="sec-bg-fancy '.$wr_background_fancy.'">';
		$output .='<div class="row-layout '.$wr_row_layout_full.' '.$wr_row_layout_grid.'">';
			
}
else if($row_type == 'expandable') {
	$output .= '<div '.$anchor_id.' '.$menu_title.' '.$menu_icon.' class="' . $css_class . $css_class_in_content_menu .'"';
	if($text_align != ""){
			$output .= " style='";
				$output .= ' text-align:' . $text_align . ';';
				$output.="'";
		}
	$output.=">";
	$output .= '<div class="more_facts_holder"';
	if($background_color != ""){
		$output .= " style='";
		if($background_color != ""){
			$output .= "background-color: ".$background_color.";";
		}
		$output .= "'";
	}
	$output .= '>';
	$output .= '<div class="more_facts_button_holder ' . $button_position . '">';
	$output .= '<span class="more_facts_button" data-color="'. $color . '" data-hovercolor="'. $hover_color . '" data-morefacts="'. $more_button_label .'" data-lessfacts="'. $less_button_label . '"';
	if($color != ""){
		$output .= " style='";
		if($color != ""){
			$output .= " color: ".$color.";";
		}
		$output .= "'";
	}
	$output .='><span class="more_facts_button_text">'. $more_button_label .'</span><span class="more_facts_button_arrow"><i class="fa fa-angle-down"></i> </span></span>';
	$output .= '</div>';

	$output .= '<div class="more_facts_outer">';
	$output .= '<div class="more_facts_inner_holder"';
	$output .= '><div class="more_facts_inner">';

} else if($row_type == 'content_menu'){
    $output .= '<nav class="content_menu"';
    if($background_color != ""){
        $output .= " style='background-color:".$background_color.";'";
    }
    $output .= '>';
    $output .= "<div class='nav_select_menu clearfix'><div class='nav_select_button'><i class='fa fa-bars'></i></div></div>";
}
if($row_type != 'content_menu'){
	$output .= wpb_js_remove_wpautop($content);
}
if($row_type == 'row') {
	if($css_animation != "") { 
		$output .= '</div></div>';
	}
		if($type == "grid"){
			$output .= "</div>";
		}
		$output .= '</div>';


	$output .= '</div>'.$this->endBlockComment('row');
}elseif($row_type == 'parallax'){
	$output .= '</div></section>'.$this->endBlockComment('row');
	
}elseif($row_type == 'main-section'){
	$output .= '</div></div></div></div></div>'.$this->endBlockComment('row');
	
}elseif($row_type == 'expandable'){
	$output .= '</div></div></div></div></div>'.$this->endBlockComment('row');
}else if($row_type == 'content_menu'){
	$output .= '</nav>';
}
echo $output;