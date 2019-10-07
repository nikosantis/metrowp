<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package metropwp
 */
?>

    <footer class="footer">
        <section class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <?php the_field('texto_legal_de_imagenes', 'option'); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 pr-lg-5 col-md-8 col-12">
                        <a href="<?php echo esc_url( home_url('/') ); ?>">
                            <img src="<?php the_field('logo_principal', 'option'); ?>" alt="<?php bloginfo('name'); ?>" class="img-fluid brand-footer mb-4">
                        </a>
                        <ul class="list-unstyled ul-brand">
                            <li class="pl-2 mb-3 d-flex">
                                <i class="fas fa-phone fa-lg"></i>
                                <div class="ml-3">
                                <?php if( have_rows('telefono_principal', 'option') ) : $i = 0;?>
                                    <span class="ul-brand__text">
                                    <?php while( have_rows('telefono_principal', 'option') ) : the_row();
                                        $phone = get_sub_field('telefono_contacto');
                                        $i++;
                                        ?>
                                        <?php if($i > 1) { ?>
                                            <?php if($i > 1) { echo ' | '; } ?><a href="tel:<?php echo esc_html( $phone ); ?>"><?php echo esc_html( $phone ); ?></a>
                                        <?php } else { ?>
                                            <a href="tel:<?php echo esc_html( $phone ); ?>"><?php echo esc_html( $phone ); ?></a>
                                        <?php }; ?>
                                    <?php endwhile; ?>
                                    </span>
                                <?php endif; ?>
                                </div>
                            </li>
                            <li class="pl-2 mb-3 d-flex">
                                <i class="fas fa-paper-plane fa-lg"></i>
                                <div class="ml-3">
                                    <span class="ul-brand__text"><a href="mailto:<?php the_field('mail_de_contacto_principal', 'option'); ?>"><?php the_field('mail_de_contacto_principal', 'option'); ?></a></span>
                                </div>
                            </li>
                            <li class="pl-2 mb-3 d-flex">
                                <i class="fas fa-map-marker-alt fa-lg"></i>
                                <div class="ml-3">
                                    <?php if( have_rows('direccion_principal', 'option') ) : ?>
                                        <span class="ul-brand__text ml-1">
                                        <?php while( have_rows('direccion_principal', 'option') ) : the_row();
                                            $urlmap = get_sub_field('url_de_google_maps');
                                            $dirmap = get_sub_field('direccion');
                                        ?>
                                            <a href="<?php echo $urlmap; ?>" target="_blank"><?php echo $dirmap; ?></a>
                                        <?php endwhile; ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li class="pl-2 mb-3 d-flex">
                                <i class="fas fa-clock fa-lg"></i>
                                <div class="ml-3">
                                    <span class="ul-brand__text"><?php the_field('horarios_de_atencion', 'option'); ?></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-7">
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-12 pt-3">
                                <h5 class="footer-center__titulo"><?php the_field('titulo_footer_1', 'option'); ?></h5>
                                <?php if( have_rows('menu_footer_1', 'option') ) :?>
                                <ul class="footer-center__nav list-unstyled">
                                    <?php while( have_rows('menu_footer_1', 'option') ) : the_row();
                                        $url = get_sub_field('enlace_menu');
                                        $texto = get_sub_field('texto_menu');
                                    ?>
                                    <li><a href="<?php echo $url; ?>" title="<?php echo $texto; ?>"><?php echo $texto; ?></a></li>
                                    <?php endwhile; ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-4 col-12 pt-3">
                                <h5 class="footer-center__titulo"><?php the_field('titulo_footer_2', 'option'); ?></h5>
                                <?php if( have_rows('menu_footer_2', 'option') ) :?>
                                <ul class="footer-center__nav list-unstyled">
                                    <?php while( have_rows('menu_footer_2', 'option') ) : the_row();
                                        $url = get_sub_field('enlace_menu');
                                        $texto = get_sub_field('texto_menu');
                                    ?>
                                    <li><a href="<?php echo $url; ?>" title="<?php echo $texto; ?>"><?php echo $texto; ?></a></li>
                                    <?php endwhile; ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-4 col-12 pt-3">
                                <h5 class="footer-center__titulo"><?php the_field('titulo_footer_3', 'option'); ?></h5>
                                <?php if( have_rows('menu_footer_3', 'option') ) :?>
                                <ul class="footer-center__nav list-unstyled">
                                    <?php while( have_rows('menu_footer_3', 'option') ) : the_row();
                                        $url = get_sub_field('enlace_menu');
                                        $texto = get_sub_field('texto_menu');
                                    ?>
                                    <li><a href="<?php echo $url; ?>" title="<?php echo $texto; ?>"><?php echo $texto; ?></a></li>
                                    <?php endwhile; ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer-bottom py-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center copyright py-2">
                        <?php the_field('texto_de_copyright', 'option'); ?>
                    </div>
                </div>
            </div>
        </section>
    </footer>
<?php wp_footer(); ?>

</body>
</html>
