<?php $woof_options = get_option('woof'); ?>
<?php if (has_post_thumbnail( $post->ID ) ):?>

		<?php get_template_part('template-parts/posttype/image'); ?>
				
<?php else:?>	
    <?php $woof_post_title= get_the_title(); ?>	
	<div class="card-bodyy">
	    <?php if($woof_post_title != '') { ?>
		<a href="<?php the_permalink();?>">
		   <h3 class="card-title"><?php the_title();?></h3>
		</a>
		<?php } ?>
		<!-- excerpt -->
		<p class="card-text mt-3"><?php $woof_excerpt= substr(strip_tags($post->post_content), 0, 420);
			update_post_meta(get_the_ID(), 'woof_excerpt', $woof_excerpt);
			echo esc_html($woof_excerpt); ?></p>
			
		<a href="<?php the_permalink();?>" class="btn btn-primary">
		<?php if(!empty($woof_options['blog-read-more'])): ?>
		    <?php echo esc_attr(($woof_options['blog-read-more']));?>
		<?php else:?>
		    <?php esc_attr_e('Read More','woof');?> 
		<?php endif;?>
		<?php esc_attr_e('&rarr;','woof');?>
		</a>				
	</div>
	<!--card-footer -->							
<?php endif;?>		

			