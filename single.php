<?php $woof_options = get_option('woof'); ?>
<?php get_header();?>

<?php if ($woof_options['blogtyle']=="st2") {?>
<?php get_template_part('template-parts/single/left');?>
<?php } else { ?>
<?php get_template_part('template-parts/single/right');?>
<?php } ;?>

<?php get_footer(); ?>	