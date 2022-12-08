<?php $woof_options = get_option('woof'); ?>
<?php get_header();?>
<?php get_template_part('template-parts/header/title-section-10');?>
    <!-- ==== Page Content ==== -->
    <div class="page">
        <div class="container">
            <div class="row">
			    <?php if ( is_active_sidebar( 'sidebar-7' ) ) { ?>	
                <!-- /col-md-9 -->
                <div class="col-lg-9">
				<?php if(have_posts()): while ( have_posts() ) : the_post();?>	
				
				    <div class="custom-services-content">
						<?php if (has_post_thumbnail( $post->ID ) ):?>	
						<?php $woof_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
						<img class="float-left col-md-4 border-irregular1 img-fluid" src="<?php echo esc_url($woof_image[0]);?>" alt="">
						<?php endif; ?>					

						<?php the_content();?>
					</div>	
					<?php if (( get_post_meta($post->ID,'rnr_services-highlight-show',true))=='yes'):?>
					<div class="custom-services-highlight">
						<?php if (( get_post_meta($post->ID,'rnr_services-highlight-title',true))):?>
						<h4 class="mt-5"><?php echo esc_html(get_post_meta($post->ID,'rnr_services-highlight-title',true)) ?></h4>
						<?php endif;?>	
						<div class="row custom-services-highlight">
							<ul class="custom pl-0">
							<?php $values =  rwmb_meta(
								'rnr_woof_services_info', 
									$args = array(
										'type'=>'text',
									),
									$post_id = $post->ID
								); 
								if($values){
									foreach ($values as $key => $value) {
										echo "<div class='col-sm-6'><li>".$value."</li></div>";
									}
								}; 
							?>							
							</ul>
						</div>
						<!-- /row -->
					</div>	
					<?php else:?>	
						<!--/empty--> 						
					<?php endif;?>				  
				<?php endwhile; endif; wp_reset_postdata(); ?>	  
                </div>
                <!-- /col-md- -->
				
                <div class="sidebar col-lg-3 res-margin  card bg-light-custom h-50">
			        <?php dynamic_sidebar( 'sidebar-7' ); ?>
			    </div>					
                <!-- /sidebar -->

			    <?php } else {?> 
			   
                <!-- /col-md-12 -->
                <div class="col-lg-12">
				<?php if(have_posts()): while ( have_posts() ) : the_post();?>	
				    <div class="custom-services-content">
						<?php if (has_post_thumbnail( $post->ID ) ):?>	
						<?php $woof_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
						<img class="float-left col-md-4 border-irregular1 img-fluid" src="<?php echo esc_url($woof_image[0]);?>" alt="">
						<?php endif; ?>					

						<?php the_content();?>
					</div>	
					<?php if (( get_post_meta($post->ID,'rnr_services-highlight-show',true))=='yes'):?>
					<div class="custom-services-highlight">
						<?php if (( get_post_meta($post->ID,'rnr_services-highlight-title',true))):?>
						<h4 class="mt-5"><?php echo esc_html(get_post_meta($post->ID,'rnr_services-highlight-title',true)) ?></h4>
						<?php endif;?>	
						<div class="row">
							<ul class="custom pl-0">
							<?php $values =  rwmb_meta(
								'rnr_woof_services_info', 
									$args = array(
										'type'=>'text',
									),
									$post_id = $post->ID
								); 
								if($values){
									foreach ($values as $key => $value) {
										echo "<div class='col-sm-6'><li>".$value."</li></div>";
									}
								}; 
							?>							
							</ul>
						</div>
						<!-- /row -->
					</div>						
					<?php else:?>	
						<!--/empty--> 						
					<?php endif;?>				  
				<?php endwhile; endif; wp_reset_postdata(); ?>	  
                </div>
                <!-- /col-md- -->			   
			   <?php };?>	
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
		
		<?php if (woof_AfterSetupTheme::return_thme_option('portfolio-related-post')=='yes'){ ?>
		<?php  	
		$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => '-1' ,'post_type' => 'portfolio', 'post__not_in' => array($post->ID) ) );		
		if ($related) { ?>
			 
			<!-- owl slider -->
			<div id="owl-featured" class="owl-carousel top-centered-nav owl-theme mt-5"> 
				<?php
					if( $related ) foreach( $related as $post ) {
						setup_postdata($post); 
				?>	
					<?php if (has_post_thumbnail( $post->ID ) ):?>
						<?php $woof_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
					<div class="col-md-12">
					   <!-- image -->
					   <a href="<?php echo esc_url($woof_image[0]);?>" title="<?php the_title();?>">
					   <img src="<?php echo esc_url($woof_image[0]);?>" class="border-irregular1 img-fluid hover-opacity" alt="">
					   </a>
					</div>
					<!-- /col-md-12 -->
					<?php endif;?>
				<?php } wp_reset_postdata(); ?>				
			</div>
			<!-- /owl-carousel -->		

		<?php }?>  
		
		<?php } ;?>  				
		
    </div>
    <!-- /page -->
<?php get_footer(); ?>	