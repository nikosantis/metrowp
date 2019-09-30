<?php
/*
 Template Name: Página Contacto
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
    <main class="main-post main-contacto padding-toggler-no" role="main">
        <header class="contacto-header bg-cover"> 
            <div class="container-fluid">
                <div class="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.6786814563334!2d-70.57228604860755!3d-33.40554620250224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662ced933dfe1b3%3A0xacece3cf2c5b41b1!2sLos+Militares+5890%2C+Las+Condes%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1496326058873" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe> 
                </div>
            </div>
        </header>
        <section class="contacto-content main-post__content">
            <div class="container">
                <div class="row content-title">
                    <div class="col-12"><h1><?php the_title();?></h1></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-12">
                        <?php the_content(); ?>	
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();