<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package metropwp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php include (TEMPLATEPATH . '/global-templates/gtm-head.php'); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
    <?php if(is_front_page() || is_home()){
        echo get_bloginfo('name');
		} else{
			echo wp_title('');
		}?>
	</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>