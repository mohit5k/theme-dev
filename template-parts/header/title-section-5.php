<?php $woof_options = get_option('woof'); ?> <!-- Category Page -->    
<!-- Page Header AREA START -->
<?php if (woof_AfterSetupTheme::return_thme_option('index-header-show')=='no'){ ?> 
	<!--/empty--> <div class="block1"></div>
<?php } else { ?> 	
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid overlay">
        <div class="jumbo-heading">
            <!-- section-heading -->
            <div class="section-heading <?php if (woof_AfterSetupTheme::return_thme_option('blog_icon_show')!='no'){ ?><?php if(!empty($woof_options['blog_icon_class'])):?><?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('blog_icon_class',''));?><?php else : ?>flaticon-pawprint-4<?php endif;?><?php } ?>" data-aos="zoom-in">				
			<?php if(!empty($woof_options['cat-page-title'])): ?>
			<h1><?php echo esc_attr(($woof_options['cat-page-title']));?> <em><?php single_cat_title( '', true ); ?></em></h1>
			<?php else:?>
			<h1><?php esc_attr_e('Category : ','woof');?> <em><?php single_cat_title( '', true ); ?></em></h1>
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
				   <li class="breadcrumb-item active" aria-current="page"><?php single_cat_title( '', true ); ?></li>
				</ol>
			</nav>				
			<?php } ;?>  	
        </div>
        <!-- /jumbo-heading -->
    </div>
    <!-- /jumbotron -->		
<?php } ;?> 
<!-- /Page Header AREA END -->			