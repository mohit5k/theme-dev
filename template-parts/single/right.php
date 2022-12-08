<?php $woof_options = get_option('woof'); ?>
    <?php get_template_part('template-parts/header/title-section-3');?>
    <!-- ==== Page Content ==== -->
    <div class="page">
        <div class="container">
            <div class="row">
                <!-- Post Content Column -->
                <div class="col-lg-8 card blog-card">
                    <div class="card-body">
						<?php if(have_posts()) : while ( have_posts() ) : the_post();?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  
							<?php $woof_post_title= get_the_title(); ?>
							<?php if($woof_post_title != '') { ?>    
							<h3 class="card-title"><?php the_title();?></h3>
							<?php } ?>	
							<!-- Post info-->
							<div class="post-info border-irregular2 text-muted">
								<span class="posted-date"> <?php the_time( get_option( 'date_format' ) ); ?></span>
								<span class="posted-author" href="#"><i class="fa fa-user"></i> <?php the_author();?></span>
								<?php if( has_tag() ) {?>
								<span class="posted-tags"><i class="fa fa-tags"></i> <?php the_tags( ' ', ', ', '' ); ?></span>
								<?php }?>		
								<span class="posted-like" href="#"><i class="fa fa-comments"></i> <?php echo esc_attr(comments_number( '(0)', '(1)', '(%)' )); ?></span>		
								<?php if( has_category() ) {?>
								<span class="posted-category"><i class="fa fa-folder-open"></i> <?php the_category(', ');?></span>
								<?php }?>			
							</div>								
							<?php if( has_post_format( 'image' ) !='') :?>
							<?php get_template_part('template-parts/posttype/sin-image');?>	
							<?php elseif( has_post_format( 'video' ) !='') :?>
							<?php get_template_part('template-parts/posttype/sin-video');?>
							<?php else :?>
							<?php get_template_part('template-parts/posttype/sin-default');?>	
							<?php endif;?>
							<!-- Post Content -->					 
							<div class="post-content">
								<?php the_content();
									wp_link_pages( array(
									'before'      => '<div class="page-links">',
									'after'       => '</div>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
									'pagelink'    => '%',
									'separator'   => '',
									) );
									?>
							</div>							
						</div>	
						<?php endwhile;  endif; wp_reset_postdata(); ?>	
						<?php if ( comments_open() || get_comments_number() ) { ?>	
							<div class="comments-section">							
								<?php comments_template();?>					
							</div> <!-- /.comments-section -->
						<?php }?>	
                    </div>
                    <!--/Card-body -->
                </div>
                <!-- /col-lg -->
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