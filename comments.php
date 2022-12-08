<?php $woof_options = get_option('woof'); ?>

<?php
if ( post_password_required() ) {
	return;
}
?>

   <?php
    global $woof_comment_your_name, $woof_comment_your_email, $woof_comment_your_comment, $woof_comment_send_commen;
    if(!empty($woof_options['translet_opt_14'])):
    $woof_comment_your_name= esc_html(woof_AfterSetupTheme::return_thme_option('translet_opt_14',''));;
    else: 
    $woof_comment_your_name='Your Name';
    endif;
    if(!empty($woof_options['translet_opt_15'])):
    $woof_comment_your_email= esc_html(woof_AfterSetupTheme::return_thme_option('translet_opt_15',''));;
    else: 
    $woof_comment_your_email='Your Email';
    endif;
    if(!empty($woof_options['translet_opt_16'])):
    $woof_comment_your_comment= esc_html(woof_AfterSetupTheme::return_thme_option('translet_opt_16',''));;
    else: 
    $woof_comment_your_comment='Your Comment';
    endif;
    if(!empty($woof_options['translet_opt_17'])):
    $woof_comment_send_comment= esc_html(woof_AfterSetupTheme::return_thme_option('translet_opt_17',''));;
    else: 
    $woof_comment_send_comment='Leave a Reply';
    endif;	
	
		$woof_args = array(
		'fields' => apply_filters(
		'comment_form_default_fields', array(
			
			'author' =>'<div class="comment-form-author control-group"><div class="controls">' . '<input id="author" class="form-control" placeholder="'. $woof_comment_your_name .'*" name="author" type="text" value="' .
				esc_attr( $commenter['comment_author'] ) . '" size="40"/>'.
				
				'</div></div>'
				,
			'email'  => '<div class="comment-form-email control-group"> <div class="controls">' . '<input id="email" class="form-control" placeholder="'. $woof_comment_your_email .'*" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				'" size="40"/>'  .
				
				'</div></div>',
			
		)
		),
		'comment_field' => '<div class="comment-form-comment control-group"><div class="controls">' .
		'<textarea id="comment" class="form-control" name="comment" cols="50" rows="8" placeholder="'. $woof_comment_your_comment .'*" aria-required="true"></textarea>' .
		'</div></div>',
		'comment_notes_after' => '',
		'title_reply' => ''. $woof_comment_send_comment .''
		
	    ); comment_form($woof_args); 
	?>
	
	<?php
	
	if ( have_comments() ) : ?>
	<?php
	global $woof_comment_meta_text, $woof_comment_meta_text2, $woof_comment_meta_text3;
	if(!empty($woof_options['translet_opt_10'])):
	$woof_comment_meta_text= esc_html(woof_AfterSetupTheme::return_thme_option('translet_opt_10',''));;
	else: 
	$woof_comment_meta_text='One comment on';
	endif;
	if(!empty($woof_options['translet_opt_11'])):
	$woof_comment_meta_text2= esc_html(woof_AfterSetupTheme::return_thme_option('translet_opt_11',''));;
	else: 
	$woof_comment_meta_text2='Comment on';
	endif;
	if(!empty($woof_options['translet_opt_12'])):
	$woof_comment_meta_text3= esc_html(woof_AfterSetupTheme::return_thme_option('translet_opt_12',''));;
	else: 
	$woof_comment_meta_text3='Comments on';
	endif;
	?>

    <div class="comments">	
	
		<div class="comment-title">
			<h5>
			<?php
			$comment_count = get_comments_number();
			if ( 1 === $comment_count ) {
				printf(
					
					esc_html_e( ''.$woof_comment_meta_text.' &ldquo;%1$s&rdquo;', 'woof' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( 
					esc_html( _nx( '%1$s '.$woof_comment_meta_text2.' &ldquo;%2$s&rdquo;', '%1$s '.$woof_comment_meta_text3.' &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'woof' ) ),
					number_format_i18n( $comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>			
			</h5>
		</div>			
		<!-- .comments-title -->

		<?php the_comments_navigation(); ?>
		
		<div class="media-all">	
		    <ul class="wr-comments-list list-unstyled commentlist clearafix">
			<?php
				wp_list_comments( array(
					'callback'   => 'woof_comment',
					'short_ping' => true,
				) );
			?>
			</ul>
		</div><!-- .comment-list -->
    </div>		
		
		<div class="clearfix"></div>
		
		<?php the_comments_navigation();
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<!-- If comments are closed. -->	
			<p class="nocomments"><?php if(!empty($woof_options['translet_opt_13'])):?><?php echo esc_html(woof_AfterSetupTheme::return_thme_option('translet_opt_13',''));?><?php else: ?><?php esc_html_e('Comments are closed.','woof'); ?><?php endif; ?></p>	
				
		<?php
		endif;
	endif; // Check for have_comments().
	?>
	


