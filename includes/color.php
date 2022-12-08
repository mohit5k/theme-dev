<?php
add_action('wp_head', 'woof_custom_colors', 160);
function woof_custom_colors() { 
$woof_options = get_option('woof');
?>
<style type="text/css" class="woof-custom-dynamic-css">
 
    <?php if(!empty($woof_options['custom-css'])):?> 

	<?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('custom-css',''));?>		

	<?php endif;?>	 

 
<?php if(!empty($woof_options['opt-theme-style-red'])):?> 
.badge-default,.bg-secondary, .btn-primary, .back-to-top i:hover, .alert-secondary, .badge-secondary, .nav-pills .nav-link.active,.nav-pills .nav-link:hover,.nav-pills .nav-link:focus, .nav-pills .show>.nav-link,.list-group-item.active,figure.team-style2 figcaption .icons i, .page-link:hover, .page-link.active, .team-style1 .social, .nav-item:focus, .navbar .nav-item:hover, .navbar .nav-item .active,.nav-link:focus,.owl-prev i:hover, .owl-next i:hover,.navbar .nav-item.active, input[type=button], input[type=reset], input[type=submit], .tagcloud a, .page-links span, .page-links span:hover, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button {
    background:<?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-red',''));?>!important;
}
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle{
	background-color:<?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-red',''));?>;
}
.section-heading:before,.navbar-brand i,.serviceBox:hover .service-icon i,a,figure.team-style3 h6, figure.team-style2 .name h6, ul.custom li:before,.contact-icon .top-icon, .testimonial .content:before,.owl-theme .owl-nav [class*='owl-']:hover,.spinner .bounce1:after, .custom ul li:before, .comment_author {
    color:<?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-red',''));?>;
}
.woocommerce.widget_shopping_cart .cart_list li a.remove, .woocommerce.widget_shopping_cart .cart_list li a.remove:hover {
	color:<?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-red',''));?>!important;
}
.btn-primary,.list-group-item.active,.alert-secondary,.jumbotron{
    border-color:<?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-red',''));?>;
}
@media (max-width: 1064px) {
	.nav-button span {
		background: <?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-red',''));?>;
	}
}
<?php endif;?>


<?php if(!empty($woof_options['opt-theme-style-yellow'])):?> 
 .btn-primary:hover, .btn-primary:focus, .btn-primary:not(:disabled):not(.disabled):active, .dropdown-menu, .back-to-top i, .accordion-cards .card-header, .page-item.active .page-link,.progress-bar,.btn-secondary,.service-hover-box .service-hover-caption, figure.team-style2 .name , .team-style1:hover .social li a, .team-style1:hover .team-image,.page-link, .nav-pills .nav-link,.navbar, input[type=button]:hover, input[type=reset]:hover, input[type=submit]:hover, .page .vc_tta-panel-heading, .page-links a span, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover {
    background-color:<?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-yellow',''));?>!important ;
}
.woocommerce span.onsale, .woocommerce .widget_price_filter .ui-slider .ui-slider-range {
    background-color: <?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-yellow',''));?>;
}
.blog-card .post-info:before,.color1,a:hover,a:focus, .dog-elements:after, .cat-elements:after, .bg-secondary a,.header-text:before,ul.social-media li:hover i, .counter .counter-icon, .footer-widget-block ul a:hover, .tagcloud a:hover, .woof-sidebar-widget.widget_categories ul li a:hover, .woof-sidebar-widget.widget_recent_comments ul li a:hover, .woof-sidebar-widget.widget_rss ul li a:hover, .sticky a .card-title  {
    color:<?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-yellow',''));?> ;
}
 .dropdown-menu:before {
    border-bottom-color: <?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-yellow',''));?>;
}
.blog-card .card-img-top:hover,.btn-primary:hover, .btn-primary:focus, .btn-primary:not(:disabled):not(.disabled):active, .page-item.active .page-link,.btn-secondary,.form-control:focus, input[type="text"]:focus, input[type="password"]:focus,  input[type="email"]:focus, textarea:focus, input[type="tel"]:focus {
    border-color:<?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-yellow',''));?>;
}
.woocommerce-message{
    border-top-color: <?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-yellow',''));?>;
}
.woocommerce-message::before{ 
    color: <?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-yellow',''));?>;
}
@media (max-width: 1064px) {
	nav.nav-inner {
		background-color: <?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-yellow',''));?>!important;
	}
}
<?php endif;?>


<?php if(!empty($woof_options['opt-theme-style-brown'])):?>
.dropdown-item:focus, .dropdown-item:hover,.dropdown-item.active,.accordion-cards .card-header:hover,.accordion-cards .card-header:focus, .bg-primary,.badge-primary,footer, .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span, .alert-primary,.btn-secondary:hover,.list-group-item-action:focus, .list-group-item-action:hover, .counter,.team-style1:hover .social li a:hover,.owl-prev,.owl-next, .woof-sidebar-widget ul li a:hover, .woof-sidebar-widget.widget_archive ul li:hover, .page .vc_tta-panel-heading:hover {
    background-color:<?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-brown',''));?>!important ;
}
blockquote:before,.team-style1:hover .social li a, figure.team-style3 i,.top-bar .contact-details i, .top-bar .social-list li a, ul.social-media i,.top-bar , .serviceBox .service-icon i, h3#reply-title, .woocommerce ul.products li.product .woocommerce-loop-category__title, .woocommerce ul.products li.product .woocommerce-loop-product__title, .woocommerce ul.products li.product h3, .woocommerce div.product .product_title {
    color:<?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-brown',''));?> ;
}
.form-control,.alert-primary,.list-group-item-action:focus, .list-group-item-action:hover, .sec-form.contact-form input[type="text"], .sec-form.contact-form input[type="password"], .sec-form.contact-form input[type="email"], input[type="text"], input[type="password"], input[type="email"], textarea#comment, .sec-form.contact-form textarea, textarea {
    border-color:<?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-brown',''));?> ;
}
input[type="tel"], .select2-container .select2-selection--single {	
    border: 2px solid <?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-brown',''));?>;
}
#bigTriangleColor path {fill:<?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-brown',''));?>;}
<?php endif;?>


<?php if(!empty($woof_options['opt-theme-style-lt-yellow'])):?>
.nav-tabs .nav-link.active, .tab-content, .bg-light-custom, .team-style1,.accordion-cards .card-body,.testimonial .content,.navbar-toggler:hover, .comment-respond {
    background:<?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-lt-yellow',''));?>;
}
.wpb-js-composer .vc_tta-color-grey.vc_tta-style-classic .vc_tta-panel .vc_tta-panel-body  {
    background:<?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-lt-yellow',''));?>!important;
}
 .page-object1 i,.page-object2 i {
    color:<?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-lt-yellow',''));?>;
}
 .contact-icon,.border-double {
    border-color:<?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-lt-yellow',''));?>;
}
 .testimonial .content:after{
     border-top-color: <?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('opt-theme-style-lt-yellow',''));?>;
}
<?php endif;?>
 </style>
 
 
 <?php 
	}
?>
