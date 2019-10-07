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
<body <?php body_class( 'body proyecto' ); ?>>
	<?php include (TEMPLATEPATH . '/global-templates/gtm-body.php'); ?>
    <header class="header-proyecto fixed-top">
    <?php include (TEMPLATEPATH . '/global-templates/navbar-proyectos.php'); ?>
    </header>
    <main class="main main-proyecto" role="main">
        <section class="hero" id="inicio">
            <div class="container-fluid">
                <div class="row align-items-center position-relative">
                    <div class="col-12 order-2 col-lg-4 col-xl-4 order-lg-1 hero-col pr-0">
                        <div class="hero-intro">
                            <div class="hero-intro__box py-5">
                                <h5 class="hero-intro__box__ds"><?php the_field('texto_de_subsidio'); ?></h5>
                                <h1 class="hero-intro__box__titulo"><?php the_title(); ?></h1>
                                <p class="hero-intro__box__uf"><?php the_field('precio_desde_uf'); ?></p>
                                <p class="hero-intro__box__comuna"><?php the_field('comuna'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 order-1 col-lg-8 col-xl-7 order-lg-2 hero-col px-0">
                        <div class="hero-carousel">
                            <?php if( have_rows('carrusel_inicio') ): ?>
                            <div class="owl-carousel owl-theme carousel-proyecto">
                                <?php while( have_rows('carrusel_inicio') ): the_row();

                                $image = get_sub_field('imagen_carrusel_inicio');
                                ?>
                                <div class="item galeria-carousel__item">
                                    <div class="carousel-proyecto__item__img bg-cover" style="background-image: url(<?php echo $image; ?>);"></div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="postintro">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8 col-xl-7 offset-lg-4 postintro-col px-0">
                        <div class="row justify-content-center no-gutters">
                            <div class="col-lg-6 col-12 postintro-ubicacion">
                                <a href="#ubicacion">
                                    <div class="postintro-ubicacion__map">
                                        <address class="postintro-ubicacion__map__direccion">
                                            <i class="fas fa-map-marker-alt"></i> <?php the_field('direccion_del_proyecto'); ?>
                                        </address>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-6 postintro-modelos">
                                <a href="#modelos" class="btn btn-cot">Ver Modelos</a>
                            </div>
                            <div class="col-lg-3 col-6 postintro-info">
                                <a href="#saladeventas" class="btn btn-info">Solicitar Información del Proyecto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="modelos" id="modelos">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-12 text-center" data-aos="fade-up">
                        <h2 class="titulo"><?php the_field('titulo_seccion_modelos'); ?></h2>
                        <?php the_field('subtitulo_seccion_modelos'); ?>
                        <?php the_field('texto_seccion_modelos'); ?>
                    </div>
                </div>
                <div class="row justify-content-center">
                <?php
                $args_querymodelos = array(
                    'post_type'    => 'modelos',
                    'posts_per_page'    => -1,
                    'post_status'       => 'publish',
                    'meta_key'			=> 'estado_de_modelo',
                    'orderby'			=> 'meta_value',
                    'order'				=> 'DESC',
                    'meta_query' => array(
                        array(
                            'key' => 'vincular_modelo_a_proyecto',
                            'value' => '' . get_the_ID() . '',
                            'compare' => '='
                        )
                    )
                );
                // The Query
                $querymodelos = new WP_Query( $args_querymodelos );
                ?>
                <?php if ( $querymodelos->have_posts() ) : $i = 0;?>
                <?php while ( $querymodelos->have_posts() ) : $querymodelos->the_post(); $i++; ?>
                <?php $estado_modelo = get_field('estado_de_modelo'); ?>
                    <div class="col-xl-4 col-lg-5 col-md-6 col-12" data-aos="fade-right" data-aos-delay="<?php echo $i; ?>00">
                        <article class="modelo <?php if ( $estado_modelo == 'agotado'):?>modelo-agotado <?php endif; ?>mb-5">
                            <header class="modelo-thumb">
                            <?php if ( $estado_modelo == 'agotado'):?>
                                <a title="<?php the_title(); ?>">
                                    <img src="<?php the_post_thumbnail_url('modelo_thumb'); ?>" alt="<?php the_title(); ?>" class="img-fluid imghover">
                                </a>
                            <?php else: ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <img src="<?php the_post_thumbnail_url('modelo_thumb'); ?>" alt="<?php the_title(); ?>" class="img-fluid imghover">
                                </a>
                            <?php endif; ?>
                            </header>
                            <section class="modelo-detalle py-3">
                                <div class="row">
                                    <div class="col-8 pr-0">
                                        <h4 class="modelo-detalle__titulo"><?php the_title(); ?></h4>
                                        <span class="modelo-detalle__superficie"><?php the_field( 'metraje' ); ?></span>
                                        <h5 class="modelo-detalle__uf"><?php the_field( 'desde_uf' ); ?></h5>
                                        <p class="modelo-detalle__terreno"><?php the_field( 'terrenos_hasta' ); ?></p>
                                    </div>
                                    <div class="col-4 align-self-center">
                                        <?php if( $estado_modelo == 'agotado'): ?>
                                        <?php else: ?>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-mgi">Cotizar</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if( $estado_modelo == 'agotado'): ?>
                                    <div class="modelo-entrega">Agotado</div>
                                <?php else: ?>
                                    <div class="modelo-entrega"><?php the_field( 'etiqueta_informativa' ); ?></div>
                                <?php endif; ?>
                            </section>
                        </article>
                    </div>
                <?php endwhile; ?>
                <?php endif; wp_reset_postdata();?>
                </div>
            </div>
        </section>
        <?php if( get_field('titulo_seccion_informativos') ): ?>
        <section class="documentacion">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h2 class="titulo"><?php the_field('titulo_seccion_informativos'); ?></h2>
                        <h3 class="subtitulo"><?php the_field('subtitulo_seccion_informativos'); ?></h3>
                        <button type="button" class="btn btn-mgi" data-toggle="modal" data-target="#documentacionInfo">Ver Más</button>
                        <div class="modal fade" id="documentacionInfo" tabindex="-1" role="dialog" aria-labelledby="documentacionInfoLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="documentacionInfoLabel"><?php the_field('titulo_seccion_informativos'); ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <?php if( have_rows('informativos') ): ?>
                                            <div class="col-12 d-block d-sm-block d-md-block d-xl-none">
                                                <?php while( have_rows('informativos') ): the_row();

                                                $filepdf = get_sub_field('documento');
                                                $filetitle = get_sub_field('nombre_del_documento');
                                                ?>
                                                <a href="<?php echo $filepdf; ?>" target="_blank" class="btn btn-mgi mb-3 mx-3"><?php echo $filetitle; ?></a>
                                                <?php endwhile; ?>
                                            </div>
                                            <?php endif; ?>
                                            <div class="col-12 d-sm-none d-none d-md-none d-xl-block">
                                                <?php if( have_rows('informativos') ):$i=0; ?>
                                                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                                                    <?php while( have_rows('informativos') ): the_row();
                                                    $i++;
                                                    $filepdf = get_sub_field('documento');
                                                    $filetitle = get_sub_field('nombre_del_documento');
                                                    ?>
                                                    <li class="nav-item">
                                                        <a class="nav-link <?php if( $i < 2 ): ?>active<?php endif; ?>" id="pills-doc<?php echo $i; ?>-tab" data-toggle="pill" href="#pills-doc<?php echo $i; ?>" role="tab" aria-controls="pills-doc<?php echo $i; ?>" aria-selected="true"><?php echo $filetitle; ?></a>
                                                    </li>
                                                    <?php endwhile; ?>
                                                </ul>
                                                <?php endif; ?>
                                                <div class="tab-content" id="pills-tabContent">
                                                <?php if( have_rows('informativos') ):$i=0; ?>
                                                    <?php while( have_rows('informativos') ): the_row();
                                                    $i++;
                                                    $filepdf = get_sub_field('documento');
                                                    $filetitle = get_sub_field('nombre_del_documento');
                                                    ?>
                                                    <div class="tab-pane fade <?php if( $i < 2 ): ?>show active<?php endif; ?>" id="pills-doc<?php echo $i; ?>" role="tabpanel" aria-labelledby="pills-doc<?php echo $i; ?>-tab">
                                                        <div class="pdfdoc<?php echo $i; ?>">
                                                            <embed src="<?php echo $filepdf; ?>" type="application/pdf" width="100%" height="400px">
                                                        </div>
                                                    </div>
                                                    <?php endwhile; ?>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-mgi" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <section class="terminaciones" id="terminaciones">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-12 terminaciones-col__l" data-aos="fade-up-right">
                    <?php if( have_rows('carrusel_seccion_terminaciones') ): ?>
                        <div class="owl-carousel owl-theme terminaciones-carousel">
                            <?php while( have_rows('carrusel_seccion_terminaciones') ): the_row();

                            $image = get_sub_field('imagen_carrusel_terminaciones');
                            ?>
                            <div class="item galeria-carousel__item">
                                <div class="terminaciones-carousel__item__img bg-cover" style="background-image: url(<?php echo $image; ?>);"></div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    </div>
                    <div class="col-lg-5 col-12 terminaciones-col__r" data-aos="fade-up-left">
                        <h2 class="titulo text-w">Terminaciones</h2>
                        <h3 class="subtitulo text-w"><?php the_field('subtitulo_seccion_terminaciones'); ?></h3>
                        <div class="terminaciones-text">
                            <?php the_field('contenido_seccion_terminaciones'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="galeria">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 galeria-col" data-aos="fade-up">
                    <?php if( have_rows('imagenes_de_galeria') ): ?>
                        <div class="owl-carousel owl-theme galeria-carousel">
                            <?php while( have_rows('imagenes_de_galeria') ): the_row();

                            $image = get_sub_field('imagen_galeria');
                            ?>
                            <div class="item galeria-carousel__item">
                                <div class="galeria-carousel__item__img bg-cover" style="background-image: url(<?php echo $image; ?>);"></div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="barrio" id="barrio">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12 barrio-col__l" data-aos="fade-up-right">
                        <h2 class="titulo">Barrio</h2>
                        <h3 class="subtitulo"><?php the_field('subtitulo_seccion_barrio'); ?></h3>
                        <div class="barrio-text">
                            <?php the_field('contenido_seccion_barrio'); ?>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 barrio-col__r" data-aos="fade-up-left">
                    <?php if( have_rows('carrusel_seccion_barrio') ): ?>
                        <div class="owl-carousel owl-theme barrio-carousel">
                            <?php while( have_rows('carrusel_seccion_barrio') ): the_row();

                            $image = get_sub_field('imagen_carrusel_barrio');
                            ?>
                            <div class="item barrio-carousel__item">
                                <div class="barrio-carousel__item__img bg-cover" style="background-image: url(<?php echo $image; ?>);"></div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php if( get_field('url_de_video') ): ?>
        <section class="video" id="video" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?php the_field('url_de_video'); ?>" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <section class="ubicacion" id="ubicacion">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-12 ubicacion-col__l" data-aos="fade-up-right">
                        <div id="map"></div>
                        <?php if( have_rows('datos_de_mapa') ):

                        while( have_rows('datos_de_mapa') ): the_row();
                            // vars
                            $lat = get_sub_field('latitud');
                            $lng = get_sub_field('longitud');
                            $zoom = get_sub_field('zoom');
                            $maptype = get_sub_field('tipo_de_mapa');
                        ?>
                        <script>
                        function initMap() {
                            var metro = {
                                lat: <?php echo $lat; ?>,
                                lng: <?php echo $lng; ?>
                            };
                            var nameU = '<?php the_title(); ?>';
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: <?php echo $zoom; ?>,
                                mapTypeId: '<?php echo $maptype; ?>',
                                center: metro
                            });
                            var contentString = '<div class="map-content">'+
                            '<p class="map-content__p mb-0"><b>'+ nameU +'</b></p>'+
                            '</div>';
                            var infowindow = new google.maps.InfoWindow({
                                content: contentString
                            });
                            <?php
                            if( have_rows('markers_google_maps', 'option') ):
                            while ( have_rows('markers_google_maps', 'option') ) : the_row();
                            $icono = get_sub_field('icono');
                            ?>
                            var image = '<?php echo $icono; ?>';
                            <?php
                            endwhile;
                            endif;
                            ?>
                            var marker = new google.maps.Marker({
                                position: metro,
                                map: map,
                                icon: image
                            });
                            google.maps.event.addListener(marker, 'click', function() {
                                infowindow.open(map,marker);
                            });
                            infowindow.open(map,marker);
                        }
                        </script>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=<?php the_field('api_google_maps', 'option'); ?>&callback=initMap">
                        </script>
                    </div>
                    <div class="col-lg-5 col-12 ubicacion-col__r" data-aos="fade-up-left">
                        <h2 class="titulo text-w">Ubicación</h2>
                        <address class="ubicacion-direccion">
                            <i class="fas fa-map-marker-alt"></i> <?php the_field('direccion_del_proyecto'); ?>
                        </address>
                        <h3 class="subtitulo text-w"><?php the_field('subtitulo_seccion_ubicacion'); ?></h3>
                        <div class="ubicacion-text"><?php the_field('contenido_seccion_ubicacion'); ?></div>
                        <a href="<?php the_field('url_google_maps'); ?>" class="btn btn-mgi mt-4" target="_blank"><i class="fas fa-map-marked-alt"></i> Ir con Google Maps</a>
                        <a href="<?php the_field('url_waze'); ?>" class="btn btn-mgi mt-4" target="_blank"><i class="fab fa-waze"></i> Ir con Waze</a>
                    </div>
                </div>
            </div>
        </section>
        <?php include (TEMPLATEPATH . '/global-templates/como-comprar.php'); ?>
        <section class="saladeventas" id="saladeventas">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-12 text-center" data-aos="fade-up">
                        <h2 class="titulo">Contacta Hoy a Nuestro Asesor Inmobiliario</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 saladeventas-col__l" data-aos="fade-up-right">
                        <div class="row justify-content-start">
                            <div class="col-3 mb-4">
                                <img src="<?php the_field('foto_asesor_inmobiliario'); ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-9 py-2">
                                <ul class="list-unstyled saladeventas-ul">
                                    <li class="mb-2 d-flex">
                                        <i class="fas fa-user fa-lg"></i>
                                        <div class="ml-3">
                                            <span class="saladeventas-ul__text"><?php the_field('nombre_asesor_inmobiliario'); ?></span>
                                        </div>
                                    </li>
                                    <li class="mb-2 d-flex">
                                        <i class="fas fa-mobile-alt fa-lg"></i>
                                        <div class="ml-3">
                                            <span class="saladeventas-ul__text ml-1"><a href="tel:<?php the_field('telefono_asesor_inmobiliario'); ?>"><?php the_field('telefono_asesor_inmobiliario'); ?></a></span>
                                        </div>
                                    </li>
                                    <li class="mb-2 d-flex">
                                            <i class="fab fa-whatsapp fa-lg"></i>
                                        <div class="ml-3">
                                            <span class="saladeventas-ul__text"><a href="<?php the_field('whatsapp_asesor_inmobiliario'); ?>">+<?php the_field('telefono_asesor_inmobiliario'); ?></a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <ul class="list-unstyled">
                                    <li class="mb-3 d-flex">
                                        <i class="fas fa-map-marker-alt fa-lg"></i>
                                        <div class="ml-3">
                                            <span class="saladeventas-ul__text ml-1"><?php the_field('direccion_del_proyecto'); ?></span>
                                        </div>
                                    </li>
                                    <li class="mb-3 d-flex">
                                        <i class="fas fa-clock fa-lg"></i>
                                        <div class="ml-3">
                                            <div class="saladeventas-ul__text"><?php the_field('horarios_de_atencion_asesor_inmobiliario'); ?></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php $estado_proyecto = get_field('estado_del_proyecto'); ?>
                    <div class="col-md-6 saladeventas-col__r <?php if( $estado_proyecto == 'no-activo'): ?>disableCF7<?php endif; ?>" data-aos="fade-up-left">
                        <?php echo do_shortcode( '[contact-form-7 id="77" title="Formulario Contacto Proyecto"]' ); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="proyecto-breadcrumb py-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center" itemscope itemtype="http://schema.org/BreadcrumbList">
                                <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <a itemtype="https://schema.org/Thing" itemprop="item" href="<?php echo esc_url( home_url('/') ); ?>">
                                        <span itemprop="name">Inicio</span>
                                        <meta itemprop="position" content="1">
                                    </a>
                                </li>
                                <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <a itemtype="https://schema.org/Thing" itemprop="item" href="<?php bloginfo('url');?>/proyectos/">
                                        <span itemprop="name">Proyectos</span>
                                        <meta itemprop="position" content="2">
                                    </a>
                                </li>
                                <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <a itemtype="https://schema.org/Thing" itemprop="item" href="<?php the_permalink(); ?>" class="active">
                                        <span itemprop="name"><?php the_title(); ?></span>
                                        <meta itemprop="position" content="3">
                                    </a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();