<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stitchkinwp
 */
?>
<?php get_header();?>
    <main class="main-post main-contacto padding-toggler-no" role="main">
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
