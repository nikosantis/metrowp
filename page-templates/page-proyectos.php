<?php
/*
Template Name: Página Proyectos
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

<?php the_title();?>

<?php
    $args_queryproyectos = array(
        'post_type' => 'proyectos',
        'posts_per_page'    => -1,
        'post_status'       => 'publish'
    );
    query_posts($args_queryproyectos);
    // The Query
    $queryproyectos = new WP_Query( $args_queryproyectos );
?>
<?php if ( $queryproyectos->have_posts() ) : ?>
<?php while ( $queryproyectos->have_posts()) : $queryproyectos->the_post(); ?>
<?php the_title();?>
<?php the_permalink(); ?>
<?php the_field('logo_de_proyecto'); ?>
<?php the_field('ubicacion_mapa'); ?>
<?php
    $attachment_id = get_field('imagen_principal_de_proyecto');
    $size = "proyecto_thumb"; // (thumbnail, medium, large, full or custom size)
    $image_t = wp_get_attachment_image_src( $attachment_id, $size );
?>
<?php the_permalink(); ?>
<?php echo $image_t[0]; ?>
<?php the_permalink(); ?>
<?php the_field('descripcion_del_proyecto'); ?>
<?php the_field('sala_de_ventas'); ?>
<?php the_field('atencion_sala_de_ventas'); ?>
<?php the_field('dormitorios_programa'); ?>
<?php the_field('metraje_programa'); ?>

<?php endwhile; ?>
<?php endif; wp_reset_postdata();?>

<?php
get_footer();