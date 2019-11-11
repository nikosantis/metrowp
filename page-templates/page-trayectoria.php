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
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" class="img-fluid hero-content__img trayectoria-parallax">
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
                    <div class="col-xl-10 col-12 text-center">
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
                                    <div class="col-xl-11 col-12 text-center">
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
                    <div class="col-12 text-center">
                        <h2 class="titulo"><?php the_field('titulo_de_mapa_de_trayectoria'); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="trayectoria-map__map">
                            <img src="<?php the_field('imagen_mapa_trayectoria'); ?>" alt="<?php the_field('titulo_de_mapa_de_trayectoria'); ?>" usemap="#image-map" class="img-fluid">
                            <?php if( have_rows('vinculos_en_el_mapa') ): ?>
                            <?php while( have_rows('vinculos_en_el_mapa') ): the_row();
                                $url = get_sub_field('url_mapa');
                                $titulo = get_sub_field('titulo_mapa');
                                $coor = get_sub_field('coordenadas_mapa');
                            ?>
                            <a href="<?php echo $url; ?>" title="<?php echo $titulo; ?>" style="<?php echo $coor; ?>"></a>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="proyectos-grid">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10 col-md-12 col-12 text-center">
                        <h2 class="titulo">Proyectos en Venta</h2>
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
                    <div class="col-lg-4 col-md-6 col-12 mb-5" data-aos="fade-right" data-aos-delay="<?php echo $i; ?>00">
                        <article class="proyecto">
                            <header class="proyecto-thumb mb-3">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php the_post_thumbnail_url('proyecto_thumb'); ?>" alt="<?php the_title(); ?>" class="img-fluid imghover">
                                </a>
                            </header>
                            <section class="proyecto-detalle">
                                <a href="<?php the_permalink(); ?>">
                                    <h4 class="proyecto-detalle__titulo"><?php the_title(); ?></h4>
                                </a>
                                <div class="proyecto-detalle__info">
                                    <span class="proyecto-detalle__info__comuna"><?php the_field('comuna'); ?></span>
                                    <span class="proyecto-detalle__info__uf"><?php the_field('precio_desde_uf'); ?></span>
                                </div>
                                <p class="proyecto-detalle__ds"><?php the_field('tipo_subsidio'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-mgi">Ver Proyecto</a>
                            </section>
                            <?php if(get_field('etiqueta_informativa')): ?>
                            <div class="proyecto-entrega"><?php the_field('etiqueta_informativa'); ?></div>
                            <?php endif; ?>
                        </article>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; wp_reset_postdata();?>
            </div>
        </section>
    </main>
<?php
get_footer();