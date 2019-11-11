<?php
    $vincular = get_field('vincular_modelo_a_proyecto');
    $id_proyecto = $vincular->ID;
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light top-sticky" id="navbarModelo">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
            <img src="<?php the_field('logo_principal', 'option'); ?>" alt="<?php bloginfo('name'); ?>">
        </a>
            <ul class="navbar-nav mr-auto d-none d-lg-inline-block">
                <li class="nav-item">
                    <h2 class="navbar-titulo"><a href="<?php echo get_permalink( $id_proyecto ); ?>"><?php echo $vincular->post_title; ?></a><i class="fas fa-chevron-right"></i><?php the_field('comuna', $id_proyecto); ?></h2>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto d-none d-md-inline-block">
                <li class="nav-item">
                    <button type="button" class="btn btn-mgi-xl" data-toggle="modal" data-target="#modelosModal" class="nav-link">Ver Modelos</button>
                </li>
            </ul>
            <a href="<?php echo get_permalink( $id_proyecto ); ?>" class="btn btn-back d-none d-md-inline-block mb-3 mb-md-0 ml-md-3"><i class="fas fa-chevron-left"></i> Volver</a>
        </div>
    </nav>
    <section class="single-modelo--mobile d-lg-none top-sticky">
        <h2 class="single-modelo--mobile__titulo">
            <a href="<?php echo get_permalink( $id_proyecto ); ?>"><?php echo $vincular->post_title; ?></a>
        </h2>
    </section>
    <div class="modal sidebar fade" id="modelosModal" tabindex="-1" role="dialog" aria-labelledby="modelosModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modelosModalLabel">Modelos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row gutter-3">
                        <div class="col-12">
                        <?php
                            $args_queryplantas = array(
                                'post_type'    => 'modelos',
                                'posts_per_page'    => -1,
                                'post_status'       => 'publish',
                                'meta_query' => array(
                                    array(
                                        'key' => 'vincular_modelo_a_proyecto',
                                        'value' => '' . $id_proyecto . '',
                                        'compare' => '='
                                    )
                                )
                            );
                            // The Query
                            $queryplantas = new WP_Query( $args_queryplantas );
                        ?>
                        <?php if ( $queryplantas->have_posts() ) : ?>
                        <?php while ( $queryplantas->have_posts() ) : $queryplantas->the_post(); ?>
                            <div class="row align-items-center mb-4">
                                <div class="col-9">
                                    <div class="media media-modelo">
                                        <a <?php if( $estado_modelo == 'activo'):?>href="<?php the_permalink(); ?>"<?php else: ?><?php endif; ?>><img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title();?>"></a>
                                        <div class="media-body">
                                            <h5 class="media-title"><?php the_title();?></h5>
                                            <span class="media-subtitle"><?php the_field( 'metraje' ); ?>, <?php the_field( 'desde_uf' ); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php $estado_modelo = get_field('estado_de_modelo'); ?>
                                <div class="col-3 text-right">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-mgi <?php if( $estado_modelo == 'agotado'):?>disabled<?php endif; ?>"><?php if( $estado_modelo == 'activo'):?>Cotizar<?php else: ?>Agotado<?php endif; ?></a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; wp_reset_postdata();?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-mgi" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>