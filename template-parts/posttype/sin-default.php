<?php if (has_post_thumbnail( $post->ID ) ):?>

		<?php get_template_part('template-parts/posttype/sin-image'); ?>
				
<?php else:?>	
 
    <hr class="custom_post_hr"/>
	
<?php endif;?>		