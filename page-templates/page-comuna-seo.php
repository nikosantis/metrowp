<?php
/*
Template Name: SEO Comuna
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
?><?php get_header();?>
<body <?php body_class( 'page page-principal' ); ?>>
	<?php include (TEMPLATEPATH . '/global-templates/gtm-body.php'); ?>
    <?php include (TEMPLATEPATH . '/global-templates/navbar-principal.php'); ?>
    <section class="hero bg-cover" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
        <div class="hero-intro">
        <div class="image-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center mx-auto">
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
                                        <span itemprop="name"><?php the_field('titulo_para_breadcrumb'); ?></span>
                                        <meta itemprop="position" content="2">
                                    </a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="proyectos-grid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-12 col-12 text-center">
                    <h2 class="titulo"><?php the_field('titulo_secundario'); ?></h2>
                    <?php the_field('subtitulo'); ?>
                    <?php the_field('texto_introductorio'); ?>
                </div>
            </div>
            <?php $taxo = get_field('seleccionar_comuna_para_loop'); ?>
            <?php
                $args_queryproyectos = array(
                    'post_type'    => 'proyectos',
                    'posts_per_page'    => -1,
                    'post_status'       => 'publish',
                    'meta_key'			=> 'estado_del_proyecto',
                    'orderby'			=> 'meta_value',
                    'order'				=> 'DESC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'comuna',
                            'field' => 'name',
                            'terms' => array($taxo->name)
                        ),
                    )
                );
                // The Query
                $queryproyectos = new WP_Query( $args_queryproyectos );
            ?>
            <?php if ( $queryproyectos->have_posts() ) : $i = 0;?>
            <div class="row justify-content-center pt-5">
                <?php while ( $queryproyectos->have_posts() ) : $queryproyectos->the_post();
                $i++;
                $terms = wp_get_post_terms( $post->ID, 'comuna');
                ?>
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
                                <span class="proyecto-detalle__info__comuna"><?php print_r($terms[0]->name); ?></span>
                                <span class="proyecto-detalle__info__uf"><?php the_field('precio_desde_uf'); ?></span>
                            </div>
                            <p class="proyecto-detalle__ds"><?php the_field('tipo_subsidio'); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-mgi">Cotizar</a>
                        </section>
                        <div class="proyecto-entrega"><?php the_field('etiqueta_informativa'); ?></div>
                    </article>
                </div>
                <?php endwhile; wp_reset_postdata();?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="seo-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12 col-12 text-center">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="metro-seo">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-2 col-md-2 col-12 metro-seo--titulo">
                    <p><b>Proyectos:</b></p>
                </div>
                <div class="col-lg-10 col-md-10 col-12 metro-seo--list">
                <?php
                    $args_queryproyectos_seo = array(
                        'post_type'    => 'proyectos',
                        'posts_per_page'    => -1,
                        'post_status'       => 'publish',
                        'meta_key'			=> 'estado_del_proyecto',
                        'orderby'			=> 'meta_value',
                        'order'				=> 'DESC'
                    );
                    // The Query
                    $queryproyectos_seo = new WP_Query( $args_queryproyectos_seo );
                ?>
                <?php if ( $queryproyectos_seo->have_posts() ) : $i = 0;?>
                    <ul class="list-inline">
                    <?php while ( $queryproyectos_seo->have_posts() ) : $queryproyectos_seo->the_post();
                    $i++;?>
                        <li class="list-inline-item"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; wp_reset_postdata();?>
                    </ul>
                <?php endif;?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12 metro-seo--titulo">
                    <p><b>Comunas:</b></p>
                </div>
                <div class="col-lg-10 col-md-10 col-12 metro-seo--list">
                <?php
                    $args_querycomunas_seo = array(
                        'post_type' => 'page', //it is a Page right?
                        'post_status' => 'publish',
                        'meta_query' => array(
                            array(
                                'key' => '_wp_page_template',
                                'value' => 'page-templates/page-comuna-seo.php', // folder + template name as stored in the dB
                            )
                        )
                    );
                    $querycomunas_seo = new WP_Query( $args_querycomunas_seo );
                ?>
                <?php if ( $querycomunas_seo->have_posts() ) : $i = 0;?>
                    <ul class="list-inline">
                    <?php while ( $querycomunas_seo->have_posts() ) : $querycomunas_seo->the_post();
                    $i++;?>
                        <li class="list-inline-item"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; wp_reset_postdata();?>
                    </ul>
                <?php endif;?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
