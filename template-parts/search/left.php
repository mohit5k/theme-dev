<?php $woof_options = get_option('woof'); ?>
    <?php get_template_part('template-parts/header/title-section-7');?>

	<div class="page-in section">
		<div class="container">    
			<div class="row">
				<div class="blog">
					<div class="col-xs-12 col-sm-12 col-md-8 pull-right">
						<div class="blog-content">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	

						    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  							
							
								<?php if( has_post_format( 'image' ) !='') :?>
								<?php get_template_part('template-parts/posttype/image');?>	
								<?php elseif( has_post_format( 'video' ) !='') :?>
								<?php get_template_part('template-parts/posttype/video');?>
								<?php else :?>
								<?php get_template_part('template-parts/posttype/default');?>	
								<?php endif;?>
							
							</div>
							
							<?php endwhile;?>
							
							<?php else : ?>	
							
							<div class="wrapper-content nothing-found">
								
								<div class="text-title ">
								<h3><?php esc_attr_e('Nothing Found', 'woof'); ?></h3>
								</div>
								<br>
								<div class="sec-text ">
								<p><?php esc_attr_e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'woof'); ?></p>
								</div>					
						
							</div>					
											
							<?php endif; wp_reset_postdata(); ?>	
						
							<?php if (function_exists("woof_pagination")) {woof_pagination($wp_query->max_num_pages);} ?>
												
						</div> <!-- /wi-content -->
					</div> <!-- /.col- -->
				</div> <!-- /.blog -->
				<aside class="sidebar">
					<div class="col-xs-12 col-sm-12 col-md-4 pull-left">					
					<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
					<?php endif; ?>
					</div>
				</aside>
			</div> <!-- /.row -->  
		</div> <!-- /.container -->
	</div> <!-- /.page-in -->
	<!-- /Page In AREA END -->
