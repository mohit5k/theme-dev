<?php $woof_options = get_option('woof'); ?>
                        
        <!-- logo -->
		<a class="navbar-brand" href="<?php echo esc_url(home_url( '/' )); ?>">
		    <?php if (woof_AfterSetupTheme::return_thme_option('logoicon')=='yes'){ ?>
		        <i class="<?php if(!empty($woof_options['logoicon_class'])):?><?php echo esc_attr(woof_AfterSetupTheme::return_thme_option('logoicon_class',''));?><?php else : ?>flaticon-dog-20<?php endif;?>"></i>
			<?php } ;?>	
		<?php if (woof_AfterSetupTheme::return_thme_option('textlogo')=='st2'){ ?>				
			<img alt="<?php  bloginfo('name'); ?>" src="<?php echo esc_url(woof_AfterSetupTheme::return_thme_option('logopic','url'));?>">
		<?php } else{ ?>	
			<span class="wr-text-logo">
			<?php if(!empty($woof_options['logotext'])):?>
				<?php echo esc_html(woof_AfterSetupTheme::return_thme_option('logotext',''));?>
			<?php else:?>
				<?php  bloginfo('name'); ?>
			<?php endif;?>								
			</span>	
		<?php } ;?>	
		</a>							
	    <!-- /.logo -->
											