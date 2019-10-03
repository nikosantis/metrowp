<?php
function metropwp_scripts() {
	// include custom jQuery
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), '', true);
	/* Styles */
	wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_style('aoscss', 'ttps://unpkg.com/aos@2.3.1/dist/aos.css');
	wp_register_style('owl-carousel', get_template_directory_uri() . '/assets/plugins/OwlCarousel/assets/owl.carousel.min.css', false, null);
	wp_enqueue_style('owl-carousel');
	wp_register_style('owl-theme', get_template_directory_uri() . '/assets/plugins/OwlCarousel/assets/owl.theme.default.min.css', false, null);
	wp_enqueue_style('owl-theme');
	wp_register_style('main-css', get_template_directory_uri() . '/assets/css/main.css', false, null);
	wp_enqueue_style('main-css');

	// fonts
	wp_enqueue_style('google-fonts-1', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap');
	wp_enqueue_style('google-fonts-2', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap');
	wp_enqueue_script( 'fontawesome','https://kit.fontawesome.com/611c0ab45a.js', array( 'jquery'),'',true );
	/* Scripts */
	wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array( 'jquery' ),'',true );
	wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
	wp_enqueue_script( 'aosjs','https://unpkg.com/aos@2.3.1/dist/aos.js', array( 'jquery' ),'',true );
	wp_register_script('sbjs', get_template_directory_uri() . '/assets/plugins/sourcebuster/sourcebuster.min.js', false, null, true);
    wp_enqueue_script('sbjs');
	wp_register_script('owl-carousel', get_template_directory_uri() . '/assets/plugins/OwlCarousel/owl.carousel.min.js', false, null, true);
	wp_enqueue_script('owl-carousel');

	if (is_singular()){
		wp_register_script('validate-js', get_template_directory_uri() . '/assets/plugins/validate/jquery.validate.min.js', false, null, true);
		wp_register_script('valid-method-js', get_template_directory_uri() . '/assets/plugins/validate/additional-methods.min.js', false, null, true);
		wp_register_script('rut-js', get_template_directory_uri() . '/assets/plugins/validate/rut.js', false, null, true);
		wp_enqueue_script('validate-js');
		wp_enqueue_script('valid-method-js');
		wp_enqueue_script('rut-js');
	}
	wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js', false, null, true);
		$script_data = array(
			'template_directory_uri' => get_template_directory_uri(),
			'templateUrl' => home_url()
		);
		wp_localize_script(
			'main-js',
			'my_data',
			$script_data
		);
	wp_enqueue_script('main-js');

}
add_action( 'wp_enqueue_scripts', 'metropwp_scripts' );