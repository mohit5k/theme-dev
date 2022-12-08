    <!-- Preview Image -->
    <?php if (has_post_thumbnail( $post->ID ) ):
	$woof_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>	
	<hr><div class="post-media">
	    <img alt="" src="<?php echo esc_url($woof_image[0]);?>" class="img-fluid" />
	</div><hr>
	<?php endif;?>	

			