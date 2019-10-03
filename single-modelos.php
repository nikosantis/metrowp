<?php
/*
 * Template Name: Single Modelos
 * Template Post Type: modelos
 *
 * This is the custom post type post template. If you edit the post type name, you've got
 * to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is "register_post_type( 'bookmarks')",
 * then your single template should be single-bookmarks.php
 *
 * Be aware that you should rename 'custom_cat' and 'custom_tag' to the appropiate custom
 * category and taxonomy slugs, or this template will not finish to load properly.
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>
<?php get_header();?>
<body <?php body_class( 'single-modelo' ); ?>>
	<?php include (TEMPLATEPATH . '/global-templates/gtm-body.php'); ?>
    <header class="single-modelo--header fixed-top">
    <?php include (TEMPLATEPATH . '/global-templates/navbar.php'); ?>
    </header>

<?php
    $vincular = get_field('vincular_planta_a_proyecto');
    $id_proyecto = $vincular->ID;
?>
<?php echo get_template_directory_uri(); ?>
<?php echo $vincular->post_title; ?>
<?php echo get_permalink( $id_proyecto ); ?>
<?php
    $args_queryplantas = array(
        'post_type'    => 'plantas',
        'posts_per_page'    => -1,
        'post_status'       => 'publish',
        'meta_query' => array(
            array(
                'key' => 'vincular_planta_a_proyecto',
                'value' => '' . $id_proyecto . '',
                'compare' => '='
            )
        )
    );
    // The Query
    $queryplantas = new WP_Query( $args_queryplantas );
?>
<?php if ( $queryplantas->have_posts() ) : ?>
<?php while ( $queryplantas->have_posts() ) : $queryplantas->the_post(); ?>
<?php the_permalink(); ?>
<?php the_field( 'imagen_de_planta' ); ?>
<?php the_title();?>
<?php the_field( 'tipo_de_planta' ); ?>
<?php endwhile; ?>
<?php endif; wp_reset_postdata();?>
<?php the_title();?>
<?php the_field( 'descripcion_del_proyecto', $vincular->ID );?>
<?php the_field( 'logo_de_proyecto', $vincular->ID );?>
<?php the_field( 'imagen_de_planta' ); ?>
<?php the_field( 'programa_de_planta' ); ?>
<?php the_field( 'superficie_interior' ); ?>
<?php if ( get_field('loggia')): ?>
<?php the_field( 'loggia' ); ?>
<?php endif; ?>
<?php the_field( 'superficie_terraza' ); ?>
<?php the_field( 'superficiel_total' ); ?>
<?php the_field( 'orientacion' ); ?>
<?php the_field( 'titulo_add', $vincular->ID );?>
<?php the_field( 'sala_de_ventas', $vincular->ID );?><?php the_field( 'cogido_add', $vincular->ID );?>
<?php the_field( 'telefono_proyecto', $vincular->ID );?>
<?php the_field( 'telefono_proyecto', $vincular->ID );?>
<?php the_field( 'atencion_sala_de_ventas', $vincular->ID );?>
<?php the_field( 'legal_proyecto', $vincular->ID );?>

<?php
get_footer();