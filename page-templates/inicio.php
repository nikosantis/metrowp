<?php
/*
Template Name: Página Inicio
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>
<?php get_header(); ?>
<body <?php body_class( 'home' ); ?>>
	<?php include (TEMPLATEPATH . '/global-templates/gtm-body.php'); ?>
    <?php include (TEMPLATEPATH . '/global-templates/navbar.php'); ?>

<?php bloginfo('url');?>
<?php echo get_template_directory_uri(); ?>

<?php get_footer(); ?>