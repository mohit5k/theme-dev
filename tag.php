<?php $woof_options = get_option('woof'); ?>
<?php get_header();?>

<?php if (woof_AfterSetupTheme::return_thme_option('blogtyle')=='st2'){ ?>
<?php get_template_part('template-parts/tag/left');?>
<?php } else { ?>
<?php get_template_part('template-parts/tag/right');?>
<?php } ;?>

<?php get_footer(); ?>	