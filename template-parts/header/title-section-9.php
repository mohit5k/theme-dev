<?php $woof_options = get_option('woof'); ?> <!-- Adoption Details Page -->     
<!-- Page Header AREA START -->
<?php if (woof_AfterSetupTheme::return_thme_option('adoption-header-show')=='no'){ ?>  
	<!--/empty--> 
<?php } else { ?> 	
    <!-- Jumbotron -->
    <?php $woof_back_images = rwmb_meta( 'rnr_adoption_deatils_header_img','type=image&size=' ); ?>
	<?php if ( ! empty( $woof_back_images ) ) { ?>
	<?php foreach ( $woof_back_images as $woof_back_image ){ ?>			
	<div class="jumbotron jumbotron-fluid overlay" style="background-image:url('<?php echo esc_url(($woof_back_image['url']));?>');">
	<?php } ;?>
	<?php } else { ?>
	<div class="jumbotron jumbotron-fluid overlay" style="background-image:url('<?php echo esc_url(woof_AfterSetupTheme::return_thme_option('opt-adaption-bg','url'));?>');">
	<?php } ;?>
        <div class="jumbo-heading">
            <!-- section-heading -->
            <div class="section-heading <?php if (( get_post_meta($post->ID,'rnr_adoption_icon_show',true))!='no'){?><?php if (( get_post_meta($post->ID,'rnr_adoption_icon_class',true))):?><?php echo esc_attr(get_post_meta($post->ID,'rnr_adoption_icon_class',true)) ?><?php else:?><?php if(!empty($woof_options['adopt_icon_class'])):?><?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('adopt_icon_class',''));?><?php else:?>flaticon-pawprint-4<?php endif;?><?php endif;?><?php } ;?>" data-aos="zoom-in">			
				<?php if (( get_post_meta($post->ID,'rnr_adoption_deatils_header_itle',true))):?>	
				<h1><?php echo esc_attr(get_post_meta($post->ID,'rnr_adoption_deatils_header_itle',true)) ?></h1>
				<?php else:?>
				<?php if(!empty($woof_options['adoption-page-tile'])): ?>
				<h1><?php echo esc_attr(($woof_options['adoption-page-tile']));?></h1>
				<?php else:?>
				<h1><?php esc_attr_e('Adopt a Pet','woof');?></h1>
				<?php endif;?>
				<?php endif;?>
            </div>
			<!-- /section-heading -->
			<?php if (woof_AfterSetupTheme::return_thme_option('page-breadcrumb')=='yes'){ ?>
			<nav aria-label="breadcrumb">
			    <ol class="breadcrumb">
				    <li class="breadcrumb-item">
						<a href="<?php echo esc_url(home_url('/')); ?>">
							<?php if(!empty($woof_options['page-breadcrumb-text'])): ?>
								<?php echo esc_attr(($woof_options['page-breadcrumb-text']));?>
								<?php else:?>
								<?php esc_attr_e('Home','woof');?>
							<?php endif;?>						
						</a>
				   </li>
				   <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
				</ol>
			</nav>				
			<?php } ;?>  	
        </div>
        <!-- /jumbo-heading -->
    </div>
    <!-- /jumbotron -->		
<?php } ;?> 
<!-- /Page Header AREA END -->