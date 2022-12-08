<?php
/*Template Name:Blog Page Template */
get_header();
?>
<?php $woof_options = get_option('woof'); ?>
<?php get_header();?>

	<?php if(get_post_meta($post->ID,'rnr_wr-blogtype',true)=='st1'){ ?> 
	    <?php get_template_part('template-parts/blog/right');?>
	<?php } else if(get_post_meta($post->ID,'rnr_wr-blogtype',true)=='st2'){ ?> 
	    <?php get_template_part('template-parts/blog/left');?>
	<?php }  else  { ?>
	    <?php get_template_part('template-parts/blog/right');?>
	<?php }?>
        
<?php get_footer(); ?>	
