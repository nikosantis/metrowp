<?php
/*
Template Name: Página Tengo Subsidio
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
<?php get_header();?>
<body <?php body_class( 'page page-principal' ); ?>>
    <?php include (TEMPLATEPATH . '/global-templates/gtm-body.php'); ?>
    <header class="header-mgi page-principal__header fixed-top">
    <?php include (TEMPLATEPATH . '/global-templates/navbar.php'); ?>
    </header>

<?php
get_footer();