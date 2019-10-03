<?php
// Register Custom Post Type Proyecto
function create_proyecto_cpt() {

	$labels = array(
		'name' => _x( 'Proyectos', 'Post Type General Name', 'metropwp' ),
		'singular_name' => _x( 'Proyecto', 'Post Type Singular Name', 'metropwp' ),
		'menu_name' => _x( 'Proyectos', 'Admin Menu text', 'metropwp' ),
		'name_admin_bar' => _x( 'Proyecto', 'Add New on Toolbar', 'metropwp' ),
		'archives' => __( 'Archivos Proyecto', 'metropwp' ),
		'attributes' => __( 'Atributos Proyecto', 'metropwp' ),
		'parent_item_colon' => __( 'Padres Proyecto:', 'metropwp' ),
		'all_items' => __( 'Todos los Proyectos', 'metropwp' ),
		'add_new_item' => __( 'Añadir nuevo Proyecto', 'metropwp' ),
		'add_new' => __( 'Añadir nuevo', 'metropwp' ),
		'new_item' => __( 'Nuevo Proyecto', 'metropwp' ),
		'edit_item' => __( 'Editar Proyecto', 'metropwp' ),
		'update_item' => __( 'Actualizar Proyecto', 'metropwp' ),
		'view_item' => __( 'Ver Proyecto', 'metropwp' ),
		'view_items' => __( 'Ver Proyectos', 'metropwp' ),
		'search_items' => __( 'Buscar Proyecto', 'metropwp' ),
		'not_found' => __( 'No se encontraron Proyectos.', 'metropwp' ),
		'not_found_in_trash' => __( 'Ningún Proyecto encontrado en la papelera.', 'metropwp' ),
		'featured_image' => __( 'Imagen destacada', 'metropwp' ),
		'set_featured_image' => __( 'Establecer imagen destacada', 'metropwp' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'metropwp' ),
		'use_featured_image' => __( 'Usar como imagen destacada', 'metropwp' ),
		'insert_into_item' => __( 'Insertar en el Proyecto', 'metropwp' ),
		'uploaded_to_this_item' => __( 'Subido a este Proyecto', 'metropwp' ),
		'items_list' => __( 'Lista de Proyectos', 'metropwp' ),
		'items_list_navigation' => __( 'Navegación por el listado de Proyectos', 'metropwp' ),
		'filter_items_list' => __( 'Lista de Proyectos filtrados', 'metropwp' ),
	);
	$args = array(
		'label' => __( 'Proyecto', 'metropwp' ),
		'description' => __( '', 'metropwp' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-multisite',
		'supports' => array(),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => true,
	);
	register_post_type( 'proyectos', $args );

}
add_action( 'init', 'create_proyecto_cpt', 0 );
// Register Custom Post Type Modelo
function create_modelo_cpt() {

	$labels = array(
		'name' => _x( 'Modelos', 'Post Type General Name', 'metropwp' ),
		'singular_name' => _x( 'Modelo', 'Post Type Singular Name', 'metropwp' ),
		'menu_name' => _x( 'Modelos', 'Admin Menu text', 'metropwp' ),
		'name_admin_bar' => _x( 'Modelo', 'Add New on Toolbar', 'metropwp' ),
		'archives' => __( 'Archivos Modelo', 'metropwp' ),
		'attributes' => __( 'Atributos Modelo', 'metropwp' ),
		'parent_item_colon' => __( 'Padres Modelo:', 'metropwp' ),
		'all_items' => __( 'Modelos', 'metropwp' ),
		'add_new_item' => __( 'Añadir nuevo Modelo', 'metropwp' ),
		'add_new' => __( 'Añadir nueva', 'metropwp' ),
		'new_item' => __( 'Nuevo Modelo', 'metropwp' ),
		'edit_item' => __( 'Editar Modelo', 'metropwp' ),
		'update_item' => __( 'Actualizar Modelo', 'metropwp' ),
		'view_item' => __( 'Ver Modelo', 'metropwp' ),
		'view_items' => __( 'Ver Modelos', 'metropwp' ),
		'search_items' => __( 'Buscar Modelo', 'metropwp' ),
		'not_found' => __( 'No se encontraron Modelos.', 'metropwp' ),
		'not_found_in_trash' => __( 'Ningún Modelo encontrado en la papelera.', 'metropwp' ),
		'featured_image' => __( 'Imagen destacada', 'metropwp' ),
		'set_featured_image' => __( 'Establecer imagen destacada', 'metropwp' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'metropwp' ),
		'use_featured_image' => __( 'Usar como imagen destacada', 'metropwp' ),
		'insert_into_item' => __( 'Insertar en el Modelo', 'metropwp' ),
		'uploaded_to_this_item' => __( 'Subido a este Modelo', 'metropwp' ),
		'items_list' => __( 'Lista de Modelos', 'metropwp' ),
		'items_list_navigation' => __( 'Navegación por el listado de Modelos', 'metropwp' ),
		'filter_items_list' => __( 'Lista de Modelos filtrados', 'metropwp' ),
	);
	$args = array(
		'label' => __( 'Modelo', 'metropwp' ),
		'description' => __( '', 'metropwp' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-home',
		'supports' => array(),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => 'edit.php?post_type=proyectos',
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post'
	);
	register_post_type( 'modelos', $args );

}
add_action( 'init', 'create_modelo_cpt', 0 );

function my_permalinks($permalink, $post, $leavename) {
    $post_id = $post->ID;
    if($post->post_type != 'modelos' || empty($permalink) || in_array($post->post_status, array('draft', 'pending', 'auto-draft')))
        return $permalink;
    $parent = get_field('vincular_modelo_a_proyecto');
    // $parent = $post->post_parent;
    $parent_post = get_post( $parent );
    $permalink = str_replace('%proyectos%', $parent_post->post_name, $permalink);
    return $permalink;
}
add_filter('post_type_link', 'my_permalinks', 10, 3);

// Crear URL personalizada en Modelos
function my_add_rewrite_rules() {
    add_rewrite_tag('%modelos%', '([^/]+)', 'modelos=');
    add_permastruct('modelos', '/proyectos/%proyectos%/modelos/%modelos%', true);
    add_rewrite_rule('^proyectos/([^/]+)/modelos/([^/]+)/?','index.php?modelos=$matches[2]','top');


}
add_action( 'init', 'my_add_rewrite_rules' );
?>
