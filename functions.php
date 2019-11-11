<?php

$mgiwp_includes = array(
	'/cleanup.php',
	'/setup.php',
	'/enqueue.php',
	'/class-wp-bootstrap-navwalker.php',
	'/cpt.php',
	'/widgets.php'
);
foreach ( $mgiwp_includes as $file ) {
	$filepath = locate_template( '/inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}