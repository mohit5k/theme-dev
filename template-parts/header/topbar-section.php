<?php $woof_options = get_option('woof'); ?>
		<?php if (woof_AfterSetupTheme::return_thme_option('tobar')=='yes'){ ?>
            <!-- Start Top Bar -->
            <div class="container-fluid top-bar">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <!-- Start Contact Info -->
						<?php if($woof_options['contact-info'] == 'yes') :?> 
                        <ul class="contact-details float-left">
						   <?php if(!empty($woof_options['contact-address'])):?>
                           <li><i class="fa fa-map-marker"></i><?php echo esc_attr(($woof_options['contact-address']));?></li>
						   <?php endif;?>
						   <?php if(!empty($woof_options['contact-email'])):?>
                           <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo esc_attr(($woof_options['contact-email']));?>"><?php echo esc_attr(($woof_options['contact-email']));?></a></li>
						   <?php endif;?>
						   <?php if(!empty($woof_options['contact-phone'])):?>
                           <li><i class="fa fa-phone"></i><?php echo esc_attr(($woof_options['contact-phone']));?></li>
						   <?php endif;?>
                        </ul>
						<?php endif;?>
                        <!-- End Contact Info -->
                        <!-- Start Social Links -->
						<?php if($woof_options['social-header'] == 'yes') :?>           
                        <ul class="social-list float-right list-inline">	
						
							<?php if(!empty($woof_options['facebook'])):?> 
							<li class="list-inline-item"><a href="<?php echo esc_url($woof_options['facebook']); ?>"><i class="fab fa-facebook-f"></i></a></li>
							<?php endif;?>
			
							<?php if(!empty($woof_options['twitter'])):?> 
							<li class="list-inline-item"><a href="<?php echo esc_url($woof_options['twitter']); ?>"><i class="fab fa-twitter"></i></a></li>
							<?php endif;?>
			
							<?php if(!empty($woof_options['google-plus'])):?> 
							<li class="list-inline-item"><a href="<?php echo esc_url($woof_options['google-plus']); ?>"><i class="fab fa-google-plus"></i></a></li>
							<?php endif;?>		

							<?php if(!empty($woof_options['linkedin'])):?> 
							<li class="list-inline-item"><a href="<?php echo esc_url($woof_options['linkedin']); ?>"><i class="fab fa-linkedin"></i></a></li>
							<?php endif;?>	
			
							<?php if(!empty($woof_options['instagram'])):?> 
							<li class="list-inline-item"><a href="<?php echo esc_url($woof_options['instagram']); ?>"><i class="fab fa-instagram"></i></a></li>
							<?php endif;?>	

							<?php if(!empty($woof_options['pinterest'])):?> 
							<li class="list-inline-item"><a href="<?php echo esc_url($woof_options['pinterest']); ?>"><i class="fab fa-pinterest"></i></a></li>
							<?php endif;?>	

							<?php if(!empty($woof_options['whatsapp'])):?> 
							<li class="list-inline-item"><a href="<?php echo esc_url($woof_options['whatsapp']); ?>"><i class="fab fa-whatsapp"></i></a></li>
							<?php endif;?>			

							<?php if(!empty($woof_options['skype'])):?> 
							<li class="list-inline-item"><a href="<?php echo esc_url($woof_options['skype']); ?>"><i class="fab fa-skype"></i></a></li>
							<?php endif;?>	
				
							<?php if(!empty($woof_options['dribbble'])):?> 
							<li class="list-inline-item"><a href="<?php echo esc_url($woof_options['dribbble']); ?>"><i class="fab fa-dribbble"></i></a></li>
							<?php endif;?>				
			
							<?php if(!empty($woof_options['youtube'])):?> 
							<li class="list-inline-item"><a href="<?php echo esc_url($woof_options['youtube']); ?>"><i class="fab fa-youtube"></i></a></li>
							<?php endif;?>	
			
							<?php if(!empty($woof_options['vimeo'])):?> 
							<li class="list-inline-item"><a href="<?php echo esc_url($woof_options['vimeo']); ?>"><i class="fa fab-vimeo"></i></a></li>
							<?php endif;?>
				
							<?php if(!empty($woof_options['dropbox'])):?> 
							<li class="list-inline-item"><a href="<?php echo esc_url($woof_options['dropbox']); ?>"><i class="fab fa-dropbox"></i></a></li>
							<?php endif;?>	

							<?php if(!empty($woof_options['github'])):?> 
							<li class="list-inline-item"><a href="<?php echo esc_url($woof_options['github']); ?>"><i class="fab fa-github"></i></a></li>
							<?php endif;?>	
							<?php if(!empty($woof_options['xing'])):?> 
							<li class="list-inline-item"><a href="<?php echo esc_url($woof_options['xing']); ?>"><i class="fab fa-xing"></i></a></li>
							<?php endif;?>

							<?php if(!empty($woof_options['email'])):?> 
							<li class="list-inline-item"><a href="mailto:<?php echo esc_attr($woof_options['email']); ?>"><i class="fab fa-envelope"></i></a></li>
							<?php endif;?>
							
                            <?php
							$woof_more_social = woof_AfterSetupTheme::return_thme_option('opt_add_more_social','');
							if ( ! empty( $woof_more_social ) ) {
							foreach ( $woof_more_social as $woof_more_socials ) { ;?>
							<?php echo do_shortcode($woof_more_socials);?>
							<?php } } ;?> 							

                        </ul>
						<?php endif;?>
                        <!-- /End Social Links -->
                     </div>
                     <!-- col-md-12 -->
                  </div>
                  <!-- /row -->
               </div>
               <!-- /container -->
            </div>
            <!-- End Top bar -->
        <?php } ;?>				