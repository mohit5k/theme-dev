<?php $woof_options = get_option('woof'); ?> <!-- 404 Page -->   
<!-- Page Header AREA START -->
<?php if (woof_AfterSetupTheme::return_thme_option('error-page-header-show')=='no'){ ?>  
	<!--/empty--> 
<?php } else { ?> 	

	<section class="page-head page-bg" >
		<div class="container">    				
			<?php if(!empty($woof_options['error-page-title'])): ?>
			<h3 class="page-heading"><?php echo esc_attr(($woof_options['error-page-title']));?> </h3>
			<?php else:?>
			<h3 class="page-heading"><?php esc_attr_e('Error Page','woof');?> </h3>
			<?php endif;?>

			<?php if (woof_AfterSetupTheme::return_thme_option('page-breadcrumb')=='yes'){ ?>
			<div class="sub-title">	
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<?php if(!empty($woof_options['page-breadcrumb-text'])): ?>
					<span><?php echo esc_attr(($woof_options['page-breadcrumb-text']));?></span>
					<?php else:?>
					<span><?php esc_attr_e('Home','woof');?></span>
					<?php endif;?>						
				</a> <i class="fa fa-angle-right"></i>
				<span><?php esc_attr_e('Error Page','woof');?> </span>
			</div>					
			<?php } else { ?> 
				<!--/empty--> 
			<?php } ;?>  				
		</div> <!-- /.container -->
	</section> <!-- /.page-head -->	

<?php } ;?> 
<!-- /Page Header AREA END -->
		