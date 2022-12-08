<?php

$args = array(
    	'class'=>'',
);

$html = "";

extract(shortcode_atts($args, $atts));

$html .= '<div class="'.$class.' owl-testimonial owl-carousel owl-theme">';
$html .= do_shortcode($content);
$html .= '</div>';

echo $html;