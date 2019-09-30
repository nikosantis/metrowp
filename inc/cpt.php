<?php
// Register Custom Post Type Proyecto
function create_proyecto_cpt() {

	$labels = array(
		'name' => _x( 'Proyectos', 'Post Type General Name', 'mgiwp' ),
		'singular_name' => _x( 'Proyecto', 'Post Type Singular Name', 'mgiwp' ),
		'menu_name' => _x( 'Proyectos', 'Admin Menu text', 'mgiwp' ),
		'name_admin_bar' => _x( 'Proyecto', 'Add New on Toolbar', 'mgiwp' ),
		'archives' => __( 'Archivos Proyecto', 'mgiwp' ),
		'attributes' => __( 'Atributos Proyecto', 'mgiwp' ),
		'parent_item_colon' => __( 'Padres Proyecto:', 'mgiwp' ),
		'all_items' => __( 'Todos los Proyectos', 'mgiwp' ),
		'add_new_item' => __( 'Añadir nuevo Proyecto', 'mgiwp' ),
		'add_new' => __( 'Añadir nuevo', 'mgiwp' ),
		'new_item' => __( 'Nuevo Proyecto', 'mgiwp' ),
		'edit_item' => __( 'Editar Proyecto', 'mgiwp' ),
		'update_item' => __( 'Actualizar Proyecto', 'mgiwp' ),
		'view_item' => __( 'Ver Proyecto', 'mgiwp' ),
		'view_items' => __( 'Ver Proyectos', 'mgiwp' ),
		'search_items' => __( 'Buscar Proyecto', 'mgiwp' ),
		'not_found' => __( 'No se encontraron Proyectos.', 'mgiwp' ),
		'not_found_in_trash' => __( 'Ningún Proyecto encontrado en la papelera.', 'mgiwp' ),
		'featured_image' => __( 'Imagen destacada', 'mgiwp' ),
		'set_featured_image' => __( 'Establecer imagen destacada', 'mgiwp' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'mgiwp' ),
		'use_featured_image' => __( 'Usar como imagen destacada', 'mgiwp' ),
		'insert_into_item' => __( 'Insertar en el Proyecto', 'mgiwp' ),
		'uploaded_to_this_item' => __( 'Subido a este Proyecto', 'mgiwp' ),
		'items_list' => __( 'Lista de Proyectos', 'mgiwp' ),
		'items_list_navigation' => __( 'Navegación por el listado de Proyectos', 'mgiwp' ),
		'filter_items_list' => __( 'Lista de Proyectos filtrados', 'mgiwp' ),
	);
	$args = array(
		'label' => __( 'Proyecto', 'mgiwp' ),
		'description' => __( '', 'mgiwp' ),
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
		'name' => _x( 'Modelos', 'Post Type General Name', 'mgiwp' ),
		'singular_name' => _x( 'Modelo', 'Post Type Singular Name', 'mgiwp' ),
		'menu_name' => _x( 'Modelos', 'Admin Menu text', 'mgiwp' ),
		'name_admin_bar' => _x( 'Modelo', 'Add New on Toolbar', 'mgiwp' ),
		'archives' => __( 'Archivos Modelo', 'mgiwp' ),
		'attributes' => __( 'Atributos Modelo', 'mgiwp' ),
		'parent_item_colon' => __( 'Padres Modelo:', 'mgiwp' ),
		'all_items' => __( 'Modelos', 'mgiwp' ),
		'add_new_item' => __( 'Añadir nuevo Modelo', 'mgiwp' ),
		'add_new' => __( 'Añadir nueva', 'mgiwp' ),
		'new_item' => __( 'Nuevo Modelo', 'mgiwp' ),
		'edit_item' => __( 'Editar Modelo', 'mgiwp' ),
		'update_item' => __( 'Actualizar Modelo', 'mgiwp' ),
		'view_item' => __( 'Ver Modelo', 'mgiwp' ),
		'view_items' => __( 'Ver Modelos', 'mgiwp' ),
		'search_items' => __( 'Buscar Modelo', 'mgiwp' ),
		'not_found' => __( 'No se encontraron Modelos.', 'mgiwp' ),
		'not_found_in_trash' => __( 'Ningún Modelo encontrado en la papelera.', 'mgiwp' ),
		'featured_image' => __( 'Imagen destacada', 'mgiwp' ),
		'set_featured_image' => __( 'Establecer imagen destacada', 'mgiwp' ),
		'remove_featured_image' => __( 'Borrar imagen destacada', 'mgiwp' ),
		'use_featured_image' => __( 'Usar como imagen destacada', 'mgiwp' ),
		'insert_into_item' => __( 'Insertar en el Modelo', 'mgiwp' ),
		'uploaded_to_this_item' => __( 'Subido a este Modelo', 'mgiwp' ),
		'items_list' => __( 'Lista de Modelos', 'mgiwp' ),
		'items_list_navigation' => __( 'Navegación por el listado de Modelos', 'mgiwp' ),
		'filter_items_list' => __( 'Lista de Modelos filtrados', 'mgiwp' ),
	);
	$args = array(
		'label' => __( 'Modelo', 'mgiwp' ),
		'description' => __( '', 'mgiwp' ),
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
