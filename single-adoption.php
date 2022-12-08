<?php $woof_options = get_option('woof'); ?>
<?php get_header();?>
<?php get_template_part('template-parts/header/title-section-9');?>
	<!-- ==== Page Content ==== -->
	<div class="page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				<?php if(have_posts()): while ( have_posts() ) : the_post();?>	
				    <?php if (( get_post_meta($post->ID,'rnr_adopt-project-info-on-off',true))=='no'){?>
					<?php } else { ?> 
                    <div class="row bg-light-custom border-irregular1 block-padding">
                        <!-- image -->
                        <div class="col-lg-4 offset-lg-2">
                            <!-- owl slider -->							
							<?php if (( get_post_meta($post->ID,'rnr_adoption-details-img',true))):?>
							<div id="owl-adopt-single" class="owl-carousel top-centered-nav owl-theme" >
							<?php $woof_wr_images = rwmb_meta( 'rnr_adoption-details-img','type=image&size=woof_adoption_image' );
								foreach ( $woof_wr_images as $image )
									{
									echo "<div class='col-md-12'><img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' class='border-irregular1 img-fluid hover-opacity'/></div>";
									};?>
							</div>
							<?php else: ?>	
							<div class="owl-carousel top-centered-nav owl-theme" >
								<div class="col-md-12">
								<?php if (has_post_thumbnail( $post->ID ) ):?>	
								<?php $woof_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'woof_adoption_image' );?>
								<img class="border-irregular1 img-fluid hover-opacity" src="<?php echo esc_url($woof_image[0]);?>" alt="">
								<?php endif; ?>	
							    </div>
							    <!-- /col-md-12 -->								
							</div>	
							<?php endif; ?>								
                            <!-- /owl-carousel -->	
                        </div>
                        <!-- /col-md -->	
						<!-- adoption info  -->
						<div class="col-lg-4 res-margin mt-5 text-xs-center">
						    
							<h4><?php if (( get_post_meta($post->ID,'rnr_pet-title',true))):?>
							<strong><?php echo esc_html(get_post_meta($post->ID,'rnr_pet-title',true)) ?></strong>
							<?php endif;?><?php the_title();?></h4>
							<div class="row">
								<?php
									$woof_pet_info = rwmb_meta( 'rnr_woof_pet_info' );
									if ( ! empty( $woof_pet_info ) ) {
									foreach ( $woof_pet_info as $woof_pet_infos ) { ;?>
							        <div class="col-sm-6">
								        <ul class="list-unstyled pet-adopt-info">										
										<?php 
											$woof_pet_data1 = isset( $woof_pet_infos['rnr_data1'] ) ? $woof_pet_infos['rnr_data1'] : ''; 
											$woof_pet_data2 = isset( $woof_pet_infos['rnr_data2'] ) ? $woof_pet_infos['rnr_data2'] : ''; 
											if ( !empty( $woof_pet_data1 ) ) {
											if ( !empty( $woof_pet_data2 ) ) { ?>
												<li class="h7"><?php echo esc_html($woof_pet_data1);?> 
												<span> <?php echo esc_html($woof_pet_data2);?></span></li>
									    <?php  } } ;?>
										</ul>
								    </div>
								    <!-- /div-->										
                                <?php  } } ;?>	
							</div>	
							<!-- /row-->
							<?php if (( get_post_meta($post->ID,'rnr_pet-info-text',true))):?>
							<p class="font-weight-bold"><?php echo esc_html(get_post_meta($post->ID,'rnr_pet-info-text',true)) ?></p>
							<?php endif;?>
							<!-- button -->
							<?php if (( get_post_meta($post->ID,'rnr_pet-info-button',true))):?>
							<a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_pet-info-button-url',true)) ?>" class="btn btn-primary " data-aos="zoom-in" ><?php echo esc_html(get_post_meta($post->ID,'rnr_pet-info-button',true)) ?></a> 
							<?php endif;?>
						</div>
						<!-- /col-md --> 
                    </div>
                    <!-- /row-->
                    <?php }?>	
					<div class="mt-5">
                        <?php the_content();?>
						<?php if (( get_post_meta($post->ID,'rnr_pet-alert-show',true))=='yes'):?>
						<div class="alert alert-primary mt-5" role="alert">
						    <?php if (( get_post_meta($post->ID,'rnr_pet-alert-title',true))):?>
							<h6 class="text-light"><?php echo esc_html(get_post_meta($post->ID,'rnr_pet-alert-title',true)) ?></h6>
							<?php endif;?>
							<?php if (( get_post_meta($post->ID,'rnr_pet-alert-text',true))):?>
							<p><?php echo esc_html(get_post_meta($post->ID,'rnr_pet-alert-text',true)) ?></p>
							<?php endif;?>
						</div>				            
			            <?php else:?>	
                            <!--/empty--> 						
						<?php endif;?>
						<!-- /alert-->							
					</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>

				<?php if (woof_AfterSetupTheme::return_thme_option('adoption-related-post')=='yes'){ ?>
				<?php  	
				$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => '4' ,'post_type' => 'adoption', 'post__not_in' => array($post->ID) ) );		
				if ($related) { ?>
					 
					<div class="row mt-5">
						<?php
							if( $related ) foreach( $related as $post ) {
								setup_postdata($post); 
						?>	
						<!-- Pet  -->
						<div class="adopt-card col-md-6 col-xl-3 res-margin">
							<div class="card bg-light-custom">
								<div class="thumbnail text-center">		
									<!-- Image -->
									<?php if (has_post_thumbnail( $post->ID ) ):?>	
									<?php $woof_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'woof_adopt' );?>
									<img class="border-irregular1 img-fluid" src="<?php echo esc_url($woof_image[0]);?>" alt="">
									<?php endif; ?>								
									<!-- Name -->
									<div class="caption-adoption">
										<h6 class="adoption-header"><?php the_title();?></h6>
										<!-- List -->
										<ul class="list-unstyled">	
										<?php
											$woof_pet_info = rwmb_meta( 'rnr_woof_pet_info' );
											if ( ! empty( $woof_pet_info ) ) {
											foreach ( $woof_pet_info as $woof_pet_infos ) { ;?>
											<?php 
												$woof_pet_data1 = isset( $woof_pet_infos['rnr_data1'] ) ? $woof_pet_infos['rnr_data1'] : ''; 
												$woof_pet_data2 = isset( $woof_pet_infos['rnr_data2'] ) ? $woof_pet_infos['rnr_data2'] : ''; 
												if ( !empty( $woof_pet_data1 ) ) {
												if ( !empty( $woof_pet_data2 ) ) { ?>
													<li><strong><?php echo esc_html($woof_pet_data1);?> </strong>  
													 <?php echo esc_html($woof_pet_data2);?></li>
											<?php  } } ;?>																	
										<?php  } } ;?>	
										</ul>	
										<!-- Buttons -->								  
										<div class="text-center">
											<a href="<?php the_permalink();?>" class="btn btn-primary">
											<?php if(!empty($woof_options['adopt-read-more'])): ?>
												<?php echo esc_attr(($woof_options['adopt-read-more']));?>
												<?php else:?>
												<?php esc_attr_e('More Info','woof');?>
											<?php endif;?>									  								  
											</a>
										</div>
									</div>
								</div>
								<!-- /thumbnail -->
							</div>
							<!-- /card -->
						</div>
						<!-- /adopt-card -->
						<?php } wp_reset_postdata(); ?>				
					</div>
					<!-- /owl-carousel -->		

				<?php }?>  
				
				<?php } ;?>  
				
                </div>
                <!-- /col-lg-->
            </div>
            <!-- /row-->
        </div>
        <!-- /container-->
    </div>			
<?php get_footer(); ?>	