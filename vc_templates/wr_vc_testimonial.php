<?php

$args = array(
		'class'=>'',
		'title'=>'',		
		'company'=>'',
		'image'=>'',
);

extract(shortcode_atts($args, $atts));
    if(is_numeric($image)) {
            $woof_image = wp_get_attachment_url( $image );
        }else {
            $woof_image = $image;
        }
$html = '';

    $html .= '<div class="'.$class.' testimonial">';
	    if($content != '') {	
        $html .= '<div class="content">';
			$html .='<p class="description">'.$content.'</p>';
		$html .='</div>';
		} if(is_numeric($image)) {
		$html .= '<div class="testimonial-pic">';			
			$html .= '<img src="'.$woof_image.'" class="img-fluid" alt="">';		
		$html .= '</div>';
		} if($title != '') {		
		$html .='<div class="testimonial-review">';
			$html .='<h5 class="testimonial-title">'.$title.'</h5>';
			$html .='<span>'.$company.'</span>';								
		$html .='</div>';  
		}		
	$html .= '</div>';
	
echo $html;