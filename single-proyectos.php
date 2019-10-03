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
<body <?php body_class( 'proyecto' ); ?>>
	<?php include (TEMPLATEPATH . '/global-templates/gtm-body.php'); ?>
    <header class="header-proyecto fixed-top">
    <?php include (TEMPLATEPATH . '/global-templates/navbar-proyectos.php'); ?>
    </header>
    <main class="main main-proyecto">
    <section class="hero" id="inicio">
            <div class="container-fluid">
                <div class="row align-items-center position-relative">
                    <div class="col-12 order-2 col-lg-4 col-xl-4 order-lg-1 hero-col pr-0">
                        <div class="hero-intro">
                            <div class="hero-intro__box py-5">
                                <h5 class="hero-intro__box__ds">Subsidio Automático DS19</h5>
                                <h1 class="hero-intro__box__titulo">Los Portales de Buin</h1>
                                <p class="hero-intro__box__uf">Desde <b>UF 1.750</b> a <b>UF 1.950</b></p>
                                <p class="hero-intro__box__comuna">Buin</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 order-1 col-lg-8 col-xl-7 order-lg-2 hero-col px-0">
                        <div class="hero-carousel">
                            <div class="owl-carousel owl-theme carousel-proyecto">
                                <div class="item galeria-carousel__item">
                                    <div class="carousel-proyecto__item__img bg-cover" style="background-image: url(assets/img/los-portales-de-buin/los-portales-de-buin-interior-1.jpg);"></div>
                                </div>
                                <div class="item galeria-carousel__item">
                                    <div class="carousel-proyecto__item__img bg-cover" style="background-image: url(assets/img/los-portales-de-buin/los-portales-de-buin-interior-2.jpg);"></div>
                                </div>
                                <div class="item galeria-carousel__item">
                                    <div class="carousel-proyecto__item__img bg-cover" style="background-image: url(assets/img/los-portales-de-buin/los-portales-de-buin-interior-3.jpg);"></div>
                                </div>
                                <div class="item galeria-carousel__item">
                                    <div class="carousel-proyecto__item__img bg-cover" style="background-image: url(assets/img/los-portales-de-buin/los-portales-de-buin-interior-4.jpg);"></div>
                                </div>
                                <div class="item galeria-carousel__item">
                                    <div class="carousel-proyecto__item__img bg-cover" style="background-image: url(assets/img/los-portales-de-buin/los-portales-de-buin-interior-5.jpg);"></div>
                                </div>
                                <div class="item galeria-carousel__item">
                                    <div class="carousel-proyecto__item__img bg-cover" style="background-image: url(assets/img/los-portales-de-buin/los-portales-de-buin-interior-6.jpg);"></div>
                                </div>
                                <div class="item galeria-carousel__item">
                                    <div class="carousel-proyecto__item__img bg-cover" style="background-image: url(assets/img/los-portales-de-buin/los-portales-de-buin-interior-7.jpg);"></div>
                                </div>
                                <div class="item galeria-carousel__item">
                                    <div class="carousel-proyecto__item__img bg-cover" style="background-image: url(assets/img/los-portales-de-buin/los-portales-de-buin-interior-8.jpg);"></div>
                                </div>
                                <div class="item galeria-carousel__item">
                                    <div class="carousel-proyecto__item__img bg-cover" style="background-image: url(assets/img/los-portales-de-buin/los-portales-de-buin-interior-9.jpg);"></div>
                                </div>
                                <div class="item galeria-carousel__item">
                                    <div class="carousel-proyecto__item__img bg-cover" style="background-image: url(assets/img/los-portales-de-buin/los-portales-de-buin-interior-10.jpg);"></div>
                                </div>
                                <div class="item galeria-carousel__item">
                                    <div class="carousel-proyecto__item__img bg-cover" style="background-image: url(assets/img/los-portales-de-buin/los-portales-de-buin-interior-10b.jpg);"></div>
                                </div>
                                <div class="item galeria-carousel__item">
                                    <div class="carousel-proyecto__item__img bg-cover" style="background-image: url(assets/img/los-portales-de-buin/los-portales-de-buin-interior-11.jpg);"></div>
                                </div>
                                <div class="item galeria-carousel__item">
                                    <div class="carousel-proyecto__item__img bg-cover" style="background-image: url(assets/img/los-portales-de-buin/los-portales-de-buin-interior-11b.jpg);"></div>
                                </div>
                                <div class="item galeria-carousel__item">
                                    <div class="carousel-proyecto__item__img bg-cover" style="background-image: url(assets/img/los-portales-de-buin/los-portales-de-buin-interior-12.jpg);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
                <?php if( have_rows('slider_header') ): ?>
                    <?php while( have_rows('slider_header') ): the_row(); ?>
                    <?php
                        $image = get_sub_field('imagen_de_slider');
                    ?>
                    <?php echo $image; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php the_title();?>
                <?php the_field('logo_de_proyecto'); ?>
                <?php the_field('descripcion_del_proyecto'); ?>
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
                <?php while ( $queryplantas->have_posts() ) : $queryplantas->the_post(); ?>
                <?php the_field('tipo_de_planta'); ?>
                <?php the_field('imagen_de_planta'); ?>
                <?php the_field('programa_de_planta'); ?>
                <?php the_field('superficie_interior'); ?>
                <?php if ( get_field('loggia')): ?>
                <?php the_field( 'loggia' ); ?>
                <?php endif; ?>
                <?php the_field('superficie_terraza'); ?>
                <?php the_field('superficiel_total'); ?>
                <?php the_field('orientacion'); ?>
                <?php the_permalink(); ?>
                <?php endwhile; ?>
                <?php endif; wp_reset_postdata();?>
                <?php the_field('imagen_caracteristicas_y_terminaciones'); ?>
                <?php the_field('texto_caracteristicas_y_terminaciones'); ?>
                <?php the_field('imagen_ubicacion_y_entorno'); ?>
                <?php the_field('texto_ubicacion_y_entorno'); ?>
                <?php the_field('ubicacion_mapa'); ?>
                <?php the_field('sala_de_ventas'); ?>
                <?php the_field('telefono_proyecto'); ?>
                <?php the_field('atencion_sala_de_ventas'); ?>
                <?php the_field('legal_proyecto'); ?>

<?php
get_footer();