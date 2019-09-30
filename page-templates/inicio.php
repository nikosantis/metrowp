<?php
/*
 Template Name: Página Inicio
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
    <main class="main-home p-4 padding-toggler-no">
        <div class="proybtn"><a href="<?php bloginfo('url');?>/proyectos-en-venta/">Ver Proyectos</a></div>
        <div class="home-box">
            <div class="home-box__content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-9 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-stitchkin.png" alt="" class="home-box__content__logo mx-auto img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>