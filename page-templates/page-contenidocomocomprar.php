<?php
/*
Template Name: Contenido Cómo Comprar
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
<?php
    $current = $post->ID;
    $parent = $post->post_parent;
?>
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
                                    <a itemtype="https://schema.org/Thing" itemprop="item" href="<?php the_permalink($parent); ?>">
                                        <span itemprop="name"><?php echo get_the_title($parent); ?></span>
                                        <meta itemprop="position" content="2">
                                    </a>
                                </li>
                                <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <a itemtype="https://schema.org/Thing" itemprop="item" href="<?php the_permalink(); ?>" class="active">
                                        <span itemprop="name"><?php the_title();?></span>
                                        <meta itemprop="position" content="3">
                                    </a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-12">
                    <main class="main page-content__main" role="main">
                        <?php if(have_posts()): while(have_posts()): the_post(); ?>
                            <?php get_template_part( 'template-parts/content', 'page-principal' ); ?>
                        <?php endwhile; endif; ?>
                    </main>
                </div>
                <div class="col-xl-3 col-12">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();