<?php
/*
 * Template Name: Single Modelos
 * Template Post Type: modelos
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
<body <?php body_class( 'single-modelo' ); ?>>
	<?php include (TEMPLATEPATH . '/global-templates/gtm-body.php'); ?>
    <?php include (TEMPLATEPATH . '/global-templates/navbar-modelos.php'); ?>
    <main class="main single-modelo--main" role="main">
        <article class="post-modelo">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-12 px-0" data-aos="fade-right" data-aos-delay="100">
                        <?php if( have_rows('carrusel') ): ?>
                        <div class="owl-carousel owl-theme single-modelo--carousel">
                            <?php while( have_rows('carrusel') ): the_row();

                            $image = get_sub_field('imagen_carrusel');
                            ?>
                            <div class="item single-modelo--carousel__item">
                                <div class="single-modelo--carousel__item__img bg-cover" style="background-image: url(<?php echo $image; ?>);"></div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-12 bg-g" data-aos="fade-right" data-aos-delay="300">
                        <section class="content py-5">
                            <h1 class="content-titulo"><?php the_title();?></h1>
                            <h3 class="content-superficie"><?php the_field( 'metraje' ); ?></h3>
                            <h4 class="content-uf"><?php the_field( 'desde_uf' ); ?></h4>
                            <h5 class="content-terreno"><?php the_field( 'terrenos_hasta' ); ?></h5>
                            <div class="content-descripcion"><?php the_field( 'descripcion_o_texto_complementario' ); ?></div>
                        </section>
                    </div>
                    <div class="col-xl-3 col-lg-10 col-12 my-lg-5 my-xl-0 bg-h" data-aos="fade-right" data-aos-delay="600">
                        <section class="formcotizar py-5 px-lg-5 px-xl-0">
                            <?php if( get_field('estado_de_modelo') === 'activo'): ?>
                            <h2 class="formcotizar-titulo">Cotizar Modelo</h2>
                            <?php echo do_shortcode( '[contact-form-7 id="135" title="Formulario Cotización Modelo" html_id="metrowpForm"]' ); ?>
                            <?php else: ?>
                            <h2 class="formcotizar-titulo">Modelo Agotado</h2>
                            <?php endif; ?>
                        </section>
                    </div>
                </div>
            </div>
        </article>
        <?php include (TEMPLATEPATH . '/global-templates/como-comprar.php'); ?>
        <section class="modelo-breadcrumb py-2">
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
                                    <a itemtype="https://schema.org/Thing" itemprop="item" href="<?php echo get_permalink( $id_proyecto ); ?>">
                                        <span itemprop="name"><?php echo $vincular->post_title; ?></span>
                                        <meta itemprop="position" content="3">
                                    </a>
                                </li>
                                <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <a itemtype="https://schema.org/Thing" itemprop="item" href="<?php the_permalink(); ?>" class="active">
                                        <span itemprop="name"><?php the_title(); ?></span>
                                        <meta itemprop="position" content="4">
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
?>

<script>
    const nombreProyecto = '<?php echo $vincular->post_title; ?>';
    const nombrePlanta = '<?php the_title();?>';
    jQuery('input[name="nombreProyecto"]').val(nombreProyecto);
    jQuery('input[name="nombrePlanta"]').val(nombrePlanta);
</script>