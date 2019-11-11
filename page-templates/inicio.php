<?php
/*
Template Name: Inicio
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
<?php get_header(); ?>
<body class="home">
	<?php include (TEMPLATEPATH . '/global-templates/gtm-body.php'); ?>
    <?php include (TEMPLATEPATH . '/global-templates/navbar-inicio.php'); ?>
    <main class="main main-home" role="main">
        <section class="hero">
            <div class="container-fluid">
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-7 col-12 hero-col__l">
                        <div class="hero-carousel">
                        <?php if( have_rows('carrusel_introduccion') ): ?>
                            <div class="owl-carousel owl-theme carousel-home">
                                <?php while( have_rows('carrusel_introduccion') ): the_row();
                                $imagen = get_sub_field('imagen_carrusel_introduccion');
                                ?>
                                <div class="item carousel-home__item">
                                    <div class="bg-cover carousel-home__item__img" style="background-image: url(<?php echo $imagen; ?>);">
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12 hero-col__r">
                    <?php if( have_rows('carrusel_texto_introduccion') ): ?>
                        <div class="owl-carousel owl-theme carousel-titulo">
                        <?php while( have_rows('carrusel_texto_introduccion') ): the_row();
                        $texto = get_sub_field('texto_carrusel_introduccion');
                        ?>
                            <div class="item carousel-titulo__item">
                                <div class="carousel-titulo__item__titulo">
                                    <?php echo $texto; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                        <?php the_field('titulo_de_la_pagina'); ?>
                        <div class="hero-intro px-4">
                            <div class="row">
                                <div class="col-xl-10 col-md-12 col-12">
                                    <div class="hero-intro__box p-4">
                                        <h5 class="hero-intro__box__titulo"><?php the_field('texto_formulario_comuna'); ?></h5>
                                        <?php include (TEMPLATEPATH . '/global-templates/selectcomuna.php'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="proyectos-grid">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10 col-md-12 col-12 text-center">
                        <h2 class="titulo"><?php the_field('titulo_proyectos'); ?></h2>
                        <h3 class="subtitulo"><?php the_field('sub_titulo_proyectos'); ?></h3>
                        <?php the_field('texto_proyectos'); ?>
                    </div>
                </div>
                <?php
                    $args_queryproyectos = array(
                        'post_type'    => 'proyectos',
                        'posts_per_page'    => -1,
                        'post_status'       => 'publish',
                        'meta_key'			=> 'estado_del_proyecto',
                        'orderby'			=> 'meta_value',
                        'order'				=> 'DESC'
                    );
                    // The Query
                    $queryproyectos = new WP_Query( $args_queryproyectos );
                ?>
                <?php if ( $queryproyectos->have_posts() ) : $i = 0;?>
                <div class="row justify-content-center pt-5">
                <?php while ( $queryproyectos->have_posts() ) : $queryproyectos->the_post(); $i++; ?>
                <?php $estado_proyecto = get_field('estado_del_proyecto'); ?>
                    <div class="col-lg-4 col-md-6 col-12 mb-5" data-aos="fade-right" data-aos-delay="<?php echo $i; ?>00">
                        <article class="proyecto">
                            <header class="proyecto-thumb mb-3">
                            <?php if ( $estado_proyecto == 'no-activo' ):?>
                                <a title="<?php the_title(); ?>">
                                    <img src="<?php the_post_thumbnail_url('proyecto_thumb'); ?>" alt="<?php the_title(); ?>" class="img-fluid imghover">
                                </a>
                            <?php else: ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <img src="<?php the_post_thumbnail_url('proyecto_thumb'); ?>" alt="<?php the_title(); ?>" class="img-fluid imghover">
                                </a>
                            <?php endif; ?>
                            </header>
                            <section class="proyecto-detalle">
                                <?php if ( $estado_proyecto == 'no-activo' ):?>
                                <a title="<?php the_title(); ?>">
                                    <h4 class="proyecto-detalle__titulo"><?php the_title(); ?></h4>
                                </a>
                                <?php else: ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <h4 class="proyecto-detalle__titulo"><?php the_title(); ?></h4>
                                </a>
                                <?php endif; ?>
                                <div class="proyecto-detalle__info">
                                    <span class="proyecto-detalle__info__comuna"><?php the_field('comuna'); ?></span>
                                    <span class="proyecto-detalle__info__uf"><?php the_field('precio_desde_uf'); ?></span>
                                </div>
                                <p class="proyecto-detalle__ds"><?php the_field('tipo_subsidio'); ?></p>
                                <?php if( $estado_proyecto == 'no-activo' ): ?>
                                <?php else: ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn-mgi">Cotizar</a>
                                <?php endif; ?>
                            </section>
                            <?php if( $estado_proyecto == 'no-activo' ): ?>
                                <div class="proyecto-entrega">Agotado</div>
                            <?php else: ?>
                                <?php if( get_field('etiqueta_informativa') ): ?>
                                <div class="proyecto-entrega"><?php the_field('etiqueta_informativa'); ?></div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </article>
                    </div>
                <?php endwhile; ?>
                </div>
                <?php endif; wp_reset_postdata();?>
            </div>
        </section>
        <section class="experiencia">
        <?php
        $ID_TRA = 229;
        $page_tra = get_the_title( $ID_TRA );
        ?>
            <div class="experiencia-content">
                <img src="<?php the_field('imagen_fondo_trayectoria_inicio', $ID_TRA ); ?>" alt="<?php echo $page_tra; ?>" class="img-fluid experiencia-content__img">
                <div class="image-overlay-4"></div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-4 offset-xl-1 col-lg-4 col-12">
                        <img src="<?php the_field('logo_principal', 'option'); ?>" alt="<?php bloginfo('name'); ?>" class="experiencia-img img-fluid mb-5" data-aos="fade-up-right" data-aos-delay="200">
                        <h2 class="titulo text-w" data-aos="fade-up-right" data-aos-delay="300"><?php the_field( 'titulo_trayectoria_inicio', $ID_TRA ); ?></h2>
                        <div class="text text-w" data-aos="fade-up-right" data-aos-delay="400">
                            <?php the_field( 'texto_trayectoria_inicio', $ID_TRA ); ?>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-12">
                    <?php if( have_rows('datos_de_trayectoria', $ID_TRA ) ): $i = 1;?>
                        <ul class="experiencia-list">
                        <?php while( have_rows('datos_de_trayectoria', $ID_TRA ) ): the_row();
                            $i++;
                            $datotra = get_sub_field('dato_trayectoria');
                            $texttra = get_sub_field('texto_trayectoria');
                        ?>
                            <li class="experiencia-list__li" data-aos="fade-left" data-aos-delay="<?php echo $i; ?>00">
                                <div class="experiencia-data">
                                    <div class="experiencia-data__time"><?php echo $datotra; ?></div>
                                    <div class="experiencia-data__text"><?php echo $texttra; ?></div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php include (TEMPLATEPATH . '/global-templates/como-comprar.php'); ?>
    </main>

<?php get_footer(); ?>