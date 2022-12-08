<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>
<!-- Jumbotron -->
<?php $woof_back_images = rwmb_meta( 'rnr_shop_deatils_header_img','type=image&size=' ); ?>
	<?php if ( ! empty( $woof_back_images ) ) { ?>
	<?php foreach ( $woof_back_images as $woof_back_image ){ ?>			
	<div class="jumbotron jumbotron-fluid overlay" style="background-image:url('<?php echo esc_url(($woof_back_image['url']));?>');">
	<?php } ;?>
	<?php } else { ?>
	<div class="jumbotron jumbotron-fluid overlay" >
	<?php } ;?>
    
        <div class="jumbo-heading">
           	
			<div class="section-heading <?php if (( get_post_meta($post->ID,'rnr_woo_icon_class',true))):?><?php echo esc_attr(get_post_meta($post->ID,'rnr_woo_icon_class',true)) ?><?php else:?><?php if(!empty($woof_options['shop_icon_class'])):?><?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('shop_icon_class',''));?><?php else:?>flaticon-pawprint-4<?php endif;?><?php endif;?>" data-aos="zoom-in">
					<?php if (( get_post_meta($post->ID,'rnr_woo_header_title_opt',true))):?>
					<h1><?php echo esc_html(get_post_meta($post->ID,'rnr_woo_header_title_opt',true)); ?></h1>
					<?php else: ?>
					<h1><?php the_title();?></h1>
					<?php endif;?>	
				
				
			</div>	
		</div>
        <!-- /jumbo-heading -->
    </div>
    <!-- /jumbotron -->	
<section class="about-content-area section shop-details-section">
<div class="container">
<div class="row">
<?php



if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<?php if ( is_active_sidebar( 'sidebar-8' ) ) { ?>
<div class="col-md-8">
<?php } else { ?>
<div class="col-md-12">
<?php };?>
<?php
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>
</div>
<?php if ( is_active_sidebar( 'sidebar-8' ) ) { ?>
	<div class="blog-sidebar bg-light-custom h-50 border-irregular1 col-lg-4">
	<?php dynamic_sidebar( 'sidebar-8' ); ?>
	</div>
	<?php } ?>
</div>
</div>
</section>
<?php do_action( 'woocommerce_after_single_product' ); ?>
