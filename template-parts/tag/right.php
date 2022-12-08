<?php $woof_options = get_option('woof'); ?>
    <?php get_template_part('template-parts/header/title-section-6');?>
    <!-- ==== Page Content ==== -->
    <div id="blog-home" class="page">
        <div class="container">
            <div class="row">
                <!-- Blog Entries Column -->
                <div class="col-lg-8">
                    <!-- Blog Post -->
					<div class="blog-content">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  	
							<div class="card blog-card">							
								<?php $woof_post_title= get_the_title(); ?>
								<!-- Post info-->
								<div class="post-info border-irregular2 text-muted">
									<?php if($woof_post_title != '') { ?>
									<span class="posted-date"> <?php the_time( get_option( 'date_format' ) ); ?></span>
									<?php } else {?>
									<a href="<?php the_permalink();?>"><span class="posted-date"> <?php the_time( get_option( 'date_format' ) ); ?></span></a>
									<?php } ?>
									<span class="posted-author" href="#"><i class="fa fa-user"></i> <?php the_author();?></span>
									<span class="posted-like" href="#"><i class="fa fa-comments"></i> <?php echo esc_attr(comments_number( '(0)', '(1)', '(%)' )); ?></span>		
									<?php if( has_category() ) {?>
									<span class="posted-category"><i class="fa fa-folder-open"></i> <?php the_category(', ');?></span>
									<?php }?>	
								</div>									
							
								<?php if( has_post_format( 'image' ) !='') :?>
								<?php get_template_part('template-parts/posttype/image');?>	
								<?php elseif( has_post_format( 'video' ) !='') :?>
								<?php get_template_part('template-parts/posttype/video');?>
								<?php else :?>
								<?php get_template_part('template-parts/posttype/default');?>	
								<?php endif;?>
																							
							</div>
						</div>								
						<?php endwhile; endif; wp_reset_postdata(); ?>
						
							<?php if (function_exists("woof_pagination")) {woof_pagination($wp_query->max_num_pages);} ?>
												
					</div>
                </div>
                <!-- /col-lg-8 -->
                <!-- Sidebar Widgets Column -->
                <div class="blog-sidebar bg-light-custom h-50 border-irregular1 col-lg-4">				
					<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
					<?php endif; ?>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /page -->