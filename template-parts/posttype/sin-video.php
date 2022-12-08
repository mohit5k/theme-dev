    <?php if(get_post_meta($post->ID,'rnr_bl-video',true)):?>  
	<hr><div class="post-media">
		<div class="iframe-holder">
			<div class="resp-video cus-blog">
				<iframe src="<?php echo esc_url(get_post_meta($post->ID,'rnr_bl-video',true));?>" width="700" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
		</div>
	</div><hr>
	<?php endif;?>	
			