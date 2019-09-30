<?php
/*
 Template Name: Página Inversionistas
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
    <main class="main-post main-inversionistas padding-toggler-no" role="main">
        <header class="inversionistas-header">
            <div class="container">
                <div class="row justify-content-center inversionistas-info">
                    <div class="col-md-3 col-12">
                        <div class="box-somos text-center">
                            <div class="box-somos__icon icon-trayectoria">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inversionistas-asesoria.png" alt="">
                            </div>
                            <div class="box-somos__title">Asesoría Financiera</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="box-somos text-center">
                            <div class="box-somos__icon icon-trayectoria">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inversionistas-administracion.png" alt="">
                            </div>
                            <div class="box-somos__title">Administración de tu Propiedad</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="box-somos text-center">
                            <div class="box-somos__icon icon-trayectoria">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/inversionistas-financiamiento.png" alt="">
                            </div>
                            <div class="box-somos__title">Financiamiento Hipotecario</div>
                        </div>
                    </div>
                </div>
            </div>    
        </header>
        <section class="inversionistas-content main-post__content">
            <div class="container">
                <div class="row content-title">
                    <div class="col-12"><h1><?php the_title();?></h1></div>
                </div>
                <div class="row content-post">
                    <div class="col-12">
                        <h2>¿Eres inversionista?</h2>
                        <p>Te ofrecemos excelentes alternativas de inversión, asesórate con nuestro equipo para que puedas elegir una inversión a tu medida.
                            Además ofrecemos servicio de administración y arriendo de tu propiedad para que invertir en el rubro inmobiliario sea simple
                            y seguro para ti.
                        </p>
                        <p>Invierte directamente con nosotros.</p>
                        <p>Contacto: <b>inversionistas@stitchkin.cl</b></p>
                    </div>
                </div>
                <div class="row content-form justify-content-left">
                    <div class="col-md-6 col-9">
                        <?php the_content(); ?>	
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();