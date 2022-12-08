<?php $woof_options = get_option('woof'); ?> <!-- Default Page -->     
<!-- Page Header AREA START -->
<?php if (( get_post_meta($post->ID,'rnr_page-header-show',true))=='no'){?>     
	<!--/empty--> <div class="block1"></div>
<?php } else { ?> 	

	<?php
	global $woof_image, $woof_page_back;
	if (has_post_thumbnail( $post->ID ) ):
	$woof_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
	$woof_page_back ='style=background-image:url('.$woof_image[0].');'
	?> 
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid overlay" <?php echo esc_attr($woof_page_back);?>>
        <div class="jumbo-heading">
            <!-- section-heading -->
			<?php if (( get_post_meta($post->ID,'rnr_page-title-show',true))!='no'):?>	
			<div class="section-heading <?php if (( get_post_meta($post->ID,'rnr_page_icon_show',true))!='no'){?> <?php if (( get_post_meta($post->ID,'rnr_page_icon_class',true))):?><?php echo esc_attr(get_post_meta($post->ID,'rnr_page_icon_class',true)) ?><?php else:?>flaticon-pawprint-4<?php endif;?><?php } ;?>" data-aos="zoom-in">
				<?php if (( get_post_meta($post->ID,'rnr_page-title',true))):?>
				<h1><?php echo esc_attr(get_post_meta($post->ID,'rnr_page-title',true)) ?></h1>
				<?php else:?>
				<h1><?php the_title();?></h1>
				<?php endif;?>
			</div>	
			<?php endif;?>				
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
	<?php else:?>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid overlay">
        <div class="jumbo-heading">
            <!-- section-heading -->
			<?php if (( get_post_meta($post->ID,'rnr_page-title-show',true))!='no'):?>
			<div class="section-heading <?php if (( get_post_meta($post->ID,'rnr_page_icon_show',true))!='no'){?> <?php if (( get_post_meta($post->ID,'rnr_page_icon_class',true))):?><?php echo esc_attr(get_post_meta($post->ID,'rnr_page_icon_class',true)) ?><?php else:?>flaticon-pawprint-4<?php endif;?><?php } ;?>" data-aos="zoom-in">
				<?php if (( get_post_meta($post->ID,'rnr_page-title',true))):?>
				<h1><?php echo esc_attr(get_post_meta($post->ID,'rnr_page-title',true)) ?></h1>
				<?php else:?>
				<h1><?php the_title();?></h1>
				<?php endif;?>
			</div>	
			<?php endif;?>				
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
	<?php endif;?>	
<?php } ;?> 
<!-- /Page Header AREA END -->	