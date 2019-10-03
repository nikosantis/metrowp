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
                                <?php
                                    if( have_rows('telefono') ):
                                    $i=0;
                                ?>
                                    <span class="ul-brand__text">
                                    <?php
                                        while( have_rows('telefono') ): the_row();
                                        $i++;
                                        $telefono = get_sub_field('telefono_contacto');
                                    ?>
                                        <a href="tel:<?php echo $telefono; ?>"><?php echo $telefono; ?></a><?php if ($i>0) { _e( ' | ', 'metropwp' ); } ?>
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
                                    <span class="ul-brand__text ml-1"><a href="<?php the_field('url_de_google_maps', 'option'); ?>"><?php the_field('direccion', 'option'); ?></a></span>
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
                                <h5 class="footer-center__titulo">Ayuda al Cliente</h5>
                                <ul class="footer-center__nav list-unstyled">
                                    <li><a href="#">¿Cómo comprar?</a></li>
                                    <li><a href="#">Subsidios</a></li>
                                    <li><a href="#">Postventa</a></li>
                                    <li><a href="#">Contacto</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-12 pt-3">
                                <h5 class="footer-center__titulo">Inmobiliaria</h5>
                                <ul class="footer-center__nav list-unstyled">
                                    <li><a href="#">Inicio</a></li>
                                    <li><a href="#">Proyectos</a></li>
                                    <li><a href="#">Trayectoria</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-12 pt-3">
                                <h5 class="footer-center__titulo">Comunas</h5>
                                <ul class="footer-center__nav list-unstyled">
                                    <li><a href="#">Buin</a></li>
                                    <li><a href="#">Colina</a></li>
                                    <li><a href="#">Padre Hurtado</a></li>
                                    <li><a href="#">Peñaflor</a></li>
                                </ul>
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
