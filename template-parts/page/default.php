<?php $woof_options = get_option('woof'); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('template-parts/header/title-section');?>
		<!-- Overview AREA START -->
		<section class="about-content-area section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 wr-default-page">
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
						<?php if ( comments_open() || get_comments_number() ) { ?>	
							<div class="comments-section">							
								<?php comments_template();?>					
							</div> <!-- /.comments-section -->
						<?php }?>						
					</div>
				</div>
			</div>
		</section>
<?php endwhile; // end of the loop. ?>
<?php wp_reset_postdata();?>		
