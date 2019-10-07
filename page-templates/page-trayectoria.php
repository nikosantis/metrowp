<?php
/*
Template Name: Trayectoria
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
<?php
    $current = $post->ID;
    $parent = $post->post_parent;
?>
<?php get_header();?>
<body <?php body_class( 'page page-principal trayectoria' ); ?>>
	<?php include (TEMPLATEPATH . '/global-templates/gtm-body.php'); ?>
    <?php include (TEMPLATEPATH . '/global-templates/navbar-principal.php'); ?>
    <section class="hero">
        <div class="hero-content">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid hero-content__img trayectoria-parallax">
            <div class="image-overlay"></div>
        </div>
        <div class="hero-intro d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center mx-auto mb-4">
                        <h1 class="hero-intro__titulo"><?php the_title();?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center" itemscope itemtype="http://schema.org/BreadcrumbList">
                                <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <a itemtype="https://schema.org/Thing" itemprop="item" href="<?php echo esc_url( home_url('/') ); ?>">
                                        <span itemprop="name">Inicio</span>
                                        <meta itemprop="position" content="1">
                                    </a>
                                </li>
                                <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <a itemtype="https://schema.org/Thing" itemprop="item" href="<?php the_permalink(); ?>" class="active">
                                        <span itemprop="name"><?php the_title();?></span>
                                        <meta itemprop="position" content="2">
                                    </a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-12">
                    <?php if( have_rows('datos_de_trayectoria') ): $i = 1;?>
                        <ul class="experiencia-list">
                        <?php while( have_rows('datos_de_trayectoria') ): the_row();
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
        </div>
    </section>
    <main class="main main-trayectoria" role="main">
        <section class="trayectoria-intro">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-12 text-center">
                        <h2 class="trayectoria-intro__titulo"><?php the_field('titulo_secundario'); ?></h2>
                        <?php the_field('texto_introduccion'); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="trayectoria-tab">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-12 text-center">
                        <nav>
                        <?php if( have_rows('tab_de_trayectoria') ): $i = 0;?>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <?php while( have_rows('tab_de_trayectoria') ): the_row();
                            $i++;
                            $titulotab = get_sub_field('titulo_de_tab');
                            ?>
                                <a class="nav-item nav-link <?php if( $i < 2 ): ?>active<?php endif; ?>" id="nav-<?php echo $i; ?>-tab" data-toggle="tab" href="#nav-<?php echo $i; ?>" role="tab" aria-controls="nav-<?php echo $i; ?>" aria-selected="<?php if( $i == 0 ): ?>true<?php else: ?>false<?php endif; ?>"><?php echo $titulotab; ?></a>
                            <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        </nav>
                        <?php if( have_rows('tab_de_trayectoria') ): $i = 0;?>
                        <div class="tab-content" id="nav-tabContent">
                        <?php while( have_rows('tab_de_trayectoria') ): the_row();
                            $i++;
                            $conttab = get_sub_field('contenido_de_tab');
                        ?>
                            <div class="tab-pane fade <?php if( $i < 2 ): ?>show active<?php endif; ?>" id="nav-<?php echo $i; ?>" role="tabpanel" aria-labelledby="nav-<?php echo $i; ?>-tab">
                                <div class="row justify-content-center">
                                    <div class="col-xl-9 col-12 text-center">
                                    <?php echo $conttab; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="trayectoria-map">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-12 text-center">
                        <h2 class="titulo"><?php the_field('titulo_de_mapa_de_trayectoria'); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="trayectoria-map__map" id="map"></div>
                        <script>
                            var map;
                            var InforObj = [];
                            <?php if( have_rows('mapa_centrado') ):?>
                            <?php while( have_rows('mapa_centrado') ): the_row();
                                $latmapcen = get_sub_field('latitud');
                                $lngmapcen = get_sub_field('longitud');
                            ?>
                            var centerCords = {
                                lat: <?php echo $latmapcen; ?>,
                                lng: <?php echo $lngmapcen; ?>
                            };
                            <?php endwhile; ?>
                            <?php endif; ?>
                            <?php if( have_rows('datos_de_proyectos_por_comuna') ):?>
                            <?php
                                $rowCount = count( get_field('datos_de_proyectos_por_comuna') );
                                $i = 0;
                            ?>
                            var markersOnMap = [
                                <?php while( have_rows('datos_de_proyectos_por_comuna') ): the_row();
                                    $latcom = get_sub_field('latitud_de_comuna');
                                    $lngcom = get_sub_field('longitud_de_comuna');
                                    $nombrecom = get_sub_field('nombre_de_la_comuna');
                                    $textocom = get_sub_field('texto_informativo_de_comuna');
                                ?>
                                {
                                    placeName: "<?php echo $nombrecom; ?>",
                                    placeText: "<?php echo $textocom; ?>",
                                    LatLng: [{
                                        lat: <?php echo $latcom; ?>,
                                        lng: <?php echo $lngcom; ?>
                                    }]
                                }<?php if($i < $rowCount): ?>,<?php else: ?><?php endif; ?>
                                <?php endwhile; ?>
                            ];
                            <?php endif; ?>

                            window.onload = function () {
                                initMap();
                            };

                            function addMarkerInfo() {
                                for (var i = 0; i < markersOnMap.length; i++) {
                                    var contentString = '<div id="content"><h2>' + markersOnMap[i].placeName +
                                        '</h2><p>' + markersOnMap[i].placeText + '</p></div>';
                                    var image = '';
                                    const marker = new google.maps.Marker({
                                        position: markersOnMap[i].LatLng[0],
                                        map: map,
                                        icon: {
                                            path: google.maps.SymbolPath.CIRCLE,
                                            scale: 0
                                        }
                                    });

                                    const infowindow = new google.maps.InfoWindow({
                                        content: contentString,
                                        maxWidth: 200
                                    });

                                    marker.addListener('click', function () {
                                        closeOtherInfo();
                                        infowindow.open(marker.get('map'), marker);
                                        InforObj[0] = infowindow;
                                    });
                                    infowindow.open(map, marker);
                                }
                            }

                            function closeOtherInfo() {
                                if (InforObj.length > 0) {
                                    /* detach the info-window from the marker ... undocumented in the API docs */
                                    InforObj[0].set("marker", null);
                                    /* and close it */
                                    InforObj[0].close();
                                    /* blank the array */
                                    InforObj.length = 0;
                                }
                            }
                            function initMap() {
                                map = new google.maps.Map(document.getElementById('map'), {
                                    zoom: 10,
                                    center: centerCords,
                                    streetViewControl: false,
                                    mapTypeId: 'satellite'
                                });
                                addMarkerInfo();
                            }
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=<?php the_field('api_google_maps', 'options'); ?>"></script>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();