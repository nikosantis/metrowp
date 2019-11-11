<?php
/*
Template Name: Cómo Comprar
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
<body <?php body_class( 'page page-principal comocomprar' ); ?>>
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
    <main class="main main-comocomprar" role="main">
        <section class="comocomprar-intro">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-12 text-center">
                        <h2 class="comocomprar-intro__titulo"><?php the_field( 'sub_titulo_como_comprar' ); ?></h2>
                        <p class="comocomprar-intro__text"><?php the_field( 'texto_como_comprar' ); ?></p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <img src="<?php the_field( 'imagen_como_comprar' ); ?>" alt="<?php the_title();?>" class="img-fluid mb-5">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <p class="comocomprar-intro__text"><?php the_field( 'texto_para_enlaces_subsidio' ); ?>:</p>
                    </div>
                </div>
                <?php if( have_rows('botones_subsidio') ): ?>
                <div class="row justify-content-center">
                    <?php while( have_rows('botones_subsidio') ): the_row();

                    $url = get_sub_field('enlace_boton');
                    $titulo = get_sub_field('texto_boton');
                    ?>
                    <div class="col-md-4 col-6 text-center">
                        <a href="<?php echo $url; ?>" class="comocomprar-link" title="<?php echo $titulo; ?>">
                            <div class="comocomprar-box bg-m d-flex justify-content-center align-items-center">
                                <h3 class="comocomprar-box__titulo"><?php echo $titulo; ?></h3>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>
    </main>
<?php
get_footer();