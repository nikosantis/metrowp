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
    <main class="main-post main-proyectos padding-toggler-no">
        <section class="proyectos-content main-post__content">
            <div class="container">
                <div class="row content-title">
                    <div class="col-12"><h1><?php the_title();?></h1></div>
                </div>
                <div class="row content-post py-5">
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
                    <div class="col-12 py-4">
                        <article class="proyecto">
                            <header class="proyecto-header">
                                <div class="row">
                                    <div class="col-md-9 col-12">
                                        <h2 class="proyecto-header__title"><?php the_title();?></h2>
                                        <div class="proyecto-header__map">
                                            <button class="btn btn-sin" type="button" data-toggle="collapse" data-target="#collapseUbicacion" aria-expanded="false" aria-controls="collapseUbicacion">
                                                <i class="fas fa-map-marker-alt"></i> Ver Ubicación
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-12">
                                        <a href="<?php the_permalink(); ?>"><img src="<?php the_field('logo_de_proyecto'); ?>" alt="" class="proyecto-header__logo img-fluid"></a>
                                    </div>
                                    <div class="col-12">
                                        <div class="collapse" id="collapseUbicacion">
                                            <div class="card card-body">
                                            <?php the_field('ubicacion_mapa'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <section class="proyecto-info">
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="proyecto-info__thumb">
                                        <?php 
                                            $attachment_id = get_field('imagen_principal_de_proyecto');
                                            $size = "proyecto_thumb"; // (thumbnail, medium, large, full or custom size)
                                            $image_t = wp_get_attachment_image_src( $attachment_id, $size );
                                        ?> 
                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image_t[0]; ?>" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="proyecto-info__link">
                                            <a href="<?php the_permalink(); ?>" class="btn btn-im">Ver Proyecto</a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-12 py-2">
                                       <div class="proyecto-info__content">
                                            <?php the_field('descripcion_del_proyecto'); ?>
                                            <p><b>Sala de Ventas:</b> <?php the_field('sala_de_ventas'); ?></p>
                                            <p><b>Atención:</b> <?php the_field('atencion_sala_de_ventas'); ?></p>
                                       </div>
                                       <div class="proyecto-info__programa">
                                           <div class="row justify-content-start">
                                                <div class="col-4 proyecto-info__programa__dorm">
                                                    <i class="fas fa-bed fa-2x"></i> <?php the_field('dormitorios_programa'); ?>
                                                </div>
                                                <div class="col-4 proyecto-info__programa__mts">
                                                    <i class="fas fa-ruler-combined fa-2x"></i> <?php the_field('metraje_programa'); ?>
                                                </div>
                                           </div>
                                       </div>
                                    </div>
                                </div>
                            </section>
                        </article>   
                    </div>
                    <?php endwhile; ?>
                <?php endif; wp_reset_postdata();?>     
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();