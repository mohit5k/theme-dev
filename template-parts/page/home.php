<?php $woof_options = get_option('woof'); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('template-parts/header/title-section');?>
        <div class="wr-full-page">
		    <?php the_content();?>
		</div>	
<?php endwhile; // end of the loop. ?>
<?php wp_reset_postdata();?>		
