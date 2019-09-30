<?php
/*
 * Template Name: Single Proyectos
 * Template Post Type: proyectos
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
    <main class="main-post main-proyecto padding-toggler-no">
        <header class="proyecto-header">
            <div class="container-fluid">
                <div class="row proyecto-header__carousel">
                <?php if( have_rows('slider_header') ): ?>
                    <div class="owl-carousel owl-theme carousel-proyecto">
                    <?php while( have_rows('slider_header') ): the_row(); ?>
                    <?php 
                        $image = get_sub_field('imagen_de_slider');
                    ?>
                        <div class="item carousel-proyecto__item">
                            <div class="carousel-proyecto__item__thumb bg-cover" style="background-image: url(<?php echo $image; ?>);"></div>
                        </div>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                </div>
                <div class="row justify-content-center proyecto-header__title py-4">
                    <div class="col-12 text-center">
                        <h1 class="proyecto-header__title__proyecto"><?php the_title();?></h1>
                    </div>
                </div>
                <div class="row justify-content-center proyecto-header__nav">
                    <nav class="navbar navbar-expand-lg navbar-bgblack">
                        <div class="justify-content-center" id="navbarProyecto">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#plantas">Plantas <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#caracteristicas">Características y Terminaciones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#entorno">Entorno</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#ubicacion">Ubicación</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <section class="proyecto-intro py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <img src="<?php the_field('logo_de_proyecto'); ?>" alt="" class="proyecto-intro__logo img-fluid">
                    </div>
                    <div class="col-md-6">
                        <div class="proyecto-intro__description">
                            <?php the_field('descripcion_del_proyecto'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="proyecto-plantas proyecto-section" id="plantas">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center"><h2 class="proyecto-section__title">Plantas</h2></div>
                </div>
                <div class="row justify-content-center py-3">
                    <div class="col-12 text-center filtros">
                        <button class="btn btn-im btn-todos btn-filtro active" role="button">Todos</button>
                        <button class="btn btn-im btn-1dorm btn-filtro" role="button" data-filtro="1dorm">1 Dormitorio</button>
                        <button class="btn btn-im btn-2dorm btn-filtro" role="button" data-filtro="2dorm">2 Dormitorios</button>
                        <button class="btn btn-im btn-3dorm btn-filtro" role="button" data-filtro="3dorm">3 Dormitorios</button>
                        <button class="btn btn-im btn-4dorm btn-filtro" role="button" data-filtro="4dorm">4 Dormitorios o más</button>
                    </div>
                </div>
                <?php
                $args_queryplantas = array(
                    'post_type'    => 'plantas',
                    'posts_per_page'    => -1,
                    'post_status'       => 'publish',
                    'meta_query' => array(
                        array(
                            'key' => 'vincular_planta_a_proyecto',
                            'value' => '' . get_the_ID() . '',
                            'compare' => '='
                        )
                    ),
                    'meta_key'		=> 'tipo_de_planta',
                    'orderby'		=> 'meta_value',
                    'order'			=> 'ASC' ,
                );
                // The Query
                $queryplantas = new WP_Query( $args_queryplantas );
                ?>
                <?php if ( $queryplantas->have_posts() ) : ?>
                <div class="row justify-content-start py-5 col-plantas">
                <?php while ( $queryplantas->have_posts() ) : $queryplantas->the_post(); ?>
                    <div class="col-md-4 col-12 col-planta col-<?php the_field('tipo_de_planta'); ?>" data-planta-filtro="<?php the_field('tipo_de_planta'); ?>">
                        <article class="planta">
                            <div class="planta-thumb">
                                <img src="<?php the_field('imagen_de_planta'); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="planta-info text-center">
                                <div class="planta-info__programa"><?php the_field('programa_de_planta'); ?></div>
                                <div class="planta-info__mts">
                                    <p><b>Interior:</b> <?php the_field('superficie_interior'); ?></p>
                                    <?php if ( get_field('loggia')): ?>
                                    <p><b>Loggia:</b> <?php the_field( 'loggia' ); ?></p>
                                    <?php endif; ?>
                                    <p><b>Terraza:</b> <?php the_field('superficie_terraza'); ?></p>
                                    <p><b>Total:</b> <?php the_field('superficiel_total'); ?></p>
                                </div>
                                <div class="planta-info__orientacion">
                                    <p><b>Orientacion:</b> <?php the_field('orientacion'); ?></p>
                                </div>
                                <div class="planta-info__cotizar"><a href="<?php the_permalink(); ?>" class="btn btn-im">Cotizar Planta</a></div>
                            </div>
                        </article>
                    </div>
                <?php endwhile; ?>  
                </div>
                <?php endif; wp_reset_postdata();?> 
            </div>
        </section>
        <section class="proyecto-caracteristicas proyecto-section" id="caracteristicas">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-12">
                        <div class="proyecto-caracteristicas__thumb">
                            <img src="<?php the_field('imagen_caracteristicas_y_terminaciones'); ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-7 col-12">
                        <div class="proyecto-caracteristicas__content py-5">
                            <h2>Características y terminaciones</h2>
                            <?php the_field('texto_caracteristicas_y_terminaciones'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="proyecto-entorno proyecto-section" id="entorno">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-12">
                        <div class="proyecto-entorno__thumb">
                            <img src="<?php the_field('imagen_ubicacion_y_entorno'); ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-7 col-12">
                        <div class="proyecto-entorno__content py-5">
                            <h2>Ubicación y entorno</h2>
                            <?php the_field('texto_ubicacion_y_entorno'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="proyecto-ubicacion" id="ubicacion">
            <div class="container-fluid">
                <div class="row">
                <?php the_field('ubicacion_mapa'); ?>
                </div>
            </div>
        </section>
        <footer class="proyecto-footer proyecto-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="proyecto-footer__title">Sala de Ventas</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p><b>Sala de Ventas:</b> <?php the_field('sala_de_ventas'); ?></p>
                        <p><b>Teléfono:</b> <a href="tel:<?php the_field('telefono_proyecto'); ?>"><?php the_field('telefono_proyecto'); ?></a></p>
                        <p><b>Atención:</b> <?php the_field('atencion_sala_de_ventas'); ?></p>
                        <p class="legal"><em><?php the_field('legal_proyecto'); ?></em></p>
                    </div>
                </div>
            </div>
        </footer>
    </main>
<?php
get_footer();