<?php
/*Template Name:Adoption Page Template */
get_header();
?>
<?php $woof_options = get_option('woof'); ?>
<?php get_header();?>

    <?php get_template_part('template-parts/header/title-section');?>
	
    <!-- ==== Page Content ==== -->
    <div class="page">
        <div class="container block-padding pt-0">
			<?php if (( get_post_meta($post->ID,'rnr_adoption-on-off',true))=='yes'){?>
            <div class="col-lg-8 offset-lg-2 text-center">
			    <?php if (( get_post_meta($post->ID,'rnr_adoption-title-text',true))):?>
                <h3><?php echo esc_html(get_post_meta($post->ID,'rnr_adoption-title-text',true)) ?></h3>
				<?php endif;?>
				<?php if (( get_post_meta($post->ID,'rnr_adoption-content-text',true))):?>
                <p><?php echo esc_html(get_post_meta($post->ID,'rnr_adoption-content-text',true)) ?></p>
			    <?php endif;?>
            </div>			
			<?php } else { ?> 		
            <?php }?>	
            <!-- First row: Adopt a pet -->
            <div class="row mt-5">			
				<?php 
					$showpost= get_post_meta($post->ID, 'rnr_adoption-post-show', true);						
					$categoryname= get_post_meta($post->ID, 'rnr_adoption-post-cat', true);						
					$paged=(get_query_var('paged'))?get_query_var('paged'):1;
					$loop = new WP_Query( array( 'post_type' => 'adoption', 'posts_per_page'=>$showpost, 'adoption_category'=> $categoryname, 'paged'=>$paged ) ); 						
				?>	
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>							
				
                <!-- Pet  -->
                <div class="adopt-card res-margin">
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
                </div>
                <!-- /adopt-card -->
                <!-- /pet -->						
														
				<?php endwhile; wp_reset_postdata(); ?>
            </div>          
            <!-- /row -->
                <?php if (function_exists("woof_pagination")) {woof_pagination($loop->max_num_pages);} ?>
            <!-- /col-md -->
        </div>
        <!-- /container -->
    </div>
    <!-- /page -->        
<?php get_footer(); ?>	
