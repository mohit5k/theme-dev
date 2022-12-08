<?php get_header(); ?>
<?php $woof_options = get_option('woof'); ?>

    <!-- ==== Page Content ==== -->
    <div class="page pb-0 mt-5 paws-house-bg1">
        <div class="container">
            <div class="row mt-5 block-padding">
                <div class="col-md-4 offset-md-1">
	                <?php if(!empty($woof_options['error-page-bg-img'])): ?>					
				    <img src="<?php echo esc_url(woof_AfterSetupTheme::return_thme_option('error-page-bg-img','url'));?>" alt="" class="center-block img-fluid float-right">
					<?php endif;?> 
                </div>
                <div class="col-md-5 h-50 border-irregular1  bg-light-custom text-center">
					<?php if(!empty($woof_options['error-page-title'])): ?>
						<h1 class="mt-4"><?php echo esc_attr(($woof_options['error-page-title']));?></h1>
					<?php else:?>
						<h1 class="mt-4"><?php esc_attr_e('404','woof');?></h1>
					<?php endif;?>			   
					<?php if(!empty($woof_options['error-page-sbtitle'])): ?>							
						<h4><?php echo esc_attr(($woof_options['error-page-sbtitle']));?></h4>
					<?php else:?>
						<h4><?php esc_attr_e('Page Not Found','woof');?></h4>
					<?php endif;?>
					<?php if(!empty($woof_options['error-page-button'])): ?>
						<a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary mb-5"><?php echo esc_attr(($woof_options['error-page-button']));?></a>  
					<?php else:?>  
						<a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary mb-5"><?php esc_attr_e('Go back to home','woof');?></a>  
					<?php endif;?> 	
                </div>
            </div>
            <!-- /container -->
        </div>
    </div>
    <!-- /page -->
		
<?php get_footer(); ?>	