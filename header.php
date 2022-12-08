<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>> 
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php $woof_options = get_option('woof'); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php 
	wp_head(); 
	?>
</head>
<body id="top" <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <?php if (woof_AfterSetupTheme::return_thme_option('preloader')!='no'){ ?>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner">
           <div class="bounce1 <?php if(!empty($woof_options['preloader_class'])):?><?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('preloader_class',''));?><?php else : ?>flaticon-dog-20<?php endif;?>"></div>
        </div>
        <!-- /spinner -->
    </div>
    <!-- /Preloader ends -->	
    <?php };?>	

    <?php get_template_part('template-parts/header/header-section'); ?> 