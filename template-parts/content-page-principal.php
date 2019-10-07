<?php
/**
 * Template part for displaying page content in page-contenidocomocomprar.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package metropwp
 */

?>

						<article <?php post_class('article page-content__article'); ?> id="post-<?php the_ID(); ?>" role="article">
                            <section class="article-content">
								<?php the_content(); ?>
                            </section>
                            <footer class="article-footer">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_field( 'titulo' ); ?></h5>
                                        <p class="card-text"><?php the_field( 'sub_titulo' ); ?></p>
                                        <?php if( have_rows('boton') ):

                                        while( have_rows('boton') ): the_row();
                                            // vars
                                            $title = get_sub_field('titulo_del_boton');
                                            $link = get_sub_field('enlace_del_boton');
                                        ?>
                                        <a href="<?php echo $link; ?>" class="btn btn-mgi"><?php echo $title; ?></a>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </footer>
                        </article>
