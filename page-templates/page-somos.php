<?php
/*
 Template Name: Página Somos
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
    <main class="main-post main-somos padding-toggler-no">
        <section class="top-bar">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-8 text-center"><h4 class="top-bar__title">Algunos Proyectos Realizados</h4></div>
                </div>
            </div>
        </section>
        <header class="carousel-somos">
            <div class="container-fluid">
                <div class="row">
                    <div class="owl-carousel owl-theme carousel-proyectos">
                        <div class="item carousel-proyectos__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stitchkin-1.jpg" class="bg-image" alt="">
                        </div>
                        <div class="item carousel-proyectos__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stitchkin-2.jpg" class="bg-image" alt="">
                        </div>
                        <div class="item carousel-proyectos__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stitchkin-3.jpg" class="bg-image" alt="">
                        </div>
                        <div class="item carousel-proyectos__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stitchkin-4.jpg" class="bg-image" alt="">
                        </div>
                        <div class="item carousel-proyectos__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stitchkin-5.jpg" class="bg-image" alt="">
                        </div>
                        <div class="item carousel-proyectos__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stitchkin-6.jpg" class="bg-image" alt="">
                        </div>
                        <div class="item carousel-proyectos__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stitchkin-7.jpg" class="bg-image" alt="">
                        </div>
                        <div class="item carousel-proyectos__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stitchkin-8.jpg" class="bg-image" alt="">
                        </div>
                        <div class="item carousel-proyectos__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stitchkin-9.jpg" class="bg-image" alt="">
                        </div>
                        <div class="item carousel-proyectos__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stitchkin-10.jpg" class="bg-image" alt="">
                        </div>
                        <div class="item carousel-proyectos__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stitchkin-11.jpg" class="bg-image" alt="">
                        </div>
                        <div class="item carousel-proyectos__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stitchkin-12.jpg" class="bg-image" alt="">
                        </div>
                        <div class="item carousel-proyectos__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stitchkin-13.jpg" class="bg-image" alt="">
                        </div>
                        <div class="item carousel-proyectos__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stitchkin-14.jpg" class="bg-image" alt="">
                        </div>
                        <div class="item carousel-proyectos__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stitchkin-15.jpg" class="bg-image" alt="">
                        </div>
                        <div class="item carousel-proyectos__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/stitchkin-16.jpg" class="bg-image" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="somos-content main-post__content">
            <div class="container">
                <div class="row content-title">
                    <div class="col-12"><h1><?php the_title();?></h1></div>
                </div>
                <div class="row content-post">
                    <div class="col-12">
                        <p>Empresas Stitchkin nace en 1983 orientada a la asesoría comercial y venta de proyectos inmobiliarios del país.
                           Con sobre 30.000 inmuebles vendidos a lo largo del país se ha posicionado dentro de los actores más exitosos del rubro inmobiliario.
                           A inicios del año 2000 la empresa empieza su consolidación como grupo inmobiliario a través del desarrollo de proyectos y asociación
                           de inversión en otras áreas asociadas a la industria.
                        </p>
                        <h2>Misión</h2>
                        <p>Incorporar en nuestros proyectos los más de 30 años de dedicación, experiencia y aprendizajes en el rubro inmobiliario con el fin de
                            entregar un producto de calidad y bien pensado para la vida actual.
                        </p>
                        <p>Sabemos que un departamento es una inversión importante en la vida y por lo tanto queremos asegurarnos que el producto sea de valor ahora y en el futuro.</p>
                    </div>
                </div>
                <div class="row somos-content__info">
                    <div class="col-md-4 col-12">
                        <div class="box-somos text-center">
                            <div class="box-somos__icon icon-trayectoria">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trayectoria-casas.png" alt="">
                            </div>
                            <div class="box-somos__title">Casas</div>
                            <div class="box-somos__texto">Más de 200.000 m² vendidos</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="box-somos text-center">
                                <div class="box-somos__icon icon-departamentos">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trayectoria-departamentos.png" alt="">
                            </div>
                            <div class="box-somos__title">Departamentos</div>
                            <div class="box-somos__texto">Más de 1.000.000 m² vendidos</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="box-somos text-center">
                            <div class="box-somos__icon icon-oficinas">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trayectoria-oficinas.png" alt="">
                            </div>
                            <div class="box-somos__title">Oficinas</div>
                            <div class="box-somos__texto">Más de 800.000 m² vendidos</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();