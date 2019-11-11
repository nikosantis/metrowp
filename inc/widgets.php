<?php

add_action( 'widgets_init', 'metrowp_widgets_init' );

if ( ! function_exists( 'metrowp_widgets_init' ) ) {
	/**
	 * Initializes themes widgets.
	 */
	function metrowp_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Sidebar Principal', 'metrowp' ),
			'id'            => 'sidebar-principal',
			'description'   => __( 'Sidebar para el contenido', 'metrowp' ),
			'before_widget' => '<aside class="widget %2$s" id="%1$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-titulo">',
			'after_title'   => '</h3>',
		) );

	}
} // endif function_exists( 'metrowp_widgets_init' ).

// widgets
class selectcomuna extends WP_Widget {

	public function __construct() {

		parent::__construct(
			'selectcomuna',
			__( 'Seleccionar Comuna', 'metrowp' ),
			array(
				'description' => __( 'Widget que muestra un dropdown de las comunas disponibles', 'metrowp' ),
				'classname'   => 'widget-selectcomuna',
			)
		);

	}

	public function widget( $args, $instance ) {

		$title  = ( ! empty( $instance['metrowp_title']  ) ) ? $instance['metrowp_title'] : __( '' );

		if ( ! $number )
			$number = 3;

		// Before widget tag
		echo $args['before_widget'];

		// Title
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		?>
		<?php include (TEMPLATEPATH . '/global-templates/selectcomuna.php'); ?>
		<?php // After widget tag
		echo $args['after_widget'];

	}

	public function form( $instance ) {

		// Set default values
		$instance = wp_parse_args( (array) $instance, array(
			'metrowp_title' => '',
		) );

		// Retrieve an existing value from the database
		$metrowp_title = !empty( $instance['metrowp_title'] ) ? $instance['metrowp_title'] : '';

		// Form fields
		echo '<p>';
		echo '	<label for="' . $this->get_field_id( 'metrowp_title' ) . '" class="metrowp_title_label">' . __( 'Title', 'metrowp' ) . '</label>';
		echo '	<input type="text" id="' . $this->get_field_id( 'metrowp_title' ) . '" name="' . $this->get_field_name( 'metrowp_title' ) . '" class="widefat" placeholder="' . esc_attr__( '', 'metrowp' ) . '" value="' . esc_attr( $metrowp_title ) . '">';
		echo '</p>';

	}

	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;
			$instance['metrowp_title'] = !empty( $new_instance['metrowp_title'] ) ? strip_tags( $new_instance['metrowp_title'] ) : '';

		return $instance;

	}
}
function metrowp_register_widgets() {
	register_widget( 'selectcomuna' );
}
add_action( 'widgets_init', 'metrowp_register_widgets' );


class seoproyectos extends WP_Widget {

	public function __construct() {

		parent::__construct(
			'seoproyectos',
			__( 'Proyectos en Venta', 'metrowp' ),
			array(
				'description' => __( 'Widget que muestra los proyectos en venta disponibles', 'metrowp' ),
				'classname'   => 'widget-seoproyectos',
			)
		);

	}

	public function widget( $args, $instance ) {

		$title  = ( ! empty( $instance['metrowp_title']  ) ) ? $instance['metrowp_title'] : __( '' );

		if ( ! $number )
			$number = 5;

		// Before widget tag
		echo $args['before_widget'];

		// Title
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

		$query = new WP_Query( array (
			'post_type'    => 'proyectos',
			'posts_per_page'    => -1,
			'post_status'       => 'publish',
			'meta_key'			=> 'estado_del_proyecto',
			'orderby'			=> 'meta_value',
			'order'				=> 'DESC'
		) );
		if ( $query->have_posts() ) :
			echo '<div class="widget-content">';
			while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="media align-items-center mb-3">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
					</a>
					<div class="media-body pl-3">
							<h6 class="widget-proyectotitulo mb-0">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</h6>
							<div class="widget-detalleproyecto">
									<div class="widget-comuna"><?php the_field('comuna'); ?></div>
									<div class="widget-uf"><?php the_field('precio_desde_uf'); ?></div>
							</div>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata();
			echo '</div>';
		endif;

		// After widget tag
		echo $args['after_widget'];

	}

	public function form( $instance ) {

		// Set default values
		$instance = wp_parse_args( (array) $instance, array(
			'metrowp_title' => '',
		) );

		// Retrieve an existing value from the database
		$metrowp_title = !empty( $instance['metrowp_title'] ) ? $instance['metrowp_title'] : '';

		// Form fields
		echo '<p>';
		echo '	<label for="' . $this->get_field_id( 'metrowp_title' ) . '" class="metrowp_title_label">' . __( 'Title', 'metrowp' ) . '</label>';
		echo '	<input type="text" id="' . $this->get_field_id( 'metrowp_title' ) . '" name="' . $this->get_field_name( 'metrowp_title' ) . '" class="widefat" placeholder="' . esc_attr__( '', 'metrowp' ) . '" value="' . esc_attr( $metrowp_title ) . '">';
		echo '</p>';

	}

	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;
			$instance['metrowp_title'] = !empty( $new_instance['metrowp_title'] ) ? strip_tags( $new_instance['metrowp_title'] ) : '';

		return $instance;

	}
}
function metrowp_seo_register_widgets() {
	register_widget( 'seoproyectos' );
}
add_action( 'widgets_init', 'metrowp_seo_register_widgets' );