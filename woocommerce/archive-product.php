<?php $woof_options = get_option('woof'); ?>
<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<?php $woof_shop_back = woof_AfterSetupTheme::return_thme_option('shopheaderimg','url');
$woof_dot="'";
?>
<?php if ( is_product_category() ){
	global $wp_query;
	$woof_cat = $wp_query->get_queried_object();
	$woof_thumbnail_id = get_term_meta( $woof_cat->term_id, 'thumbnail_id', true );
	$woof_image = wp_get_attachment_url( $woof_thumbnail_id );
	if ( $woof_image ) {
		echo '<div class="jumbotron jumbotron-fluid overlay" style="background-image:url('.esc_url($woof_image).');">';
	}
	else {
		echo '<div class="jumbotron jumbotron-fluid overlay" style="background-image:url('.esc_url($woof_image).');" >';
	}
} else { ?>
	<div class="jumbotron jumbotron-fluid overlay" style="background-image:url(<?php echo esc_url($woof_shop_back);?>);">
<?php } ;?>
 <!-- Jumbotron -->
   
        <div class="jumbo-heading">
           	
			<div class="section-heading <?php if(!empty($woof_options['shop_icon_class'])):?><?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('shop_icon_class',''));?><?php else : ?>flaticon-pawprint-4<?php endif;?>" data-aos="zoom-in"> 
			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>	
				<h1><?php woocommerce_page_title(); ?></h1>
				
			</div>	
			<?php endif; ?>			
            			
						
        </div>
        <!-- /jumbo-heading -->
    </div>
    <!-- /jumbotron -->	
<section class="about-content-area section">
			<div class="container">
				<div class="row">
				<?php if ( is_active_sidebar( 'sidebar-8' ) ) { ?>
				<div class="col-sm-8 wr-default-page">
				<?php } else { ?>
				<div class="col-sm-12 wr-default-page">
				<?php } ;?>
<?php if ( is_product_category() ){ ?>					
<div class="woocommerce-products-header">
	

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</div>
<?php } ;?>
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 *
			 * @hooked WC_Structured_Data::generate_product_data() - 10
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}
?>
	</div>
	<?php if ( is_active_sidebar( 'sidebar-8' ) ) { ?>
	<div class="blog-sidebar bg-light-custom h-50 border-irregular1 col-lg-4">
	<?php dynamic_sidebar( 'sidebar-8' ); ?>
	</div>
	<?php } ?>
</div>
</div>
</section>
<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
