<?php $woof_options = get_option('woof'); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('template-parts/header/title-section');?>
    <!-- ==== Page Content ==== -->
    <div id="blog-home" class="page">
        <div class="container">
            <div class="row">
                <!-- Blog Entries Column -->
                <div class="col-lg-8">
                    <!-- Blog Post -->
					<div class="blog-content wr-default-page">
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
					<?php if ( comments_open() || get_comments_number() ) { ?>	
						<div class="comments-section">							
							<?php comments_template();?>					
						</div> <!-- /.comments-section -->
					<?php }?>						
                </div>
                <!-- /col-lg-8 -->
                <!-- Sidebar Widgets Column -->
                <div class="blog-sidebar bg-light-custom h-50 border-irregular1 col-lg-4">				
					<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
					<?php endif; ?>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /page -->
<?php endwhile; // end of the loop. ?>
<?php wp_reset_postdata();?>