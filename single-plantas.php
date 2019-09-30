<?php
/*
 * Template Name: Single Plantas
 * Template Post Type: plantas
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
<?php 
    $vincular = get_field('vincular_planta_a_proyecto');
    $id_proyecto = $vincular->ID;
?>
    <main class="main-post main-planta padding-toggler-no">
        <section class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-2 col-12">
                        <a href="#" class="topbar-brand mx-auto">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-stitchkin.png" alt="" class="sidebar-brand__logo img-fluid">
                        </a>
                    </div>
                    <div class="col-md-6 col-12">
                        <h2 class="topbar-title__proyecto"><?php echo $vincular->post_title; ?></h2>
                    </div>
                    <div class="col-md-4 col-12 topbar-btn">
                        <button class="btn btn-wht" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Ver Otras Plantas
                        </button>
                        <a href="<?php echo get_permalink( $id_proyecto ); ?>" class="btn btn-imb"><i class="fas fa-chevron-left"></i> Volver</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="topplantas collapse" id="collapseExample">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="card card-body topplantas-card">
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
                            <ul class="list-inline">
                            <?php while ( $queryplantas->have_posts() ) : $queryplantas->the_post(); ?>
                                <li class="list-inline-item">
                                    <a href="<?php the_permalink(); ?>">
                                        <article class="topplantas-card__planta">
                                            <img src="<?php the_field( 'imagen_de_planta' ); ?>" alt="" class="topplantas-card__planta__img">
                                            <h5 class="topplantas-card__planta__title"><?php the_title();?></h5>
                                            <p class="topplantas-card__planta__programa"><?php the_field( 'tipo_de_planta' ); ?></p>
                                        </article>
                                    </a>
                                </li>   
                                <?php endwhile; ?>      
                            </ul>
                        <?php endif; wp_reset_postdata();?> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <header class="planta-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="planta-header__title"><?php the_title();?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 col-12">
                        <div class="planta-header__description">
                            <?php the_field( 'descripcion_del_proyecto', $vincular->ID );?>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="planta-content__logo">
                            <img src="<?php the_field( 'logo_de_proyecto', $vincular->ID );?>" alt="" class=" img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="planta-content planta-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="planta-thumb">
                                    <img src="<?php the_field( 'imagen_de_planta' ); ?>" alt="" class="img-fluid">
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-3 col-12 py-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="planta-info text-left">
                                    <div class="planta-info__programa"><?php the_field( 'programa_de_planta' ); ?></div>
                                    <div class="planta-info__mts">
                                        <p><b>Interior:</b> <?php the_field( 'superficie_interior' ); ?></p>
                                        <?php if ( get_field('loggia')): ?>
                                        <p><b>Loggia:</b> <?php the_field( 'loggia' ); ?></p>
                                        <?php endif; ?>
                                        <p><b>Terraza:</b> <?php the_field( 'superficie_terraza' ); ?></p>
                                        <p><b>Total:</b> <?php the_field( 'superficiel_total' ); ?></p>
                                    </div>
                                    <div class="planta-info__orientacion">
                                        <p><b>Orientacion:</b> <?php the_field( 'orientacion' ); ?></p>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 planta-form py-3">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="planta-form__title">Cotizar Planta</h2>  
                            </div>
                            <div class="col-12">
                            <div class="d-none proyecto--add-form" >
                                <input type="hidden" name="titulo-add" id="titulo-add" value="<?php the_field( 'titulo_add', $vincular->ID );?>">
                                <input type="hidden" name="codigo-add" id="codigo-add" value="<?php the_field( 'cogido_add', $vincular->ID );?>">
                            </div>
                                <?php echo do_shortcode( '[contact-form-7 id="6" title="Cotizar Planta" html_id="formulario_cotizar"]' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
        <footer class="planta-footer planta-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="planta-footer__title">Sala de Ventas</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p><b>Sala de Ventas:</b> <?php the_field( 'sala_de_ventas', $vincular->ID );?></p>
                        <p><b>Teléfono:</b> <a href="tel:+<?php the_field( 'telefono_proyecto', $vincular->ID );?>"><?php the_field( 'telefono_proyecto', $vincular->ID );?></a></p>
                        <p><b>Atención:</b> <?php the_field( 'atencion_sala_de_ventas', $vincular->ID );?></p>
                        <p class="legal"><em>*<?php the_field( 'legal_proyecto', $vincular->ID );?></em></p>
                    </div>
                </div>
            </div>
        </footer>
    </main>
<?php
get_footer();