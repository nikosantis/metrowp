<?php
/*
Template Name: Casas
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
                                        <span itemprop="name"><?php the_title();?></span>
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
                    <h3 class="subtitulo"><?php the_field('subtitulo'); ?></h3>
                    <p class="text"><?php the_field('texto'); ?></p>
                </div>
            </div>
            <?php
                $args_queryproyectos = array(
                    'post_type'    => 'proyectos',
                    'posts_per_page'    => -1,
                    'post_status'       => 'publish',
                    'meta_key'			=> 'estado_del_proyecto',
                    'orderby'			=> 'meta_value',
                    'order'				=> 'DESC',
                    'meta_query' => array(
                        array(
                            'key' => 'tipo_de_proyecto',
                            'value' => 'casa',
                            'compare' => '='
                        )
                    )
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
                            <a href="<?php the_permalink(); ?>" class="btn btn-mgi">Cotizar</a>
                        </section>
                        <div class="proyecto-entrega"><?php the_field('etiqueta_informativa'); ?></div>
                    </article>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; wp_reset_postdata();?>
        </div>
    </section>
<?php
get_footer();